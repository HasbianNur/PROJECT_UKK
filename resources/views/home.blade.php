@extends('template.index')
@section('content')

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://picsum.photos/1280/720" class="carousel-image d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/1280/720" class="carousel-image d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/1280/720" class="carousel-image d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
  <div class="wrapper-content">
    <div class="list-produk-home">
      @foreach ($data as $item)
      <div class="box-produk">
        <img src="/storage/Image/{{ $item->image }}" class="image-produk" alt="">
        <div class="box-desc-produk">
          <header>{{ $item->nama_barang }}</header>
          <div style="font-weight:bold;color:rgb(0, 187, 255);">Rp. {{ $item->harga_awal }}</div>
          <table>
            <tbody>
                <tr>
                    <td>Dilelang dari</td>
                    <td style="padding-left:5px;">:</td>
                    <td style="padding-left:5px;">{{ $item->tgl }}</td>
                </tr>
            </tbody>
        </table>
        </div>
      </div>
      @endforeach
    </div>
  </div>

@endsection
