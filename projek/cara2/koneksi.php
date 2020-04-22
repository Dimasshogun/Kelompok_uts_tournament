<?php

//Dimas shofa gunarso (18090061)
// koneksine pada bae
$koneksi = mysqli_connect("localhost:3306","root","","turnamen");

//Check connection
if(mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}else{
	echo "Koneksi database berhasil";
}

?>