<?php include '../includes/header.php'; ?>
<?php include '../config/db.php'; ?>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];

    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "../assets/uploads/".$image);

    $conn->query("INSERT INTO services (name, description, price, image)
                  VALUES ('$name','$desc','$price','$image')");
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-12">

            <div class="card shadow p-4">
                <h3 class="text-center mb-4">Add Service</h3>

                <form method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label>Service Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Description</label>
                        <textarea name="desc" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Upload Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>

                    <button name="submit" class="btn btn-custom w-100">
                        Add Service
                    </button>

                </form>
            </div>

        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>