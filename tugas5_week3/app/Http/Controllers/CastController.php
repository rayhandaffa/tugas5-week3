<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB; //pakai database yang telah diatur di file .env

class CastController extends Controller
{
    public function create(){
        return view('posts.create_cast');
    }

    public function store(Request $request){
        //dd($request->all());
        $request->validate([
            'Nama' => 'required|unique:cast',
            'Umur' => 'required',
            'Bio' => 'required'
        ]);
        $query = DB::table('cast')->insert(
            ["nama" => $request["Nama"], "umur" => $request["Umur"], 'bio' => $request['Bio']]
        );
        return redirect('/cast')->with('success', 'Berhasil membuat cast');
    }

    public function index(){
        $listCasts = DB::table('cast')->get();
        return view('posts.index_cast', compact('listCasts'));
    }

    public function tampilkan($id){
        $catchedCaster = DB::table('cast')->where('id', $id)->first();
        return view('posts.show_cast', compact('catchedCaster'));
    }

    public function edit($id){
        $catchedCaster = DB::table('cast')->where('id', $id)->first();
        return view('posts.edit_cast', compact('catchedCaster'));
    }

    public function update($id, Request $request){
        //dd($request);
        $request->validate([
            'Nama' => 'required',
            'Umur' => 'required',
            'Bio' => 'required'
        ]);
        $editedCaster = DB::table('cast')
        ->where('id', $id)
        ->update([
            'nama' => $request['Nama'], 
            'umur' => $request['Umur'], 
            'bio' => $request['Bio']
        ]);
        return redirect('/cast')->with('success', 'Berhasil update cast');
    }

    public function hapus($id){
        $query = DB::table('cast')->where('id', $id)->delete();
        return redirect('/cast');
    }
}
