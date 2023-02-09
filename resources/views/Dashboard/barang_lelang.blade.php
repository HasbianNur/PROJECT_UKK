@extends('dashboard.template.template')
@section('content')
 
<div class="header-content">
    <h2><i class="bi bi-box-fill"></i> Barang Lelang</h2>
    <div style="height: 3px;border-radius:5px;background-color: #4062ff;margin: 10px 0px;"></div>
</div>

<div class="content">
    <div class="button-create-barang" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <span>Lelang Barang</span>
    </div>

    <div class="list-barang">
        <div class="list-empty" style="text-align: center;margin-top:50px;opacity:0.5;">
            <span>Tidak ada barang yang di Lelang</span>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
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

            <div class="wrapper-input">
                <form action="">
                    <table class="table tabel-input-barang">
                        <tbody>
                          <tr class="input-barang-box">
                            <td>Nama Barang</td>
                            <td>:</td>
                            <td><input type="text" id="nama-barang" name="nama" placeholder="Nama Barang"></td>
                          </tr>
                          <tr class="input-barang-box">
                            <td>Harga Awal</td>
                            <td>:</td>
                            <td><input type="number" id="harga-awal" name="harga" placeholder="Rp."></td>
                          </tr>
                          <tr class="input-barang-box">
                            <td>Tanggal Lelang</td>
                            <td>:</td>
                            <td>
                              <input type="text" style="border: 1px solid #ccc;border-radius:5px;font-size:14px;color:black;" readonly id="input-tanggal-lelang" name="tanggal">
                            </td>
                          </tr>
                          <tr class="input-barang-box">
                            <td>Deskripsi Barang</td>
                            <td>:</td>
                            <td>
                                <textarea type="text"  id="input-deskripsi-lelang" name="deskripsi"></textarea>
                            </td>
                          </tr>
                          <tr class="input-barang-box">
                            <td>Gambar Barang</td>
                            <td>:</td>
                            <td>
                                <input class="form-control" type="file" id="formFile">
                                <small style="color:red;font-style:italic;font-size:12px;">*tidak boleh kosong!</small>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </form>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function(){
        const date = new Date();
        $('#input-tanggal-lelang').val(+date.getDate()+'-'+(date.getMonth() + 1)+'-'+date.getFullYear())
    })
  </script>

@endsection