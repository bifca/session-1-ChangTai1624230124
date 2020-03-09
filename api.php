<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Weather</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
  <h2>Weather</h2>
    <div class="row">
<div class='col-xs-12 col-sm-6 col-lg-4'>
<?php
$response = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=TaiYuan&appid=b7dbe7c915e7b706d960a1973f5215c8');
$response = json_decode($response);
echo '<h4>City:</h4>';
echo  $response->name;
echo '<h4>Temperature:</h4>';
echo $response->main->temp;
echo '<h4>Weather:</h4>';
echo $response->weather[0]->main;
?>
</div>

<div class='col-xs-12 col-sm-6 col-lg-4'>
<?php
$response = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=WuHan&appid=b7dbe7c915e7b706d960a1973f5215c8');
$response = json_decode($response);
echo '<h4>City:</h4>';
echo  $response->name;
echo '<h4>Temperature:</h4>';
echo $response->main->temp;
echo '<h4>Weather:</h4>';
echo $response->weather[0]->main;
?>
</div>

<div class='col-xs-12 col-sm-6 col-lg-4'>
<?php
$response = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=ShangHai&appid=b7dbe7c915e7b706d960a1973f5215c8');
$response = json_decode($response);
echo '<h4>City:</h4>';
echo  $response->name;
echo '<h4>Temperature:</h4>';
echo $response->main->temp;
echo '<h4>Weather:</h4>';
echo $response->weather[0]->main;
?>
</div>

<div class='col-xs-12 col-sm-6 col-lg-4'>
<?php
$response = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Beijing&appid=b7dbe7c915e7b706d960a1973f5215c8');
$response = json_decode($response);
echo '<h4>City:</h4>';
echo  $response->name;
echo '<h4>Temperature:</h4>';
echo $response->main->temp;
echo '<h4>Weather:</h4>';
echo $response->weather[0]->main;
?>
</div>


<div class='col-xs-12 col-sm-6 col-lg-4'>
<?php
$response = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Tokyo&appid=b7dbe7c915e7b706d960a1973f5215c8');
$response = json_decode($response);
echo '<h4>City:</h4>';
echo  $response->name;
echo '<h4>Temperature:</h4>';
echo $response->main->temp;
echo '<h4>Weather:</h4>';
echo $response->weather[0]->main;
?>
</div>


<div class='col-xs-12 col-sm-6 col-lg-4'>
<?php
$response = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=London&appid=b7dbe7c915e7b706d960a1973f5215c8');
$response = json_decode($response);
echo '<h4>City:</h4>';
echo  $response->name;
echo '<h4>Temperature:</h4>';
echo $response->main->temp;
echo '<h4>Weather:</h4>';
echo $response->weather[0]->main;
?>
</div>


<div class='col-xs-12 col-sm-6 col-lg-4'>
<?php
$response = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Birmingham&appid=b7dbe7c915e7b706d960a1973f5215c8');
$response = json_decode($response);
echo '<h4>City:</h4>';
echo  $response->name;
echo '<h4>Temperature:</h4>';
echo $response->main->temp;
echo '<h4>Weather:</h4>';
echo $response->weather[0]->main;
?>
</div>


<div class='col-xs-12 col-sm-6 col-lg-4'>
<?php
$response = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=New York&appid=b7dbe7c915e7b706d960a1973f5215c8');
$response = json_decode($response);
echo '<h4>City:</h4>';
echo  $response->name;
echo '<h4>Temperature:</h4>';
echo $response->main->temp;
echo '<h4>Weather:</h4>';
echo $response->weather[0]->main;
?>
</div>


<div class='col-xs-12 col-sm-6 col-lg-4'>
<?php
$response = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Los Angeles&appid=b7dbe7c915e7b706d960a1973f5215c8');
$response = json_decode($response);
echo '<h4>City:</h4>';
echo  $response->name;
echo '<h4>Temperature:</h4>';
echo $response->main->temp;
echo '<h4>Weather:</h4>';
echo $response->weather[0]->main;
?>
</div>


<div class='col-xs-12 col-sm-6 col-lg-4'>
<?php
$response = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Sydney&appid=b7dbe7c915e7b706d960a1973f5215c8');
$response = json_decode($response);
echo '<h4>City:</h4>';
echo  $response->name;
echo '<h4>Temperature:</h4>';
echo $response->main->temp;
echo '<h4>Weather:</h4>';
echo $response->weather[0]->main;
?>
</div>

</div>
</div>


</body>
