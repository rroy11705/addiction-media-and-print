<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<?php 
	$qry = $conn->query("SELECT * from contacts ");
	while($row = $qry->fetch_assoc()){
		$meta[$row['meta_field']] = $row['meta_value'];
	}
?>

<footer>

   <div class="footer-top">
      <div class="links">
         <a href="index.php">Home</a>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
         <path d="M13.4329 2.06073C13.7965 -0.0242786 16.7894 -0.0242786 17.153 2.06073L18.5696 10.1838C18.7064 10.9683 19.3207 11.5827 20.1053 11.7195L28.2283 13.136C30.3133 13.4996 30.3133 16.4925 28.2283 16.8561L20.1053 18.2727C19.3207 18.4095 18.7064 19.0239 18.5696 19.8084L17.153 27.9315C16.7894 30.0165 13.7965 30.0165 13.4329 27.9315L12.0164 19.8084C11.8795 19.0239 11.2652 18.4095 10.4807 18.2727L2.3576 16.8561C0.272596 16.4925 0.272596 13.4996 2.3576 13.136L10.4807 11.7195C11.2652 11.5827 11.8795 10.9683 12.0164 10.1838L13.4329 2.06073Z" fill="#FEB649"/>
      </svg>
      <div class="links">
         <a href="gallery.php#gallery">Portfolio</a>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
         <path d="M13.4329 2.06073C13.7965 -0.0242786 16.7894 -0.0242786 17.153 2.06073L18.5696 10.1838C18.7064 10.9683 19.3207 11.5827 20.1053 11.7195L28.2283 13.136C30.3133 13.4996 30.3133 16.4925 28.2283 16.8561L20.1053 18.2727C19.3207 18.4095 18.7064 19.0239 18.5696 19.8084L17.153 27.9315C16.7894 30.0165 13.7965 30.0165 13.4329 27.9315L12.0164 19.8084C11.8795 19.0239 11.2652 18.4095 10.4807 18.2727L2.3576 16.8561C0.272596 16.4925 0.272596 13.4996 2.3576 13.136L10.4807 11.7195C11.2652 11.5827 11.8795 10.9683 12.0164 10.1838L13.4329 2.06073Z" fill="#FEB649"/>
      </svg>
      <div class="links">
         <a class="lg-show" href="index.php#experience">Clients</a>
         <a class="sm-show" href="works.php#experience">Clients</a>
      </div>
   </div>
   <div class="footer-middle">
      <div class="links">
         <a class="lg-show" href="index.php#our-services">Our Services</a>
         <a class="sm-show" href="index.php#our-services-mobile">Our Services</a>
         <a class="lg-show" href="index.php#recent-works">Recent Works</a>
         <a class="sm-show" href="works.php#recent-works">Recent Works</a>
         <a class="lg-show" href="index.php#awards">Awards</a>
         <a class="sm-show" href="works.php#awards">Awards</a>
      </div>
      <div class="social" style="display: flex; flex-direction: row; gap: 20px; justify-content: center;">
         <?php if (isset($meta['facebook']))  { ?>
            <a href="https://wa.me/<?php echo isset($meta['facebook']) ? $meta['facebook'] : '' ?>" target="_blank">
               <img src="<?php echo base_url ?>profile_asset/images/facebook.svg" alt="facebook" />
            </a>
         <?php } ?>
         <?php if (isset($meta['instagram']))  { ?>
            <a href="<?php echo isset($meta['instagram']) ? $meta['instagram'] : '' ?>" target="_blank">
               <img src="<?php echo base_url ?>profile_asset/images/instagram.svg" alt="instagram" />
            </a>
         <?php } ?>
      </div>
      <div class="accent-wrapper">
         <div>Say <span style="font-style: italic;">‘Hello’</span></div>
         <?php if (isset($meta['email']))  { ?>
            <a href="mailto:<?php echo isset($meta['email']) ? $meta['email'] : '' ?>" target="_blank"><?php echo $meta['email'] ?></a>
         <?php } ?>
      </div>
   </div>
   <div class="footer-bottom">
      <div class="one" style="justify-content: flex-start;">
         <p>All our works are handled with care.</p>
      </div>
      <div class="two" style="justify-content: center;">
         <p>All copyrights reserved (c) to Addiction Media & Print 2023</p>
      </div>
      <div class="three" style="justify-content: flex-end;">
         <p>Created with Love by Cibertix Technologies</p>
      </div>
   </div>

</footer> <!-- Footer End-->

<!-- Java Script
================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url ?>profile_asset/js/jquery-1.10.2.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php echo base_url ?>profile_asset/js/jquery-migrate-1.2.1.min.js"></script>
<script type='text/javascript' src='<?php echo base_url ?>profile_asset/js/jquery.marquee.min.js'></script>

<script src="<?php echo base_url ?>profile_asset/js/waypoints.js"></script>
<script src="<?php echo base_url ?>profile_asset/js/jquery.fittext.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url ?>profile_asset/js/init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/js/splide.min.js" integrity="sha512-4TcjHXQMLM7Y6eqfiasrsnRCc8D/unDeY1UGKGgfwyLUCTsHYMxF7/UHayjItKQKIoP6TTQ6AMamb9w2GMAvNg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-intersection@0.2.0/dist/js/splide-extension-intersection.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-video@0.8.0/dist/js/splide-extension-video.min.js"></script>
