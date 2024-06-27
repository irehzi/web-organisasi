<?php

namespace App\Http\Controllers;

use App\Models\DataPengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class DataPengurusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['list']);
        $this->middleware('auth:api')->only(['store', 'update', 'destroy']);
    }

    public function list()
    {
        return view('Data.datapeng.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DataPenguruses = DataPengurus::all();

        return response()->json([
            'data' => $DataPenguruses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_pengurus' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,webp'
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(),
                422
            );
        }

        $input = $request->all();

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar'] = $nama_gambar;
        }

        $DataPengurus = DataPengurus::create($input);

        return response()->json([
            'success' => true,
            'data' => $DataPengurus
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPengurus  $category
     * @return \Illuminate\Http\Response
     */
    public function show(DataPengurus $DataPengurus)
    {
        return response()->json([
            'data' => $DataPengurus
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPengurus  $DataPengurus
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPengurus $DataPengurus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataPengurus  $DataPengurus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  DataPengurus $DataPengurus)
    {

        $validator = Validator::make($request->all(), [
            'nama_pengurus' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(),
                422
            );
        }

        $input = $request->all();

        if ($request->has('gambar')) {
            File::delete('uploads/' . $DataPengurus->gambar);
            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar'] = $nama_gambar;
        } else {
            unset($input['gambar']);
        }

        $DataPengurus->update($input);

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $DataPengurus
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPengurus  $DataPengurus
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPengurus $DataPengurus)
    {
        File::delete('uploads/' . $DataPengurus->gambar);
        $DataPengurus->delete();

        return response()->json([
            'success' => true,
            'message' => 'success'
        ]);
    }
}