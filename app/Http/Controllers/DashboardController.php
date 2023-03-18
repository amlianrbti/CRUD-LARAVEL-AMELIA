<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index ()
    {
        $post = DB::table('dashboard')
            ->select("id", "nama", "judul", "isi")
            ->get();
        return view('post.index', ["post" => $post]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $nama = $request->input('nama');
        $judul = $request->input('judul');
        $isi = $request->input('isi');
        
        DB::table('dashboard')
        ->insert([
            'nama' => $nama,
            'judul' => $judul,
            'isi' => $isi,
            'created_at' => now()
        ]);

        return redirect()->route('post_seru');
    }

    public function edit($id)
    {
        $dashboard = DB::table('dashboard')
            ->select("nama", "judul", "isi")
            ->where('id',$id)
            ->first();
        return view('post.edit', [
            "dsh" => $dashboard,
            "id" => $id
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $nama = $request->input('nama');
        $judul = $request->input('judul');
        $isi = $request->input('isi');

        DB::table('dashboard')
        ->where('id', $id)
        ->update([

            'nama' => $nama,
            'judul' => $judul,
            'isi' => $isi,
            'created_at' => now()
        ]);

        return redirect()->route('post_seru');
    }

    public function delete($id)
    {
        DB::table('dashboard')
        ->where('id', $id)
        ->delete();  

            return redirect()->route('post_seru');
    }
}
