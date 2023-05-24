<?php

require "koneksi.php";
$sql = "SELECT * FROM data";
$execute = mysqli_query($koneksi, $sql);

?>

<?php
require "koneksi.php";

if (isset($_POST["submit"])) {
  
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];

    $insert = mysqli_query($koneksi, "INSERT INTO data (nama, nisn) VALUES ('$nama', '$nisn')");

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tubes Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <img src="hi.png" alt="" /> <span class="ml-3">いらっしゃいませ</span><br>
                <h2>Form Pendaftaran</h2>
                <form action="koneksi.php" method="post">
                <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label><br />
            <input
              type="text"
              class="form-control"
              id="nama"
              placeholder="Nama Lengkap Kamu"
            />
          </div>

          <div class="mb-3">
            <label for="nisn" class="form-label"
              >Nomor Induk Sekolah Nasional (NISN)</label
            ><br />
            <input
              type="text"
              class="form-control"
              id="nisn"
              placeholder="00126543"
            />
          </div>

          <div class="mb-3">
            <label for="kelas" class="form-label">Kelas / Gugus</label><br />
            <input
              type="text"
              class="form-control"
              id="kelas"
              placeholder="X MIPA 0 /Gugus 3"
            />
          </div>

          <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label><br />
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                id="flexRadioDefault1"
              />
              <label class="form-check-label" for="flexRadioDefault1"
                >Laki-laki</label
              >
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                id="flexRadioDefault2"
                checked
              />
              <label class="form-check-label" for="flexRadioDefault2"
                >Perempuan</label
              >
            </div>
          </div>

          <div class="mb-3">
            <label for="notel" class="form-label">Nomor Telepon</label><br />
            <input
              type="text"
              class="form-control"
              id="notel"
              placeholder="0811456783"
            />
          </div>

          <div class="mb-3">
            <label for="insta" class="form-label">Instagram</label><br />
            <input
              type="text"
              class="form-control"
              id="insta"
              placeholder="smunelJC / isi 0 jika tidak ada Instagram"
            />
          </div>

          <div class="mb-3">
            <label for="pin" class="form-label">PIN</label><br />
            <input
              type="password"
              class="form-control"
              id="pin"
              placeholder="*******(6 digit)"
            />
          </div>

          <div class="mb-3">
            <label for="kode" class="form-label">Kode Pendaftaran</label><br />
            <input
              type="text"
              class="form-control"
              id="kode"
              placeholder="Kode Pendaftaran"
            />
          </div>

          <div class="mb-3">
            <input type="checkbox" class="form-check-input" id="persetujuan" />
            <label class="form-check-label" for="persetujuan"
              >Saya telah bersedia untuk mengikuti aturan yang telah ditetapkan
              oleh SmunelJC</label
            >
          </div>

                    <button style="background-color: black;" type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>List Pendaftaran</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama</th>
                            <th>NISN</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                        while($result = mysqli_fetch_assoc($execute)) {?>

                        <tr>
                          <td><?= $result['id']?></td>
                          <td><?= $result['nama']?></td>
                          <td><?= $result['nisn']?></td>
                          <td><button style="background-color: black;" type="button" class="btn btn-primary">Edit</button></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php
