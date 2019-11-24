<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet"type = "text/css" href = "website.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Contact and Reservation</title>
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
         <div class="login-box">
        <div class="row">
         <div class="col-md-6 login-left">
            <h2>Contact information</h2>
            <div>
            <p>Email: likizohotel@likizo.com<br>
                P.O.Box 386,Kanamai, kenya<br>
                Cell 1: 0711882695<br>
                Cell 2: 0781533207<br>
                Tell: 098845675<br>      
            </p>
            </div>
            <div>
                <h3>Locate us</h3>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.4897178511983!2d39.77409691445589!3d-3.9188082971497162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18400852d9bf6c6f%3A0x18a73fcb616fa2cd!2sLikizo%20Cottages%20%26%20Resorts%20-%20Kanamai!5e0!3m2!1sen!2ske!4v1573386748402!5m2!1sen!2ske" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
            </div>
            <div>

                <form>
                </form>

            </div>
        </div>
        
        <div class="col-md-6 login-right">
       
            <h2> Make Reservations</h2>
            <form action="reservation.php" method="post">
                <div class="form-group">
                
                <label>First Name</label>
					<input type="text" name="fname"  class="form-control" required>
				</div>

				<div class="form-group ">
                <label>Second Name</label>
					<input type="text" name="sname" class="form-control" required>
				</div>
				<div class="form-group">
                <label>Reserve for</label>
                <select name="meal">
                        <option value="breakfast">Breakfast</option>
                        <option value="lunch">Lunch</option>
                        <option value="supper">Supper</option>
                        
                </select>
				</div>
				<div class="form-group">
                <label>Number of People</label>
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
                <label>Phone Number</label>
					<input type="text" name="phone" class="form-control"  required>
				</div>
                <div>
                <div class="form-group ">
                <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Reserve</button>

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