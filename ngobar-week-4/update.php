
<?php
include "connect.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare ("UPDATE user SET username = ?, password = ? WHERE id = ?");
    $stmt->bind_param("ssi", $username, $password, $id);
    
    if ($stmt->execute()) {
        echo "Berhasil update data";
    } else {
        echo "terjadi kesalahan dalam mengupdate data";
    }
    
    $stmt->close();
    $conn->close();
}

else {
    
    $id = $_GET['id'];
    
    $stmt = $conn->prepare("SELECT * FROM user WHERE id =?");
    $stmt->bind_param("i", $id);
    
    $stmt->execute();
    $result = $stmt->get_result();
    
    $row = $result->fetch_assoc();
    
    $username = $row['username'];
        $password = $row['password'];
    }
    
    
    
    
    ?>
    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update</title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <input type="text" name="username" placeholder="Usernmae">
            <input type="text" name="password" placeholder="Password">
            <button type="submit">Submit</button>
        </form>
    </body>
    </html>