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
  <body id="home-page">

   <!-- Header
   ================================================== -->
   <header id="home">
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

      <div class="banner">
         <div class="banner-text">
            <div class="banner-greetings">
               <div class="welcome-text">
                  <p>Welcome to</p>
                  <img src="<?php echo base_url ?>profile_asset/images/arrow-right.svg" alt="arrow-right" />
               </div>
               <div class="marquee">
                  <h1>ADDICTION</h1>
               </div>
               <h2>Media & Print</h2>
            </div>
            <div class="banner-skills">
               <p class="skill-description">
                  A multidisciplinary creative studio, based out of Kolkata, specializing in advertising and branding.
               </p>
               <div class="skills-list">
                  <ul style="opacity: 0">
                     <li>All Design Jobs</li>
                     <li>Mobile App</li>
                     <li>Digital Events</li>
                     <li>Brand Strategy</li>
                     <li>All Printing Jobs</li>
                     <li>Film & Video</li>
                     <li>Event Execution</li>
                     <li>Promotions</li>
                     <li>Social Content</li>
                     <li>Google Ads</li>
                     <li>SM Design</li>
                     <li>Strategy</li>
                     <li>Web Development</li>
                     <li>Advertising</li>
                     <li>Website</li>
                     <li>Brand Identity</li>
                  </ul>
                  <div>
                     <p style="margin: 0">
                        Get Addicted!
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>


   </header> 
   <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">
      <div class="about-header">
         <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.13665 1.29398C8.36739 -0.0291262 10.2666 -0.0291228 10.4974 1.29399L11.3963 6.44875C11.4831 6.9466 11.873 7.33645 12.3708 7.42327L17.5256 8.3222C18.8487 8.55293 18.8487 10.4522 17.5256 10.6829L12.3708 11.5818C11.873 11.6687 11.4831 12.0585 11.3963 12.5564L10.4974 17.7111C10.2666 19.0342 8.36739 19.0342 8.13665 17.7111L7.23772 12.5564C7.15091 12.0585 6.76105 11.6687 6.2632 11.5818L1.10844 10.6829C-0.214673 10.4522 -0.21467 8.55293 1.10844 8.3222L6.26321 7.42327C6.76106 7.33645 7.15091 6.9466 7.23772 6.44875L8.13665 1.29398Z" fill="white"/>
         </svg>
         <h2>We are here to think differently</h2>
         <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.13665 1.29398C8.36739 -0.0291262 10.2666 -0.0291228 10.4974 1.29399L11.3963 6.44875C11.4831 6.9466 11.873 7.33645 12.3708 7.42327L17.5256 8.3222C18.8487 8.55293 18.8487 10.4522 17.5256 10.6829L12.3708 11.5818C11.873 11.6687 11.4831 12.0585 11.3963 12.5564L10.4974 17.7111C10.2666 19.0342 8.36739 19.0342 8.13665 17.7111L7.23772 12.5564C7.15091 12.0585 6.76105 11.6687 6.2632 11.5818L1.10844 10.6829C-0.214673 10.4522 -0.21467 8.55293 1.10844 8.3222L6.26321 7.42327C6.76106 7.33645 7.15091 6.9466 7.23772 6.44875L8.13665 1.29398Z" fill="white"/>
         </svg>
      </div>

      <div class="about-content">
         <img src="<?php echo base_url ?>profile_asset/images/years-of-experience.svg" alt="years-of-experience" />
         <img src="<?php echo base_url ?>profile_asset/images/kulhads-emptied.svg" alt="kulhads-emptied" />
         <img src="<?php echo base_url ?>profile_asset/images/electricity-bills-paid.svg" alt="electricity-bills-paid" />
         <img src="<?php echo base_url ?>profile_asset/images/smiles-of-customers.svg" alt="smiles-of-customers" />
      </div>

      <div id="image-carousel" class="splide" aria-label="Beautiful Images">
         <div class="splide__track">
            <ul class="splide__list">
               <li class="splide__slide">
                  <img src="<?php echo base_url ?>profile_asset/images/years-of-experience-mobile.svg" alt="years-of-experience" />
               </li>
               <li class="splide__slide">
                  <img src="<?php echo base_url ?>profile_asset/images/kulhads-emptied-mobile.svg" alt="kulhads-emptied" />
               </li>
               <li class="splide__slide">
                  <img src="<?php echo base_url ?>profile_asset/images/electricity-bills-paid-mobile.svg" alt="electricity-bills-paid" />
               </li>
               <li class="splide__slide">
                  <img src="<?php echo base_url ?>profile_asset/images/smiles-of-customers-mobile.svg" alt="smiles-of-customers" />
               </li>
            </ul>
         </div>
      </div>

		<div id="our-services-mobile" style="display: none; padding-top: 60px; margin-top: -60px;">
	      <?php require('inc/siteServices.php') ?>
			<script>
				window.onload = function () {
					if (window.innerWidth < 768) {
							const elements = document.querySelectorAll('.our-services-wrapper .our-service-item');
							elements.forEach(element => {
								var object = element.querySelector('object');
								var svgDoc = object.contentDocument;
								console.log(object.getAttribute("data-target"))
								svgDoc.querySelectorAll('path, circle').forEach(item => item.setAttribute("stroke", "#FEB649"))
								svgDoc.querySelectorAll('circle').forEach(item => item.setAttribute("fill", "#FEB649"))
								svgDoc.addEventListener("mousedown", (e) => {
									const url = object.getAttribute("data-target");
									window.location.href = url;
								});
							})
					}
				}
			</script>
		</div>
      
      <div class="about-video container">
			<div class="video-heading">
				<p>
					Watch our addictive video!
				</p>
			</div>
			<div class="video-container" id="video-container">
				<div class="playback-animation" id="playback-animation">
				<svg class="playback-icons">
					<use class="hidden" href="#play-icon"></use>
					<use href="#pause"></use>
				</svg>
				</div>
		
				<video controls class="video" id="video" preload="metadata" poster="<?php echo base_url ?>profile_asset/images/about-video-thumb.svg">
				<!-- <source src="<?php echo base_url ?>profile_asset/video/video.mp4" type="video/mp4"></source> -->
				<source src="https://d14jj902ytd3ez.cloudfront.net/Sconto_Promo_Video.MP4" type="video/mp4"></source>
				</video>
		
				<div class="video-controls hidden" id="video-controls">
					<div class="bottom-controls">
					<div class="left-controls">
						<button data-title="Play" id="play">
							<svg class="playback-icons">
							<use href="#play-icon"></use>
							<use class="hidden" href="#pause"></use>
							</svg>
						</button>
		
						<div class="time" style="padding-bottom: 10px;">
							<time id="time-elapsed">00:00</time>
							<span> / </span>
							<time id="duration">00:00</time>
						</div>
					</div>
		
					<div class="right-controls">
						<button data-title="Full Screen" class="fullscreen-button" id="fullscreen-button">
							<svg>
							<use href="#fullscreen"></use>
							<use href="#fullscreen-exit" class="hidden"></use>
							</svg>
						</button>
					</div>
					</div>
				<div class="video-progress">
					<progress id="progress-bar" value="0" min="0"></progress>
					<input class="seek" id="seek" value="0" min="0" type="range" step="1">
					<div class="seek-tooltip" id="seek-tooltip">00:00</div>
				</div>
		
				</div>
			</div>
			<div class="video-footer">
				<p>
					<span>A multidisciplinary creative studio,</span> based out of Kolkata, specializing in advertising and branding.
				</p>
			</div>
     </div>
   
      <svg style="display: none">
         <defs>
            <symbol id="pause" width="78" height="78" viewBox="0 0 24 24" fill="#ED7D31" stroke="#ED7D31">
            <path d="M14.016 5.016h3.984v13.969h-3.984v-13.969zM6 18.984v-13.969h3.984v13.969h-3.984z"></path>
            </symbol>
      
            <symbol id="play-icon" viewBox="0 0 64 78" fill="none" stroke="none">
            <path d="M0.992188 2.27647C0.992188 0.705596 2.72009 -0.252092 4.05219 0.580468L62.2786 36.972C63.5319 37.7553 63.5319 39.5806 62.2786 40.364L4.05219 76.7555C2.72009 77.588 0.992188 76.6303 0.992188 75.0595V2.27647Z" fill="#ED7D31"/>
            </symbol>
      
            <symbol id="volume-high" viewBox="0 0 24 24">
            <path d="M14.016 3.234q3.047 0.656 5.016 3.117t1.969 5.648-1.969 5.648-5.016 3.117v-2.063q2.203-0.656 3.586-2.484t1.383-4.219-1.383-4.219-3.586-2.484v-2.063zM16.5 12q0 2.813-2.484 4.031v-8.063q1.031 0.516 1.758 1.688t0.727 2.344zM3 9h3.984l5.016-5.016v16.031l-5.016-5.016h-3.984v-6z"></path>
            </symbol>
      
            <symbol id="volume-low" viewBox="0 0 24 24">
            <path d="M5.016 9h3.984l5.016-5.016v16.031l-5.016-5.016h-3.984v-6zM18.516 12q0 2.766-2.531 4.031v-8.063q1.031 0.516 1.781 1.711t0.75 2.32z"></path>
            </symbol>
      
            <symbol id="volume-mute" viewBox="0 0 24 24">
            <path d="M12 3.984v4.219l-2.109-2.109zM4.266 3l16.734 16.734-1.266 1.266-2.063-2.063q-1.547 1.313-3.656 1.828v-2.063q1.172-0.328 2.25-1.172l-4.266-4.266v6.75l-5.016-5.016h-3.984v-6h4.734l-4.734-4.734zM18.984 12q0-2.391-1.383-4.219t-3.586-2.484v-2.063q3.047 0.656 5.016 3.117t1.969 5.648q0 2.203-1.031 4.172l-1.5-1.547q0.516-1.266 0.516-2.625zM16.5 12q0 0.422-0.047 0.609l-2.438-2.438v-2.203q1.031 0.516 1.758 1.688t0.727 2.344z"></path>
            </symbol>
      
            <symbol id="fullscreen" viewBox="0 0 45 44">
            <path d="M27.1055 41.6676H42.4565M42.4561 26.3169V41.668" stroke="#ED7D31" stroke-width="3.2"/>
               <path d="M17.8047 41.6676H2.45365M2.45407 26.3169V41.668" stroke="#ED7D31" stroke-width="3.2"/>
               <path d="M2.45354 17.0195L2.45354 1.66849M17.8042 1.66891L2.45312 1.66891" stroke="#ED7D31" stroke-width="3.2"/>
               <path d="M42.4527 17.0195L42.4527 1.66849M27.1021 1.66891L42.4531 1.66891" stroke="#ED7D31" stroke-width="3.2"/>
               <path d="M41.8162 2.49609L3.30859 41.0037" stroke="#ED7D31" stroke-width="3.2"/>
               <path d="M3.30859 2.49632L41.8162 41.0039" stroke="#ED7D31" stroke-width="3.2"/>
            </symbol>
      
            <symbol id="fullscreen-exit" viewBox="0 0 45 45">
               <path d="M40.5508 25.2192H25.1997M25.2002 40.5698V25.2188" stroke="#ED7D31" stroke-width="3.2"/>
               <path d="M0.550781 25.2192H15.9018M15.9014 40.5698V25.2188" stroke="#ED7D31" stroke-width="3.2"/>
               <path d="M15.9019 0.570313L15.9019 15.9214M0.551301 15.9209L15.9023 15.9209" stroke="#ED7D31" stroke-width="3.2"/>
               <path d="M25.2035 0.570313L25.2035 15.9214M40.5542 15.9209L25.2031 15.9209" stroke="#ED7D31" stroke-width="3.2"/>
               <path d="M26.1565 15.1523L15.1641 26.1448" stroke="#ED7D31" stroke-width="3.2"/>
               <path d="M14.3633 14.3561L26.9584 26.9512" stroke="#ED7D31" stroke-width="3.2"/>
            </symbol>

         </defs>
      </svg>

      <div style="display: flex; justify-content: center; padding-bottom: 46px;">
         <svg xmlns="http://www.w3.org/2000/svg" width="95" height="93" viewBox="0 0 95 93" fill="none">
            <path d="M21.9329 11.2404C22.2965 9.15541 25.2894 9.15541 25.653 11.2404L27.0696 19.3635C27.2064 20.148 27.8207 20.7624 28.6053 20.8992L36.7283 22.3157C38.8133 22.6793 38.8133 25.6722 36.7283 26.0358L28.6053 27.4524C27.8207 27.5892 27.2064 28.2036 27.0696 28.9881L25.653 37.1111C25.2894 39.1962 22.2965 39.1962 21.9329 37.1111L20.5164 28.9881C20.3795 28.2036 19.7652 27.5892 18.9807 27.4524L10.8576 26.0358C8.7726 25.6722 8.7726 22.6793 10.8576 22.3157L18.9807 20.8992C19.7652 20.7624 20.3795 20.148 20.5164 19.3635L21.9329 11.2404Z" fill="#FEB649"/>
            <path d="M69.1321 11.2404C69.4957 9.15541 72.4886 9.15541 72.8522 11.2404L74.2688 19.3635C74.4056 20.148 75.02 20.7624 75.8045 20.8992L83.9276 22.3157C86.0126 22.6793 86.0126 25.6722 83.9276 26.0358L75.8045 27.4524C75.02 27.5892 74.4056 28.2036 74.2688 28.9881L72.8522 37.1111C72.4886 39.1962 69.4957 39.1962 69.1321 37.1111L67.7156 28.9881C67.5788 28.2036 66.9644 27.5892 66.1799 27.4524L58.0568 26.0358C55.9718 25.6722 55.9718 22.6793 58.0568 22.3157L66.1799 20.8992C66.9644 20.7624 67.5788 20.148 67.7156 19.3635L69.1321 11.2404Z" fill="#FEB649"/>
            <path d="M89.6632 63.6857C86.2598 72.0961 80.4249 79.3 72.9048 84.3761C65.3847 89.4521 56.5213 92.1694 47.4483 92.1804C38.3754 92.1915 29.5055 89.4957 21.973 84.4379C14.4406 79.3802 8.58822 72.1904 5.16441 63.7883L8.15695 62.5689C11.3381 70.3756 16.7758 77.0558 23.7744 81.7552C30.7731 86.4545 39.0145 88.9592 47.4444 88.949C55.8744 88.9388 64.1097 86.414 71.0969 81.6977C78.0841 76.9814 83.5055 70.2879 86.6677 62.4735L89.6632 63.6857Z" fill="white"/>
         </svg>
      </div>
   </section> <!-- About Section End-->



   <!-- Featured Works Section
   ================================================== -->
   <section id="our-services">
      <?php require('inc/siteServices.php') ?>
		<script>
			/*----------------------------------------------------*/
			/*	service icon hover effect
			------------------------------------------------------*/

			window.onload = function () {
				const elements = document.querySelectorAll('.our-services-wrapper .our-service-item');
				elements.forEach(element => {
						element.addEventListener('mouseenter', function() {
							var object = this.querySelector('object');
							var svgDoc = object.contentDocument;
							svgDoc.querySelectorAll("svg").forEach(item => item.style.cursor = 'pointer');
							svgDoc.querySelectorAll('path, circle').forEach(item => item.setAttribute("stroke", "#FEB649"))
							svgDoc.querySelectorAll('circle').forEach(item => item.setAttribute("fill", "#FEB649"))
							svgDoc.addEventListener("mousedown", (e) => {
								const url = object.getAttribute("data-target");
								window.location.href = url;
							});
						})
						element.addEventListener('mouseleave', function () {
							var object = this.querySelector('object');
							var svgDoc = object.contentDocument;
							svgDoc.querySelectorAll('path, circle').forEach(item => item.setAttribute("stroke", "#8E8E8E"))
							svgDoc.querySelectorAll('circle').forEach(item => item.setAttribute("fill", "#8E8E8E"))
						})
				})
			}
		</script>
      <!-- our-services-wrapper end -->
   </section> <!-- Featured Works Section End-->

   <!-- Experience Section
   ================================================== -->
   <?php require('inc/siteExperience.php') ?>
   <!-- Experience Section End-->

   <!-- Recent Works Section
   ================================================== -->
   <?php require('inc/siteRecentWorks.php') ?>
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
            fixedWidth: 320,
            fixedHeight: 320,
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
      });
   </script>
  </body>
</html>
