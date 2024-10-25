<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PT.MEISSA BERKAH</title>
  <link rel="icon" href="image.png">
  <link rel="stylesheet" href="style.css">
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="">
  <nav class="navbar navbar-expand-lg card card text-bg-success">
    <div class="container-fluid">
      <a class="nav-link active ms-2" aria-current="page" href="./index.php">
        <img src="image.png" alt="logo" width="35" height="35">
      </a>
      <h3 class="text-dark m-2">PT.MEISSA BERKAH</h3>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <span class="navbar-nav ms-auto mb-0">
          <li class="nav-item nav-link ms-1">
            <a class="btn btn-danger" href="logout.php">Log out</a>
          </li>
          <li class="nav-item nav-link ms-1">
            <a class="btn btn-outline-primary" href="login.php">Login</a> <!-- Link Login -->
          </li>
        </span>
      </div>
    </div>
  </nav>

  <!-- Dashboard Konten -->
  <div class="container mt-5 ">
    <div class="row">
      <div class="col-lg-6">
        <!-- Grafik Penjualan -->
        <h4 class="mb-3">Grafik Penjualan</h4>
        <canvas id="salesChart" width="400" height="200"></canvas>
      </div>

      <div class="col-lg-6">
        <!-- Tabel Data Pengguna -->
        <h4 class="mb-3">Data Pengguna</h4>
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Role</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>John Doe</td>
              <td>john@example.com</td>
              <td>Admin</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jane Smith</td>
              <td>jane@example.com</td>
              <td>User</td>
            </tr>
            <tr>
              <td>3</td>
              <td>David Brown</td>
              <td>david@example.com</td>
              <td>Editor</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-lg-12">
        <!-- Tabel Proyek -->
        <h4 class="mb-3">Data Proyek</h4>
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Nama Proyek</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Proyek A</td>
              <td>Selesai</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Proyek B</td>
              <td>Dalam Proses</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Proyek C</td>
              <td>Ditunda</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Script untuk Grafik Penjualan -->
  <script>
    var ctx = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [{
          label: 'Penjualan',
          data: [150, 200, 180, 220, 250, 300],
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 2
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
