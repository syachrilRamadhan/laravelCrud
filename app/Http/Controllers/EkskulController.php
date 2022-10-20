<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class EkskulController extends Controller
{
    public function index()
    {
        $ekskul = Ekskul::with('mahasiswa')->get();
        
        return view('ekskul',['ekskul' => $ekskul]);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $ekskul = Ekskul::with('mahasiswa')->findOrFail($id);

        return view('ekskul-detail',['ekskul' => $ekskul]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
