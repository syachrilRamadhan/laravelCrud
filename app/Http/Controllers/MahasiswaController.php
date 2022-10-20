<?php

namespace App\Http\Controllers;

use App\Http\Requests\MahasiswaCreateRequest;
use App\Models\Ekskul;
use App\Models\Fakultas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        $searchData = $request->searchData;

        $mahasiswa = Mahasiswa::with('fakultas.dosen', 'ekskuls')->where('name', 'LIKE', '%'.$searchData.'%')
        ->orWhere('gender', $searchData)->orWhere('nim', 'LIKE', '%'.$searchData.'%')
        ->orWhereHas('fakultas', function($query) use($searchData){
            $query->where('name', 'LIKE', '%'.$searchData.'%');
        })->paginate(10);
        
        return view('mahasiswa',['mahasiswa' => $mahasiswa]);
    }

    public function create()
    {
        $ekskul = Ekskul::select('id', 'name')->get();

        $fakultas = Fakultas::select('id', 'name')->get();

        return view('mahasiswa-add', ['fakultas' => $fakultas, 'ekskul' => $ekskul]);
    }

    public function store(MahasiswaCreateRequest $request)
    {
        $mahasiswa = Mahasiswa::create($request->all());

        if($mahasiswa)
            Session::flash('status', 'success');
            Session::flash('message', 'Data berhasil ditambahkan!');

        return redirect('/mahasiswa');
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::with('fakultas.dosen', 'ekskuls')->findOrFail($id);

        return view('mahasiswa-detail', ['mahasiswa' => $mahasiswa]);
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::with('fakultas')->findOrFail($id);

        $fakultas = Fakultas::where('id', '!=', $mahasiswa->fakultas_id)->get(['id', 'name']);

        return view('mahasiswa-edit', ['mahasiswa' => $mahasiswa, 'fakultas' => $fakultas]);
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->update($request->all());

        if($mahasiswa)
            Session::flash('status', 'success');
            Session::flash('message', 'Data berhasil di update');

        return redirect('mahasiswa');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->delete();

        if($mahasiswa)
        Session::flash('status', 'success');
        Session::flash('message', 'Data berhasil di hapus');

        return redirect('mahasiswa');
    }

    public function delete($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('mahasiswa-delete', ['mahasiswa' => $mahasiswa]);
    }

    public function deleted()
    {
        $mahasiswa = Mahasiswa::onlyTrashed()->get();
    
        return view('mahasiswa-deleted', ['mahasiswa' => $mahasiswa]);
    }

    public function restore($id)
    {
        $mahasiswa = Mahasiswa::withTrashed()->where('id', $id)->restore();

        if($mahasiswa)
        Session::flash('status', 'success');
        Session::flash('message', 'Data berhasil di restore');

        return redirect('mahasiswa');
    }
}
