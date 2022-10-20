@extends ('layouts.main')

@section ('title', 'Ekskul-Detail')

@section('content')
<h5 style="text-align: center;" class="mt-3 mb-3">Detail Ekskul</h5>
<p style="text-align: center;">{{$ekskul->name}}</p>
<div class="mt-3" style="text-align: center;">
</div>
<div class="mt-3" style="text-align: center;">
    <table class="table table-bordered">
        <tr>
            <th>Anggota :</th>
        </tr>
        <tr>
            <td>
                @foreach($ekskul->mahasiswa as $item)
                {{$item->name}} <br>
                @endforeach
            </td>
        </tr>
    </table>
</div>

@endsection