<div class="container mt-5 gallery">
    <h2 class="text-center mb-4">Gallery</h2>

    <div class="row">
        <?php while($row = $result->fetch_assoc()): ?>
        <div class="col-lg-3 col-md-4 col-6 mb-3">
            <img src="assets/uploads/<?php echo $row['image']; ?>" class="img-fluid">
        </div>
        <?php endwhile; ?>
    </div>
</div>