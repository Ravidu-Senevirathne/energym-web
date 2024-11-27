<!DOCTYPE html>
<html>
<head>
	<title>Energym Gymnasium</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/gymlogo.jpeg')); ?>">
  <style>
    .wow:first-child {
      visibility: hidden;
    }
  </style>

</head>
<body>

 <!-- Start Header  -->
 <header>
 	 <div class="container">
 	 	<div class="logo">
 	 		 <a href="">Energym <span>Gymnasium</span></a>
 	 	</div>
        <div class="reg-btn">
            <button><a href="<?php echo e(url('/login')); ?>">Log<span>In</span></button></a>
        </div>
 	 	<a href="javascript:void(0)" class="ham-burger">
 	       <span></span>
 	       <span></span>
 	 	</a>
 	 	<div class="nav">
 	 		<ul>
 	 			<li><a href="#home">Home</a></li>
 	 			<li><a href="#about">About</a></li>
 	 			<li><a href="#service">Services</a></li>
 	 			<li><a href="#classes">Classes</a></li>
 	 			<li><a href="#schedule">Schedule</a></li>
 	 			<li><a href="#price">Price</a></li>
 	 			<li><a href="#contact">Contact</a></li>
 	 		</ul>
 	 	</div>
 	 </div>
 </header>
 <!-- End Header  -->

  <!-- Start Home -->
  <section class="home wow flash" id="home">
  	 <div class="container">
  	 	  <h1 class="wow slideInLeft" data-wow-delay="1s">It's <span>gym</span> time. Let's go</h1>
  	 	  <h1 class="wow slideInRight" data-wow-delay="1s">We are ready to <span>fit you</span></h1>
  	 </div>
  	  <!-- go down -->
  	      <a href="#about" class="go-down">
  	      	  <i class="fa fa-angle-down" aria-hidden="true"></i>
  	      </a>
  	  <!-- go down -->

  </section>
  <!-- End Home -->


 <!-- Start About -->
  <section class="about" id="about">
  	  <div class="container">
  	  	  <div class="content">
  	  	  	   <div class="box wow bounceInUp">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="<?php echo e(asset('assets/images/about1.jpg')); ?>" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Free Consultation</h4>
                       	   <p>Unlock your fitness potential with our complimentary consultation service at <b>Energym Gymnasium</b>. Our experienced trainers are here to guide you on your journey to a healthier lifestyle. Whether you're new to the gym scene or a seasoned fitness enthusiast, our personalized consultations cater to your unique goals and needs. From crafting tailored workout plans to offering expert advice on nutrition and exercise techniques, we're committed to helping you achieve your fitness aspirations. Take the first step towards a stronger, fitter you – book your free consultation today!</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  	   	<div class="box wow bounceInUp" data-wow-delay="0.2s">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="<?php echo e(asset('assets/images/about2.jpg')); ?>" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Best Training</h4>
                       	   <p>Embark on your fitness journey with our expert-led training sessions at <b>Energym Gymnasium</b>. Our tailored programs are designed to help you achieve your goals, whether you're aiming to build strength, improve endurance, or enhance overall health. With a focus on proper technique and personalized guidance, our experienced trainers are here to support you every step of the way. Experience the difference of effective, results-driven training in a supportive environment. Start today and unlock your full potential!</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  	   <div class="box wow bounceInUp" data-wow-delay="0.4s">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="<?php echo e(asset('assets/images/about3.jpg')); ?>" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Build Perfect Body</h4>
                       	   <p>Discover the path to your ideal physique with our comprehensive training program at <b>Energym Gymnasium</b>. Our expert trainers specialize in sculpting the perfect body, guiding you through targeted workouts designed to build muscle, shred fat, and enhance definition. With personalized plans tailored to your unique goals and body type, we'll help you unleash your full potential. Whether you're striving for chiseled abs, defined muscles, or overall body transformation, our dedicated team is committed to helping you achieve the results you desire. Take the first step towards your dream physique and join us today!</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  </div>
  	  </div>
  </section>
 <!-- End About -->


 <!-- Start Service -->
 <section class="service" id="service">
 	<div class="container">
 		 <div class="content">
 		 	  <div class="text box wow slideInLeft">
                  <h2>Services</h2>
                  <p>Explore our diverse range of services tailored to elevate your fitness journey at <b>Energym Gymnasium</b>. From personalized training sessions led by certified professionals to dynamic group classes catering to all fitness levels, we offer a holistic approach to achieving your wellness goals. Our state-of-the-art facilities boast cutting-edge equipment and amenities, ensuring every workout is both effective and enjoyable.</p>
                  <p>Additionally, our expert nutritionists provide personalized dietary guidance to complement your training regimen, helping you fuel your body for optimal performance and results. Whether you're seeking to build strength, increase flexibility, or simply improve overall health, our comprehensive services are designed to empower you on your path to success.</p>
                  <a href="" class="btn">Start Now</a>
 		 	  </div>
 		 	  <div class="accordian box wow slideInRight">
 		 	  	    <div class="accordian-container active">
 		 	  	    	<div class="head">
 		 	  	    		<h4>Cardiovascular Equipment</h4>
 		 	  	    		<span class="fa fa-angle-down"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>Revitalize your cardio routine with our premium selection of cardiovascular equipment at <b>Energym Gymnasium</b>. Featuring state-of-the-art treadmills, ellipticals, stationary bikes, and more, our cutting-edge machines offer a dynamic and effective way to enhance endurance, burn calories, and boost cardiovascular health. Whether you prefer high-intensity interval training or steady-state cardio, our equipment is designed to accommodate all fitness levels and goals. Elevate your workout experience and achieve your cardio milestones in our modern and motivating environment. Embark on your journey towards improved fitness and vitality with our top-of-the-line cardiovascular equipment today!</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  	    <div class="accordian-container">
 		 	  	    	<div class="head">
 		 	  	    		<h4>Strength Training Equipment</h4>
 		 	  	    		<span class="fa fa-angle-up"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>Unlock your strength potential at <b>Energym Gymnasium</b> with our top-notch strength training equipment. From free weights to cutting-edge machines, we provide all you need for effective muscle sculpting. Our expert trainers ensure proper technique, maximizing gains and minimizing injury risks. Elevate your strength game today!</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  	    <div class="accordian-container">
 		 	  	    	<div class="head">
 		 	  	    		<h4>Group Fitness Class</h4>
 		 	  	    		<span class="fa fa-angle-up"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>Experience the energy of group fitness at <b>Energym Gymnasium</b>. Join our diverse range of classes, from high-intensity interval training to yoga and everything in between. Led by certified instructors, our dynamic classes cater to all fitness levels, providing motivation and camaraderie along the way. Get ready to sweat, smile, and achieve your fitness goals with our vibrant group fitness community!</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  	    <div class="accordian-container">
 		 	  	    	<div class="head">
 		 	  	    		<h4>Other Services</h4>
 		 	  	    		<span class="fa fa-angle-up"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>At <b>Energym Gymnasium</b>, we go beyond workouts. Enjoy personalized training, expert nutrition advice, and convenient amenities. Elevate your fitness journey with us!</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  </div>
 		 </div>
 	</div>
 </section>
 <!-- End Service -->

