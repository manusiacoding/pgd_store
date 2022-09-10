<?php

namespace App\Http\Controllers\Dashboard\Staff\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

use function PHPSTORM_META\map;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();

        $data = [
            'product' => $product
        ];

        if (request()->ajax()) {
            return DataTables()->of($product)
            ->addColumn('image', function($img){
                $image =  '
                <a target="_blank" href="'. Storage::url($img->foto) .'">
                    <img src="'. Storage::url($img->foto) .'" alt="" srcset="" width="auto" height="150px" >
                </a>
                ';
                return $image;
            })
            ->addColumn('action', function($row){
                $btn =  '
                <a href="'. route('product.edit', $row->id) .'"><button type="button" class="btn btn-sm btn-primary">Edit</button></a>
                <button id="'. $row->id .'" class="btn btn-sm btn-primary delete-confirm">Delete</button>
                ';

                return $btn;
            })
            ->rawColumns(['action','image'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('dashboard.staff.master_data.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.staff.master_data.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'foto' => $request->foto,
            'slug' => Str::slug($request->nama)
        ];

        $user = Auth::user()->id;
        $file = $request->file('foto');
        $path = 'images/product/' . $user . '/unggulan';
        $filename = $file->getClientOriginalName();

        $path = Storage::disk('public')->put(
            $path,
            $file
        );

        $data['foto'] =  env('APP_URL') . '/storage/' . $path;

        $product = Product::Create($data);

        return redirect()->route('admin.dashboard.product.create.image', $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $data = [
            'product' => $product
        ];

        return view('dashboard.staff.master_data.product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'slug' => Str::slug($request->nama)
        ];

        $product = Product::find($id);

        // if (!is_null($data['foto'])) {
        //     unlink(storage_path('app/public/' . $product->foto));

        //     $user = Auth::user()->id;
        //     $file = $request->file('foto');
        //     $path = 'images/product/' . $user ;
        //     $filename = $file->getClientOriginalName();

        //     $path = Storage::disk('public')->put(
        //         $path,
        //         $file
        //     );

        //     $data['foto'] = $path;

        //     $product->update($data);
        // } else {
        //     $product->update($data);
        // }

        $product->update($data);

        return redirect()->route('admin.dashboard.product.edit.image', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::with('imageProduct')->find($id);

        foreach ($product->imageProduct as $item) {
            $url_env = env('APP_URL') . '/storage/';
            $path = str_replace($url_env, "", $item->image);

            unlink(storage_path('app/public/' . $path));

            $item->delete();

        }

        // dd($product);
        // unlink(storage_path('app/public/' . $product->foto));
        $product->delete();
        return response()->json([
            'status' => 'ok'
        ]);
    }

    public function createImage($id)
    {
        $product = Product::find($id);

        return view('dashboard.staff.master_data.product.create-image', compact('product'));
    }

    public function saveCreateImage(Request $request, $id)
    {
        // dd($request->all(), $request->files);
        $user = Auth::user()->id;
        $file = $request->file('files');
        // dd($file);
        $path = 'images/product/' . $user . '/' . $id;
        $path = Storage::disk('public')->put(
            $path,
            $file[0]
        );

        $data = [
            'product_id' => $id,
            'image' => env('APP_URL') . '/storage/' . $path
        ];

        $product_image = ProductImage::create($data);

        return response()->json([
            'status' => 'ok',
            'route' => route('product.index')
        ]);
    }

    public function editImage($id)
    {
        $product = Product::with('imageProduct')->find($id);

        return view('dashboard.staff.master_data.product.edit-image', compact('product'));
    }

    public function deleteImage($id)
    {
        $product_image = ProductImage::find($id);

        $url_env = env('APP_URL') . '/storage/';
        $path = str_replace($url_env, "", $product_image->image);

        unlink(storage_path('app/public/' . $path));

        $product_image->delete();

        return response()->json([
            'status' => 'ok'
        ]);
    }

    public function saveEditImage(Request $request, $id)
    {
        $user = Auth::user()->id;
        $file = $request->file('files');
        // dd($file);
        $path = 'images/product/' . $user . '/' . $id;
        $path = Storage::disk('public')->put(
            $path,
            $file[0]
        );

        $data = [
            'product_id' => $id,
            'image' => env('APP_URL') . '/storage/' . $path
        ];

        $product_image = ProductImage::create($data);

        return response()->json([
            'status' => 'ok'
        ]);
    }

}
