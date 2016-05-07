<?php include'inc/<body>.php'; ?>
    <!--************************PLUGIN FACEBOOK*****************************-->
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
    <!--************************END PLUGIN FACEBOOK*****************************-->



  <!-- START HEADER -->
    <?php include'inc/nav.php'; ?>
  <!-- END HEADER -->
  
  <!-- START SLIDER -->
    <?php include'inc/slider.php'; ?> 
  <!-- END SLIDER -->
  
  <!-- START SECTION 1 -->
    <?php include'inc/section1.php'; ?>
  <!-- END SECTION 1 -->
 

  <!-- START SECTION 2 -->
    <?php include'inc/section2.php'; ?>
   <!-- END SECTION 2 -->
  
  <!-- START SECTION 3 -->
    <?php include'inc/section3.php'; ?>
  <!-- END SECTION 3 -->
  
  <!-- START SECTION 4 -->
    <!--?php include'inc/section4.php'; ?-->
  <!-- END SECTION 4 -->


  <!-- FOOTER --> 
    <?php  include 'inc/footer.php';?>
  <!-- END FOOTER -->
  
  
<?php include'inc/<:body>.php'; ?>
