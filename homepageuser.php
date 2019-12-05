	<?php

include_once 'database.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="homepagecss.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="about1.html">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="galary.html">
<link rel="stylesheet" type="text/css" href="login_form.html">
<link rel="stylesheet" type="text/css" href="homepagesignup.html">
<link rel="stylesheet" type="text/css" href="empresario.html">
  
<style>
	
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;

}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}
.mySlides {display: none}
* {box-sizing: border-box}
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}



@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 100%) {
  .prev, .next,.text {font-size: 11px}
}



button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}

#h a:hover{
 opacity: .8;
 color: blue;
 background: green;
}




 a .in{
	 width:100px;
	 
	  float: right;
	  font-size: 20px;
	  
	  color: green;
	  background-color: #D8BFD8;
	 

}
 a .in:hover{
     background-color: indigo;
    
}

div.d2{
			
			height: 30px;
			transition: width 9s, height 4s;
			transition-delay: 2s;			
			margin-left: 10px;
			
			
			
		}
		div.d2{
			
			
			height: 30px;
			animation-name: aaexp;
			animation-duration: 20s;
			position: relative;
			animation-direction: alternate;
            animation-iteration-count: infinite;




		}
		@keyframes aaexp{
			0%{
				
				left: 10px;
				top: 0px;
				

			}
					       
           100%{
           	    left:1000px;
           	    top:0px;
           }

		}
		input[type="submit"]:hover{
			background-color: red;
			background-image: linear-gradient(to top, red,  green);
		}
		input[type="text"]
		{
			border-radius: 30px;
			background-color: orange;
			size: 30px;
		}
		input[type="email"]
		{
			border-radius: 30px;
			background-color: orange;
			size: 30px;
		}
		
		#dr{
      color: red;
    }
		#dr:hover{
           color: black;

		}
</style>
	
</head>
    
<marquee> <a href="#"> any help contect: anurag.cs18@nitp.ac.in  </a>   &  <a href="#">    santosh.cs18@nitp.ac.in</a> </marquee>
<body bgcolor="#D8BFD8">
		
     


     <div style="float: left; font-size: 20px">
        <img src="ecell.jpg" style="height: 45px; width: 46px; padding: 1px;margin-left: 10px ">
      ecell Nit Patna 
    </div>
<div>
        <center>
      <span style="font-size: 40px; text-shadow: 10px 10px 10px ;height: 50px; box-shadow: 10px 10px 10px; width: 700px; text-align: center;  background-image: linear-gradient(to right, orange, yellow, green, yellow, indigo, violet);
        border-radius: 30px; " id="dr"><i> 
       ENTREPRENEURSHIP CELL NIT PATNA</i></span>



     </div>
     <br>
     <br>
       </center>
       <div style="float: right;  color:blue;padding: 5px;">
<a href="login.php" style="color: blue;font-size: 25px;">
  <?php echo $_SESSION["name"];
?>
</a>
        </div>
 <div class="ddd1" style="float: right;"> 


 
   <a href="logout.php" ><button style="width: 100px; " class="in" >Logout </button></a>
   
   
    <a href="galary.html"><button style="width: 100px; " class="in" > galary</button> </a>
    <input type="text" name="searchaw" style="width: 300px;height: 43px; size: 30px;border:none  ;background-color: pink;size: 30px; border-radius: 0px;" class="in" placeholder="search"><a >
    	<button style="border: solid black; background-color: black; color: white; height: 40px; "class="in"  >search</button>
 </div>
  


<div id="myNav" class="overlay" >
     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   <div id="h" class="overlay-content" style="float: left;">
     <a href="about1.html" ><span style="color: red;">About</span></a>
     <a href="about.html"> <span style="color: red;">Services </span></a>
     <a href="empresario.html"> <span style="color: red;">Empresasio </span></a>
    
     <a href="contect.html"> <span style="color: red;">Contact </span></a>
   </div>
 </div>


   <span style="font-size:50px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>
<script>
    function openNav() {
    document.getElementById("myNav").style.width = "30%";
  }

    function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>
  
 <div class="slideshow-container" >

<div class="mySlides fade">
    <div class="numbertext">1 / 8</div>
    <img src="aa1.jpg" style="width:100%; height: 600px;">
    <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">2 / 8</div>
    <img src="aa4.jpg" style="width:100%; height: 600px;" >
    <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">3 / 8</div>
    <img src="aa3.jpg" style="width:100%; height: 600px;">
    <div class="text">Caption Three</div>
