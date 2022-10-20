@extends('layouts.main')

@section('title', 'Home')

@section('content') 
<div class="mt-1">
    <h1 style="text-align: center;" class="mt-3">Hello {{Auth::user()->name}}</h1>
    <h3 style="text-align: center;">Selamat Datang di Sundanese University !</h3>
        @if(Auth::user()->role_id == 1)
        <div style="align-items: center; text-align:center; justify-content:center">
        <p>Saat ini data anda sedang di proses oleh admin kami, <br>
            mohon bersabar untuk menunggu. <br>
            Selamat bergabung di Sundanese University,semoga kamu tidak <br>
            menjadi mahasiswa abadi ya !
        </p>
        @endif
        </div>
   
</div>

@endsection