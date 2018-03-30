<footer id="footer" class="haslayout">
  <div class="plugin-instagram">
    <div class="container-fluid">
      <div class="row">
        <h4>Follow Me On Instagram</h4>
        <div id="instagram-gallery" class="instagram-gallery">
          @foreach($instagram as $key=>$in)
            <!-- <a href="">{{$key}}</a> -->
            @if($key >8 && $key < 16 )
            <div class="item"><a href="#"><img src="{{$in['images']['thumbnail']['url']}}" alt="image description"></a></div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <div class="three-columns">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 box-width">
          <div class="box">
            <h5>About Us</h5>
            <div class="description">
              <p>On the other hand, we denounce with righteous nation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble and pain.</p>
            </div>
            <ul class="social-icon">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 box-width">
          <div class="box">
            <h5>Instagram</h5>
            <div class="instagram">
              <div class="item"><a href="#"><img src="images/15-img.jpg" alt="image description"></a></div>
              <div class="item"><a href="#"><img src="images/16-img.jpg" alt="image description"></a></div>
              <div class="item"><a href="#"><img src="images/17-img.jpg" alt="image description"></a></div>
              <div class="item"><a href="#"><img src="images/18-img.jpg" alt="image description"></a></div>
              <div class="item"><a href="#"><img src="images/19-img.jpg" alt="image description"></a></div>
              <div class="item"><a href="#"><img src="images/20-img.jpg" alt="image description"></a></div>
              <div class="item"><a href="#"><img src="images/21-img.jpg" alt="image description"></a></div>
              <div class="item"><a href="#"><img src="images/15-img.jpg" alt="image description"></a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 box-width">
          <div class="box">
            <h5>NewsLetter</h5>
            <div class="description">
              <p>On the other hand, we denounce with righteous nation and dislike men .</p>
            </div>
            <form class="form-newsletter">
              <fieldset>
                <div class="form-group"><input type="text" name="name" class="form-control" placeholder="Your Name"></div>
                <div class="form-group"><input type="email" name="email" class="form-control" placeholder="Email Address"></div>
                <div class="form-group"><button type="submit">Subscribed Newsletter</button></div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <p>Copyright &copy; 2015 - All Rights Reserved.</p>
    </div>
  </div>
</footer>
</div>
<script src="resources/assets/admin/js/bootstrap/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
<script src="resources/assets/admin/js/bootstrap/bootstrap.min.js"></script>
<!---------- Defaulf ---------->
<script src="resources/assets/public/js/owl.carousel.js"></script>
<script src="resources/assets/public/js/isotope.pkgd.min.js"></script>
<script src="resources/assets/public/js/isotop.js"></script>
<script src="resources/assets/public/js/theia-sticky-sidebar.js"></script>
<script src="resources/assets/public/js/main.js"></script>
<!-- ------------End defaulf---------- -->
</body>
</html>
