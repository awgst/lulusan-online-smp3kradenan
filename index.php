<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>SMP N 3 Kradenan</title>
  </head>
  <body>
    <div class="container centered">
      <div class="row">
        <div class="col">
          <h2 class="title">PENGUNGUMAN KELULUSAN SMP NEGERI 3 KRADENAN 2022</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="container sized">
            <div class="card">
              <div class="card-header">
              </div>
              <div class="card-body">
                <h5 class="card-title title">Selamat datang di pengunguman kelulusan SMP N 3 Kradenan</h5>
                <p class="card-text">Anda dapat melihat status kelulusan menggunanakan kelas-no.absen</p>
                <form action="process.php" method="POST" class="row g-2 form-centered">
                  <div class="col-auto">
                    <input type="text" class="form-control" name="kelas" placeholder="Contoh : IXA-1,IXB-2,...">
                  </div>
                  <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Lihat Hasil</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>