<!-- Start Classes -->
<section class="classes" id="classes">
	<div class="container">
		 <div class="content">
		 	  <div class="box img wow slideInLeft">
		 	  	 <img src="<?php echo e(asset('assets/images/class2.png')); ?>" alt="classes" />
		 	  </div>
		 	  <div class="box text wow slideInRight">
		 	  	 <h2>Our Classes</h2>
		 	  	 <p>Our gym community offers a fun and inclusive environment for fitness enthusiasts to achieve health and wellness goals. With expert trainers, state-of-the-art equipment, and diverse workout classes, we aim to unlock your full potential.</p>
		 	  	<div class="class-items">
		 	  	 <div class="item wow bounceInUp">
                     <div class="item-img">
                     	 <img src="<?php echo e(asset('assets/images/class1.jpg')); ?>" alt="classes" />
                     	 <div class="price">

                            <a href="#price" style="text-decoration: none; color: white;">View</a>
                     	 </div>
                     </div>
                     <div class="item-text">
                     	  <h4>Stretching Training</h4>
                     	  <p>
                            Stretching is key for flexibility, injury prevention, and relaxation. It enhances range of motion, reduces muscle tension, and promotes well-being. Make it a part of your routine for a healthier, happier you.</p>
                     	  <a href="">Get Details</a>
                     </div>
		 	  	 </div>
		 	  	 <div class="item wow bounceInUp">
                     <div class="item-text">
                     	  <h4>Barre Fitness</h4>
                     	  <p>Barre fitness merges ballet, Pilates, and strength training using a barre for support. It sculpts muscles, improves posture, and enhances core strength. This low-impact workout suits all fitness levels, providing a rewarding exercise experience.</p>
                     	  <a href="">Get Details</a>
                     </div>
                     <div class="item-img">
                     	 <img src="<?php echo e(asset('assets/images/class1.jpg')); ?>" alt="classes" />
                     	 <div class="price">

                            <a href="#price" style="text-decoration: none; color: white;">View</a>
                     	 </div>
                     </div>
		 	  	 </div>
		 	  	</div>
		 	  </div>
		 </div>
	</div>
</section>
<!-- End Classes -->

