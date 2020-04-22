<?php
// koneksine pada bae

$link = mysqli_connect("localhost","root","","turnamen");
if (!$link) {
    # code...
    echo "Login gagal";
}

?>