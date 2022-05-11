<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car-rental-system</title>
    <link rel="stylesheet" href="css\style.css">
</head>

<body>
    <section class="bg">
        <?php
            include 'header.php';
        ?>
    
        <section class="home">
       
            <h1 class="h-primary">WELCOME TO CAR RENT</h1>
            <p>RENT A CAR @BEST RATES EASILY IN FEW SECONDS </p>

            <button class="btn2" onclick="myFunc()">Rent now</button>
      <script>
      function myFunc() {
          window.location.href = "cars.php";
      }
      </script>
            <!-- <button class="btn2">
                <a class="rent" href="cars.php">Rent now</a> </button>
            </section>
        </section> -->
      
</body>
</html>