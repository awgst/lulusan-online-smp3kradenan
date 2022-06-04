<?php
include 'koneksi.php';
$kelas = $_POST['kelas'];
$sql = mysqli_query($koneksi,"SELECT * FROM `daftar_lulusan` WHERE kelas='$kelas'") or die(mysql_error());
$query = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Hasil</title>
</head>
<body>
<div class="container-fluid centered">
      <div class="row">
        <div class="col">
          
        </div>
      </div>
      <div class="row">
        <div class="col">
        <h2 class="title">PENGUNGUMAN HASIL KELULUSAN SMP NEGERI 3 KRADENAN 2022</h2>
          <div class="container sized">
            <div class="card">
              <div class="card-header">
              </div>
              <div class="card-body">
                <br>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$query['nama']?></td>
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal Lahir</td>
                        <td>:</td>
                        <td><?=$query['ttl']?></td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td>:</td>
                        <td><?=$query['nisn']?></td>
                    </tr>
                </table>
                <br>
                <table>
                    <tr>
                        <td>
                            <p style="text-align: justify;">Selamat anda dinyatakan <b>LULUS</b>, anda dapat mengunduh Surat Keterangan Lulus dengan melalui tombol dibawah ini.</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">
                            <a href="<?=$query['link']?>" class="btn btn-primary">Download SKL</a>
                        </td>
                    </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>