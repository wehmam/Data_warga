<?php include 'koneksi.php'; ?>
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
            <div class="col-md-12 mt-5">
                <h1 class="text-center">Data Warga Gang Asem</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover mt-3">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No Kartu Keluarga</th>
                            <th scope="col">Nama Kepala Keluarga</th>
                            <th scope="col">Istri</th>
                            <th scope="col">Nama Anak</th>
                            <th scope="col">Jumlah Anak</th>
                            <th scope="col">Penghasilan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($warga = mysqli_fetch_row($data_warga)) : ?>
                        <tr>
                            <td><?= $warga[0] ?></td>
                            <td><?= $warga[1] ?></td>
                            <td><?= $warga[2] ?></td>
                            <td><?= $warga[3] ?></td>
                            <td><?= $warga[4] ?></td>
                            <td><?= $warga[5] ?></td>
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
                    <a href="data_bpjs.php" class="btn btn-success mt-3">Data BPJS</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>