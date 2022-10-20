@extends ('layouts.main')
@section ('title', 'Fakultas-Detail')

@section('content')
<h5 style="text-align: center;" class="mt-3 mb-3">Detail Fakultas :</h5>
<p style="text-align: center;">{{$fakultas->name}}</p>
<div class="mt-3" style="text-align: center;">
</div>
<div class="mt-3" style="text-align: center;">
    <table class="table table-bordered">
        <tr>
            <th>Dosen</th>
            <th>Mahasiswa</th>
        </tr>
        <tr>
            <td>{{$fakultas->dosen->name}}</td>
            <td>
                @foreach($fakultas->mahasiswa as $item)
               - {{$item->name}} <br>
                @endforeach
            </td>
        </tr>
    </table>
</div>
@endsection