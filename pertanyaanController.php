<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class pertanyaanController extends Controller
{
    
    public function create(){
        return view('pertanyaan.create');
    }
    public function store(Request $request){
        //dd($request->all());
        $request->validate([
            'judul'=>'required|unique:questions',
            'isi'=>'required'
        ]);
        $query= DB::table('questions')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);
        return redirect('/pertanyaan')->with('Success', 'Pertanyaan telah disimpan!');
    }
    public function index(){
        $questions= DB::table('questions')->get();
        //dd($questions);
        return view('pertanyaan.index', compact('questions'));
    }
    public function show($id){
        $question = DB::table('questions')->where('id', $id)->first();
        //dd($question);
        return view('pertanyaan.show', compact('question'));
    }
    public function edit($id){
        $question = DB::table('questions')->where('id', $id)->first();
        //dd($question);
        return view('pertanyaan.edit', compact('question'));
    }
    public function update($id, Request $request){
        $request->validate([
            'judul'=>'required|unique:questions',
            'isi'=>'required'
        ]);
        $query = DB::table('questions')
        ->where('id', $id)
        ->update([
            'judul'=>$request['judul'],
            'isi'=>$request['isi']
        ]);
        return redirect('/pertanyaan')->with('Success', 'Pertanyaan telah diupdate!');
    }
    public function destroy($id){
        $query= DB::table('questions')->where('id', $id)->delete();
        return redirect('/pertanyaan')->with('Success', 'Pertanyaan berhasil dihapus!');
    }
}
