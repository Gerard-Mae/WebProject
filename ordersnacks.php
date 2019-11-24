<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet"type = "text/css" href = "website.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Snacks</title>
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

  <div class="row">
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSmKnSH8UvK72Su8zuRkdk2VUmy3EeiUKU5hSCBQ7MYEYYex_WB" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Samosa"><label>Samosa</label><br/>
    <p>Ksh 150</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ0f-ozCVxRHzPPaCktHRE3QAqFwSLHRvSgHMGNj9xrYoQ8nmTv" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Kabab"><label>Kabab</label><br/>
    <p>Ksh 200</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTQZY9F-T9r7wNWBTWb0oY9TGYB2qnaC-9Y7BPMb5MSUoUgopkt" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Bacon wrapped little smokies"><label>Bacon wrapped little smokies</label><br/>
    <p>Ksh 160</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR1hIw0eM7p0fQFXah0Hhou-Tvpq9k8mg14L3iRwYKj-2ZV13Pb" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Smoked apple smokies"><label>Smoked apple smokies</label><br/>
    <p>Ksh 150</p>
    </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQKqD4X5PFyHqCGLwad76bbulNQnBSy3GThGdydqKNCHEtE-rao" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Kaimati"><label>Kaimati</label><br/>
    <p>100</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTDIFVK270u-I5A8lSfGQXaUI0R3OxnrCrUTUEiTlWZ_FuZ7oMc" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Mahamri"><label>Mahamri</label><br/>
    <p> Ksh 120</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSy_DNl3jlGVNHcsqMgEmV652yJvDKmo1wRycFyFxP6t4ETWwUH" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Omlette egg"><label>Omlette egg</label><br/>
    <p>Ksh 55</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTdtdB5V04v4GXPeGZ-fwradT4quK8bq15nu3s3ViaXVVUfZfP6" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Egg in blanket"><label>Egg in blanket</label><br/>
    <p>Ksh 180</p>
    </div>
  </div><div class="container">
  <div class="row">
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQmzEN1RWBvFdwnuu4uK9ZiRE44G1KlWkV-B-MsdMQjk_FVTIK6" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Chocolate cake"><label>Chocolate cake</label><br/>
    <p>Ksh 140</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFzSO3CkqgnSo1qy50RyU_iSntp5L_ij-Nkt6I51gCr1hE7ted" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Vanilla cake"><label>Vanilla cake</label><br/>
    <p> Ksh. 160</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTJ4BcYSNtaQJlCqbR2HCaI9lBqT27acEcKgJ4FWiktkAQd5cHL" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Rick fruit cake"><label>Rich fruit cake</label><br/>
    <p>Ksh 200</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRg0E9UtNs8_D6tIveH-zQHTDmGj2gUFCfYVXKNhCMRSnjph2Cw" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Black forest cake"><label>Black forest cake</label><br/>
    <p>Ksh. 240</p>
    </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTxt-yUizQHA5ObYgtT0IG8idctFRGKZxWzPQZb0b6mUorz9kGA" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Bread rolls"><label>Bread rolls</label><br/>
    <p>Ksh 100</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR3fL6HT3ARTG_SQSwLljRVgT1412VEYQzPpgR_Dlua9jHyJSer" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Doughnuts"><label>Doughnuts</label><br/>
    <p> Ksh 75</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS25JQRgZNjheyn0Wgxn4UZXdp7DrslZ_jKqinBOCsSpWPgCMLL" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Chocolate swiss roll"><label>Chocolate swiss roll</label><br/>
    <p>Ksh 150</p>
    </div>
    <div class="col-sm-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTVq913Y2pipNbcSN-6lpm7uSXUg6HYW-V6Z5b5faj8JaLCUV79" style="width:200px;height:150px;">
    <input type="checkbox" name=order value="Chicken, bacon mozarella sandwich"><label>Chicken, bacon mozarella sandwich</label><br/>
    <p>Ksh 230</p>
    </div>
    <input type="submit" name="submit"  value="Place order"/>
</form>
  </div>

 


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>