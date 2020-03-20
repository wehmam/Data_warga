<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data BPJS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5">Data BPJS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover mt-3">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Nama kepalakeluarga</th>
                            <th scope="col">No BPJS</th>
                            <th scope="col">Kelas BPJS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($bpjs = mysqli_fetch_assoc($hasil)) : ?>
                        <tr>
                            <td><?= $bpjs["nama_kepala_keluarga"] ?></td>
                            <td><?= $bpjs["no_bpjs"] ?></td>
                            <td><?= $bpjs["kelas_bpjs"] ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="text-center">
                    <a href="index.php" class="btn btn-success mt-3">Home</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center">
                    <a href="data_warga.php" class="btn btn-success mt-3">Data Warga</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>