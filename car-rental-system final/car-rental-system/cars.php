<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rent car</title>
  <link rel="stylesheet" href="css\style.css">
  <link rel="stylesheet" href="cars.css">
</head>
<!-- <link rel="stylesheet" href="cars.css"> -->
<body>
<?php
     include 'header.php';
  ?>
  <section class="carbg">
  <div class="allcarbg">
  <ul class="properties_list">
 
  <?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
	?>
  <li>
      
  <!-- <div class="car-list"> -->

    <div class="component-car-item ">
      <div class="info">
        <div class="desc">
          <div class="car-name-location ellipsis">
            <h3><?php echo $rws['car_id'];?><?php echo '.'.$rws['car_name'];?></h3>
          </div>
          <div class="car-item-extras">
            <div class="car-item-message">
              <div class="seater">Car Type:
              <?php echo $rws['car_type'];?><?php echo '  Capacity: '.$rws['capacity'];?>
               
              </div>
            </div>
          </div>
        </div>
        <div class="img"><img
        src="img/<?php echo $rws['image'];?>"
            alt=""></div>
      </div>
      <div class="price-book-ctr">
        <div class="price-bar">
          ₹ <?php echo $rws['hire_cost'];?>/day
        </div>
        <div class="book"><button onclick="bookcar()" class=" pointer">
        <a href="booking.php?id=<?php echo $rws['car_id'] ?>" class="book1">Book Now</a>
            <!-- <a href="booking.php?id="; class="book">Book Now</a>  -->
            <!-- <script>
      function bookcar() {
          window.location.href = "booking.php?id=";
      }
      </script> -->
          </button></div>
         
      <!-- </div> -->
      </li>

      <?php
				}
			?>
      </ul>
      </div>
          </section> 

      

    <!-- </div>
    <div class="component-car-item">
      <div class="info">
        <div class="desc">
          <div class="car-name-location ellipsis">
            <h3>Volkswagen Polo (Petrol)</h3>
          </div>
          <div class="car-item-extras">
            <div class="car-item-message">
              <div class="seater">
                Manual . Petrol . 5 Seats
              </div>
            </div>
          </div>
        </div>
        <div class="img"><img
            src="https://s3-ap-southeast-1.amazonaws.com/zoomcar/photographs/original/3c27eb2fceef983951ce88fd79e65f63277912ee.png?1584524051"
            alt=""></div>
      </div>
      <div class="price-book-ctr">
        <div class="price-bar">
          ₹ 450
        </div>
        <div class="book"><button class=" pointer">
            Book Now
          </button></div>
      </div>

    </div>
    <div class="component-car-item">
      <div class="info">
        <div class="desc">
          <div class="car-name-location ellipsis">
            <h3>Tata Tiago</h3>
          </div>
          <div class="car-item-extras">
            <div class="car-item-message">
              <div class="seater">
                Manual . Diesel . 5 Seats
              </div>
            </div>
          </div>
        </div>
        <div class="img"><img
            src="img\tata_tiago.jpg"
            alt=""></div>
      </div>
      <div class="price-book-ctr">
        <div class="price-bar">
          ₹ 336
        </div>
        <div class="book"><button class=" pointer">
            Book Now
          </button></div>
      </div>
  
    </div>
    <div class="component-car-item">
      <div class="info">
        <div class="desc">
          <div class="car-name-location ellipsis">
            <h3>Tata Tiago</h3>
          </div>
          <div class="car-item-extras">
            <div class="car-item-message">
              <div class="seater">
                Manual . Diesel . 5 Seats
              </div>
            </div>
          </div>
        </div>
        <div class="img"><img
            src="https://s3-ap-southeast-1.amazonaws.com/zoomcar/photographs/original/afbbd294908b76c7f715b2cd814d4448d83134cf.JPG?1638531177"
            alt=""></div>
      </div>
      <div class="price-book-ctr">
        <div class="price-bar">
          ₹ 398
        </div>
        <div class="book"><button class=" pointer">
            Book Now
          </button></div>
      </div>
     
    </div>
    <div class="component-car-item">
      <div class="info">
        <div class="desc">
          <div class="car-name-location ellipsis">
            <h3>Renault Kwid</h3>
          </div>
          
          <div class="car-item-extras">
            <div class="car-item-message">
              <div class="seater">
                Manual . Petrol . 5 Seats
              </div>
            </div>
          </div>
        </div>
        <div class="img"><img
            src="https://s3-ap-southeast-1.amazonaws.com/zoomcar/photographs/original/6b6934b244bef5a3fdef3976171b05cb3fec155e.JPG?1638530676"
            alt=""></div>
      </div>
      <div class="price-book-ctr">
        <div class="price-bar">
          ₹ 462
        </div>
        <div class="book"><button class=" pointer">
            Book Now
          </button>-->
          





         
</body>

</html>