<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Gabim</title>
<?php include 'css/css.html'; ?>
</head>
<body>
<div class="form">
<h1>GABIM</h1>
<p>
<?php 
if( isset($_SESSION['mesazhi']) AND !empty($_SESSION['mesazhi']) ): 
echo $_SESSION['mesazhi'];    
else:
header( "location: index.php" );
endif;
?>
</p>     
<a href="index.php"><button class="button button-block"/>Provoni Përsëri</button></a>
</div>
</body>
</html>
