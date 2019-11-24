<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet"type = "text/css" href = "website.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Main meal</title>
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
            <li><a href="orderonline.php"> Order Online</a></li>
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
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTP2fUj61abNIZ25JHdB0RdDPnW0EtWbOgu9dM7wJEE_eoUekdu" style="width:200px;height:150px;";>
    <input type="checkbox" name=order value="Grilled pork with vegitables"><label>Grilled pork with vegitables</label><br/>
    <p> Ksh. 400</p>
    </div>
    <div class="col-sm-3">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT6aFSXS04vUQdZLcBrgj4vZlofkzatcUYrp4GGAfANmXMWvrd6" style="width:200px;height:150px;";>
      <input type="checkbox" name=order value="Beef burger with potato slices"><label>Beef burger with potato slices</label><br/>
      <p>Ksh.560</p>
    </div>
    <div class="col-sm-3">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSNs3O_IrwZh8H7y-zJ9FX4TdoM89Mh2ORGjDwqxZ11UUVJxGWo" style="width:200px;height:150px;">
      <input type="checkbox" name=order value="Grilled chicken,potato and vegitables"><label>Grilled chicken,potato and vegitables</label><br/>
      <p>Ksh 940</p>
    </div>
    <div class="col-sm-3">
    <img src="https://www.bbcgoodfood.com/sites/default/files/user-collections/my-colelction-image/2015/12/spaghetti-smoky-tomato-seafood-sauce.jpg" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Spaghetti with veggie sauce"><label>Spaghetti with veggie sauce</label><br/>
    <p>Ksh 340</p>
    </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-sm-3">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQiV679GhTcCgjidoICiTTNA-dpIuGbPdczDm5q7nVogUAWPBuJ" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Lentil rice with tumeric fish"><label>Lentil rice with tumeric fish</label><br/>
    <p> Ksh. 950</p>
    </div>
    <div class="col-sm-3">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRQjKFeNZjy3GczwbwKsJwk2IpHhL4dJ_mZL54lDj2asnb_3Qay" style="width:200px;height:150px;">
      <input type="checkbox" name=order value="Honey garlic salmon"><label>Honey garlic salmon</label><br/>
      <p>Ksh 480</p>
    </div>
    <div class="col-sm-3">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcREnBXpe8ujzR8vNO-n9qCMVs-PqOeb_s1oGHv5lGZ3D7ZidVuA" style="width:200px;height:150px;">
      <input type="checkbox" name=order value="Fish fillets with olives and oregano"><label>Fish fillets with olives and oregano</label><br/>
      <p>Ksh. 350</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQHbS5r_sRI9sIe-AF6zZKyS1lhI8Hq4WHdGWEO8pxjtm8aiaEN" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Baked lemon pepper tilapia"><label>Baked lemon pepper tilapia</label><br/>
    <p>Ksh. 550</p>
    </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSWOwN02lXTX_kKy2OeBDvlGWq__PPYgFnEwG4yDqzjKBm_0LXi" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Fried beef,ugali, salad (greens of your choice)"><label>Fried beef,ugali, salad (greens of your choice)</label><br/>
    <p> Ksh. 520</p>
    </div>
    <div class="col-sm-3">
    <img src="https://cdn.tasteatlas.com/images/dishes/3bd6dfaf53e244dfb7f3ee390447a2f8.jpg?w=600&h=450" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Chicken biyani"><label>Chicken biyani</label><br/>
    <p>Ksh. 650</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRSKzVD-Ndg6u_kVylmdsISCE44eTcpYImJCTOTPpYmEYvD2ZTR" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Pilau with salard and sauce"><label>Pilau with salard and sauce</label><br/>
    <p> Ksh.500</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTxNi-Yy0lqGJPM6ZFQ3JEc8mOT8sneU3M_JtM5KnBSNUVSZ1Es" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Chapati and beans(greens of your choice)"><label>Chapati and beans(greens of your choice)</label><br/>
    <p>Ksh 140</p>
    </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSIUhYD30Tpo9LRrjvaHHp_E3_ytD3tDjnerp6gi4SKorVgWgV6" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Grilled steak"><label>Grilled steak</label><br/>
    <p>Ksh. 400</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTkGn1F7QGFN7XKzuNz4w89UdHGxNKb0Lmy5viASe-SJztTn-5K" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Backed chicken with vegitabes"><label>Backed chicken with vegitabes</label><br/>
    <p>Ksh.800</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRRhfIU2V6L1SdbvV1frwOrth9H6XeH9KHRE7yVHs4zAd5R1c_A" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Double beef burger"><label>Double beef burger</label><br/>
    <p>Ksh.550</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTzMIabkVqnJje6kRlLQhh3Vq3RLz9dv7l2Wmg5tcYXOA05ot_t" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Chicken wings with fries"><label>Chicken wings with fries</label><br/>
    <p>Ksh.450</p>
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