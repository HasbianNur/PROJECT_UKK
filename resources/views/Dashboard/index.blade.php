@extends('dashboard.template.template')
@section('content')


  <section class="section__main">
    <div class="flex search mb-8">
      <button class="bg-white search__button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M11.7388 2C17.1088 2 21.4768 6.368 21.4768 11.738C21.4768 14.2715 20.5045 16.5823 18.9134 18.3165L22.0442 21.4407C22.3372 21.7337 22.3382 22.2077 22.0452 22.5007C21.8992 22.6487 21.7062 22.7217 21.5142 22.7217C21.3232 22.7217 21.1312 22.6487 20.9842 22.5027L17.8156 19.343C16.1488 20.6778 14.0354 21.477 11.7388 21.477C6.36876 21.477 1.99976 17.108 1.99976 11.738C1.99976 6.368 6.36876 2 11.7388 2ZM11.7388 3.5C7.19576 3.5 3.49976 7.195 3.49976 11.738C3.49976 16.281 7.19576 19.977 11.7388 19.977C16.2808 19.977 19.9768 16.281 19.9768 11.738C19.9768 7.195 16.2808 3.5 11.7388 3.5Z"
            fill="#919EAB" />
        </svg>
      </button>
      <input type="text" placeholder="Cari Semua" class="search__input">
    </div>
    <div class="bg-primary flex flex-justify-between flex-align-center banner">
      <div>
        <h1 class="text-4xl text-white mb-8">Selamat Datang Kembali, {{ auth()->user()->name }}</h1>
        <h5 class="text-2xl text-white mb-4">Cari barang lebih gampang dengan Ternak Lelang</h5>
        <div class="banner__cta">
          <button class="button bg-secondary text-white py-4 px-8">Cari Barang</button>
        </div>
      </div>
      <div class="banner__img">
        <img src="https://i.ibb.co/vBkwrv5/banner.png" alt="banner">
      </div>
    </div>
  </section>

@endsection
