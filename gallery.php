<?php 
include 'includes/header.php';
include 'config/db.php';

// Fetch gallery images
$result = $conn->query("SELECT * FROM gallery");
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Gallery</h2>

    <div class="row">

        <?php if($result && $result->num_rows > 0): ?>

            <?php while($row = $result->fetch_assoc()): ?>

            <div class="col-lg-3 col-md-4 col-6 mb-3">
                <img src="assets/uploads/<?php echo $row['image']; ?>" class="img-fluid rounded">
            </div>

            <?php endwhile; ?>

        <?php else: ?>
            <p class="text-center">No images found</p>
        <?php endif; ?>

    </div>
</div>

<?php include 'includes/footer.php'; ?>