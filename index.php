<?php
    //Koneksi Database
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "dblatihan";

    $koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

    //jika tombol simpan diklik
    if(isset($_POST['bsimpan']))
    {
        $simpan = mysqli_query($koneksi, "INSERT INTO tmas (nim, nama, alamat, prodi)
                                            VALUES  ('$_POST[tnim]', 
                                                    '$_POST[tnama]', 
                                                    '$_POST[talamat]', 
                                                    '$_POST[tprodi]')                             
                                            ");
     if($simpan) //jika simpan sukses
     {
         echo   "<script>
                    alert('Simpan data sukses!');
                    document.location='index.php';
                </script>";
    } 
    else                                      
    {
        echo    "<script>
                    alert('Simpan data sukses!');
                    document.location='index.php';
                </script>";

        }
    }






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD PHP & MySQL + Bootstrap 4</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <h1 class="text-center">CRUD PHP & MySQL + Bootstrap 4</h1>
    <h2 class="text-center">@Ngodingpintar</h2>

    <!-- Awal Card Form -->
    <div class="card mt-3">
    <div class="card-header bg-primary text-white ">
        Font Input Data Mahasiswa
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label>Nim</label>
                <input type="text" name="tnim" class="form-control" placeholder="Input Nim anda disini!" required>
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="tnama" class="form-control" placeholder="Input Nama anda disini!" required>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="talamat" placeholder="Input Alamat anda disini!"></textarea>
            </div>
            <div class="form-group">
                <label>Program Studi</label>
                <select class="form-control" name="tprodi">
                <option></option>
                <option value="D3-M1">D3-M1</option>
                <option value="S1-S1">S1-S1</option>
                <option value="S1-T1">S1-T1</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
            <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>

        </form>
    </div>
    </div>
    <!-- Akhir Card Form -->

    <!-- Awal Card Tabel -->
    <div class="card mt-3">
    <div class="card-header bg-success text-white ">
        Daftar Mahasiswa
    </div>
    <div class="card-body">
        
    <table class="table table-bordered table-striped">
        <tr>
            <th>No.</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Program Studi</th>
            <th>Aksi</th>
        </tr>
        <?php
            $no = 1;
            $tampil = mysqli_query($koneksi, "SELECT * from tmas order by id_tmas desc")or die(mysqli_error($koneksi));
            while($data = mysqli_fetch_array($tampil)) :

        
        ?>
        <tr>
            <td><?=$no++;?></td>
            <td><?=$data['nim']?></td>
            <td><?=$data['nama']?></td>
            <td><?=$data['alamat']?></td>
            <td><?=$data['prodi']?></td>
            <td>
            <a href="#" class="btn btn-warning"> Edit </a>
            <a href="#" class="btn btn-danger"> Hapus </a>
            </td>
        </tr>
            <?php endwhile; //penutup perulangan while ?>
    </table>    
    </div>
    </div>
    <!-- Akhir Card Tabel -->

</div>

 <script src="js/bootstrap.min.js"></script>   
</body>
</html>