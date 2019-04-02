<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Computer Shop</title>
  <link rel="icon" type="image/x-icon" href="">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
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

<content>
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


<h2>All Products</h2>


<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="{{URL::asset('img/MSI-gs60_ghost_lid-630x415.jpg')}}"   style="width:100%">
      <h4>MSI GL503VD</h4>
      <p> Price $899</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="{{URL::asset('img/images.jpg')}}" alt="Lights" style="width:250px;height:200px;">
      <h4>MSI GE503VM</h4>
      <p> $788</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="{{URL::asset('img/msi_nb_gt73vr_titan_photo_11__1_9.png')}}" alt="Nature"style="width:250px;height:200px;">
      <h4>MSI FL402VC</h4>
      <p> $599</p>
    </div>
  </div>
  
  <div class="column cars">
    <div class="content">
      <img src="{{URL::asset('img/msi_nb_gt73vr_titan_photo_11__1_9.png')}}" alt="Car" style="width:100%;">
      <h4>MSI KL888</h4>
      <p> $399</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="{{URL::asset('img/ge63-raider-20180110-1.png')}}"alt="Car" style="width:100%;">
      <h4>MSI lP003</h4>
      <p> $299</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="{{URL::asset('img/msi-gp60-large.jpg')}}" alt="Car"style="width:250px;height:200px;">
      <h4>MSIFX009</h4>
      <p> $599</p>
    </div>
  </div>

  <div class="column people">
    <div class="content">
      <img src="{{URL::asset('img/MSI-GS60-Ghost-Ghost-Pro-Pro-3K-4K.jpg')}}" alt="Car" style="width:250px;height:200px;">
      <h4>MSI FX555 =</h4>
      <p>$799</p>
    
     
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="{{URL::asset('img/G91.jpg')}}" alt="Lights" style="width:250px;height:200px;">
      <h4>ASUS GE503VM</h4>
      <p> $788</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="{{URL::asset('img/VP1.jpg')}}" alt="Nature"style="width:250px;height:200px;">
      <h4>ASUS FL402VC</h4>
      <p>D $599</p>
    </div>
  </div>
  
  <div class="column cars">
    <div class="content">
      <img src="{{URL::asset('img/X-441A.jpg')}}" alt="Car" style="width:250px;height:200px;">
      <h4>ASUS KL888</h4>
      <p> $399</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="{{URL::asset('img/M-502.jpg')}}"alt="Car" style="width:250px;height:200px;">
      <h4>ASUS lP003</h4>
      <p> $299</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="{{URL::asset('img/F0X1.jpg')}}" alt="Car" style="width:250px;height:200px;">
      <h4>ASUS FX009</h4>
      <p> $599</p>
    </div>
  </div>

  <div class="column people">
    <div class="content">
      <img src="{{URL::asset('img/F0X1.jpg')}}" alt="Car" style="width:250px;height:200px;">
      <h4>ASUS FX555 =</h4>
      <p>$799.</p>
    
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="{{URL::asset('img/HP ENVY 13 1099$.jpg')}}" alt="Lights" style="width:250px;height:200px;">
      <h4>HP ENVY</h4>
      <p> $788</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="{{URL::asset('img/HP ENVY 13 1159$.jpg')}}" alt="Nature" style="width:250px;height:200px;">
      <h4>HP ENVY 13 </h4>
      <p> $599</p>
    </div>
  </div>
  
  <div class="column cars">
    <div class="content">
      <img src="{{URL::asset('img/HP Gaming Pavilion 15 8th 949$.jpg')}}" alt="Car"style="width:250px;height:200px;">
      <h4>HP Gaming</h4>
      <p> $399</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="{{URL::asset('img/HP Notebook 14 Silver 309$.jpg')}}"alt="Car" style="width:250px;height:200px;">
      <h4>HP Notebook</h4>
      <p> $299</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="{{URL::asset('img/HP Notebook 15 399$.jpg')}}" alt="Car" style="width:250px;height:200px;">
      <h4>HP Notebook 15</h4>
      <p> $599</p>
    </div>
  </div>

  <div class="column people">
    <div class="content">
      <img src="{{URL::asset('img/HP Spectre 13 1499$.jpg')}}" alt="Car" style="width:250px;height:200px;">
      <h4>HP Spectre</h4>
      <p>$799</p>

   
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="{{URL::asset('img/Acer 14 Aspire E5-576G 8th 615$.jpg')}}" alt="Lights"style="width:250px;height:200px;">
      <h4>E5-576G 8th</h4>
      <p> $788</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="{{URL::asset('img/Acer 15 Aspire 3 A315-21 399$.jpg')}}" alt="Nature"style="width:250px;height:200px;">
      <h4> Aspire 3</h4>
      <p> $599</p>
    </div>
  </div>
  
  <div class="column cars">
    <div class="content">
      <img src="{{URL::asset('img/Acer 15 Aspire 3 A315-51 455$.jpg')}}" alt="Car" style="width:250px;height:200px;">
      <h4> A315-51</h4>
      <p> $399</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="{{URL::asset('img/Acer 15.6 Aspire 5  699$.jpg')}}"alt="Car" style="width:250px;height:200px;">
      <h4> Aspire 53</h4>
      <p> $299</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="{{URL::asset('img/Acer 15.6 Aspire E5-576G 8th 789$.jpg')}}" alt="Car" style="width:250px;height:200px;">
      <h4>Acer 15.6</h4>
      <p> $599</p>
    </div>
  </div>

  <div class="column people">
    <div class="content">
      <img src="{{URL::asset('img/Acer Aspire 3 AMD  619$.jpg')}}" alt="Car" style="width:250px;height:200px;">
      <h4>Aspire 3 </h4>

    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="{{URL::asset('img/dell.jpg')}}" alt="Lights" style="width:250px;height:200px;">
      <h4>Dell w008</h4>
      <p>  $388</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="{{URL::asset('img/G720.jpg')}}" alt="Nature" style="width:250px;height:200px;">
      <h4>Dell XPS</h4>
      <p> $599</p>
    </div>
  </div>
  
  <div class="column cars">
    <div class="content">
      <img src="{{URL::asset('img/4962e7d7-7d00-4aea-942e-d357b4c4b3fd_1.c113f93aab7a9620cf5890bddc628e96.jpeg')}}" alt="Car" style="width:250px;height:200px;">
      <h4>Dell Inspired</h4>
      <p> $399</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="{{URL::asset('img/dell_xps_13_matt_green_skins_e112c2ab-d278-4764-9938-652493da253f_2048x.jpg')}}"alt="Car" style="width:250px;height:200px;">
      <h4>Dell NEW</h4>
      <p> $299</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="{{URL::asset('img/Dell-inspiron-15-7577_2-Etech.jpg')}}" alt="Car"style="width:250px;height:200px;">
      <h4>Gaming Dell</h4>
      <p> $599</p>
    </div>
  </div>

  <div class="column people">
    <div class="content">
      <img src="{{URL::asset('img/7-6adba.jpeg')}}" alt="Car" style="width:250px;height:200px;">
      <h4>Dell WQ01</h4>
      <p>$799.</p>
    </div>
  </div>
    </div>
  </div>

    </div>
  </div>
  

    </div>
  </div>
   
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
<img src="{{URL::asset('img/BG-ADS-ASUS-MAY-2018-V4.jpg')}}" alt="profile Pic"style="width:100%">
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

<footer>
<img src="{{URL::asset('img/lRCyPZzOCnS1tJlVTQfDYBf6S5iDtCw9PyPb0mkt.jpeg')}}" alt="profile Pic"style="width:100%">
  <p>&copy; <?php echo date("Y"); ?></p>
</footer>

</html>