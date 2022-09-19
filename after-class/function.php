<?php

//! connection
$conn =  mysqli_connect('localhost', 'root', '', 'after_class');

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function store($data)
{
    global $conn;

    $name = htmlspecialchars($data['name']);
    $instansi = htmlspecialchars($data['instansi']);
    $keperluan = htmlspecialchars($data['keperluan']);
    $alamat = htmlspecialchars($data['alamat']);

    $query = "INSERT INTO tamu VALUES ('', '$name', '$instansi', '$keperluan', '$alamat')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    //? mysqli_affected_rows -> berfunsi untuk memberi tahu ada yang berubah gak didatabase. jika ada maka akan mengembalikan 1 tapi jika tidak ada maka akan mengembalikan -1
}

function update($data)
{
    global $conn;

    $id = $data['id'];
    $name = htmlspecialchars($data['name']);
    $instansi = htmlspecialchars($data['instansi']);
    $keperluan = htmlspecialchars($data['keperluan']);
    $alamat = htmlspecialchars($data['alamat']);

    $query = "UPDATE tamu SET 
                name = '$name',
                instansi = '$instansi',
                keperluan = '$keperluan',
                alamat = '$alamat'
                WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function destroy($id){
    global $conn;
    mysqli_query($conn, 'DELETE FROM tamu WHERE id ='. $id);
    return mysqli_affected_rows($conn);
}
