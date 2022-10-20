@extends('layouts.main')

@section('title', 'Fakultas')

@section('content') 
<h1 style="text-align: center;" class="mt-3">Fakultas Page</h1>
<h5>Daftar Fakultas :</h5>
<div style="text-align: center;">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Fakultas</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fakultas as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <td><a href="fakultas-detail/{{$data->id}}" class="btn btn-primary">Detail</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection