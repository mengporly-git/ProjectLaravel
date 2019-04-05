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
  <li><a href="accessory">Accesory</a></li>
  <li><a href="contact">Contact</a></li>
  <li><a href="aboutUs">About Us</a></li>
  </ul>


</nav> 

<content class="body">

<form action="" method="post" style="background-color:#8497b8;width:400px;height:570px; margin:0 auto; border-radius:5px; padding:20px;">
{{csrf_field()}}
    First_Name<br /><input type="text" placeholder="Your firstname" style="border-radius:10px;" name="first_name" /><br />
    Last_Name<br /><input type="text" placeholder="Your lastname" style="border-radius:10px;" name="last_name" /><br />
    Password <br /><input type="text" placeholder="Your password" style="border-radius:10px;" name="password" /><br />
    Confirm Password <br /><input type="text" placeholder="Confirm password" style="border-radius:10px;" name="confirm_password" /><br />
    Email<br /><input type="email" style="border-radius:10px;" placeholder="YourEmail" name="txt_Email" /><br />
   Gender:<br /><input type="radio" value="m" name="gender" />Male
    <input type="radio" value="f" name="gender" />Female<br />
    <input type="checkbox" value="1" name="txt_222" />please check to confirm<br />
    <input type="submit" value="Register" style="border-radius:10px;width:235px;"name="btnsubmit" /><br />
</form>
</content>

<aside class="right">
<img src="{{URL::asset('img/msi.jpg')}}" alt="profile Pic"style="width:100%">
</aside>

<aside id="left">
<link href="{{asset('css/sey.css')}}" rel="stylesheet" />
<div style="padding: 0 5px; margin-top: 10%" >
            <h3>LIST MODELS</h3>
             <div class="box">
               <ul>
                    <li><a href="asus">Asus</a></li>
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