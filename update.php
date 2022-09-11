<?php
require_once 'connect.php';
$feedback_id = $_GET['id'];
$feedback = mysqli_query ($connect, "SELECT * FROM `feedback` WHERE `id` = '$feedback_id'");
$feedback = mysqli_fetch_assoc ($feedback);
?>

<!DOCTYPE html>
<html lang ="ro">
<head>
    <meta charset ="UTF-8">
    <title>Update feedback</title>
</head>
<body>
    <h3>Update feedback</h3>
    <form action ="update_feedback.php" method="post">
        <input type ="hidden" name="id" value="<?= $feedback['id'] ?>">
        <p>Nume</p>
        <input type ="text" name ="nume" value="<?= $feedback['nume'] ?>">
        <p>Email</p>
        <input type ="email" name ="email" value="<?= $feedback['email'] ?>">
        <p>Phone</p>
        <input type ="text" name ="phone" value="<?= $feedback['phone'] ?>">
        <p>Message</p>
        <textarea name = "message"><?= $feedback['message'] ?></textarea> <br> <br>
        <button type = "submit">Update</button>
    </form>
</body>
</html>
