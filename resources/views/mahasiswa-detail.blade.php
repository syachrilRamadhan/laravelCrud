@extends ('layouts.main')

@section ('title', 'Mahasiswa-Detail')

@section('content')
<h5 style="text-align: center;" class="mt-3 mb-3">Detail Mahasiswa</h5>
<p style="text-align: center;">Data detail mahasiswa : {{$mahasiswa->name}}</p>
<div style="text-align: center;">
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Nim</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>Fakultas</th>
            <th>Dosen</th>
            <th>Ekskul</th>
        </tr>
        <tr>
            <td>{{$mahasiswa->name}}</td>
            <td>{{$mahasiswa->nim}}</td>
            <td>
                @if($mahasiswa->gender == 'P')
                Perempuan
                @else
                Laki-laki
                @endif
            </td>
            <td>{{$mahasiswa->alamat}}</td>
            <td>{{$mahasiswa->fakultas->name}}</td>
            <td>{{$mahasiswa->fakultas->dosen->name}}</td>
            <td>
                @foreach($mahasiswa->ekskuls as $item)
                {{$item->name}} <br>
                @endforeach
            </td>
        </tr>
    </table>
</div>
<style>
th {
    width: 15%;
}
</style>
@endsection