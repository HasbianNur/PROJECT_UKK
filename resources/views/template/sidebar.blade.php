<div class="sidebar">
    <div class="sidebar-main">
        <div class="sidebar-main-text">
            <i class="bi bi-grid"></i>
            <span>Kategori Barang</span>
        </div>
        <div style="height: 3px;background-color: #555;margin: 5px 0px;margin-bottom: 12px;border-radius: 5px;"></div>
        <div class="sidebar-list">
            @foreach ($kategori as $item)
            <a href="" class="item-sidebar">
                <span>{{$item->nama}}</span>
            </a>    
            @endforeach
        </div>
    </div>
</div>
