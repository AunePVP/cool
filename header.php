<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://code.muehlhaeusler.online/html/html/style/style-template/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <nav>
	<div class="logo-image">
            <a href="http://code.muehlhaeusler.online/html"><img src="http://code.muehlhaeusler.online/html/html/8764.svg" class="img-fluid">
      </div>
      <div class="menu-icon">
<span class="fas fa-bars"></span></div>
<div class="logo">
<p><a href="http://code.muehlhaeusler.online"
style="text-decoration: none">Startseite</a></p>
</div>
<div class="nav-items">
<li><a href="#">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Blogs</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Feedback</a></li>
</div>
<div class="search-icon">
<span class="fas fa-search"></span></div>
<div class="cancel-icon">
<span class="fas fa-times"></span></div>
</nav>
    <div class="content">
      <div class="space text">
</div>
<script>
    const menuBtn = document.querySelector(".menu-icon span");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const form = document.querySelector("form");
    menuBtn.onclick = ()=>{
      items.classList.add("active");
      menuBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
    cancelBtn.onclick = ()=>{
      items.classList.remove("active");
      menuBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      form.classList.remove("active");
      cancelBtn.style.color = "#ff3d00";
    }
  </script>
