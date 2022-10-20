@extends('layouts.main')

@section('title', 'Ekskul')

@section('content') 
<h1 style="text-align: center;" class="mt-3">Ekskul Page</h1>
<h5>Daftar Ekskul :</h5>
<div style="text-align: center;">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Ekskul</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($ekskul as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <td><a href="ekskul-detail/{{$data->id}}" class="btn btn-primary">Detail</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection