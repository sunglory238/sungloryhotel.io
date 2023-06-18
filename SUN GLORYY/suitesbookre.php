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
    <link rel="stylesheet" href="css/style2.css" />
    
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


    <?php
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $in= $_POST["in"];
    $out= $_POST["out"];
    $type= $_POST["suites"];
    $address= $_POST["address"];
    ?>

<div class="reservation"></div>
    <section class="container" >
        <div class="icon">
            <img src="img/search.png" width="50px" margin="center">
        </div>
    <h3> Reservation suite is being processed! <br>
    Please check your emails for availability confirmation and payment information .</h3>

    <div class="info">
    <table border=0>
        <tr>
            <td>Nama</td>
            <td>    </td>
            <td>  :  </td>
            <td><?php echo $name;?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>    </td>
            <td>  :  </td>
            <td><?php echo $email;?></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>    </td>
            <td>  :  </td>
            <td><?php echo $phone;?></td>
        </tr>
        <tr>
            <td>Check In </td>
            <td>    </td>
            <td>  :  </td>
            <td><?php echo $in;?></td>
        </tr>
        <tr>
            <td>Check Out </td>
            <td>    </td>
            <td>  :  </td>
            <td><?php echo $out;?></td>
        </tr>
        <tr>
            <td>Type Room </td>
            <td>    </td>
            <td>  :  </td>
            <td><?php echo $type;?></td>
        </tr>
        <tr>
            <td>Addres </td>
            <td>    </td>
            <td>  :  </td>
            <td><?php echo $address;?></td>
        </tr>
    </table>
    </div>

</section>

    <!-- FEATHER ICONS JAVASCRIPT -->
    <script>
    feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
</body>
</html>