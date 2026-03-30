<?php 
include '../config/db.php';

$result = $conn->query("SELECT * FROM bookings");
?>
<?php 
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}
?>

<h2>All Bookings</h2>

<table border="1" cellpadding="10">
<tr>
    <th>Name</th>
    <th>Phone</th>
    <th>Service</th>
    <th>Date</th>
</tr>

<?php while($row = $result->fetch_assoc()): ?>
<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['service']; ?></td>
    <td><?php echo $row['date']; ?></td>
</tr>
<?php endwhile; ?>

</table>