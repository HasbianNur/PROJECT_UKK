<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/profil.css">
    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>

    <div class="profile-card">
      <div class="image">
        <img src="https://picsum.photos/200/300" alt="" class="profile-img" />
      </div>

      <div class="text-data">
        <span class="name">{{ auth()->user()->name }}</span>
        <span class="job">User</span>
      </div>

      <div class="media-buttons">
        <a href="#" style="background: #4267b2" class="link">
          <i class="bx bxl-facebook"></i>
        </a>
        <a href="#" style="background: #1da1f2" class="link">
          <i class="bx bxl-twitter"></i>
        </a>
        <a href="#" style="background: #e1306c" class="link">
          <i class="bx bxl-instagram"></i>
        </a>
        <a href="#" style="background: #ff0000" class="link">
          <i class="bx bxl-youtube"></i>
        </a>
      </div>
      <span><a href="/">Kembali</a></span>
    </div>
  </body>
</html>