</div>
<div class="mySlides fade">
    <div class="numbertext">4 / 8</div>
    <img src="aa6.jpg" style="width:100%; height: 600px;" >
    <div class="text">Caption four</div>
</div>
<div class="mySlides fade">
    <div class="numbertext">5 / 8</div>
    <img src="aa5.jpg" style="width:100%; height: 500px;" >
    <div class="text">Caption five</div>
</div>
<div class="mySlides fade">
    <div class="numbertext">6 / 8</div>
    <img src="bb2.jpg" style="width:100%; height: 600px;" >
    <div class="text">Caption six</div>
</div>
<div class="mySlides fade">
    <div class="numbertext">7 / 8</div>
    <img src="bb3.jpg" style="width:100%; height: 600px;" >
    <div class="text">Caption seven</div>
</div>
<div class="mySlides fade">
    <div class="numbertext">8 / 8</div>
    <img src="cc.jpg" style="width:100%; height: 600px;" >
    <div class="text">Caption eight</div>
</div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
    <span class="dot" onclick="currentSlide(4)"></span> 
    <span class="dot" onclick="currentSlide(5)"></span> 
    <span class="dot" onclick="currentSlide(6)"></span> 
    <span class="dot" onclick="currentSlide(7)"></span> 
    <span class="dot" onclick="currentSlide(8)"></span> 
</div>

<script>
   var slideIndex = 1;
   showSlides(slideIndex);

   function plusSlides(n) {
   showSlides(slideIndex += n);
   }

    function currentSlide(n) {
    showSlides(slideIndex = n);
  }

    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
   slides[slideIndex-1].style.display = "block";  
   dots[slideIndex-1].className += " active";
  }
</script>
	


<div>
   <h1 style="color: yellow; text-align: center;"> about enterpreneur cell</h1>   
  <h3 style="color: red; text-align: center; font-size: 30px;">Goal</h3>
  <p style="font-size: 30px; color: green;  margin-left: 30px;">
  The purpose of the cell is to develop individuals across socio economic backgrounds, who have the  
  courage  
  to dream, the drive to make a difference, the ability to believe in themselves and the persistence to   
  convert their thoughts into action. The cell works to prepare a pool of next generation entrepreneurs     
  who, through their dreams and action.
  </p>
</div>




<div class="d3" style="width: 100%; height: 300px; ">
	
  <h1 style="color: red; text-align: center;">	Have an Idea?</h1>
  <p style="font-size: 30px; margin-left: 30px; color: green;">
 	
 	
  Submit your idea to get opportunity to get Incubation at ENTREPRENEURCELL <br>NIT PATNA!  	

  A team of panelists and Angel Investors will assess your idea and <br> offer you funding upto 10Lakh rupees if your idea is worth it. </p>

  <br>
  <br>
  <a  href="login.php" name="Submit"  style="font-size: 40px; margin-left: 20px; 		 box-shadow: 10px 10px 10px; background-color: lightblue" id="i7"> Submit</a>
</div>
<div style=" height: 100px; width: 100%;">
	

</div>

<div >  
	
  <h1 style="margin-left: 500px;"> for any Sugection</h1>  
  

<form style="width:300px" action="#">  
  <div >  
    <label  style="font-size: 20px; margin-left: 500px;">Email </label>  <br>
   
    <input type="email"  name="email" placeholder="Email" style="width: 500px;  height: 40px; border-radius: 0px; background-color: lightgreen;  border: none white; margin-left: 500px;">  

  </div>  
  <div class="form-group">  
    <label style="font-size: 20px; margin-left: 500px;">discription</label>  <br>
   
   <textarea name="suggections" style="height:100px; width: 500px;  background-color: lightgreen;
   border: none; margin-left: 500px;">
   	
   </textarea>
  </div>  
    
<br>
  <button type="submit"  style="width: 100px; margin-left: 500px;" onclick="view()">submit</button>  
</form>  
  
</div>  
  <script type="text/javascript">
  	function view()
  	{
  		alert("suggections sended successfully !");
  	}
  </script>

<br>


<footer style="background-color: black;
"><center>
	<p style="color: white;">designed by : Anurag singh & Santosh kr </p>
	<a href="#" style="color: white;">contect : anurag.cs18@nitp.ac.in</a> <a href="#" style="color: white;">&   santosh.cs18@nitp.ac.in</a>
	</center>
	<br>
</footer>

</body>
</html>