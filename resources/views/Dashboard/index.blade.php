@extends('dashboard.template.template')
@section('content')
<div class="bg-primary flex flex-justify-between flex-align-center banner">
  <div>
    <h1 class="text-4xl text-white mb-8">Selamat Datang Kembali, {{ auth()->user()->name }}</h1>
    <h5 class="text-2xl text-white mb-4">Cari barang lebih gampang dengan Ternak Lelang</h5>
  </div>
  <div class="banner__img">
    <img src="https://i.ibb.co/vBkwrv5/banner.png" alt="banner">
  </div>
</div>


@endsection
