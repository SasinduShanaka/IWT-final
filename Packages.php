<?php 
session_start();
    if (!isset($_SESSION["username"])) {
        include("headerLogin.php");
    } else {
        include("header.php");
    }

    
  ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style/Packages.css">
</head>
<body>

    <!--Heading-->
    <div class = "grid-container">
        <div class ="heading">
          
        </div>
        <h1>Our Products</h1>
        <!--Our products-->
        <section class="products">
            
            <div class="card-container">
            <a href="sub_packages.php?package_type=Life Insurance Plan&image=images/fam.png" class="learn-more">
                <div class="card"  id="card1">
                    <div class="card-content" >
                    <img src="images/fam.png" alt="Card Image" class="card-image">
                    <h3>Life Insurance <br>Plans </h3>
                    <p>Offering safety nets from uncertainity, so your progress never stops.</p>
                    Learn More
                    </div>
                </div>
                </a>

                <a href="sub_packages.php?package_type=Retirement Plan&image=images/life_inssuran.jpg" class="learn-more">
                <div class="card" id="card2">
                    <div class="card-content">
                    <img src="./images/retirement.jpg" alt="Card Image" class="card-image">
                    <h3>Retirement Plans</h3>
                    <p>Supporting steady progress towards a lifetime of comfort, so you can fully enjoy the rewards of your hardwork.</p>
                    Learn More
                
                    </div>
                </div>
                </a>

                <a href="sub_packages.php?package_type=Medical Plan&image=images/health.png" class="learn-more">
                <div class="card" id="card3">
                    <div class="card-content" >
                    <img src="images/health.png" alt="Card Image" class="card-image">
                    <h3>Medical Plans</h3>
                    <p>Providing assured care to support you in times of need, so you always have the strength to progress.</p>
                    Learn More
                    </div>
                </div>
                </a>

                <a href="sub_packages.php?package_type=Investment Plan&image=images/inv.png" class="learn-more">
                <div class="card" id="card4">
                    <div class="card-content" >
                    <img src="images/inv.png" alt="Card Image" class="card-image">
                    <h3>Investment Plans</h3>
                    <p>An opportunity to fulfil your dreams, those which are in progress.</p>
                   Learn More
                    </div>
                </div>
                </a>
        
                <a href="sub_packages.php?package_type=Group Plan&image=images/group.png" class="learn-more">
                <div class="card" id="card5">
                    <div class="card-content" >
                    <img src="images/group.png" alt="Card Image" class="card-image">
                    <h3>Group Plans</h3>
                    <p>Enabling corporates to be supportive and caring, nurturing employee well-being.</p>
                   Learn More
                    </div>
                </div>
</a>
                
            </div>
        </section> 
    </div>
</body>
</html>
<?php 
include('footer.php');

?>