<!-- Start Today -->
 <section class="start-today">
 	<div class="container">
 		 <div class="content">
 		 	  <div class="box text wow slideInLeft">
 		 	  	 <h2>Start Your Training Today</h2>
 		 	  	 <p>Begin your fitness journey today and embark on a path to a healthier, stronger you. With expert guidance, state-of-the-art equipment, and a supportive community, there's no better time to start than now. Whether you're aiming to build muscle, improve flexibility, or simply boost your overall well-being, our gym provides the perfect environment to kickstart your training. Take that first step towards your goals and start your training today. Your future self will thank you for it.</p>
 		 	  	 <a href="<?php echo e(url('/reg')); ?>" class="btn">Start Now</a>
 		 	  </div>
 		 	  <div class="box img wow slideInRight">
 		 	  	 <img src="<?php echo e(asset('assets/images/gallery4.j')); ?>pg" alt="start today" />
 		 	  </div>

 		 </div>
 	</div>
 </section>
<!-- End Start Today -->

<!-- Start Schedule -->
  <section class="schedule" id="schedule">
  	 <div class="container">
  	 	  <div class="content">
  	 	  	   <div class="box text wow slideInLeft">
  	 	  	   	   <h2>Classes Schedule</h2>
  	 	  	   	   <p>
                    Explore our diverse class schedule, crafted to suit all fitness levels and schedules. From morning yoga to evening spin, we've got something for everyone. Join us and elevate your workout routine today.
  	 	  	   	   </p>
  	 	  	   	   <img src="<?php echo e(asset('assets/images/schedule1.')); ?>png" alt="schedule" />
  	 	  	   </div>
  	 	  	   <div class="box timing wow slideInRight">
                   <table class="table">
                   	 <tbody>
                   	 	<tr>
                   	 		<td class="day">Monday</td>
                   	 		<td><strong>9:00 AM</strong></td>
                   	 		<td>Body Building <br/> 9:00 to 10:00 AM</td>
                   	 		<td>Room No:210</td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Tuesday</td>
                   	 		<td><strong>9:00 AM</strong></td>
                   	 		<td>Body Building <br/> 9:00 to 10:00 AM</td>
                   	 		<td>Room No:210</td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Wednesday</td>
                   	 		<td><strong>9:00 AM</strong></td>
                   	 		<td>Body Building <br/> 9:00 to 10:00 AM</td>
                   	 		<td>Room No:210</td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Thursday</td>
                   	 		<td><strong>9:00 AM</strong></td>
                   	 		<td>Body Building <br/> 9:00 to 10:00 AM</td>
                   	 		<td>Room No:210</td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Friday</td>
                   	 		<td><strong>9:00 AM</strong></td>
                   	 		<td>Body Building <br/> 9:00 to 10:00 AM</td>
                   	 		<td>Room No:210</td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Saturday</td>
                   	 		<td><strong>9:00 AM</strong></td>
                   	 		<td>Body Building <br/> 9:00 to 10:00 AM</td>
                   	 		<td>Room No:210</td>
                   	 	</tr>
                   	 </tbody>
                   </table>
  	 	  	   </div>
  	 	  </div>
  	 </div>
  </section>
<!-- End Schedule -->

<!-- Start Gallery -->
  <section class="gallery" id="gallery">
  	 <h2>Gym Gallery</h2>
  	<div class="content">
  		 <div class="box wow slideInLeft">
  		 	 <img src="<?php echo e(asset('assets/images/gym photos/gym.pic1.jpg')); ?>" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInRight">
  		 	 <img src="<?php echo e(asset('assets/images/gym photos/IMG-20240425-WA0047.jpg')); ?>" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInLeft">
  		 	 <img src="<?php echo e(asset('assets/images/gym photos/gym.pic4.jpg')); ?>" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInRight">
  		 	 <img src="<?php echo e(asset('assets/images/gym photos/IMG-20240425-WA0058.jpg')); ?>" alt="gallery" />
  		 </div>
  	</div>
  </section>
