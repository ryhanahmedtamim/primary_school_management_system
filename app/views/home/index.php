<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Primary School Management System</title>
        <link rel ="stylesheet" type ="text/css" href ="../css/stylehome.css">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <script src="https://code.jquery.com/jquery-3.2.1.js">
  </script>
  <script type="text/javascript">
   $(window).on('scroll', function() {
    if($(window).scrollTop()) {
     $('nav').addClass('black');
    }
    else {
     $('nav').removeClass('black');
    }
   })
 
  </script>
  <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    
    </head>
    <body>
        <nav>
            <div class="logo">
                <img src="image/ku.png">  
            </div>
            <h1 class="entry-title">
            <ul>
                 <hr>
                 <li> <a href="public" > Home</a> </li>
                <hr>
                  <li> <button onclick="document.getElementById('id01').style.display='block'" >Login</button> </li>
                  <hr>
                  
                    <li> <a href="#"> About Us</a> </li>
                    <hr>
            </ul>
                 </h1>
        </nav>


        
         <div > 

                               <?php
                               if($data != null){ ?> <div id="snackbar"><?php 
                                if($data == "Thisemailorpasswordisnotmatch")
                                  {
                                    echo "E-mail or password does not match";
                                  }
                                  ?>
                                  
                                </div>

                                <?php                               

                               echo '<script>
                                 var x = document.getElementById("snackbar")
                                 x.className = "show";
                                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 6000);
                                 </script>';
                              }
                            ?> 
                            </div>

       
        <div id="id01" class="modal">
  
  <form class="form-style-4" action="login/login" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
   
    </div>

 
        
    <label for="field1">
<span>E-mail</span><input type="text" name="email" required/>
</label>
    <label for="field1">
        <span>Your Password</span><input type="password" name="password" required />
</label>
        
    <label>
<span>&nbsp;</span><input type="submit" value="Submit" />
</label>
      
  </form>
</div>
<div class="slideshow-container">

<div class="myslides fade">
<div class="numbers">1 / 3</div>
<img src="image/a.jpg"  alt="Avatar" class="image"style= "  width: 100%;
    height:95vh; background-size:cover;" ></div>
      <div class="middle">
<div class="text">Welcome to
    <p> New Children  Grace  School</p> 
    <p1> Dhanmondi 23/A, Dhaka-1204</p1>
    <hr>
    <p2>At New Children  Grace  School we believe that we are all what nature and nurture have made us. Our school motto is ‘Nurture, Inspire, Flourish’</p2>
</div>
      </div>
</div>

<div class="slideshow-container1">
<div class="myslides fade">
<div class="numbers">2 / 3</div>
<div><img src="image/b.jpg"  alt="Avatar" class="image"style="  width: 100%;
    height:95vh; background-size:cover;" ></div>
  <div class="middle">
<div class="text"> TEXT 2</div>
  </div>
</div>
</div>
<div class="slideshow-container2">
<div class="myslides fade">
<div class="numbers">3 / 3</div>
<div><img src="image/c.jpg"  alt="Avatar" class="image"style= "  width: 100%;
    height:95vh; background-size:cover;" ></div>
<div class="middle">
    <div class="text">Text 3</div>
</div>
</div>
</div>




<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
<span class="dots" onclick="currentSlide(1)"></span> 
<span class="dots" onclick="currentSlide(2)"></span> 
<span class="dots" onclick="currentSlide(3)"></span> 

</div>

<script type="text/javascript">
var slideIndex = 1;
showSlide(slideIndex);

function plusSlides(n){
showSlide(slideIndex += n);
}

function currentSlide(n) {
showSlide(slideIndex = n);
}

function showSlide(n){
var i;
var slides = document.getElementsByClassName("myslides");
var dots = document.getElementsByClassName("dots");
if (n > slides.length) { slideIndex = 1};
if (n < 1) { slideIndex = slides.length};
for (i=0;i<slides.length;i++) {
slides[i].style.display = "none";
};
for (i=0;i<dots.length;i++) {
dots[i].className = dots[i].className.replace(" active","");
};
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
}

    

</script>

<section class= "content"> 
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>News</b></h1>
  <p> latest news update</span></p>
</header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="image/1.jpg" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b>Good teaching environtment</b></h3>
      <h5>Title description, <span class="w3-opacity">April 7, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
        </div>
       
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="image/2.jpg" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b>Excellence in Studies</b></h3>
      <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
        </div>
       
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>


<div class="w3-col l4">

  <div class="w3-card w3-margin w3-margin-top">
  <img src="image/3.jpg" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>First prize in Debate</b></h4>
      <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
    </div>
  </div><hr>
  
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Teacher Lists</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
       
        <span class="w3-large">Abir</span><br>
         <span>Bangla</span>
      </li>
      <li class="w3-padding-16">
     
        <span class="w3-large">Tamim</span><br>
       <span>ICT</span>
      </li> 
      <li class="w3-padding-16">
        
        <span class="w3-large">sohel</span><br>
      <span>Arabic</span>
      </li>   
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
       
        <span class="w3-large">Rodosy</span><br>
      <span>English</span>
      </li>  
    </ul>
  </div>
  <hr>
  
        </section>
         <section class ="sec2"></section>
          <section class ="sec3"></section>
    </body>
</html>
