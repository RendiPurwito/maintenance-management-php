<?php
    //! connection
$conn =  mysqli_connect('localhost', 'root', '', 'maintenance_management');

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
    $role = htmlspecialchars($data['role']);
    $email = htmlspecialchars($data['email']);
    $password = htmlspecialchars($data['password']);
    $no_telepon = htmlspecialchars($data['no_telepon']);
    $alamat = htmlspecialchars($data['alamat']);

    $query = "INSERT INTO users VALUES ('0', '$name', '$role', '$email', '$password','$no_telepon', '$alamat')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    //? mysqli_affected_rows -> berfunsi untuk memberi tahu ada yang berubah gak didatabase. jika ada maka akan mengembalikan 1 tapi jika tidak ada maka akan mengembalikan -1
}

function update($data)
{
    global $conn;

    $id = $data['id'];
    $name = htmlspecialchars($data['name']);
    $role = htmlspecialchars($data['role']);
    $email = htmlspecialchars($data['email']);
    $password = htmlspecialchars($data['password']);
    $no_telepon = htmlspecialchars($data['no_telepon']);
    $alamat = htmlspecialchars($data['alamat']);

    $query = "UPDATE users SET 
                name = '$name',
                role = '$role',
                email = '$email',
                password = '$password',
                no_telepon = '$no_telepon',
                alamat = '$alamat'
                WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function destroy($id){
    global $conn;
    mysqli_query($conn, 'DELETE FROM users WHERE id ='. $id);
    return mysqli_affected_rows($conn);
}

