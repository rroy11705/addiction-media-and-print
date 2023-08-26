<?php require_once('config.php'); ?>
 <!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>
<?php 
	$qry = $conn->query("SELECT * from contacts ");
	while($row = $qry->fetch_assoc()){
		$meta[$row['meta_field']] = $row['meta_value'];
	}
?>
  <body id="works-page">

   <!-- Header
   ================================================== -->
   <section style="padding-top: 64px;"></section>
   <header id="works">
      <?php 
         $u_qry = $conn->query("SELECT * FROM users where id = 1");
         foreach($u_qry->fetch_array() as $k => $v){
            if(!is_numeric($k)){
               $user[$k] = $v;
            }
         }
         $c_qry = $conn->query("SELECT * FROM contacts");
         while($row = $c_qry->fetch_assoc()){
            $contact[$row['meta_field']] = $row['meta_value'];
         }
      ?>
      
      <?php require_once('inc/siteNavigation.php') ?>

   </header> 
   <!-- Header End -->

   <!-- Recent Works Section
   ================================================== -->
   <?php require('inc/siteRecentWorks.php') ?>
   <!-- Experience Section End-->

   <!-- Experience Section
   ================================================== -->
   <?php require('inc/siteExperience.php') ?>
   <!-- Experience Section End-->
  
   <!-- /.content-wrapper -->
   <?php require_once('inc/footer.php') ?>
   <script src="<?php echo base_url ?>profile_asset/js/video-player.js"></script>
   
   <script>
      $(document).ready(function() {
         new Splide('#image-carousel', {
            type: 'loop',
            drag: 'free',
            focus: 'center',
            perPage: 1,
            autoplay: 'pause',
            intersection: {
               inView: {
               autoplay: true,
               },
               outView: {
               autoplay: false,
               },
            }
         }).mount(
            window.splide.Extensions
         );
      });
      new Splide('#video-carousel', {
            type: 'loop',
            drag: 'free',
            focus: 'center',
            perPage: 3,
            breakpoints: {
                  1024: {
                  perPage: 3,
                  
                  },
                  767: {
                  perPage: 2,
            
                  },
                  640: {
                  perPage: 1,
            
                  },
            },
            gap: '40px',
            fixedWidth: 280,
            fixedHeight: 280,
            autoplay: true,
            intersection: {
                  inView: {
                  autoplay: true,
                  },
                  outView: {
                  autoplay: false,
                  },
            }
         }).mount(
            window.splide.Extensions
         );
      $('#video-carousel').magnificPopup({
         delegate: 'a',
         type: 'image',
         gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
         },
         callbacks: {
            elementParse: function(item) {
               console.log(item.el[0].className);
               if(item.el[0].className == 'video') {
                  item.type = 'iframe'
                  item.tLoading = 'Loading Video #%curr%...',
                  // item.mainClass = 'mfp-img-mobile',
                  item.image = {
                     tError: 'Unable to load. <a href="%url%" target="_blank">Click Here #%curr%</a> to view in new tab.'
                  }
               } else {
                  item.type = 'image',
                  item.tLoading = 'Loading image #%curr%...',
                  item.mainClass = 'mfp-img-mobile',
                  item.image = {
                     tError: 'Unable to load. <a href="%url%" target="_blank">Click Here #%curr%</a> to view in new tab.'
                  }
               }

            }
         }
      });
   </script>
  </body>
</html>
