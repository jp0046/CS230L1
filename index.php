<?php
require 'includes/header.php';
?>


<main>
<title>Naruto</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1 {font-family: "Montserrat", sans-serif}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}
</style>
<body>



<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<div class="w3-opacity">
 
<div class="w3-clear"></div>
<header class="w3-center w3-margin-bottom">
  <h1 style="padding-top: 30px"><b>Naruto Background Site</b></h1>
  <p><b>Welcome, my name is Jordan Page and I am a huge naruto fan. I also love myself a good naruto background. I created <br>this site for users to upload their favorite backgrounds, and the community can rate/review them. <br> Create your own account <a href="signup.php"><i>here!</i> </a> </b></p>
  
</header>
</div>

<!-- Photo Grid -->
<div class="w3-row" id="myGrid" style="margin-bottom:128px">
  <div class="w3-third">
    <img src="/images/i4.png" style="width:100%">
    <img src="/images/i5.png" style="width:100%">
    <img src="/images/i6.png" style="width:100%">
    <img src="/images/i7.png" style="width:100%">
    <img src="/images/i8.jpg" style="width:100%">
    <img src="/images/i9.jpg" style="width:100%; height: 339px">
  </div>

  <div class="w3-third">
    <img src="/images/i10.jpg" style="width:100%">
    <img src="/images/i11.png" style="width:100%">
    <img src="/images/i12.jpg" style="width:100%">
    <img src="/images/i13.png" style="width:100%">
    <img src="/images/i14.png" style="width:100%">
    <img src="/images/carousel1.jpg" style="width:100%;  height: 314px">
  </div>

  <div class="w3-third">
    <img src="/images/i15.jpg" style="width:100%">
    <img src="/images/i16.jpg" style="width:100%">
    <img src="/images/i17.jpg" style="width:100%">
    <img src="/images/i18.jpg" style="width:100%">
    <img src="/images/i19.jpg" style="width:100%">
    <img src="/images/carousel3.jpg" style="width:100%">
    <img src="/images/i20.png" style="width:100%; height:312px">
  </div>
</div>

<!-- End Page Content -->
</div>

<?php
require 'includes/footer.php';
?>
 
<script>
// Toggle grid padding
function myFunction() {
  var x = document.getElementById("myGrid");
  if (x.className === "w3-row") {
    x.className = "w3-row-padding";
  } else { 
    x.className = x.className.replace("w3-row-padding", "w3-row");
  }
}

// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.width = "100%";
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</main>

