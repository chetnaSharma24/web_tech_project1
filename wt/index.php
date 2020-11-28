<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="contact.css">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!--map script -->
  <script src="https://apps.elfsight.com/p/platform.js" defer></script>

  
</head>
  <body>
  <div class="navbar" >
    <nav id="myHeader" style="background-color:  #fff" >
  
  <ul class="menu-area ">
   <li><a href="index" style="color: blueviolet;padding-right:12em;"><h5> Battling<i> Covid </i>Together</h5></a> </li> 

  <li><a href="index.html">Home</a></li>
  <li><a href="#statistics">Covid-19 Statistics</a></li>
  <li><a href="#">Cart</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="login.html">SignUp</a></li>
  </ul>
  </nav> 
  <hr>
  <br>
  </div>
<div style="background-color: burlywood; height:15em;margin:15px;" class="content">
  <table style="margin:20px 20px 20px 20px;">
    <tr> 
      <td style="width:40%; height:50px;padding-left:25px;"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, odio nostrum ab suscipium,
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error culpa aspernatur at, 
    nesciunt ipsum mollitia voluptas illo repellendus perspiciatis ipsam! </td>  
  <td style="width:40%; height:50px; text-align:center;padding-top:30px;">
    <img src="../images/logo.jpeg" style="height:150px; width:150px;border-radius:70px;">
  </td>
  <td style="width:30%; height:50px;">
    <button type="button" class="btn btn-info">Register Here</button>
  </td>
  </tr>
  </table>
</div>
<br><br>


<div style="text-align: center;">
  <h4>Click on the image to get the Latest Deals on trending categories!!</h4><hr>
</div><br>
<div class="slideshow-container">
  <div class="mySlides1">
  <a href="#mask">  <img src="../images/m1.jpg" style="width:100%;height:25em;"></a>
  </div>

  <div class="mySlides1">
    <img src="../images/s3.jpg" style="width:100%;height:25em;">
  </div>

  <div class="mySlides1">
    <img src="../images/shield.jpg" style="width:100%;height:25em;">
  </div>
  <div class="mySlides1">
    <img src="../images/gloves.jpg" style="width:100%;height:25em;">
  </div>
  <div class="mySlides1">
    <img src="../images/ppe.jpg" style="width:100%;height:25em;">
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>
<br>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 

</div>
<br>
<br>

<!--categories-->

<div class="container" id="mask">
 
  <div class="blocka" id="block1">
      <div class="images">
          
             <img src="../images/pic6.jpg"> 
             <br>
             <button type="button" class="btn btn-success">Buy Now</button>
        
             <button type="button" class="btn btn-info">Add to Cart</button>
            </div>
  </div>

  <div class="blockb" id="block2">
    <div class="images">
          <img src="../images/m1.jpg">
          <br>
          <button type="button" class="btn btn-success">Buy Now</button>
        
          <button type="button" class="btn btn-info">Add to Cart</button>
         
    </div>
  </div>
  <div class="blockb" id="block1">
    <div class="images">
          <img src="../images/m2.jpg">
          <br>
          <button type="button" class="btn btn-success">Buy Now</button>
          
          <button type="button" class="btn btn-info">Add to Cart</button>
         
    </div>
  </div>
 

<div class="blockb" id="block2">
  <div class="images">
        <img src="../images/m2.png">
        <br>
        <button type="button" class="btn btn-success">Buy Now</button>
        
        <button type="button" class="btn btn-info">Add to Cart</button>
       
  </div>
</div>

<div class="blocka" id="block1">
  <div class="images">

    <img src="../images/d1.png">
    <br>
    <button type="button" class="btn btn-success">Buy Now</button>
        
    <button type="button" class="btn btn-info">Add to Cart</button>
   
  </div>
</div>
<div class="blockb" id="block2">
  <div class="images">
        <img src="../images/pic7.jpg" >
        <br>
        <button type="button" class="btn btn-success">Buy Now</button>
        
          <button type="button" class="btn btn-info">Add to Cart</button>
           </div>
</div>
<div class="blockb" id="block2">
  <div class="images">
        <img src="../images/d2.jpg" ><br>
        <button type="button" class="btn btn-success">Buy Now</button>
        
          <button type="button" class="btn btn-info">Add to Cart</button>
         
  </div>
  
</div>
<div class="blockb" id="block2">
  <div class="images">
        <img src="../images/d3.jpg" >
        <br>
        <button type="button" class="btn btn-success">Buy Now</button>
        
        <button type="button" class="btn btn-info">Add to Cart</button>
        </div>
