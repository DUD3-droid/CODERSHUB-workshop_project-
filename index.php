<?php
include 'inc/config.php';
include 'inc/header.php';
?>

    <!-- / Blog / --->
    <div class="site-section" id="blog-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <span>Latest Blog Posts</span>
              <h2>Our Blog</h2>
            </div>
          </div>
        </div>

          <?php
          $sql = "SELECT * FROM blog";
          $result = $link->query($sql);
          if ($result->num_rows > 0) {
              // output data of each row
              echo '
              <div class="row">';
              while($row = $result->fetch_assoc()) {
                  // var_dump($row);
                  echo '
                  <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="">
                      <div>
                        <a href="single.php?url='.$row["id"].'" class="mb-4 d-block"><img src="'.$row['image'].'" alt="Image" class="img-fluid rounded"></a>
                        <h2><a href="single.php?url='.$row["id"].'">'.$row["title"].'</a></h2>
                        <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">January 18, 2019</span> By <a href="single.php" class="by">'.$row["author"].'</a></p>
                        <p>'.$row["description"].'</p>
                        <p><a href="single.php?url='.$row["id"].'">Read More</a></p>
                      </div>
                    </div>';
              }
              echo '</div>';
          }
          // ending point
          ?>

      </div>
    </div>

    <div class="site-section" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="block-heading-1">
              <span>Get In Touch</span>
              <h2>Contact Me</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
            <form action="form/contact.php" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name" name="firstname">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Last name" name="lastname">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email address" name="email">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="msg" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 ml-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-primary">Need to know more on details. Get In Touch</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, distinctio! Harum quibusdam nisi, illum nulla aspernatur aut quidem aperiam, quae non tempora recusandae voluptatibus fugit impedit.</p>
            <p><a href="#" class="btn btn-primary text-white">Get Started</a></p>
          </div>
        </div>
      </div>
    </div>


<?php
include 'inc/footer.php';
?>

<!-- Fontawesome -->
<script src="https://kit.fontawesome.com/9290e46f79.js" crossorigin="anonymous"></script>
  <!-- JS files -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>