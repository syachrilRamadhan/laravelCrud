@extends ('layouts.main')

@section ('title', 'Dosen-Detail')

@section('content')
<h5 style="text-align: center;" class="mt-3 mb-3">Detail Dosen</h5>
<p style="text-align: center;">{{$dosen->name}}</p>
<div class="mt-3" style="text-align: center;">
</div>
<div class="mt-3" style="text-align: center;">
    <table class="table table-bordered">
        <tr>
            <th>Fakultas :</th>
            <th>Mahasiswa :</th>
        </tr>
        <tr>
            <td>
                @if($dosen->fakultas)
                {{$dosen->fakultas->name}}
                @else
                -
                @endif
            </td>
            <td>
                @foreach($dosen->fakultas->mahasiswa as $data)
                {{$data->name}} <br>
                @endforeach
            </td>
        </tr>
    </table>
</div>

@endsection