<?php include 'includes/header.php'; ?>
<?php include 'config/db.php'; ?>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $conn->query("INSERT INTO contacts (name, email, message)
                  VALUES ('$name','$email','$message')");

    echo "<script>alert('Message Sent Successfully!');</script>";
}
?>

<div class="container mt-5">
    <div class="row">

        <!-- Contact Form -->
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="card shadow p-4">
                <h3 class="text-center mb-4">Contact Us</h3>

                <form method="POST">

                    <div class="mb-3">
                        <label>Your Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Message</label>
                        <textarea name="message" rows="4" class="form-control" required></textarea>
                    </div>

                    <button name="submit" class="btn btn-custom w-100">
                        Send Message
                    </button>

                </form>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="col-lg-6 col-md-12">
            <div class="p-4">

                <h3>Get in Touch</h3>
                <p>We’d love to hear from you. Visit us or contact us anytime.</p>

                <p><strong>📍 Address:</strong> Your Beauty Parlour Address</p>
                <p><strong>📞 Phone:</strong> +91 9876543210</p>
                <p><strong>📧 Email:</strong> beautyparlour@gmail.com</p>

                <!-- Google Map -->
                <div class="mt-4">
                    <iframe 
                        src="https://maps.google.com/maps?q=chennai&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        width="100%" 
                        height="250" 
                        style="border:0; border-radius:10px;"
                        allowfullscreen="">
                    </iframe>
                </div>

            </div>
        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>