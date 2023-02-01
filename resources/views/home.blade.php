@extends('template.index')
@section('content')
<nav class="nav">
        <div class="nav-main">
            <div class="logo">MOLN<span>UI</span></div>
            <ul class="nav-links">
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

        <div class="cta">
            <button class="btn btn-secondary">Log In</button>
            <button class="btn btn-primary">Get Started</button>
        </div>
        <div class="menu">
          <button class="btn btn-primary menu"><i class="bi-list"></i></button>
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
@endsection
