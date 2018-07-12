<!DOCTYPE html>
<html lang="en" ng-app="App">
<head>
	<meta charset="UTF-8">
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
	<script src="app.js"></script>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="shortcut icon" href="img/pizza.png" type="image">
	<title>CookBook2</title>
</head>
<body>
	<h1>Самая крутая кулинарная книга</h1>
	<div class="top" ng-controller='AppCont'>
		<a href="" class="btn" value="meat">Веганам</a>
		<a href="" class="btn">Мясное</a>
		<a href=""class="btn">Диетическое</a>
		<a href="" class="btn">Детям</a>
		<input type="text" id="search" placeholder="Введите название рецепта">
		<input type="button" value="Найти">
		<a href="" class="btn"   ng-click="ShowButtons()" onclick="Show()">Ингридиенты</a>
		<a href="" class="btnx" onclick="Hide()">X</a>
		<a href="" class="btnh">Салями</a>
		<a href="" class="btnh">Говядина</a>
		<a href="" class="btnh">Яйцо куриное</a>
		<a href="" class="btnh">Мука</a>
		<a href="" class="btnh">Вода</a>
<script>
	$(document).ready(function(){
		Hide();
		// var vis = document.getElementByClassName('btnh').style.visibility;
		// var vis = $('btnh')elem.style.visibility;
		// console.log(vis);
	})
	function Hide(){
		// $('.btnh').animate({height: "hide"}, 1000);
		$('.btnh').hide();

	}
	function Show(){
		$('.btnh').show();
		// $('.btnh').animate({margin: "+=200px"}, 1000);
		
		
	}
</script>
	</div>
	<!-- <div class="content">
		<div class="db">
		<?php include 'data.php';?>	
		</div>
	</div> -->

</body>
</html>