<?php 
include 'includes/header.php';
include 'config/db.php';

// Fetch services
$result = $conn->query("SELECT * FROM services");
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Our Services</h2>

    <div class="row">

        <?php if($result && $result->num_rows > 0): ?>

            <?php while($row = $result->fetch_assoc()): ?>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="card">
                    <img src="assets/uploads/<?php echo $row['image']; ?>" class="card-img-top">

                    <div class="card-body text-center">
                        <h5><?php echo $row['name']; ?></h5>
                        <p><?php echo $row['description']; ?></p>
                        <strong>₹<?php echo $row['price']; ?></strong>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>

        <?php else: ?>
            <p class="text-center">No services available</p>
        <?php endif; ?>

    </div>
</div>

<?php include 'includes/footer.php'; ?>