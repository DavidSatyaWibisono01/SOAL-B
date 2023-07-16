<?php
  // Process the booking form submission
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $bookingInfo = "Nama: $name\nEmail: $email\nTelp: $phone\nTanggal: $date\nWaktu Pemesanan: $time\n";

    // Save the booking info to a text file
    $file = fopen('bookings.txt', 'a');
    fwrite($file, $bookingInfo);
    fclose($file);

    echo "Pemesanan berhasil! Kami akan segera menghubungi Anda!";
  }
?>
