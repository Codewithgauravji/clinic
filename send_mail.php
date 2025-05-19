<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $mobile = htmlspecialchars($_POST['mobile']);
  $condition = htmlspecialchars($_POST['condition']);
  $address = htmlspecialchars($_POST['address']);
  $gender = htmlspecialchars($_POST['gender']);
  $date = htmlspecialchars($_POST['selected_date']);
  $time = htmlspecialchars($_POST['selected_time']);

  $to = "gy063355@gmail.com"; // ✅ Replace with your actual email
  $subject = "New Physiotherapy Appointment Booking";
  $message = "Name: $name\nEmail: $email\nMobile: $mobile\nHealth Condition: $condition\nAddress: $address\nGender: $gender\nAppointment: $date at $time (45 min)";
  $headers = "From: no-reply@yourdomain.com";

  if (mail($to, $subject, $message, $headers)) {
    echo "<h3>Thank you! Your appointment has been submitted and emailed successfully.</h3>";
  } else {
    echo "<h3>Error: Mail could not be sent. Please try again later.</h3>";
  }
} else {
  echo "Invalid Request";
}

?>
