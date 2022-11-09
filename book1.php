<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Hema Tours & Travels.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php" id="form" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" id="name" placeholder="enter your name" name="name">
	     <span id="namemsg"></span><br>
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" id="num" placeholder="enter your number" name="phone">
<span id="nummsg"></span><br>
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" id="location" placeholder="place you want to visit" name="location">
<span id="locationmsg"></span><br>
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +91 6789054323 </a>
         <a href="#"> <i class="fas fa-phone"></i> +91 7989564324 </a>
         <a href="#"> <i class="fas fa-envelope"></i> hemat123@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Rk valley, india -516330 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
      </div>

   </div>

   <div class="credit"> created by <span>Hema sree</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->







<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script>
    let form=document.getElementById('form');
    form.addEventListener("submit", (event) => {event.preventDefault();
        validate();
 });

 function validate(){
   let name = document.getElementById("name").value.trim();


   let nameValid=true;


   let namemsg=document.getElementById('namemsg');

	let num = document.getElementById("num").value.trim();


   let numValid=true;


   let nummsg=document.getElementById('nummsg');


let location = document.getElementById("location").value.trim();


   let locationValid=true;


   let locationmsg=document.getElementById('locationmsg');


//Name Validation

   if(name==""){
       namemsg.innerText="Name Cant Be Empty";
       nameValid=false;
   }
   else if(name.length<3){
       namemsg.innerText="Atleast Name Should contain 3 letters";
       nameValid=false;
   }
   else if(!name.match(/[a-zA-Z]/)){
       namemsg.innerText="Name should contain only Alphabets";
       nameValid=false;
   }
   else if(name.match(/[0-9]/)){
       namemsg.innerText="Name should not contain Numbers";
       nameValid=false;
   }
   else{
       namemsg.innerText="";
   }


//Name Validation

   if(location==""){
       locationmsg.innerText="Name Cant Be Empty";
       locationValid=false;
   }
   else if(location.length<3){
       locationmsg.innerText="Atleast Name Should contain 3 letters";
       locationValid=false;
   }
   else if(!locatin.match(/[a-zA-Z]/)){
       locationmsg.innerText="Name should contain only Alphabets";
       locationValid=false;
   }
   else if(location.match(/[0-9]/)){
       locationmsg.innerText="Name should not contain Numbers";
       locationValid=false;
   }
   else{
       locationmsg.innerText="";
   }


	if(num==""){
       locationmsg.innerText="Number Cant Be Empty";
       locationValid=false;
   }
   else if(!location.length==10){
       locationmsg.innerText="Number Should contain 10 Numbers";
       locationValid=false;
   }
	
	if(nameValid && numValid && locationValid)
	{
		form.submit();
	}

	


</script>
</body>
</html>
