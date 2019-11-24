<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet"type = "text/css" href = "website.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Events</title>
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
         
        <div class="row">
         <div class="col-md-6 login-left">
         <div >
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSk6EZd84FVa0vhZtlgNrduhRxh5VzPdx6bg6jFqU6K0C02HMxV" style="width:350px;height:200px;">
        <h6>Birthday party buffet</h6>
        
        </div>
        <div >
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRJexq7Yepwz6wAwTjhIYulrmDV4USsFmCTzFLZk2DpcTEL1lMT" style="width:350px;height:200px;">
        <h6>House party buffet </h6>
        
        </div>
        <div >
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSTKn-VWSNI6ksP6rcuhFB-gm-OcoXMtCnxMv_htwBqSeHerMqZ" style="width:350px;height:200px;">
        <h6>Wedding buffet</h6>
        
        </div>
        
    </div>
        
        <div class="col-md-6 login-right">
      
            <h2> Book for outside Catering</h2>
            <form action="catering.php" method="post">
                <div class="form-group">
                
                <label>First Name</label>
					<input type="text" name="fname"  class="form-control" required>
				</div>

				<div class="form-group ">
                <label>Second Name</label>
					<input type="text" name="sname" class="form-control" required>
				</div>
				<div class="form-group">
                <label>Type of event</label>
                <select name="type_of_event">
                        <option value="Birthday">Birthday</option>
                        <option value="Wedding">Wedding</option>
                        <option value="Graduationparty">Graduation Party</option>
                        <option value="Houseparty">House party</option>
                       
                </select>
				</div>
                <div class="form-group">
                <label>Number of people</label>
                <select name="number_of_people">
                        <option value="1-5">1-5</option>
                        <option value="5-10">5-10</option>
                        <option value="10-15">10-15</option>
                        <option value="15-20">15-20</option>
                        <option value="20-30">20-30</option>
                        <option value="morethan30">More than 30</option>
               
                </select>
                </div>
                <div class="form-group">
                <label>Type of meal</label>
                <select name="type_of_meal">
                        <option value="Buffet">Buffet</option>
                        <option value="onemainmeal">One maain meal</option>
                        
                       
                </select>
				</div>
				<div class="form-group">
                <label>E-mail</label>
					<input type="text" name="email" class="form-control" place holder="E-mail "required>
				</div>
				<div class="form-group">
                <label>Phone Number</label>
					<input type="text" name="phone" class="form-control"  required>
				</div>
                <div>
                
                <button type="submit" class="btn btn-primary">Book</button>

                </div>
        </div>
         </div>
         </form>
     </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>