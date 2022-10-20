@extends ('layouts.main')

@section ('title', 'Deleted Mahasiswa')

@section('content')
<h5 class="mt-3">Data mahasiswa yang telah dihapus :</h5>
<div class="mt-3">
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Nis</th>
                <th>Gender</th>
                <th>Alamat</th>
                <th>Fakultas</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($mahasiswa as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->nim}}</td>
                <td>{{$data->gender}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->fakultas->name}}</td>
                <td><a href="mahasiswa/{{$data->id}}/restore" class="btn btn-secondary">Restore</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="my-3">
        <a href="/mahasiswa" class="btn btn-primary">Back</a>
    </div>
</div>

@endsection