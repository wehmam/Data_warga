<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])){
  
    $no_kk = $_POST['no_kk'];
    $nama_kk = $_POST['nama_kk'];
    $nama_istri = $_POST["nama_istri"];
    $nama_anak = $_POST["nama_anak"];
    $jumlah_anak = $_POST["jumlah_anak"];
    $penghasilan = $_POST["penghasilan"];
    
    $query = "INSERT INTO warga VALUE ($no_kk,'$nama_kk','$nama_istri','$nama_anak','$jumlah_anak','$penghasilan','Git.png') ";
    mysqli_query($koneksi,$query);


    if(mysqli_affected_rows($koneksi)> 0){
        echo "
            <script>
                alert('data berhasil ditambahkan')
                document.location.href = 'data_warga.php'
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mb-5 mt-3">Tambah Data Warga</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">

                    <div class="form-group">
                        <label for="No_KK">No kartu keluarga</label>
                        <input type="text" class="form-control" id="no_KK" name="no_kk">
                    </div>

                    <div class="form-group">
                        <label for="nama_KK">Nama Kepala Keluarga</label>
                        <input type="text" class="form-control" id="no_KK" name="nama_kk">
                    </div>

                    <div class="form-group">
                        <label for="nama_istri">Nama Istri</label>
                        <input type="text" class="form-control" id="nama_istri" name="nama_istri">
                    </div>

                    <div class="form-group">
                        <label for="nama_anak">Nama Anak</label>
                        <input type="text" class="form-control" id="no_KK" name="nama_anak">
                    </div>

                    <div class="form-group">
                        <label for="jumlah_anak">Jumlah Anak</label>
                        <input type="text" class="form-control" id="jumlah_anak" name="jumlah_anak">
                    </div>

                    <div class="form-group">
                        <label for="penghasilan">Penghasilan</label>
                        <input type="text" class="form-control" id="penghasilan" name="penghasilan">
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary text-center" name="submit">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>