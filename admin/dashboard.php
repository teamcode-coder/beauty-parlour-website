<?php include '../includes/header.php'; ?>
<?php 
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Admin Dashboard</h2>
<a href="logout.php" class="btn btn-danger mt-4">Logout</a>
    <div class="row text-center">

        <div class="col-md-4 col-12 mb-3">
            <a href="add_service.php" class="btn btn-custom w-100 p-4">
                ➕ Add Service
            </a>
        </div>

        <div class="col-md-4 col-12 mb-3">
            <a href="add_gallery.php" class="btn btn-custom w-100 p-4">
                🖼 Upload Gallery
            </a>
        </div>

        <div class="col-md-4 col-12 mb-3">
            <a href="view_bookings.php" class="btn btn-custom w-100 p-4">
                📅 View Bookings
            </a>
        </div>

    </div>
</div>

<?php include '../includes/footer.php'; ?>