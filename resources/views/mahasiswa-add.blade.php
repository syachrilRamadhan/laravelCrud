@extends ('layouts.main')

@section ('title', 'Add New Data')

@section('content')
<div class="mt-3 col-4 m-auto">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-box">
    <form action="mahasiswa" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
        </div>
        <div class="mb-3">
            <label for="nim">Nim</label>
            <input type="text" class="form-control" id="nim" name="nim" value="{{old('nim')}}" >
        </div>
        <div class="mb-3">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control">
                <option value="">Select</option>
                <option value="P">P</option>
                <option value="L">L</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{old('alamat')}}">
        </div>
        <div class="mb-3">
            <label for="fakultas">Ekskul</label>
            <select name="fakultas_id" id="fakultas" class="form-control">
                <option value="">Select</option>
                @foreach($ekskul as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="fakultas">Fakultas</label>
            <select name="fakultas_id" id="fakultas" class="form-control">
                <option value="">Select</option>
                @foreach($fakultas as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-4">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </form>
    </div>
</div>
@endsection