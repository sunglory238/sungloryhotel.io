<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking</title>

    <!-- FONTS -->
    <!-- GOOGLE FONTS / POPPINS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    

    <!-- FEATHER ICONS -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style1.css" />
    
</head>
<body>

    <!-- Navbar Start -->
    <nav class="navbar" id="navbar">
      <a href="home.html" class="navbar-logo"><img src="foto/logosun.png" width="250px"></a>

      <div class="navbar-nav">
          <a href="home.html">HOME</a>
          <a href="room.html">ROOM</a>
          <a href="suites.html">SUITES</a>
      </div>

      <div class="navbar-extra">
          <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
  </nav>
    <!-- Navbar End -->

    <!-- FORM START-->
    <div class="reservation">
    <section class="container">
      <header >RESERVATION ROOM</header>
      <form action="roombookre.php" class="form" method="post">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name"  name="name"/>
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" name="email" />
        </div>
        <div class="input-box">
          <label>Phone Number</label>
          <input type="number" placeholder="Enter phone number" name="phone" />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Check In</label>
            <input type="datetime-local" placeholder="Check in"  name="in" />
          </div>
          <div class="input-box">
            <label>Check Out</label>
            <input type="datetime-local" placeholder="Check Out" name="out" />
          </div>
        </div>

            <div class="select-box">
              <select name="room">
                <option selected>Type Room</option>
                <option value="Bali's Style Room">Bali's Style Room</option>
                <option value="Superior Room">Superior Room</option>
                <option value="Family Room">Family Room</option>
                <option value="Deluxe Room">Deluxe Room</option>
              </select>
            </div>
            
            <div class="input-box address">
              <label>Address</label>
              <input type="text" placeholder="Enter street address" name="address" required />
              <div class="column">
        </div>
        <button type="submit" name="submit" name="booking">Submit</button>
      </form>
    </section>
  </div>
      <!-- FORM END-->

      
    <!-- FEATHER ICONS JAVASCRIPT -->
    <script>
    feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
</body>
</html>
