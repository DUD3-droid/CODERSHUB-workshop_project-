<footer class="site-footer" style="padding-bottom: 0;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-8">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Press Releases</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>

            </div>
          </div>
          <div class="col-md-4 ml-auto">

            <div class="mb-5">
              <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>


              <form class="footer-suscribe-form" method="post" action="ajax/form.php" id="contact_modal_form" onsubmit="return false;">
                <div class="input-group mb-3">
                  <input name="news_email" id="news_email" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2 element">Subscribe</button>
                  </div>
                </div>
              </form>

              <!--<form class="newsletter my-3 col-4 mx-auto" method="post" action="ajax/form.php" id="contact_modal_form" onsubmit="return false;">
                <h3 class="text-center text-white mb-3">Join Our Newsletter</h3>
                <input type="email" name="news_email" id="news_email"  class="form-control" placeholder="Your Email Address" value="">
                <button class="my-3 btn btn-primary" id="element">Subscribe </button>
              </form>-->


              </div>


              <h2 class="footer-heading mb-4">Follow Us</h2>
              <a href="#" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </form>
          </div>
        </div>
        <div class="row pt-3 text-center">
          <div class="col-md-12">
              <p class="copyright"><small>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="icon-heart text-danger" aria-hidden="true"></i>
              </small>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

  <!-- Back to top -->
  <a href="#" class="back-to-top"><i class="fas fa-sort-up"></i></a>

<script>
    $("#contact_modal_form").submit(function(){
        var news_email = $.trim($("#news_email").val());
        if(news_email == ""){
            alert("empty");
        } else {
        var form = $(this);
        $.ajax({
            type: form.attr('method'),
            url: 'https://localhost/CODERSHUB/inc/ajax/form.php',
            data: form.serialize(),
            dataType: 'script'
        });
    }
});
</script>
</body>
</html>