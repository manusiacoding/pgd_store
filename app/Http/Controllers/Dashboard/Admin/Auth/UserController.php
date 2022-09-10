<?php

namespace App\Http\Controllers\Dashboard\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();


        if (request()->ajax()) {
            return DataTables()->of($user)
            ->addColumn('action', function($row){
                $btn =  '
                <a href="'. route('user.edit', $row->id) .'"><button type="button" class="btn btn-sm btn-primary">Edit</button></a>
                <button id="'. $row->id .'" class="btn btn-sm btn-primary delete-confirm">Delete</button>
                ';  

                return $btn;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('dashboard.admin.auth.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.auth.user.create');
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
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ];

        if ($request->password !=  $request->konfirmasi_password) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Password Tidak Sama'
            ]);
        }

        $user = User::create($data);

        return response()->json([
            'status' => 'ok'
        ]);
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
        $user = User::find($id)->first();
        $data = [
            'user' => $user
        ];
        return view('dashboard.admin.auth.user.edit', $data);
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
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ];

        if ($request->password !=  $request->konfirmasi_password) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Password Tidak Sama'
            ]);
        }

        $user = User::find($id);
        $user->update($data);
        return response()->json([
            'status' => 'ok'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return response()->json([
            'status' => "ok"
        ]);
    }
}
