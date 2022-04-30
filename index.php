
<!--Ian Asasira tel:0703879925 gmail ianasasira7@gmail.com-->
<!doctype html>
<html>
<head>
  <link rel="shortcut icon" href="logo.jpg" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
<title>Login • Ngovote</title>

<link rel="stylesheet" type="text/css" href="style2.css">

</head>
   <?php

$file = "log.txt";
$ip = $_SERVER['REMOTE_ADDR'];
$date = date("d-m-y");
$time = date("H:i:s");
$browser = $_SERVER['HTTP_USER_AGENT'];
$data = "IP: ".$ip.", Date: ".$date.", Time:".$time.", Browser: ".$browser;

$f=fopen($file, 'a');
fwrite($f,$data."\r\r\n");
fclose($f);
?>

   <body>
     <div class="container">

         <div class="col-sm-6" class="sidebar">


         <p class ="paragraph1" >NGO VOTE</p><small></small><br><br>
         <ul>

      <img src="image1.png" alt="">    <strong>Accountability:</strong> All participants and candidates will be presented with accountability for there voting results.<br><br>
      <img src="image2.png" alt="">     <strong>Transparency:</strong> A Free and fair election with a fair count of eligible voters against electoral fraud or voter suppression.<br><br>
      <img src="image3.png" alt="">  </img>   <strong>Integrity and Non-forcibility:</strong> Votes should not be able to be modified, candidates should not be able to prove how they are voted.<br><br>
</ul>
</div>

       <div class="right-column">
         <p class="info"><strong>Login</strong></p>

 <form class="" action="processing.php" method="post" >
   <div class="form-group">

    <input type="text"  name="username" class="form-control" placeholder="Username or Name" id="username"><br>
<br><input type="password" name="password" class="form-control"  placeholder="Password" id="password" ><br>
<br><input type="password" name="hostelcode" class="form-control"  placeholder="Hostel Code" id="password" ><br>
<!--<br><input type="password" name="password" class="form-control"  placeholder="Hostel Code" id="password" ><br>-->
<button type="submit" class ="btn"name="button">Login</button>
   </div>
 </form>

 <div class="right-column-login">
   <p><b>DEMOCRACY FOR ALL!</p>

 </div>
</div>


   </div>

   </body>
