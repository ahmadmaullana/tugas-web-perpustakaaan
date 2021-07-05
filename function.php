<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","","db_login");


function query($query) {
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($rows = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    } 
    return $rows;
}

?>