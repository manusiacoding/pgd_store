<?php

namespace App\Http\Controllers\Dashboard\Staff\MasterData;

use App\Http\Controllers\Controller;
use App\Models\MasterPendidikan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MasterPendidikan::all();
        if (request()->ajax()) {
            return DataTables()->of($data)
            ->addColumn('action', function($row){
                $btn =  '
                <a href="'. route('pendidikan.edit', $row->id) .'"><button type="button" class="btn btn-sm btn-primary">Edit</button></a>
                <button id="'. $row->id .'" class="btn btn-sm btn-primary delete-confirm">Delete</button>
                ';

                return $btn;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('dashboard.staff.master_data.pendidikan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.staff.master_data.pendidikan.create');
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
        $pendidikan = MasterPendidikan::create($data);

        return response()->json([
            'status' => 'ok'
        ]);;
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
        $pendidikan = MasterPendidikan::find($id);
        $data = [
            'pendidikan' => $pendidikan
        ];

        return view('dashboard.staff.master_data.pendidikan.edit', $data);
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
        $pendidikan = MasterPendidikan::find($id);
        $pendidikan->update($data);

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
        $pendidikan = MasterPendidikan::find($id);
        $pendidikan->delete();
        return response()->json([
            'status' => 'ok'
        ]);;
    }
}
