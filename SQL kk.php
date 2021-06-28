<<?php 
$koneksi= new mysqli("localhost", "root","");
$sql= "create database kartukeluarga"
$q=$koneksi=->query($sql)
if{
	echo "Database Sudah Dibuat";
}else{echo"Database Gagal DIbuat";

}
$sql2="CREATE TABLE kartukeluarga.`kartukeluarga` (
  `no` int(23) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `NIK` int(23) NOT NULL,
  `jeniskelamin` varchar(25) NOT NULL,
  `tempatlahir` varchar(25) NOT NULL,
  `tanggallahir` varchar(25) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `pendidikan` varchar(25) NOT NULL,
  `jenispekerjaan` varchar(25) NOT NULL,
  `golongandarah` varchar(25) DEFAULT NULL,
  `statusperkawainan` varchar(25) NOT NULL,
  `tanggalperkawinan` varchar(25) NOT NULL,
  `statushubungandalamkeluarga` varchar(25) NOT NULL,
  `kewarganegaraan` varchar(25) NOT NULL,
  `dokumenimigrasi` varchar(25) DEFAULT NULL,
  `namaorangtua` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
$q2=$koneksi->query($sql2)
if($q2){
	echo"Table Sudah Dibuat";

}

	else{
		echo" Table Gagal Dibuat";
	}


 ?>
