<?php
include "koneksi.php";

$full_name = trim($_POST['full_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone_number = trim($_POST['phone_number'] ?? '');
$course_id = trim($_POST['course_id'] ?? '');
$participant_count = trim($_POST['participant_count'] ?? '');

$sql = "insert into registrations (full_name, email, phone_number, course_id, participant_count) values(
        '$full_name',
        '$email',
        '$phone_number',
        '$course_id',
        '$participant_count')";
$query = mysqli_query($conn, $sql);

header("Location: index.php");
exit;

?>