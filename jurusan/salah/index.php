<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Informasi Bebas Tanggungan</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
  <div class="sidebar">
    <h2>
      <span class="admin-title">Admin</span><br>
      <span class="info-title">Teknologi Informasi</span>
    </h2>
    <ul>
      <li>
        <a href="#" id="btn-beranda">
          <i class="fas fa-home"></i> <span class="beranda-text">Beranda</span>
        </a>
      </li>
      <li>
        <a href="#" id="btn-profil">
          <i class="fas fa-user"></i> <span class="profil-text">Profil</span>
        </a>        
      </li>
      <li>
        <a href="#" id="btn-jurusan">
          <i class="fas fa-graduation-cap"></i> Jurusan
        </a>
      </li>
    </ul>
  </div>
  <div class="main-content">
    <header>
      <span>Selamat Datang Admin!</span>
      <div class="user-info">
        <div class="profile-pic"></div>
        <span>Siska Nuri Aprilla</span>
      </div>
    </header>
    <main>
      <div class="cards">
        <div class="card" id="card-total">
          <h1>234 <i class="fas fa-user-alt"></i></h1>
          <p>Jumlah Mahasiswa yang mengurus</p>
        </div>
        <div class="card green" id="card-selesai">
          <h1>14 <i class="fas fa-user-alt"></i></h1>
          <p>Jumlah Mahasiswa yang selesai</p>
        </div>
        <div class="card red" id="card-belum">
          <h1>2 <i class="fas fa-user-alt"></i></h1>
          <p>Jumlah Mahasiswa yang belum selesai</p>
        </div>
      </div>
    </main>    
  </div>
  <footer>2024 Sistem Informasi Bebas Tanggungan</footer>

  <script src="scripts.js"></script>
</body>
</html>
