@extends('dashboard.template.template')
@section('content')
 
<div class="header-content">
    <h2><i class="bi bi-box-fill"></i> Barang Lelang</h2>
    <div style="height: 3px;border-radius:5px;background-color: #4062ff;margin: 10px 0px;"></div>
</div>

<div class="content">
    <div class="button-create-barang">
        <span>Lelang Barang</span>
    </div>

    <div class="list-barang">
        <div class="list-empty" style="text-align: center;margin-top:50px;opacity:0.5;">
            <span>Tidak ada barang yang di Lelang</span>
        </div>
    </div>
</div>

@endsection