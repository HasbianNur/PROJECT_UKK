@extends('auth.template')
@section('content')
<div class="wrapper">
   <div class="title-text">
      <div class="title login">
        <div class="logo" style="font-size: 25px;">Ternak <span style="color: rgb(0, 187, 255);">Lelang</span></div>
      </div>
      <div class="title signup">
         <div class="logo" style="font-size: 25px;">Ternak <span style="color: rgb(0, 187, 255);">Lelang</span></div>
      </div>
   </div>
   <div class="form-container">
      @if (session()->has('fail'))
            <div style="color:red;font-style:italic;text-align:center;">{{ session('fail') }}</div>
      @endif
      <div class="slide-controls">
         <input type="radio" name="slide" id="login" checked>
         <input type="radio" name="slide" id="signup">
         <label for="login" class="slide login">Login</label>
         <label for="signup" class="slide signup" id="daftar">Daftar</label>
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
               <a href="/" class="text-decoration-none text-info">Kembali</a>
            </div>
            <div class="field btn">
               <div class="btn-layer"></div>
               <input type="submit" value="Login">
            </div>
            <div class="google-login">
               <a href="/auth/redirect" class="text-decoration-none text-info">
                  {{-- <i class="bi bi-google"></i>  --}}
                  <img style="width: 25px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEkUlEQVR4nO2Zb0wbZRzHn3taesUtRpOJYbo/DoQM5c/GMgryzxkYxbGBiQsbNBCEFGaIY8zCCuaUMSiQAQMGQWAgcSY2GeuNuzpc8NqNvRoCItE3841Dthj3ToNzbX+mVRBI197Zo2VJv8n3XZ+nn89dn6dPrwj5448/HgcoJIWqgGIoxywU4HuQTfwJSsIKBxBAKgJIQzbIJhZBhX+BE/g6VAUU2ccgXwc0UgWU4tvwNmGBJASCqiQsoMa3QRsQ433wOlk4qPEsvCkQ2llTEUAxnoEaFOIdeA3RCumEzWPwtT2IrHCK0K0f+HkUCMX4B9HBk9b0PTwNFJKJC9+NngcVfrDu8En/toJoFw9+EMnhOPGr1+DLCE40eIeAGn/vPXgsMvyHRIfgrbEMT0IlroUmaQpQaAtQKAjOSN6C05hy7Db21zgbW4pN4sI3kyGQQVh5g5+W9PJZfEChZ+ADydAqkVKR4R1vVIHv8IIvwPNwDr0oeP4aFAJ5+P76wJvl22CcfAQaCUCyC/gSPAV6JEEbLWAmdWAmwdHeAIB0wvmV35DweiQBs2x+WcDeURmACv8Hn0lYoAK9hDZiwCSPXwW/VI4E0En/ObuclPSjjRowybROBZY6FPAAyhGJNmrATF5xKWCSdQiZL1gzC2I0XDthO9rUd9e9gImccynAkRm+EAjWzMIbddcW+Qg8dCMQ6iuB3TW3rHwEHrkWQJt9JbCjehKeaoHtVd+C5x+hm7IwXwns1t60Pd2L+JNRHovYTI642UY7fSVwRDc8z0NAduZJ8A+5Z6Geif/jvF4RiEROy3D+puiPvrG4Eii/0DjqXoALVDiDnx0PBhWthENXs6HDGHtJbIGTnfX97u6Arq/iuHsBQBjMsntL4DYzCfRYOGQbDjvg7c2jlZaL11/bJhZ8W496Z2SNyeoK/vVas4XiKH5P88BENtrhfzdthrNMwjL4ylaPJi9wXIrHjwcpjpIeafxswd3VL2lrm+A9KXCBL98df+GvEjrdKfxSP2YTZjyRoDhKmt/SM+d2/6+egsbuylhBkzcwihlX8CvvRP/X4VuFwvfeiNhe1lX3E5/d51hz75zQ+RE9FvZKPq208pHIp5WWzq/2DlCDKXJ38w6PRW1qZ/b15RmU1pyRHDja2uH2FEp9ekrQl+dyutmY1iweAitFGljFdJdxL6VnIw5cGdsVdJkL2zJgjEq8aNxTV8ckTNpfs3JM1kgOFPZQsLXqO6cC77c3dSNPomPjpvkKeNKiwXLYWX1nFfy7TQM/Ik+j10fINHTqfW9IFH5RCJG1Jgd8ev2Xv53o6hJ0cHxiOG7HczVM4oI3JI7pc0HVemGeGq4MEgV+hYT8LBM/K2RN/J+eYxXTRmPo+v3m7jNGNecaMq2iX3lDprWXjWlG3sgwvSe0gY2beseQ5TF4ztXDjqt++caru5C3MzQWGdvM7L9VZDj4WCh4AZ3xuJGJm/icifb+n3xrowck6WeiC1uN+0a1TOLPajptUWVQWu13yH4IzDVk2tSGtMWqa8nzLex+ts8YU2Afg/zxxx/kaf4GzSVnCicBYF0AAAAASUVORK5CYII=">
                  <span style="color:black;font-size:14px;padding-left:5px;">Login Dengan Google</span></a></div>
            <div class="signup-link">
               Belum Ada Akun? <a href="" class="text-decoration-none">Daftar Sekarang</a>
            </div>
         </form>
         <form action="/auth/daftar" method="POST" class="signup">
            @csrf
            <div class="field">
               <input type="text" name="name" placeholder="Username" required autocomplete="off">
               @error('name')
                  <small style="color:red;margin-bottom:5px;">{{ $message }}</small>
               @enderror
            </div>
            <div class="field">
               <input type="text" name="email" placeholder="Alamat Email" required autocomplete="off">
               @error('email')
                  <small style="color:red;margin-bottom:5px;">{{ $message }}</small>
               @enderror
            </div>
            <div class="field">
               <input type="password" name="password" Password placeholder="Password"  required autocomplete="off">
               @error('password')
                   <small style="color:red;margin-bottom:5px;">{{ $message }}</small>
               @enderror
            </div>
            <div class="field btn">
               <div class="btn-layer"></div>
               <input type="submit" value="Daftar">
            </div>
         </form>
      </div>
   </div>
</div>
@error('password')
<script>
   $("form.login").css({
      'margin-left' : '-50%'
   })
   $("title-text .login").css({
      'margin-left' : '-50%'
   })
   $('label.signup').trigger('click')
</script>
@enderror
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
