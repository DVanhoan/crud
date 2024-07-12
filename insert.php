<?php
include 'dbconn.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    $insertquery = "INSERT INTO user(name, email, address, phone) VALUES ('$name', '$email', '$address', '$phone')";

    $query = mysqli_query($conn, $insertquery);

    if($query){
        ?>
        <script>
            window.location.replace("index.php");
        </script>
        <?php
    } else {
        echo 'Not Inserted';
    }
}
?>
