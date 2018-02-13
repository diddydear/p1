<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>P1</title>
  <meta name="description" content="P1">
  <meta name="" content="">

 
 <style>
 
 .mainbox {
 margin-left:auto;
 margin-right:auto;
 max-width:600px;
 	font-family: Tahoma, Geneva, sans-serif;
		color: #666;
 }
 .box1 {
	padding: 10px;
	background-color: #F2F2F2;
	margin-bottom: 15px;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #CCC; 
 }
 .imagebox {
	 width: 200px;
	 padding: 10px;
	 
 }
 </style>

</head>

<body>
<div class="mainbox">
<div class="box1">
    <img src="Photo_Edidiong.jpg" width="300px">
  </div>

  <div class="box1">
    <h3>My Name is Edidiong Amos</h3>
  </div>
  <div class="box1 clearfix">
      My name is Edidiong. I'm Nigerian and I live in Abuja. I'm taking this course as part of the prerequisite course in fulfilling my degree requirement. I'm enthusiastic about programming because of my interest in web GIS. I hope to develop solutions that can solve real live problems especially in the environment domain.
  </div>

  <?php
  $quotes[] = 'Life is a race, beat it';
  $quotes[] = 'You have what it takes, embrace it!';
  $quotes[] = 'Having an \'A\' isn\'t  rocket science, live with it.';
  $random_number = rand(0,count($quotes)-1);
  echo ($quotes[$random_number]);
?>

</div>
</body>
</html>