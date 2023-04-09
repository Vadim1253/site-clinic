<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<? 
	// $mysqli = new mysqli("localhost", "root", "root", "test250223"); 
	// $mysqli->set_charset("utf8mb4"); 
	// $result = $mysqli->query('SELECT * FROM test250223'); 
	require_once "./function/conn.php";
	$sl=Slider(3,$_GET["id"]);
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">
	<title>Hello, world!</title>
</head>
<body>
	<header>
		<div class="d-flex g-0 header">
			<div class="col-sm-6 col-md-6">
			<div class="d-flex flex-row bd-highlight">
			<div class="bd-highlight logo">LOGO</div>
			<div class="d-flex flex-column bd-highlight col2">
				<div class="bd-highlight pa1" id="city">Ростов-на-Дону</div>
				  <div class="bd-highlight pa2" id="street">ул. Ленина, 2Б</div>
			</div>
		
		</div></div>
			<div class="col-6 col-md-6 d-flex">
				<div class="num" id="num">+7(863) 000 00 00</div>
				<button type="button" class="header_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Записаться на прием</button>
			</div>
		  </div>

		
		  <div class="bottom-0 end-50"></div>
	<nav class="navbar navbar-expand-lg navbar-light menu" id="menu">
  <div class="container-fluid">
	<!-- <div class="cont"> -->
    <button onclick="hide_headbtn()" id="openm" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	<button onclick="sh_headbtn()" class="btn-close navbar-toggler" id="hidem" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span></span></button>
	  

	<!-- <button type="button" class="btn-close navbar-toggler" data-bs-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation"></button> -->
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav start-10">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="#">О клинике</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Услуги</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Специалисты</a>
        </li>
		<li class="nav-item">
			<a class="nav-link text-white" href="#">Цены</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link text-white" href="#">Контакты</a>
		  </li><li class="nav-item"></li>
		  <button type="button" class="header_btn-menu" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Записаться на прием</button></li>
      </ul>
    </div>
  </div>
</nav>

</header>
<main>
<div class="row shap">
    <div class="col gl"><div class="gl-text">
		<strong>Многопрофильная клиника для детей и взрослых</strong><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
    </div></div>
    <div class="col">
		<img src="./img/g1.png" class="img-fluid" alt="Клиника">
    </div>
  </div>

  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
	<div class="carousel-indicators">
	  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
	  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<?
// 	$link = mysqli_connect("localhost", "root", "root", "test250223" );
// 	if ($link == false){
// 		print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
// 	}
// 	$sql = 'SELECT id, name FROM slider';

// $result = mysqli_query($link, $sql);

// while ($row = mysqli_fetch_array($result)) {
//     print("<p>Город: " . $row['title'] . "; Идентификатор: . " . $row['id'] . "<p><br>");
// }
	?>
	<div class="carousel-inner">
	<?php
	for($i = 0; $i < count($sl); $i++){
		if($i == 1){echo "<div class=\"carousel-item active\">";}
		else{echo "<div class=\"carousel-item\">";}
		echo "<img src=\"./img/g".$sl[$i]["id"].".png\" class=\"rounded mx-auto d-block img-fluid\" alt=\"".$sl[$i]["title"]."\">
		<div class=\"carousel-caption d-none d-md-block\">
			<div class=\"va\">
		  		<h5 class=\"vatitle\">".$sl[$i]["title"]."</h5>
		  		<p class=\"vatext\">".$sl[$i]["ftext"]."</p>
		  	</div>
		</div>
	  </div>";
	}?>
	  
	  <!-- <div class="carousel-item">
		<img src="./img/g1.png" class="rounded mx-auto d-block" alt="...">
		<div class="carousel-caption d-none d-md-block">
			<div class="va">
		  <h5 class="vatitle">Метка второго слайда</h5>
		  <p class="vatext">Некоторый репрезентативный заполнитель для второго слайда.</p></div>
		</div>
	  </div>
	  <div class="carousel-item">
		<img src="./img/g1.png" class="rounded mx-auto d-block" alt="...">
		<div class="carousel-caption d-none d-md-block"><div class="va">
		  <h5 class="vatitle">Метка третьего слайда</h5>
		  <p class="vatext">Некоторый репрезентативный заполнитель для третьего слайда.</p></div>
		</div>
	  </div> -->
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="visually-hidden">Предыдущий</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="visually-hidden">Следующий</span>
	</button>
  </div>
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Связь с нами</strong>
    <!-- <small>11 мин. назад</small> -->
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Закрыть"></button>
  </div>
  <div class="toast-body">
	Напишите нам на почту
    <input type="email" id="email" placeholder="Введите вашу почту" required maxlength="50">
	<textarea name="massage" id="massage" cols="30" rows="10" placeholder="Введите текст письма" required></textarea>
	<input type="submit">
  </div>
</div>
<!-- <button type="button" class="btn btn-submail" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Напишите нам на почту</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	  <form action="./function/submmail.php" method="POST">
      <div class="modal-body">
	  <input type="email" id="email" name="email" placeholder="Введите вашу почту" required maxlength="50">
	<textarea name="massage" id="massage" cols="30" rows="10" placeholder="Введите текст письма" required></textarea>
	<!-- <input type="submit"> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-submail">Отправить</button></form>
      </div>
    </div>
  </div>
</div>
  <!-- <div class="va">gf</div> -->
</main>

	<!-- font-family: 'Roboto', sans-serif; -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script>
		var btnmenu1 = document.getElementById("hidem");
		  btnmenu1.classList.add("none");
		  var btnmenu2 = document.getElementById("openm");
		  var menu = document.getElementById("menu");
		  
		  function hide_headbtn(){
			  btnmenu2.classList.add("none");
			  btnmenu1.classList.remove("none");menu.classList.remove("menuclose");
			  menu.classList.add("menuopen");
		  }
		  function sh_headbtn(){
			  btnmenu2.classList.remove("none");
  
			  btnmenu1.classList.add("none");menu.classList.remove("menuopen");
			  
			  //setTimeout(function() {menu.classList.add("menuclose");}, (100));//menu.classList.remove("menuopen");
		  }
		  var menu = document.getElementById("menu");
		  var w=window.innerWidth;
		  var street = document.getElementById("street").innerHTML;
				  var city = document.getElementById("city").innerHTML;
				  var num = document.getElementById("num").innerHTML;

		  window.onresize=function(){
			  w=window.innerWidth;
			  
			  if(w<=575){menu.classList.add("cont");menu.classList.remove("container-fluid");
				  document.getElementById("street").textContent=city;
				  document.getElementById("city").textContent=num;
				  document.getElementById("city").classList.add("num");
				  document.getElementById("street").classList.add("px13");
			  
				  // document.getElementById('mail').value;
				  
				  // c=city.innerHTML;
				  // street.innerHTML=c;
				  // city.textContent=num.innerHTML;
			  }
			  else if(w<=991){menu.classList.add("cont");menu.classList.remove("container-fluid");
			}
			  else{menu.classList.add("container-fluid");menu.classList.remove("cont");
				document.getElementById("street").textContent=street;
				  document.getElementById("city").textContent=city;
				  document.getElementById("city").classList.remove("num");
				  document.getElementById("street").classList.remove("px13");
			  }
		  }
		</script>
</body>
</html>
