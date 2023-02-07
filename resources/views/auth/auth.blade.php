@extends('auth.template')
@section('content')
<div class="wrapper">
   <div class="title-text">
      <div class="title login">
         <img src="/asset/ternak_lelang.jpg" alt="">
         {{-- <span>Login Form</span> --}}
      </div>
      <div class="title signup">
         <img src="/asset/ternak_lelang.jpg" alt="">
         {{-- <span>Signup Form</span> --}}
      </div>
   </div>
   <div class="form-container">
      <div class="slide-controls">
         <input type="radio" name="slide" id="login" checked>
         <input type="radio" name="slide" id="signup">
         <label for="login" class="slide login">Login</label>
         <label for="signup" class="slide signup">Daftar</label>
         <div class="slider-tab"></div>
      </div>
      <div class="form-inner">
         <form action="/auth/login" method="POST" class="login">
            @csrf
            <div class="field">
               <input type="text" name="email" placeholder="Alamat Email" required autocomplete="off">
            </div>
            <div class="field">
               <input type="password" name="password" placeholder="Password" required autocomplete="off">
            </div>
            <div class="pass-link">
               <a href="/">kembali</a>
            </div>
            <div class="field btn">
               <div class="btn-layer"></div>
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
               Belum Ada Akun? <a href="">Daftar Sekarang</a>
            </div>
         </form>
         <form action="/auth/daftar" method="POST" class="signup">
            @csrf
            <div class="field">
               <input type="text" name="name" placeholder="Username" required autocomplete="off">
            </div>
            <div class="field">
               <input type="text" name="email" placeholder="Alamat Email" required autocomplete="off">
            </div>
            <div class="field">
               <input type="password" name="password" Password placeholder="Password" required autocomplete="off">
            </div>
            <div class="field btn">
               <div class="btn-layer"></div>
               <input type="submit" value="Daftar">
            </div>
         </form>
      </div>
   </div>
</div>
<script>
   const loginText = document.querySelector(".title-text .login");
   const loginForm = document.querySelector("form.login");
   const loginBtn = document.querySelector("label.login");
   const signupBtn = document.querySelector("label.signup");
   const signupLink = document.querySelector("form .signup-link a");
   const title = document.querySelector("#title");
   signupBtn.onclick = (()=>{
      title.innerHTML = 'Daftar'
     loginForm.style.marginLeft = "-50%";
     loginText.style.marginLeft = "-50%";
   });
   loginBtn.onclick = (()=>{
      title.innerHTML = 'Masuk'
     loginForm.style.marginLeft = "0%";
     loginText.style.marginLeft = "0%";
   });
   signupLink.onclick = (()=>{
     signupBtn.click();
     return false;
   });
</script>
@endsection
