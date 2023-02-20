@extends('template.index')
@section('content')

<div class="wrapper-content">
    <div class="img-barang">
        <img src="/storage/Image/{{ $data->image }}" alt="">
    </div>
    <div class="desc-barang">
        <header>{{ $data->nama_barang }}</header>
        <div class="harga-awal"><span style="color:rgb(0, 187, 255);">Rp {{ number_format($data->harga_awal, 0, ',', '.') }}</span></div>

        @if($tawaran != null)
        <div class="lelang-tertinggi">
            <header class="header">Lelang Tertinggi : </header>
            <div class="tawaran-lelang">
                <img src="https://picsum.photos/1280/720" alt="">
                <div class="data-penawar">
                    <div>{{ $tawaran->user->name }}</div>
                    <div class="tawaran-harga"> Rp. {{ number_format($tawaran->penawaran_harga, 0, ',', '.') }}</div>
                </div>
            </div>
        </div>
        @else
        <div class="lelang-tertinggi" style="justify-content:center;padding:10px 20px">
            <header class="header">Belum ada penawaran</header>
        </div>
        @endif
        <div class="input-tawaran">
            <form action="/barang/buat-penawaran" method="POST">
                @csrf
                <input type="hidden" name="barang" value="{{ $data->id_barang }}" >
                <div>
                    <input type="number" name="bid" min="@if(isset($tawaran->penawaran_harga)) {{ $tawaran->penawaran_harga }} @else 0 @endif" id="tawaran"  required placeholder="Rp.">
                </div>
                @error('bid')
                <div>
                    <small style="color:red;">{{ $message }}</small>
                </div>
                @enderror
                <button class="button-submit" type="submit">Buat Tawaran</button>
            </form>
        </div>
       
    </div>
</div>

@endsection