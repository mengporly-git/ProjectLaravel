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

<content class="body">
<link href="{{asset('css/sey.css')}}" rel="stylesheet" />
<img src="{{URL::asset('img/spotlight_20150116105604.jpg')}}" width=100% height=200px/>
<h4 style="margin-top:3%">The Computer Shop was open since 2000 and we have many computer models for customer.our products are good quality and the accessory is 100% original. Dragon Computer has established more than 2 years in Phnom penh with its own building. We started with small and growth to be the most favorite computer shop among local.

In 2017, We become an authorized partner from  MSI Notebook,  selling all branded products such as Apacer, Kingston, Transcand, Adata, Cosiar, Cooler master, Kingdian, Pendrive, and more.

In 2017, we granted an approval to open MSI concept store in Cambodia and late 2017 we granted best seller award from Acer and received an authorized reseller from HP.

In 2018, January we awarded best growth of the year for MSI notebook. 
</h4> 
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

<footer>
<img src="{{URL::asset('img/lRCyPZzOCnS1tJlVTQfDYBf6S5iDtCw9PyPb0mkt.jpeg')}}" alt="profile Pic"style="width:100%">
  <p>&copy; <?php echo date("Y"); ?></p>
</footer>

</html>