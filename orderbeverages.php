<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet"type = "text/css" href = "website.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Beverages</title>
<style>
body {
	background-image: url("https://image.freepik.com/free-photo/empty-white-marble-blur-store-background-product-food-display-montage_7190-528.jpg");
        background-repeat:no-repeat;
       background-size:cover;
} 

</style>
</head>
<body>
<div>
<h1 style="text-align:center;">Likizo Resort</h1>
    </div>
  
    <div class="socialmedia">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a>
    </div>
    
  
    <div class="topnav">
    <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="menu.php">Menu</a>
                
            </li>
            <li><a href="orderonline.php"> Order Online</a>
                 
            </li>

            <li><a href="events.php">Events</a></li>
            <li><a href="contact.php">Contact & Reservation</a></li>
        </ul>
    </div>
    <div class="container">
    <form action="connection2.php" method="post">
     <label>First Name</label>
					<input type="text" name="fname"  required>
   <label>Second Name</label>
          <input type="text" name="sname" required></br>
    <label>Location of delivery</label>
          <input type="text" name="location1" required>
    <label>Phone Number</label>
					<input type="text" name="phone" required></br>
      <label>Select the Snacks you want to order</label>
    <div class="container">
  <div class="row">
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSXceG50JCtmIWt_TkGnCw1wUSOFR31cNMUXGkMEotOmDEZCBMM" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Black coffee"><label>Black coffee</label><br/>
    <p> Ksh 210</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR_6DrtnMas2Jw750-_nlGuI2BMA8LNb3a0s8yycGTS7qNXcSXG" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="White Coffee"><label>White Coffee</label><br/>
    <p>Ksh 250</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRR2lMX1g2G3u4GHQnbS683TFEkeTFU4TVhhYl99I4MfqN2gbMk" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Tea(of any flavor)"><label>Tea(of any flavor)</label><br/>
    <p> Ksh 150</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ_tF_BcCu0Q92Aicyw0SoCXG23DlB6KHJ9kfPj1nbmAaxJUR-k" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Iced tea"><label>Iced tea</label><br/>
    <p>Ksh 200</p>
    </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-sm-3">
    <img src="http://theloadedslice.net/image/cache/products/drinks/Drink-2liters-800x800.jpg" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Soda"><label>Soda</label><br/>
    <p>Ksh 50(500ml)</p>
    
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTBWAle7DFS332ZmOOSh6xzD6PZrS8KQd4vkwnqSOV6FVkmFnJh" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Mango Juice"><label>Mango Juice</label><br/>
    <p>Ksh 140</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTchvnaJA-meZXiu-GNRhBCu0HuFXU8fwOChhfOdwANcr5oI1uN" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Cocktail juice"><label>Cocktail juice</label><br/>
    <p>Ksh 170</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTMs6nyY5RSkc4jhowMEOld3iH_2n8mV7LjoH8ObUm7RksT-k5E" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Energy drink"><label>Energy drink</label><br/>
    <p>Ksh. 120</p>
    </div>
  </div><div class="container">
  <div class="row">
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSqru9ezvZExYc0db51u__Ftkn8ek0XgVbmvcvgys15hHjCHDUU" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Scotch whiskey"><label>Scotch whiskey</label><br/>
    <p>Ksh 5500</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRqTwXJffUpT_RFS5qFtNHmIiP_a_zsazrK5uOC9-NlevaAAAwN" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Blended whiskey"><label>Blended whiskey</label><br/>
    <p>Ksh 4500</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRqTwXJffUpT_RFS5qFtNHmIiP_a_zsazrK5uOC9-NlevaAAAwN" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Buffalo trace whiskey"><label>Buffalo trace whiskey</label><br/>
    <p>Ksh 5000</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSj8mix-5xQNXjJNFsKl4YDFqgBcRSNEgT4OTPE-AlQ3UNJx2Ny" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Absolute vodka"><label>Absolute vodka</label><br/>
    <p>Ksh 2500</p>
    </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-sm-3">
    <img src="https://thumbnail.imgbin.com/12/4/24/imgbin-liqueur-baileys-irish-cream-vodka-whiskey-distilled-beverage-vodka-6bRM4q13jCCzmdRW4TAsHr4sf_t.jpg" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="liqueur baileys Irish cream"><label>liqueur baileys Irish cream</label><br/>
    <p>Ksh 3500</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTDgyfUz3gtESWTY7xZpo5QXX1q0EwAsLSODDiIOJpmaukU3v9X" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Red wine"><label>Red wine</label><br/>
    <p>Ksh 400 /glass</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSa8S2hslGTJY4NF3s817luRGx-vXXUC6ayk7o3er4Pjwpw-KAc" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="white wine"><label>white wine</label><br/>
    <p>Ksh 400/glass</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSNyQJrFimtPyUYq4vi0IURPtd5c8aTavAwhZCoBojDioAruYeG" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="beers"><label>beers</label><br/>
    <p>Ksh 250</p>
    </div>
  </div>
  <input type="submit" name="submit"  value="Place order"/>
</form>
  </div>
  </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>