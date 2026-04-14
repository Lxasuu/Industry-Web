<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Teknik Industri</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="./assets/images/favicon_io/site.webmanifest">
  
  <!-- CSS -->
  <link rel="stylesheet" href="./dist/assets/css/index.css">
  <script type="module" src="./dist/assets/js/index.js" defer></script>
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand d-inline-flex gap-2 align-items-center lh-1" href="index.php">
        <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-book">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
            <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
            <path d="M3 6l0 13" />
            <path d="M12 6l0 13" />
            <path d="M21 6l0 13" />
          </svg></span>
        <span class="fw-bold">Teknik Industri</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item"><a href="index.php" class="nav-link <?= $current_page == 'index.php' ? 'active fw-bold text-primary' : '' ?>">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link <?= $current_page == 'about.php' ? 'active fw-bold text-primary' : '' ?>">Tentang</a></li>
          <li class="nav-item"><a href="program_studi.php" class="nav-link <?= $current_page == 'program_studi.php' ? 'active fw-bold text-primary' : '' ?>">Kurikulum</a></li>
          <li class="nav-item"><a href="karya_mahasiswa.php" class="nav-link <?= $current_page == 'karya_mahasiswa.php' ? 'active fw-bold text-primary' : '' ?>">Karya Mahasiswa</a></li>
          <li class="nav-item"><a href="fasilitas.php" class="nav-link <?= $current_page == 'fasilitas.php' ? 'active fw-bold text-primary' : '' ?>">Magang</a></li>
          <li class="nav-item"><a href="dosen.php" class="nav-link <?= $current_page == 'dosen.php' ? 'active fw-bold text-primary' : '' ?>">Dosen</a></li>
          <li class="nav-item"><a href="beasiswa.php" class="nav-link <?= $current_page == 'beasiswa.php' ? 'active fw-bold text-primary' : '' ?>">Beasiswa</a></li>
          <li class="nav-item"><a href="mitra_industri.php" class="nav-link <?= $current_page == 'mitra_industri.php' ? 'active fw-bold text-primary' : '' ?>">Kontak</a></li>
          <!-- <li class="nav-item"><a href="pendaftaran.php" class="nav-link <?= $current_page == 'pendaftaran.php' ? 'active fw-bold text-primary' : '' ?>">Pendaftaran</a></li> -->
        </ul>
        <div class="d-flex gap-3 align-items-center">
          <a href="https://pmb-mip.politeknikmeta.ac.id/" class="btn btn-primary" target="_blank">Daftar Sekarang</a>
        </div>
      </div>
    </div>
  </nav>

