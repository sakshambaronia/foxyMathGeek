<?php 
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Include the bootstrap library -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Include the AngularJS library -->
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular-route.js"></script>
<!-- Include the jquery library -->

</head>
<body ng-app="foxyApp">

<h2><center>Math Geek</center></h2>

<form class='formFoxy'>
<div class="container" style="text-align:center">
    <div id="primeNo" style="margin:2%">
        <button class="btn btn-lg btn-primary"><a href="#prime" style="color: #f5f5f5;">Click to check if a number is prime </a></button>
    </div>
    <div id="palindromeStr" style="margin:2%">
        <button class="btn btn-lg btn-primary"><a href="#palindrome" style="color: #f5f5f5;">Click to check if a string is palindrome </a></button>   
    </div>
    <div id="fiboniacciSr" style="margin:2%">
        <button class="btn btn-lg btn-primary"><a href="#fibonacci" style="color: #f5f5f5;">Click to print fibonacci series of a number </a></button>
    </div>

</div>
</form>
<div>
    <ng-view></ng-view>
</div>

</body>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/router.js"></script>
<script type="text/javascript" src="js/foxyController.js"></script>
<script type="text/javascript" src="js/foxyService.js"></script>
</html>