<div class="container mt-5">
    <h2 class="text-center mb-4">Our Services</h2>

    <div class="row">
        <?php while($row = $result->fetch_assoc()): ?>
        <div class="col-lg-4 col-md-6 col-sm-12">
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
    </div>
</div>