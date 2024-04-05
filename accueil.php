<?php 
include 'config.php';


$req = mysqli_query($conn, "SELECT * FROM produit");
?>

<!DOCTYPE html>
<html lang="en">
    <head >
        <meta charset="utf-8">
        <title>Uniquely you</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="accueil2.css">
        <script defer src="script.js"></script>

    </head>
    <body>
        
        <div class="header">
            <div class="h-container">
                <div class="header__navbar">
                  
                    <div class="nav_bar_logo">
                        <img src="images/logo.png" class="image1">
                        UNIQUELY  YOU
                   </div>
                   
                    <a href="#" class="nav_bar--menu-link">Home</a>
                    <?php
                    if(!isset($_SESSION['id_art'])){ ?>
                    <a href="produit.php" class="nav_bar--menu-link">Shop</a><?php }?>                  
                    <a href="about us.php" class="nav_bar--menu-link">About us</a>
                    <div class="cart-profil">
                    <?php
                    if(isset($_SESSION['id_cl'])){ ?>
                    <a href="panier.php" ><i class="fa-solid fa-cart-shopping me-1"></i><span></span></a>
                    <a href="profile.php"><i class="fa-solid fa-circle-user me-1"></i></a>
                    <?php
                    }elseif(isset($_SESSION['id_art'])){?>
                        <a href="profile.php"><i class="fa-solid fa-circle-user me-1"></i></a>
                        </div>
                </div>
                <div class="content">
                    <h1>WELCOME TO OUR SPACE !</h1>
                    <p>This site is a safe space for you to share your creativity or to buy original items ! </p>
                </div>
                        <?php
                    }else{
                        ?>
                        <a href="inscription.php"><i class="fa-solid fa-circle-user me-1"></i></a>
                        
                    </div>
                </div>
                <div class="content">
                    <h1>EXPRESS YOURSELF WITH US !</h1>
                    <p>Whether you are an artisan searching for ways to spread your work, or just a person trying to find original pieces to express your unique style, this is the right place for you ! </p>
                    <div>
                    <a href="inscription.php">
  <button class="signup-btn" type="button">
    <span class="cover"></span>JOIN US NOW
  </button>
</a>
<a href="connexion.php">
  <button class="signup-btn" type="button">
    <span class="cover"></span>SIGN IN
  </button>
</a>
                    </div>
                </div>
                <?php }; ?>
            </div> 
        </div>
        <div class="new-arrivals">
            <h1>New arrivals :</h1>
        </div>
        <section class="product"> 
            <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
            <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
            <div class="product-container">
                <?php while ($row = mysqli_fetch_assoc($req)) : ?>
                <div class="product-card">
                    <div class="product-image">
                        <img src="<?= $row['image_prod'] ?>" class="product-thumb" alt="">
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand"><?= $row['nom_prod'] ?></h2>
                        <p class="product-short-description">a short line about the cloth..</p>
                        <span class="price"><?= $row['prix'] ?> DA</span>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </section>
        <hr class="ligne1">
        <div class="newcollection">
            <h1> Our New Collection :</h1>           
            <div class="nc-cont">
              <h6>Discover</h6>
              <div class="desc-nc">
                  <p>Introducing our new collection of handmade jewelry, featuring unique and elegant pieces crafted by skilled artisans using only the finest materials. From delicate and understated to bold and statement-making, our collection offers something for every style. We are committed to quality and sustainability, sourcing our materials carefully and ensuring eco-friendly production processes. Shop now and discover the perfect accessory to express your individuality</p>
                  <h3>Discover more</h3>
               </div>
               <img src="images/newcollection.jpg" class="nc-img" >
          </div>
        </div>
        <hr class="ligne2">
        <div class="about-us">
            <h1>About us :</h1>
            <div class="abtus-cont">
                <img src="images/aboutus1.jpg" class="aboutus1">
                <img src="images/aboutus2.jpg" class="aboutus2">
                <img src="images/aboutus3.jpg" class="aboutus3">
            </div>
            <div class="desc-aboutus">
                <p class="abtustext">We are a handmade and personalized jewelry brand dedicated to creating unique pieces that reflect the individuality of our customers.</p>
                <a href="about us.html" class="learn-more-btn">Learn more</a>
             </div>
        </div>
        <hr class="ligne3">
        <div class="express-yourself">
            <h1> Express yourself :</h1>           
            <div class="ey-cont">
                <img src="images/expressyourself.jpg" class="ey-img" >
              <div class="desc-ey">
                  <p>This is a space for you to unleash your creativity and design your own personalized jewelry. Choose from a variety of materials, styles, and customization options to create a piece that truly reflects your unique personality and style. Let your imagination run wild and express yourself through your one-of-a-kind jewelry creation.</p>
                  <a href="#" class="learn-more-btn">Learn more</a>
               </div>
          </div>
        </div>
        <hr class="ligne2">
        <div class="femme-homme">
            <h1>Femme Homme</h1>
            <div class="fh-cont">
                <div class="fh-card homme">
                    <div class="overlay">
                        <h3>Homme</h3>
                        <a href="#" class="fh-btn">Explore</a>
                    </div>
                </div>
                <div class="fh-card femme">
                    <div class="overlay">
                        <h3>Femme</h3>
                        <a href="produit.php" class="fh-btn">Explore</a>
                    </div>
                </div>
            </div>
        </div>
       <div class="footer">
             <div class="footer-cont">
                <div class="row">
                    <div class="footer-col">
                        <h4>Contact</h4>
                        <h5>ouremail@gmail.com</h5>
                        <h5>number</h5>
                    </div>
                    <div class="footer-col">
                        <h4>Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="produit.php">Shop</a></li>
                            <li><a href="about us.html">About us</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Follow us</h4>
                         <div class="social-links">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                         </div>
                        
                    </div>
                    
                </div>
             </div>
       </div>
    </body>
</html>

  
