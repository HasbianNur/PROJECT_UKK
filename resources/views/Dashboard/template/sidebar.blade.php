<nav class="nav__mobile flex-column flex-align-center">
    <div class="nav__hamburger flex flex-align-center flex-column flex-justify-center mb-6">
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
    </div>
    <div class="logo">Ternak <span style="color: rgb(0, 187, 255);">Lelang</span></div>
  </nav>
  <nav class="nav flex flex-column">
    <ul class="nav__menus flex flex-column mb-14">
    <div class="logo">Ternak <span style="color: rgb(0, 187, 255);">Lelang</span></div>
      
      <li class="mt-8 mb-3">
        <a class="nav__menu {{ Request::is('dashboard') ? 'active' : '' }} flex flex-align-center" href="/dashboard">
          <i class="bi bi-house-door-fill" style="margin-right: 8px; font-size:20px;"></i>
          <span> Dashboard</span>
        </a>
      </li>
      <li class="mb-3">
        <a class="nav__menu {{ Request::is('dashboard/barang-lelang') ? 'active' : '' }} flex flex-align-center" href="/dashboard/barang-lelang">
          <i class="bi bi-box-fill" style="margin-right: 8px; font-size:20px;"></i>
          <span> Barang Lelang</span>
        </a>
      </li>

    </ul>
    <ul class="nav__logouts flex flex-column flex-justify-between">
      <li>
        <a class="nav__logout flex flex-align-center" href="/logout">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M11.4927 2C13.9753 2 16 3.99 16 6.44V11.23H9.89535C9.45785 11.23 9.11192 11.57 9.11192 12C9.11192 12.42 9.45785 12.77 9.89535 12.77H16V17.55C16 20 13.9753 22 11.4724 22H6.51744C4.02471 22 2 20.01 2 17.56V6.45C2 3.99 4.03488 2 6.52762 2H11.4927ZM18.5402 8.5502C18.8402 8.2402 19.3302 8.2402 19.6302 8.5402L22.5502 11.4502C22.7002 11.6002 22.7802 11.7902 22.7802 12.0002C22.7802 12.2002 22.7002 12.4002 22.5502 12.5402L19.6302 15.4502C19.4802 15.6002 19.2802 15.6802 19.0902 15.6802C18.8902 15.6802 18.6902 15.6002 18.5402 15.4502C18.2402 15.1502 18.2402 14.6602 18.5402 14.3602L20.1402 12.7702H16.0002V11.2302H20.1402L18.5402 9.6402C18.2402 9.3402 18.2402 8.8502 18.5402 8.5502Z"
              fill="black" />
          </svg>
          Logout
        </a>
      </li>
    </ul>
  </nav>