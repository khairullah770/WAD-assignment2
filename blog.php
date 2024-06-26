<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>

    <!--font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />

    <!--css file-->
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <!-- header section starts  -->
    <header class="header">
      <a href="index.php" class="logo">
        <i class="fas fa-chair"></i> KK Furniture Fusion
      </a>

      <form action="" class="search-form">
        <input type="search" placeholder="search here..." id="search-box" />
        <label for="search-box" class="fas fa-search"></label>
      </form>

      <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <div id="cart-btn" class="fas fa-shopping-cart"></div>
        <div id="login-btn" class="fas fa-user"></div>
      </div>
    </header>
    <!-- header section ends  -->

    <!-- closer btn  -->

    <div id="closer" class="fas fa-times"></div>

    <!-- navbar  -->
    <nav class="navbar">
      <a href="index.php">home</a>
      <a href="shop.php">shop</a>
      <a href="about.php">about</a>
      <a href="team.php">team</a>
      <a href="blog.php">blog</a>
      <a href="contact.php">contact</a>
    </nav>

    <!-- shopping cart  -->
    <div class="shopping-cart">
      <div class="box">
        <i class="fas fa-times"></i>
        <img src="product-1.jpg" alt="" />
        <div class="content">
          <h3>morden furniture</h3>
          <span class="quantity"> 1 </span>
          <span class="multiply"> x </span>
          <span class="price"> $140.00 </span>
        </div>
      </div>

      <div class="box">
        <i class="fas fa-times"></i>
        <img src="softchair.jpg" alt="" />
        <div class="content">
          <h3>morden furniture</h3>
          <span class="quantity"> 1 </span>
          <span class="multiply"> x </span>
          <span class="price"> $140.00 </span>
        </div>
      </div>

      <div class="box">
        <i class="fas fa-times"></i>
        <img src="chairpro1.jpg" alt="" />
        <div class="content">
          <h3>morden furniture</h3>
          <span class="quantity"> 1 </span>
          <span class="multiply"> x </span>
          <span class="price"> $140.00 </span>
        </div>
      </div>

      <div class="box">
        <i class="fas fa-times"></i>
        <img src="banner-1.jpg" alt="" />
        <div class="content">
          <h3>morden furniture</h3>
          <span class="quantity"> 1 </span>
          <span class="multiply"> x </span>
          <span class="price"> $140.00 </span>
        </div>
      </div>

      <h3 class="total">total : <span>$560.00</span></h3>

      <a href="#" class="btn">checkout</a>
    </div>
      
      <a href="#" class="btn">checkout</a>
    </div>
    <!-- login form  -->
    <div class="login-form">
      <form action="">
        <h3>login form</h3>
        <input type="email" placeholder="email address" class="box" />
        <input type="password" placeholder="password" class="box" />
        <div class="remember">
          <input type="checkbox" name="" id="remember-me" />
          <label for="remember-me">remember me</label>
        </div>
        <input type="submit" value="login now" class="btn" />
        <p>forget password? <a href="#">click here</a></p>
        <p>new here? <a href="#">create account</a></p>
      </form>
    </div>

    <section class="heading">
      <h3>blogs</h3>
      <p><a href="index.php">home</a> / <span>blog</span></p>
    </section>

    <section class="blog">
      <h1 class="title"><span>our blogs</span> <a href="#">view all >></a></h1>

      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="images/blog-1.jpg" alt="" />
          </div>
          <div class="content">
            <h3>blog title goes here...</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat,
              harum.
            </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
              <a href="#"> <i class="fas fa-calendar"></i> 26st March, 2024 </a>
              <a href="#"> <i class="fas fa-user"></i> by kk </a>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/blog-2.jpg" alt="" />
          </div>
          <div class="content">
            <h3>blog title goes here...</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat,
              harum.
            </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
              <a href="#"> <i class="fas fa-calendar"></i> 26st March, 2024</a>
              <a href="#"> <i class="fas fa-user"></i> by kk </a>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/blog-3.jpg" alt="" />
          </div>
          <div class="content">
            <h3>blog title goes here...</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat,
              harum.
            </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
              <a href="#"> <i class="fas fa-calendar"></i> 26st March, 2024 </a>
              <a href="#"> <i class="fas fa-user"></i> by kk </a>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/blog-4.jpg" alt="" />
          </div>
          <div class="content">
            <h3>blog title goes here...</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat,
              harum.
            </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
              <a href="#"> <i class="fas fa-calendar"></i> 26st March, 2024 </a>
              <a href="#"> <i class="fas fa-user"></i> by kk </a>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/blog-5.jpg" alt="" />
          </div>
          <div class="content">
            <h3>blog title goes here...</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat,
              harum.
            </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
              <a href="#"> <i class="fas fa-calendar"></i> 26st March, 2024 </a>
              <a href="#"> <i class="fas fa-user"></i> by kk </a>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/blog-6.jpg" alt="" />
          </div>
          <div class="content">
            <h3>blog title goes here...</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat,
              harum.
            </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
              <a href="#"> <i class="fas fa-calendar"></i> 26st March, 2024 </a>
              <a href="#"> <i class="fas fa-user"></i> by kk </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer section  -->
    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>quick links</h3>
          <a href="index.php"> <i class="fas fa-arrow-right"></i> home</a>
          <a href="shop.php"> <i class="fas fa-arrow-right"></i> shop</a>
          <a href="about.php"> <i class="fas fa-arrow-right"></i> about</a>
          <a href="team.php"> <i class="fas fa-arrow-right"></i> team</a>
          <a href="blog.php"> <i class="fas fa-arrow-right"></i> blog</a>
          <a href="contact.php"> <i class="fas fa-arrow-right"></i> contact</a>
        </div>

        <div class="box">
          <h3>extra links</h3>
          <a href="#"> <i class="fas fa-arrow-right"></i> my order</a>
          <a href="#"> <i class="fas fa-arrow-right"></i> my wishlist</a>
          <a href="#"> <i class="fas fa-arrow-right"></i> my account</a>
          <a href="#"> <i class="fas fa-arrow-right"></i> my favorite</a>
          <a href="#"> <i class="fas fa-arrow-right"></i> terms of user</a>
        </div>

        <div class="box">
          <h3>extra links</h3>
          <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
          <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
          <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
          <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
          <a href="#"> <i class="fab fa-pinterest"></i> pinterest</a>
        </div>

        <div class="box">
          <h3>newsletter</h3>
          <p>subscribe for latest updates</p>
          <form action="">
            <input type="email" name="" placeholder="enter your email" id="" />
            <input type="submit" value="subscribe" class="btn" />
          </form>
        </div>
      </div>
    </section>

    <section class="credit">created by Khairullah Khaliq 2024 | copyrights!</section>
    <script src="app.js"></script>
  </body>
</html>

<?php

include("connect.php");
 
if(isset($_POST['login']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query= "SELECT * FROM signup WHERE email = '&username' && password ='$password' ";
  $data =mysqli_query($conn, $query);
  
  $total = mysqli_num_rows($data);
  if($total> 0)
  {
    echo "logiin sucessfully";

  }
  else{
    echo "failed";
  }


}