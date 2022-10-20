@extends('layouts.main')

@section('title', 'Mahasiswa')

@section('content') 
<h1 style="text-align: center;">Mahasiswa Page</h1>
<h5>Daftar Mahasiswa :</h5>
    @if(Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{Session::get('message')}}
        </div>
    @endif
            <div class="mt-3 col-12 col-sm-6 col-md-4">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" name="searchData" placeholder="Input Keyword"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="table-container mt-3" style="text-align: center;">
                <table class="table table-bordered table-flex">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Fakultas</th>
                            <th>Action</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswa as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->gender}}</td>
                            <td>{{$data->fakultas->name}}</td>
                            <td><a href="mahasiswa/{{$data->id}}" class="btn btn-primary">Detail</a></td>
                            @if(Auth::user()->role_id != 2)

                            @else
                            <td><a href="mahasiswa-edit/{{$data->id}}" class="btn btn-secondary">Edit</a></td>
                            <td><a href="mahasiswa-delete/{{$data->id}}" class="btn btn-danger">Delete</a></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3">
                {{$mahasiswa->withQueryString()->links()}}
                </div>
            </div>
        <div class="my-3 d-flex justify-content-between">
            @if(Auth::user()->role_id != 2)

            @else
          <a href="/mahasiswa-add" class="btn btn-primary">Add Data</a>
          <a href="/mahasiswa-deleted" class="btn btn-info">Show Deleted Data</a>
          @endif
        </div>
@endsection