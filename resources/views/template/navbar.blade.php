<nav class="nav-custom">
    <div class="nav-main">
        <div class="logo">Ternak <span style="color: rgb(0, 187, 255);">Lelang</span></div>
        <ul class="nav-links">
            <li class="nav-link"><a href="">Home</a></li>
            <li class="nav-link"><a href="">About</a></li>
            <li class="nav-link dropdown"><a href="" class="dropdown">Services <i class="bi bi-chevron-compact-down"></i></a>
            <ul class="dropdown-list">
                <li class="nav-link"><a href="">Service 1</a>
                <li class="nav-link"><a href="">Service 2</a>
            </ul>
            </li>
            <li class="nav-link"><a href="">Contact</a></li>
        </ul>
    </div>

    <div class="cta" style="display:flex;align-items:center;">
        @if(Auth::check())
        
            <div>
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">My Profile</a></li>
                    <li><a class="dropdown-item" href="/dashboard">Open Dashboard</a></li>
                    <li><a class="dropdown-item text-danger" href="/logout">Logout</a></li>
                  </ul>
            </div>
        @else
        <div>
            <button class="btn2 btn2-primary"><a href="">Cari Barang</a></button>
            <button class="btn2 btn2-secondary"><a href="/auth">Masuk</a></button>
        </div>
        @endif
    </div>
    <div class="menu">
      <button class="btn2 btn2-primary menu"><i class="bi-list"></i></button>
      <ul class="nav-mobile">
            <li class="nav-link"><a href="">Home</a></li>
            <li class="nav-link"><a href="">Our Team</a></li>
            <li class="nav-link dropdown"><a href="" class="dropdown">Services <i class="bi bi-chevron-compact-down"></i></a>
            <ul class="dropdown-list">
                <li class="nav-link"><a href="">Service 1</a>
                <li class="nav-link"><a href="">Service 2</a>
            </ul>
            </li>
            <li class="nav-link"><a href="">Blog</a></li>
      </ul>
    </div>
</nav>