<?php

namespace App\Http\Controllers\Dashboard\Staff\MasterData;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethods;
use Illuminate\Http\Request;

class MetodePembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PaymentMethods::all();
        if (request()->ajax()) {
            return DataTables()->of($data)
            ->addColumn('action', function($row){
                $btn =  '
                <a href="'. route('metode-pembayaran.edit', $row->id) .'"><button type="button" class="btn btn-sm btn-primary">Edit</button></a>
                <button id="'. $row->id .'" class="btn btn-sm btn-primary delete-confirm">Delete</button>
                ';

                return $btn;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('dashboard.staff.master_data.metode_pembayaran.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.staff.master_data.metode_pembayaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['provider_name'] = strtoupper($data['provider_name']);
        $data['nama_rekening'] = strtoupper($data['nama_rekening']);
        $payment_method = PaymentMethods::create($data);

        return redirect()->route('metode-pembayaran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = PaymentMethods::find($id);
        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = PaymentMethods::find($id);
        return view('dashboard.staff.master_data.metode_pembayaran.edit', compact('data'));
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
        $data['provider_name'] = strtoupper($data['provider_name']);
        $data['nama_rekening'] = strtoupper($data['nama_rekening']);
        
        $payment_method = PaymentMethods::find($id);
        $payment_method->update($data);
        return redirect()->route('metode-pembayaran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PaymentMethods::find($id);
        $data->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil Dihapus'
        ]);
    }
}