<!-- End Gallery -->

 <!-- Start Price -->
  <section class="price-package" id="price">
  	 <div class="container">
  	 	  <h2>Choose Your Package</h2>
  	 	  <p class="title-p">
            Choose your gym package wisely to tailor your fitness journey just for you. </p>
  	 	  <div class="content">
  	 	  	  <div class="box wow bounceInUp">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
  	 	  	  	  	   	  3,000LKR/Month
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="<?php echo e(asset('assets/images/price1.jpg')); ?>" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Body Building Training</h3>
  	 	  	  	  	   	  <p>Get Free WiFi</p>
  	 	  	  	  	   	  <p>Month to Month</p>
  	 	  	  	  	   	  <p>No Time Restrictions</p>
  	 	  	  	  	   	  <p>Gym and Cardio</p>
  	 	  	  	  	   	  <p></p>
  	 	  	  	  	   	  <a href="<?php echo e(url('#contact')); ?>" class="btn">Join Now</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  	  <div class="box wow bounceInUp" data-wow-delay="0.2s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
  	 	  	  	  	   	  15,000LKR/6Month
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="<?php echo e(asset('assets/images/price2.jpg')); ?>" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Body Building Training</h3>
  	 	  	  	  	   	  <p>Get Free WiFi</p>
  	 	  	  	  	   	  <p>For 6 Months</p>
  	 	  	  	  	   	  <p>No Time Restrictions</p>
  	 	  	  	  	   	  <p>Gym and Cardio</p>
  	 	  	  	  	   	  <p>Service Locker Rooms</p>
  	 	  	  	  	   	  <a href="<?php echo e(url('#contact')); ?>" class="btn">Join Now</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  	  <div class="box wow bounceInUp" data-wow-delay="0.4s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
  	 	  	  	  	   	  30,000LKR/1Year
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="<?php echo e(asset('assets/images/price3.jpg')); ?>" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Body Building Training</h3>
  	 	  	  	  	   	  <p>Get Free WiFi</p>
  	 	  	  	  	   	  <p>For a Year</p>
  	 	  	  	  	   	  <p>No Time Restrictions</p>
  	 	  	  	  	   	  <p>Gym and Cardio</p>
  	 	  	  	  	   	  <p>Service Locker Rooms</p>
  	 	  	  	  	   	  <a href="<?php echo e(url('#contact')); ?>" class="btn">Join Now</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  </div>
  	 </div>
  </section>
 <!-- End Price -->

 <!-- Start Contact -->
  <section class="contact" id="contact">
     <div class="container">
        <div class="content">
            <div class="box form wow slideInLeft">
                <form method="POST" action="<?php echo e(route('send.email')); ?>">
                    <?php echo csrf_field(); ?>

                    <input type="text" name="name" id="name" required placeholder="Name">
                    <input type="email" name="email" id="email" required placeholder="Email">
                    <input type="tel" name="mobile" id="mobile" required placeholder="Mobile No.">
                    <textarea name="message" id="message" required placeholder="Message"></textarea>

                    <button type="submit">Send Message</button>
                </form>

            </div>
            <div class="box text wow slideInRight">
                 <h2>Get Connected with Gym</h2>
                  <p class="title-p">Stay connected with Energym Gymnasium for all your fitness needs. Follow us on social media, sign up for our newsletter, or visit our website to stay updated on classes, events, and special offers. Join our vibrant fitness community today</p>
                  <div class="info">
                      <ul>
                          <li><span class="fa fa-map-marker"></span> No.37,Hiripitiya Road,Muththettugala,Kurunegala</li>
                          <li><span class="fa fa-phone"></span>077-8331784</li>
                          <li><span class="fa fa-envelope"></span> energymtheartofwellness@gmail.com</li>
                      </ul>
                  </div>
                  <div class="social">
                       <a href=""><span class="fa fa-facebook"></span></a>
                       <a href=""><span class="fa fa-linkedin"></span></a>
                       <a href=""><span class="fa fa-skype"></span></a>
                       <a href=""><span class="fa fa-youtube-play"></span></a>
                  </div>

                  <div class="copy">
                      PowerBy &copy; NIBM
                  </div>
            </div>
        </div>
     </div>
  </section>
 <!-- End Contact -->



 <!-- jquery -->

 <script src="<?php echo e(asset('assets/js/jquery.js')); ?>"></script>
<script>
	$(document).ready(function(){

      $(".ham-burger, .nav ul li a").click(function(){

        $(".nav").toggleClass("open")

        $(".ham-burger").toggleClass("active");
      })
      $(".accordian-container").click(function(){
      	$(".accordian-container").children(".body").slideUp();
      	$(".accordian-container").removeClass("active")
      	$(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
      	$(this).children(".body").slideDown();
      	$(this).addClass("active")
      	$(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
      })

       $(".nav ul li a, .go-down").click(function(event){
         if(this.hash !== ""){

              event.preventDefault();

              var hash=this.hash;

              $('html,body').animate({
                scrollTop:$(hash).offset().top
              },800 , function(){
                 window.location.hash=hash;
              });

              // add active class in navigation
              $(".nav ul li a").removeClass("active")
              $(this).addClass("active")
         }
      })
})
$(document).ready(function() {
    $('a[href="#price"]').click(function() {
      $('html, body').animate({
        scrollTop: $('#price').offset().top
      }, 1000);
      return false;
    });
  });
  $(document).ready(function(){
    $(".ham-burger").click(function(){
        $(".reg-btn").toggle();
    });
});

</script>
<script src="<?php echo e(asset('assets/js/wow.min.js')); ?>"></script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       0,
      }
    );
    wow.init();
  </script>
</body>
</html>





<?php /**PATH D:\energym-gymnasium\resources\views/index.blade.php ENDPATH**/ ?>