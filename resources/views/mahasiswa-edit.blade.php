@extends ('layouts.main')

@section ('title', 'Edit Data Mahasiswa')

@section('content')
<div class="mt-3 col-4 m-auto">
    <form action="/mahasiswa/{{$mahasiswa->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$mahasiswa->name}}" required>
        </div>
        <div class="mb-3">
            <label for="nim">Nim</label>
            <input type="text" class="form-control" id="nim" name="nim" value="{{$mahasiswa->nim}}" required>
        </div>
        <div class="mb-3">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="{{$mahasiswa->gender}}">{{$mahasiswa->gender}}</option>
                @if($mahasiswa->gender == 'L')
                <option value="P">P</option>
                @else
                <option value="L">L</option>
                @endif 
            </select>
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" value="{{$mahasiswa->alamat}}" required>
        </div>
        <div class="mb-3">
            <label for="fakultas">Fakultas</label>
            <select name="fakultas_id" id="fakultas" class="form-control" required>
                <option value="{{$mahasiswa->fakultas->id}}">{{$mahasiswa->fakultas->name}}</option>
               @foreach($fakultas as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
               @endforeach
            </select>
        </div>
        <div class="mb-3">
            <button class="btn btn-dark" type="submit">Update</button>
        </div>
    </form>
</div>
@endsection