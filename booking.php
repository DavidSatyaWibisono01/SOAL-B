<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/js/script.js">
  <script src="script.js"></script>
  <title>Barbershop Booking</title>
</head>
<body>
  <header>
    <h1>Halaman Pemesanan</h1>
  </header>
  
  <nav>
    <ul>
    <li><a href="index.php">Home</a></li>
      <li><a href="booking.php">Booking</a></li>
      <li><a href="gallery.php">Gallery</a></li>
    </ul>
  </nav>

  <main>
    <h2>Appointment Form</h2>
    <form id="bookingForm" action="process_booking.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    <br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <br>
      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required>
      <br>
      <label for="date">Date:</label>
      <input type="date" id="date" name="date" required>
      <br>
      <label for="time">Time:</label>
      <input type="time" id="time" name="time" required>
      <br>
      <input type="submit" value="Book Now">
    </form>
  </main>

  <footer>
    <p>&copy; 2023 Abdul's Barbershop. All rights reserved.</p>
  </footer>
</body>
</html>
