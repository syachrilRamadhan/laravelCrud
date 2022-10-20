@extends ('layouts.main')

@section ('title', 'Delete-Mahasiswa')

@section('content')
<div class="mt-5">
    <h3 style="text-align: center;">Apakah anda yakin ingin menghapus data {{$mahasiswa->name}} ?</h3>
    <h5 style="text-align: center;"> Nim : {{$mahasiswa->nim}}</h5>
    <h5 style="text-align: center;">Gender : {{$mahasiswa->gender}}</h5>
    <h5 style="text-align: center;">Alamat : {{$mahasiswa->alamat}}</h5>
    <h5 style="text-align: center;">Fakultas : {{$mahasiswa->fakultas->name}}</h5>

    <form action="/mahasiswa-destroy/{{$mahasiswa->id}}" method="post">
        @csrf
        @method('DELETE')
        <center><button type="submit" class="btn btn-danger">Delete</button></center>
    </form> 
    <center><a href="/mahasiswa" class="btn btn-primary mt-3">Cancel</a></center>
</div>
@endsection