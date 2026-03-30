<?php 
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}
?>
<?php 
include '../config/db.php';

if(isset($_POST['submit'])){

    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp, "../assets/uploads/".$image);

    $conn->query("INSERT INTO gallery (image) VALUES ('$image')");

    echo "<script>alert('Image Uploaded');</script>";
}
?>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="image" required>
    <button name="submit">Upload</button>
</form>