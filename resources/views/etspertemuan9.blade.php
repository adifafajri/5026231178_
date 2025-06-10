<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Profusion</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="owl.carousel.min.css">
      <link rel="stylesheet" href="owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
         function validateForm() {
           var name = document.getElementById("name").value.trim();
           var email = document.getElementById("email").value.trim();
           var message = document.getElementById("message").value.trim();

           if (name === "") {
             Swal.fire({
               icon: "error",
               title: "Oops...",
               text: "Please fill in your name!"

             });
             document.getElementById("name").focus();
             return false;
           }

           if (email === "") {
             Swal.fire({
               icon: "error",
               title: "Oops...",
               text: "Please fill in your email!"
             });
             document.getElementById("email").focus();
             return false;
           }


           var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
           if (!email.match(emailPattern)) {
             Swal.fire({
               icon: "error",
               title: "Oops...",
               text: "Please enter a valid email address!"
             });
             document.getElementById("email").focus();
             return false;
           }


           if (message === "") {
             Swal.fire({
               icon: "error",
               title: "Oops...",
               text: "Please fill in your message!"
             });
             document.getElementById("message").focus();
             return false;
           }


           Swal.fire({
             title: "Message Sent!",
             text: "Thank you for connecting with us.",
             icon: "success",
             confirmButtonColor: "#FFD700"
           });

           return false;
         }
       </script>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand" href="index.html"><img src="https://assets-cdn.nationalgeographic.com/natgeo/static/icons/redesign-logo.svg"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="https://www.nationalgeographic.com/animals">Animals</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="https://www.nationalgeographic.com/history">History</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="https://www.nationalgeographic.com/travel">Travel</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="https://www.nationalgeographic.com/health">Health</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="https://www.nationalgeographic.com/health">Science & Nature</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="user_icon"><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></div>
                     <div class="user_icon"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                  </form>
                  <div class="call_btn"><a href="#"></i><span class="padding_left10">Subscribe</span></a></div>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section start -->
      <!-- banner section start -->
      <div class="container-fluid d-flex align-items-center justify-content-center" style="background-image: url('images/1 Atlantic.jpg'); background-size: cover; background-repeat:no-repeat; background-position:center; height:800px; position: relative; flex-direction: column; text-align: center; color: white;">
         <p style="font-family: 'Kumbh Sans' sans-serif; font-weight: 500; letter-spacing: 6px;">
         AN IMPACT-DRIVEN NON PROFIT
         </p>

         <p style="font-family: 'Kumbh Sans' sans-serif; font-weight: 700; font-size: 60px;">
            National Geographic Society
            </p>

         <p style="max-width: 700px; margin-top: 20px;">
         We support an international community of changemakers - National Geographic Explorers - who use the power of science, exploration, education, and storytelling to illuminate and protect the wonder of our world.
         </p>

         <img src="images/2 Logo Natgeo Society.avif" alt="logosociety" style="width: 40%;">

         <p style="font-size: 10px;">
            <i class="bi bi-chevron-down"></i>
         </p>
      </div>
      <!-- banner section end -->
      <!-- service section start -->
      <div class="service_section layout_padding">
         <div class="container">
            <div class="service_taital">EXPLORE OUR BOLD, INNOVATIVE AND TRANSFORMATIVE PROJECTS</div>
            <div class="service_section_2 layout_padding">
               <div class="owl-carousel owl-theme">
                  <div class="item">
                     <div class="image_box">
                        <img src="images/4 Ocean.avif" alt="#" />
                     </div>
                     <div class="buy_bt"></div>
                  </div>
                  <div class="item">
                     <div class="image_box">
                        <img src="images/5 Land.avif" alt="#" />
                     </div>
                     <div class="buy_bt"></div>
                  </div>
                  <div class="item">
                     <div class="image_box">
                        <img src="images/6 Wildlife.avif" alt="#" />
                     </div>
                     <div class="buy_bt"></div>
                  </div>
                  <div class="item">
                     <div class="image_box">
                        <img src="images/7 Human.avif" alt="#" />
                     </div>
                     <div class="buy_bt"></div>
                  </div>
                  <div class="item">
                     <div class="image_box">
                        <img src="images/8 Planet.avif" alt="#" />
                     </div>
                     <div class="buy_bt"></div>
                  </div>
                  <div class="item">
                     <div class="image_box">
                        <img src="images/9 Space.avif" alt="#" />
                     </div>
                     <div class="buy_bt"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- service section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="about_main">
               <div class="row">
                  <div class="col-sm-12">
                     <h1 class="about_taital">WE INVEST IN PEOPLE</h1>
                     <div class="about_img"><img src="images/3 Invest People.avif" style="width: 90%; margin-top: 30px; margin-bottom: 30px; border-radius: 5px;"></div>
                     <p class="about_text_1">Since 1890, the National Geographic Society has supported the work of more than 14,000 scientists, educators, storytellers, conservationists, technologists, and many others across all seven continents. These Explorers are doing extraordinary work to address the critical challenges of our time, advance new solutions, and inspire positive, transformative change in our six focus areas: Ocean, Land, Wildlife, Human Histories & Cultures, Planetary Health and Space.</p>
                     <div class="readmore_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- price section start -->
      <div class="price_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
               </div>
            </div>
      </div>
      <!-- price section end -->
      <!-- client section start -->
      <div class="container-fluid d-flex align-items-center justify-content-center" style="background-image: url('images/15 NatGeo Explorers.png'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 400px; position: relative; flex-direction: column; text-align: center; color: white;">
         <p style="font-family: 'Kumbh Sans' sans-serif; font-weight: 700; font-size: 40px;">
            MEET NATIONAL GEOGRAPHIC EXPLORERS
            </p>

         <p style="font-size: 16px; font-weight: 300; margin-top: 10px; max-width: 700px; margin-top: 15px;">
            National Geographic Explorers are infinitely curious people who are passionate about our planet and making it a better place. Follow their stories and their work.
        </p>

        <div class="readmore_bt2"><a href="#">Read More</a></div>
      </div>
      <!-- client section end -->
      <!-- contact section start -->
      <div class="container-fluid d-flex align-items-center justify-content-center" style="background-image: url('images/21 Fountain forms.png'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 700px; position: relative; flex-direction: column; text-align: center; color: white;">
         <h1 style="font-size: 40px; font-weight: 700; max-width: 800px; color: white;">LET'S SAVE THE WORLD TOGETHER</h1>

         <p style="font-size: 18px; font-weight: 300; margin-top: 10px; max-width: 500px; margin-top: 15px;">
             At the heart of every discovery is a conversation. Whether you're an explorer, a dreamer, or someone with a powerful idea - we'd love to hear from you.
             <br>
             <br>Stay connected with us and be part of the global movement shaping the future of our planet.
         </p>

         <form id="contactForm" onsubmit="return validateForm();" style="margin-top: 30px;">
             <input type="text" id="name" placeholder="Name" style="width: 300px; padding: 10px; margin: 10px; border-radius: 5px;"><br>
             <input type="email" id="email" placeholder="E-mail" style="width: 300px; padding: 10px; margin: 10px;border-radius: 5px;"><br>
             <textarea id="message" placeholder="Message" style="width: 300px; height: 100px; padding: 10px; margin: 10px; border-radius: 5px;"></textarea><br>
             <input type="submit" value="Submit" style="background-color: #FFD700; color: black; border: none; padding: 10px 20px; cursor: pointer; width: 300px; border-radius: 5px; font-weight: 600;">
           </form>

           <footer class="text-center mt-5" style="font-size: 10px; color: white; margin-bottom: -40px;">
             Copyright 1996 - 2015 National Geographic Society. Copyright 2015 - 2025 National Geographic Partners, LLC. All rights reserved
           </footer>

     </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript -->
      <script src="js/owl.carousel.js"></script>
      <script>
         $('.owl-carousel').owlCarousel({
            loop:true,
            margin:35,
            nav:true,
            center: true,
            responsive:{
             0:{
                 items:1,
                    margin:0
                  },
                575:{
                    items:1,
                    margin:0
                },
                768:{
                    items:3,
                    margin:0
                },
                1000:{
                    items:3
                }
            }
         })
      </script>
   </body>
</html>
