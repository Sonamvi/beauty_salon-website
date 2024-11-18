
<html>
  <head>
    <title>services</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <nav class="nav-bar">
        <ul>
          <div>
            <li class="logo">Beauty Salon</li>
          </div>
          <div class="items">
            <li>
              <a class="icon" href="home.html"> Home </a>
            </li>
            <li>
              <a class="icon" href="#"> Services</a>
              <div class="menu1">
                <ul>
                  <li><a href="skinservice.html">Skin Services</a></li>
                  <li><a href="hairservice.html">Hair Services</a></li>
                  <li><a href="#">Make-up Services</a></li>
                 <!-- <li><a href="#">Nail Art</a></li>-->
                </ul>
              </div>
            </li>
            <li>
              <a class="icon" href="details.html"> Details </a>
            </li>
            <li>
              <a class="icon" href="deals.html"> Deals</a>
            </li>
            <li>
              <a class="icon" href="index.html" id="active"> LogOut </a>
            </li>
          </div>
        </ul>
      </nav>
    </header>
    <div class="appointmentpage">
    <div class="app_page">
        <div class="side">
            <p class="topic">Book your Appointment</p>
            <p class="line"><em>We specialize at high-quality beauty services that ranges from <br> skin care to hair colouring and makeup. <br> Our stylists will be glad to provide you an amazing look.</em></p>
        </div>
        <div class="apointmentbox">

            <form class = "app-value" action="appointments.php" method="post">
                <h2 class="appointmentform">Appointments</h2>

                <div class="appbox">
               <label for="name"> Enter your Name:</label>
               <input type="name" name="name" placeholder="Name" required>
               </div>

              <div class="appbox">
              <label for="phone number"> Enter Phone No.:</label>
              <input type="phone" name="phone" placeholder="Number" required>
              </div>

            <div class="appbox">
            <label for="service"> Enter Service:</label>
            <input type="service" name="service" placeholder="Service" value=<?php echo $_GET['name'];?> required>
            </div>

           <div class="appbox">
           <label for="date">Date for appointment:</label>
           <input type="date" name="date" placeholder="Date" required>
           </div>

           <div class="appbox">
           <label for="time">Time for appointment:</label>
           <input type="time" name="time" placeholder="Time" required>
          </div>

          <button><a class="confirm" href="home.html">Confirm</a></a></button>
</div> 
</div>
</div>
</form>

    <div class="footer">
      <h3 class="contact">Contact us On</h3>
      <p class="copyright">
        © Copyright 2024-2030 by Sonam Vishwakarma. All Rights Reserved.
      </p>
      <div class="icons">
        <a class="icon">
          <img
            src="WhatsApp_Image_2023-03-09_at_03.08.14-removebg-preview.png"
            height="40"
          />
        </a>
        <a class="icon">
          <img
            src="WhatsApp_Image_2023-03-09_at_03.10.13-removebg-preview.png"
            height="40"
          />
        </a>
        <a class="icon">
          <img
            src="WhatsApp_Image_2023-03-09_at_03.11.03-removebg-preview.png"
            height="40"
          />
        </a>
      </div>
    </div>
  </body>
</html>


<?php

 $servername="localhost";
 $username="root";
 $password="";
 $dbname="form";

  $conn=new mysqli($servername,$username,$password,$dbname);
    
if($conn->connect_error)
{
    die("connection fail");
}

 @$name=$_POST['name'];
 @$phone=$_POST['phone'];
 @$service=$_POST['service'];
 @$date=$_POST['date'];
 @$time=$_POST['time'];

 
 $sql="INSERT INTO `appointments` (`name`, `phone`, `service`, `date`, `time`) VALUES ('$name', '$phone', '$service', '$date', '$time')";

if($conn->query($sql)==true)
{
    echo "new record added";
}
else
{
    echo "error";
}

$conn->close();

?>

