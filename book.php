<?php include 'includes/header.php'; ?>
<?php include 'config/db.php'; ?>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $date = $_POST['date'];

    $conn->query("INSERT INTO bookings (name, phone, service, date)
                  VALUES ('$name','$phone','$service','$date')");

    echo "<script>alert('Booking Successful!');</script>";
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-lg-6 col-md-8 col-12">

            <div class="card shadow p-4">
                <h3 class="text-center mb-4">Book Appointment</h3>

                <form method="POST">

                    <div class="mb-3">
                        <label>Your Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Phone Number</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Select Service</label>
                        <select name="service" class="form-control">
                            <option>Bridal Makeup</option>
                            <option>Hair Styling</option>
                            <option>Facial</option>
                            <option>Skin Care</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Select Date</label>
                        <input type="date" name="date" class="form-control">
                    </div>

                    <button name="submit" class="btn btn-custom w-100">
                        Book Now
                    </button>

                </form>

            </div>

        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>