</div>

<div class="blockb" id="block2">
  <div class="images">
        <img src="../images/d2.jpg" ><br>
        <button type="button" class="btn btn-success">Buy Now</button>
        
        <button type="button" class="btn btn-info">Add to Cart</button>
       
  </div>
  
</div>



<div class="container">
  <div style="text-align: center;">
   <h3>Latest deals !!! Buy 1 get 2 free !!</h3> <hr></div>

  <div class="blockb" id="block2">
    <div class="images">
          <img src="../images/d2.jpg" ><br>
          <button type="button" class="btn btn-success">Buy Now</button>
        
          <button type="button" class="btn btn-info">Add to Cart</button>
         
    </div>
    
  </div>
  <div class="blockb" id="block2">
    <div class="images">
          <img src="../images/d3.jpg" >
          <br>
          <button type="button" class="btn btn-success">Buy Now</button>
        
          <button type="button" class="btn btn-info">Add to Cart</button>
             </div>
  </div>
  
  <div class="blockb" id="block2">
    <div class="images">
          <img src="../images/d2.jpg" ><br>
          <button type="button" class="btn btn-success">Buy Now</button>
        
          <button type="button" class="btn btn-info">Add to Cart</button>
         
    </div>
    
  </div>
  
</div>
</div>
<!--categoris end-->

<!--latest news slider-->


<div style="text-align: center;">
  <h4>Facts About Covid!!!</h4><hr>
</div>
<br>
<div class="slideshow-container">
  <div class="mySlides2">
    <a href="#mask"> <img src="../images/cgreet.jpg" style="width:100%;height:25em;"></a>
  </div>

  <div class="mySlides2">
    <img src="../images/chealth.png" style="width:100%;height:25em;">
  </div>

  <div class="mySlides2">
    <img src="../images/masks.jpg" style="width:100%;height:25em;">
  </div>

  <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 

</div>
<br>
<br>


<!--end slide show-->



<!--covid statistics-->

<div class="container" style="text-align: center;"id="statistics">
  <div class="elfsight-app-91a96aa8-e76e-45ab-a923-a714a81066ff"></div>
</div>
<!-- end statistics-->
<!-- contact start-->
<section id="contact">
<div class="container">
  <h2 class="section-title" style="font-weight: bolder;">
      CONTACT US
  </h2>

 
    <form name="myform"  method="post" action="contact.php" onsubmit="return validateform();">  
      <label for="name">*Email</label>
      <input type="text"  id="email" name="email" size="70"><br/>  
        <label for="name">*Name</label>
        <input type="text" name="name" id="name" size="70">
        <label for="msg">*Message</label>
          <textarea  id="msg" name="msg" style="width:60%"></textarea>
     <div>
      <button type="submit" class="btn btn-success">Send message</button>
  
      </div> 
       </form>  
  


 
</div>
</section>
<!--contact end-->

<!--end of categories-->
<!--contact us script-->
<script>  
  function validateform()  
  {  
  var x=document.myform.email.value;
  var y=document.myform.name.value;  

  var atposition=x.indexOf("@");  
  var dotposition=x.lastIndexOf(".");  
  if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
    alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
    return false;  
    } 
  if(y==""){
  alert("name field empty");
  return false;
   }
   if(x==""){
  alert("Subject  field empty");
  return false;
   }
  }  
  </script>  
    <!--contact us script end--> 
  <!--slider script -->
<script>

  var slideIndex = [1,1];
  var slideId = ["mySlides1", "mySlides2"]
  showSlides(1, 0);
  showSlides(1, 1);
  function currentSlide(n) {
  showSlides(slideIndex = n);
}
  function plusSlides(n, no) {
    showSlides(slideIndex[no] += n, no);
  }
  
  function showSlides(n, no) {
    var i;
    var x = document.getElementsByClassName(slideId[no]);
    if (n > x.length) {slideIndex[no] = 1}    
    if (n < 1) {slideIndex[no] = x.length}
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    x[slideIndex[no]-1].style.display = "block";
  
    setTimeout(showSlides, 2000); // Change image every 2 seconds

    

  }
  </script>
  <!-- slider script end-->
  <!--header stable-->
  <script>
    window.onscroll = function() {myFunction()};
    
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
    </script>
    <!--end header script-->
</body>
<?php
include 'connection.php';
?>

</html>