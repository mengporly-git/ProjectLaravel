<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Computer Shop</title>
  <link rel="icon" type="image/x-icon" href="">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet"  type="text/css" href="{{asset('css/fontawesome-free-5.8.1-web/css/all.css')}}">
  <link href="{{asset('css/sey.css')}}" rel="stylesheet" />
</head>

<body>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <nav class="nav"><!-- menu -->
    <img src="{{URL::asset('img/Fendercs.gif')}}"  width="180" height="70" style="float:left !important"/>
    <img src="{{URL::asset('img/MSI_logo_for_share2.png')}}"  width="180" height="70" style="float:left !important"/>
    <img src="{{URL::asset('img/ROG-NEW-ICON-black.png')}}"  width="180" height="70" style="float:left !important"/>
    <img src="{{URL::asset('img/1110px-Intel_Inside_Logo.svg.png')}}"  width="180" height="70" style="float:left !important"/>
    <ul>
      <li><a href="index">Home</a></li>
      <li><a href="allproduct">All Product</a></li>
      <li><a href="signup">RegisterNow</a></li>
      <li><a href="accessory">Accesory</a></li>
      <li><a href="contact">Contact</a></li>
      <li><a href="aboutUs">About Us</a></li>
    </ul>

  </nav> 

  <content class="body">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      * {
        box-sizing: border-box;
      }

      body {
        background-color: #f1f1f1;
        padding: 20px;
        font-family: Arial;
      }

      /* Center website */
      .main {
        max-width: 1000px;
        margin: auto;
      }

      h1 {
        font-size: 50px;
        word-break: break-all;
      }

      .row {
        margin: 10px -16px;
      }

      /* Add padding BETWEEN each column */
      .row,
      .row > .column {
        padding: 8px;
      }

      /* Create three equal columns that floats next to each other */
      .column {
        float: left;
        width: 33.33%;
        display: none; /* Hide all elements by default */
      }

      /* Clear floats after rows */ 
      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      /* Content */
      .content {
        background-color: white;
        padding: 10px;
        height: 295px;
      }

      /* The "show" class is added to the filtered elements */
      .show {
        display: block;
      }

      /* Style the buttons */
      .btn {
        border: none;
        outline: none;
        padding: 12px 16px;
        background-color: white;
        cursor: pointer;
      }

      .btn:hover {
        background-color: #ddd;
      }

      .btn.active {
        background-color: #666;
        color: white;
      }
    </style>
  </head>
  <body>

    <!-- MAIN (Center website) -->
    <div class="main">


      <h2>All ACER Products</h2>


      <!-- Portfolio Gallery Grid -->
      <div class="row">
        <div class="column nature">
          <div class="content">
            <img src="{{URL::asset('img/Acer 14 Aspire E5-476G 8th 799$.jpg')}}"   style="width:100%">
            <h4>Acer 14 Aspire</h4>
            <p> Price $899</p>
          </div>
        </div>
        <div class="column nature">
          <div class="content">
            <img src="{{URL::asset('img/Acer 14 Aspire E5-576G 8th 615$.jpg')}}" alt="Lights" style="width:100%">
            <h4>E5-576G 8th</h4>
            <p> $788</p>
          </div>
        </div>
        <div class="column nature">
          <div class="content">
            <img src="{{URL::asset('img/Acer 15 Aspire 3 A315-21 399$.jpg')}}" alt="Nature" style="width:100%">
            <h4> Aspire 3</h4>
            <p> $599</p>
          </div>
        </div>

        <div class="column cars">
          <div class="content">
            <img src="{{URL::asset('img/Acer 15 Aspire 3 A315-51 455$.jpg')}}" alt="Car" style="width:100%">
            <h4> A315-51</h4>
            <p> $399</p>
          </div>
        </div>
        <div class="column cars">
          <div class="content">
            <img src="{{URL::asset('img/Acer 15.6 Aspire 5  699$.jpg')}}"alt="Car" style="width:100%">
            <h4> Aspire 53</h4>
            <p> $299</p>
          </div>
        </div>
        <div class="column cars">
          <div class="content">
            <img src="{{URL::asset('img/Acer 15.6 Aspire E5-576G 8th 789$.jpg')}}" alt="Car" style="width:100%">
            <h4>Acer 15.6</h4>
            <p> $599</p>
          </div>
        </div>

        <div class="column people">
          <div class="content">
            <img src="{{URL::asset('img/Acer Aspire 3 AMD  619$.jpg')}}" alt="Car" style="width:100%">
            <h4>Aspire 3 </h4>
            <p>$799.</p>
          </div>
        </div>

      </div>
      <!-- END GRID -->
    </div>
    <!-- END MAIN -->
  </div>

  <script>
    filterSelection("all")
    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("column");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
      }
    }

    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);     
        }
      }
      element.className = arr1.join(" ");
    }


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</aside>
</div>

</content>

<aside class="right">
  <img src="{{URL::asset('img/msi.jpg')}}" alt="profile Pic"style="width:100%">
</aside>

<aside id="left">
  <link href="{{asset('css/sey.css')}}" rel="stylesheet" />
  <div style="padding: 0 5px;">
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