<?php 
include 'koneksi.php';
    
    $no_kk = $_GET["nomer_kartu_keluarga"];

    $query = "DELETE FROM warga WHERE nomer_kartu_keluarga = $no_kk";

    mysqli_query($koneksi,$query);

    if(mysqli_affected_rows($koneksi) > 0){
        echo "
        <script>
        alert('data berhasil dihapus')
            document.location.href = 'data_warga.php'
        </script>
        ";
    }

?>