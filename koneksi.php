<?php 

$koneksi = mysqli_connect("localhost","root","","data_warga");

$data_warga = mysqli_query($koneksi,"SELECT * FROM warga");

$join = "SELECT warga.nama_kepala_keluarga,bpjs.no_bpjs,bpjs.kelas_bpjs FROM warga JOIN bpjs ON warga.nomer_kartu_keluarga=bpjs.nomer_kartu_keluarga";

$hasil = mysqli_query($koneksi,$join);

?>