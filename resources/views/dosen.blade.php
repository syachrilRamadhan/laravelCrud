@extends ('layouts.main')

@section ('title', 'Dosen')

@section('content')
<h1 style="text-align: center;" class="mt-3">Dosen Page</h1>
<h5>Daftar Dosen :</h5>
<div style="text-align: center;">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dosen as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td><a href="dosen-detail/{{$item->id}}" class="btn btn-primary">Detail</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection