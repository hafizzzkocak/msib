<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title></title>
    <style>
        /* Tambahkan gaya khusus untuk navbar */
        .navbar-custom {
            background-color: #4CAF50; /* Warna hijau */
        }

        .navbar-custom .navbar-brand {
            color: #fff; /* Warna teks putih */
        }

        .navbar-custom .navbar-nav .nav-link {
            color: #fff; /* Warna teks putih */
        }

        .navbar-custom .navbar-toggler-icon {
            background-color: #fff; /* Warna ikon toggler putih */
        }

        .navbar-custom .navbar-toggler {
            border-color: #fff; /* Warna border toggler putih */
   
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-custom"> <!-- Tambahkan kelas navbar-custom -->
  <div class="container-fluid">
    <img src="LOGO1.png" alt="" width="65px" height="65px">
    <a class="navbar-brand" href="#">KURSUS BAHASA INGGRIS</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="list_kursus.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Kursus
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="form_kursus.php">Form Kursus</a></li>
            <li><a class="dropdown-item" href="list_kursus.php">List Kursus</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="list_materi.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Materi
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="form_materi.php">Form Materi</a></li>
            <li><a class="dropdown-item" href="list_materi.php">List Materi</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    // Mendapatkan semua item navbar
    const navLinks = document.querySelectorAll('.nav-link');

    // Tambahkan event listener untuk setiap link navbar
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Hapus kelas 'active' dari semua link navbar
            navLinks.forEach(navLink => {
                navLink.classList.remove('active');
            });

            // Tambahkan kelas 'active' ke link yang diklik
            this.classList.add('active');
        });
    });
</script>
</body>
</html>