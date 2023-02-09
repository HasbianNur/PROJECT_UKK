@extends('dashboard.template.template')
@section('content')
    <div class="header-content">
        <h2><i class="bi bi-box-fill"></i> Barang Lelang</h2>
        <div style="height: 4px;border-radius:8px;background-color: #4062ff;margin: 10px 0px;"></div>
    </div>

    <div class="content">
        <div class="button-create-barang" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span>Lelang Barang</span>
        </div>

        <div class="list-barang">
            @foreach ($data as $item)
            <div class="box-barang">
                <img src="/storage/Image/{{ $item->image }}" alt="">
                <div class="desc-barang">
                    <h5>{{ $item->nama_barang }}</h5>
                    <table>
                        <tbody>
                            <tr>
                                <td>Harga Lelang</td>
                                <td>:</td>
                                <td>Rp. {{ $item->harga_awal }}</td>
                            </tr>
                            <tr>
                                <td>Dilelang dari</td>
                                <td>:</td>
                                <td>{{ $item->tgl }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="action-barang">
                        <a><i class="bi bi-pencil-square text-warning"></i></a>
                        <a><i class="bi bi-trash-fill text-danger"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="list-empty" style="text-align: center;margin-top:50px;opacity:0.5;">
            <span>Tidak ada barang yang di Lelang</span>
        </div> --}}
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="logo">Ternak <span style="color: rgb(0, 187, 255);">Lelang</span></div>
                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/dashboard/barang-lelang/save" method="POST" enctype="multipart/form-data">

                        <div class="wrapper-input">
                            @csrf
                            <table class="table tabel-input-barang">
                                <tbody>
                                    <tr class="input-barang-box">
                                        <td>Nama Barang</td>
                                        <td>:</td>
                                        <td><input type="text" id="nama-barang" name="nama" placeholder="Nama Barang"
                                                autocomplete="off"></td>
                                    </tr>
                                    <tr class="input-barang-box">
                                        <td>Harga Awal</td>
                                        <td>:</td>
                                        <td><input type="number" id="harga-awal" name="harga" placeholder="Rp."></td>
                                    </tr>
                                    <tr class="input-barang-box">
                                        <td>Tanggal Lelang</td>
                                        <td>:</td>
                                        <td><input type="text"
                                                style="background: #ccc;border: 1px solid #ccc;border-radius:5px;" readonly
                                                id="input-tanggal-lelang" name="tanggal"></td>
                                    </tr>
                                    <tr class="input-barang-box">
                                        <td>Deskripsi Barang</td>
                                        <td>:</td>
                                        <td>
                                            <textarea type="text" id="input-deskripsi-lelang" name="deskripsi"></textarea>
                                        </td>
                                    </tr>
                                    <tr class="input-barang-box">
                                        <td>Gambar Barang</td>
                                        <td>:</td>
                                        <td>
                                            <input class="form-control" type="file" name="image" id="formFile">
                                            <small style="color:red;font-style:italic;font-size:12px;">*tidak boleh
                                                kosong!</small>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            const date = new Date();
            $('#input-tanggal-lelang').val(date.getDate() + '-' + (date.getMonth() + 1) + '-' + date.getFullYear())
        })
    </script>
@endsection
