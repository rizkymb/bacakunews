<?php 

include 'database/config.php';

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <title>Bacaku</title>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">



  </head>
  <body>
    <section>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: white;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="background-color: black;">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="?m=home"><img src="assets/image/component/logo.png" height="22px"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav" style="padding-top: 2px;">
            <li><a href="?m=home">Home</a></li>
            <li><a href="?m=about">About</a></li>
            <li><a href="?m=contact">Contact</a></li>
            <li>
              <form style="padding-top: 12px;padding-left: 15px;  ">
              <input type="hidden" name="m" value="search">
              <input type="text" name="q" placeholder="Search Article By Title" ">
              <button>Search</button>
              </form>
            </li>
            <li>
              <dl style="margin-top: 12px; margin-left: 17px;text-align: center;">Mode</dl>
            </li>
              <script type="text/javascript">
              $(document).ready(function(){
               $('dl').click(function(){
                $('dl').toggleClass('active')
                $('p').toggleClass('active')
                $('a').toggleClass('active')
                $('b').toggleClass('active')
                $('label').toggleClass('active')
                $('small').toggleClass('active')
                $('span').toggleClass('active')
                
              $('section').toggleClass('dark')
              })
            })
  </script>
          </ul>
      </div>
    </nav>  
    <br><br>
    <div class="container">
      <?php 
      
      $m = $_GET['m'];
      if ($m=='home') {
        include 'news.php';
      }elseif ($m=='contact') {
        include 'contact.php';
      }elseif ($m=='about') {
        include 'about.php';
      }elseif ($m=='detail') {
        include 'detail.php';
      }elseif ($m=='category') {
        include 'category.php';
      }elseif ($m=='search') {
        include 'search.php';
      }else {
        include 'news.php';
      }
      ?>
    </div>


<footer id="footer">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-5">
            <div class="footer-widget">
              <div class="footer-logo">
                <a href="?m=home" class="logo"><img src="assets/image/component/logo.png" height="60px"></a>
              </div>
              <ul class="footer-nav">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Advertisement</a></li>
              </ul>
              <div class="footer-copyright">
                <span>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="?m=home">Bacaku</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="row">
              <div class="col-md-6">
                <div class="footer-widget">
                  <h3 class="footer-title">About Us</h3>
                  <ul class="footer-links">
                    <li><a href="?m=about">About Us</a></li>
                    <li><a href="?m=contact">Contacts</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="footer-widget">
                  <h3 class="footer-title">Catagories</h3>
                  <ul class="footer-links">
                    <?php 

                    $query = mysqli_query($conn, "SELECT * FROM tb_category");

                    while($row = mysqli_fetch_array($query)) { ?>
                    <li><a href="?m=category&category=<?php echo $row ['nama_category']?>"><?php echo $row ['nama_category']?></a></li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="footer-widget">
              <h3 class="footer-title">Connect To Our Social Media</h3>
              
              <ul class="footer-social">
                <a href="#"><img src="assets/image/component/facebookfooter.png"></a>&nbsp;
                <a href="#"><img src="assets/image/component/twitterfooter.png"></a>&nbsp;
                <a href="#"><img src="assets/image/component/google-plus.png"></a>
               <a href="#"><img src="assets/image/component/instagram.png"></a>
              </ul>
            </div>
          </div>

        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </footer>
    </section>
  </body>
</html>