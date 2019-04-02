<!DOCTYPE html>
<html>
<head>
  <title>Computer Shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <link rel="icon" type="image/x-icon" href="">
  <link rel="stylesheet"  type="text/css" href="{{asset('css/fontawesome-free-5.8.1-web/css/all.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
  <link href="{{asset('css/sey.css')}}" rel="stylesheet" />
</head>
<div class="container-fluid">


  <body>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <nav class="nav"><!-- menu -->
      <link href="{{asset('css/sey.css')}}" rel="stylesheet" />
      <img src="{{URL::asset('img/Fendercs.gif')}}"  width="180" height="70" style="float:left !important"/>
      <img src="{{URL::asset('img/MSI_logo_for_share2.png')}}"  width="180" height="70" style="float:left !important"/>
      <img src="{{URL::asset('img/ROG-NEW-ICON-black.png')}}"  width="180" height="70" style="float:left !important"/>
      <img src="{{URL::asset('img/1110px-Intel_Inside_Logo.svg.png')}}"  width="180" height="70" style="float:left !important"/>
      <ul>
        <li><a href="index"><i class="fas fa-home"></i>Home</a></li>
        <li><a href="allproduct"><i class="fab fa-product-hunt"></i>All Product</a></li>
        <li><a href="accessory"><i class="fas fa-keyboard"></i>Accesory</a></li>
        <li><a href="contact"><i class="fas fa-address-book"></i>Contact</a></li>
        <li><a href="aboutUs"><i class="far fa-address-card"></i>About Us</a></li>
      </ul>

      <!-- search button -->
      <div class="search-container">
        <form action="" method="get">
          <input type="text" placeholder="Search..." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>

    </div>

    <img src="{{URL::asset('img/9l99.jpg')}}"  width="100%" height="170"/>
    <img src="{{URL::asset('img/505b.jpg')}}"  width="100%" height="90" />


  </nav>
  <content class="body">
    <div>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides {display: none;}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
          max-width:auto;
          position: relative;
          margin: auto;
        }

        /* Caption text */
        .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }

        .active {
          background-color: #717171;
        }

        /* Fading animation */
        .fade {
          -webkit-animation-name: fade;
          -webkit-animation-duration: 1.5s;
          animation-name: fade;
          animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }

        @keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 100px) {
          .text {font-size: 11px}
        }
      </style>
    </head>
    <body>

      <h2><font face="ASvadek Cello"size=5><Marquee behavior= alide direction-left loop=n  scrollmount=n scrolldelay=n >
      ស្វាគមន៍មកកាន់  PISEY COMPUTER SHOP  ហាងយើងខ្ញុំមានលក់កុំព្យូទ័រជាច្រើនប្រភេទ ទំនាក់ទំនងតាមលេខទូរសព្ទ័096 555 0645ឬ តាមរយះ WWW.TheComputerShop.Com.Kh</h2></Marquee>
    </font face>

    <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>

        <img src="{{URL::asset('img/ssssks.jpg')}}" alt="profile Pic"style="width:100%">
        <div class="text">Pisey Computer Shop</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="{{URL::asset('img/ge63-raider-20180110-1.png')}}" alt="profile Pic"style="width:100%">

        <div class="text">MSI</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>

        <img src="{{URL::asset('img/fc11680f8879f4ac721d260b5f8ae63c.jpg')}}" alt="profile Pic"style="width:100%">
        <div class="text">RoG Gaming</div>
      </div>
    </div>
    <br>

    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>

    <script>
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
       }
       slideIndex++;
       if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
</script>

</aside>
</div>

</content>

<aside class="right">
  <img src="{{URL::asset('img/msi.jpg')}}" alt="profile Pic"style="width:100%">
</aside>

<aside id="left">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{asset('css/sey.css')}}" rel="stylesheet" />
  <div style="padding: 0 5px; margin-top: 10%" >
    <h3>LIST MODELS</h3>
    <div class="box">
     <ul>
      <li><a href="product">Asus</a></li>
      <li><a href="msi">MSI</a></li>
      <li><a href="dell">Dell</a></li>
      <li><a href="acer">Acer</a></li>
      <li><a href="hp">HP</a></li>
      <li><a href="promotion">Promotion</a></li>
    </ul>
  </div>
</aside>

</body>


<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="index">Previous</a></li>
    <li class="page-item"><a class="page-link" href="product">1</a></li>
    <li class="page-item"><a class="page-link" href="msi">2</a></li>
    <li class="page-item"><a class="page-link" href="dell">3</a></li>
    <li class="page-item"><a class="page-link" href="hp">4</a></li>
    <li class="page-item"><a class="page-link" href="acer">5</a></li>
    <li class="page-item"><a class="page-link" href="index">Next</a></li>
  </ul>
</nav>
<footer class="footer">

  <h3>ContactUS</h3>
  <h5>Address : Building #245, Street 6 , Sangkat Crouyjongvar, Khan Crouyjongvar, Phnom Penh, Cambodia.</br>
    Telephone : (+855-96) 555 0645
  Email : info@Computershop.com.kh</h5></br>
  <li><a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a></li>
  <p>&copy; <?php echo date("Y"); ?></p>

</footer>
</div>
</html>