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
      <a class="box-produk" href="/barang/{{ $item->id_barang }}">
        <div class="image-produk">
          <img src="/storage/Image/{{ $item->image }}" alt="produk-image">
        </div>
        <div class="box-desc-produk">
          <div class="kategori-produk"><i class="bi bi-tags-fill"></i> <span>{{ $item->kategori->nama }}</span></div>
          <header>{{ $item->nama_barang }}</header>
          <div style="font-weight:bold;color:rgb(0, 187, 255);">Rp. {{ number_format($item->harga_awal, 0, ',', '.') }}</div>
          <table>
            <tbody>
                <tr>
                    @if (
                        strtotime('+1 day', strtotime($item->created_at))
                        >
                        strtotime(date('Y-m-d H:i:s'))
                        )
                    <td>Berakhir pada</td>
                    <td style="padding-left:5px;">:</td>
                    <td style="padding-left:5px;" class="waktu" title="test">
                        {{ date('d M Y | H:i:s', strtotime('+1 day', strtotime($item->created_at))) }}
                    </td>
                    @else
                    <td style="color:green;">&#10004; Lelang Selesai</td>
                    @endif
                </tr>
            </tbody>
        </table>
        </div>
      </a>
      @endforeach
    </div>
  </div>

@endsection
