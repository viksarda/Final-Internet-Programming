<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

</head>
<body>
<?php
$width = 10;
$height = 10;
$left = 0;
$top = 0;
$bottom = 0;
$right = 0;



if (isset($_GET['width'])){
	$width = $_GET['width'];
}
if (isset($_GET['height'])){
	$height = $_GET['height'];
}
if (isset($_GET['top'])){
	$top = $_GET['top'];
}
if (isset($_GET['left'])){
	$left = $_GET['left'];
}

if (isset($_GET['right'])){
	$right = $_GET['right'];
}

if (isset($_GET['bottom'])){
	$bottom = $_GET['bottom'];
}


	

?>

<form action="dimensions.php" method="GET">
				Width: <input type="Text" name="width" id="width" value="<?php echo $width;?>" > <br>
                Height: <input type="Text" name="height" id="height" value="<?php echo $height;?>" > <br><br><br>
                Move left in px: <input type="Text" name="right" id="right" value="<?php echo $right;?>" > <br>
                Move right in px: <input type="Text" name="left" id="left" value="<?php echo $left;?>" > <br>
                Move down in px: <input type="Text" name="top" id="top" value="<?php echo $top;?>" > <br>
                Move up in px: <input type="Text" name="bottom" id="bottom" value="<?php echo $bottom;?>" > <br><br>

				<input type="submit" value="Draw">
</form>

<div style="position: relative; width: <?php echo $width; ?>;  height: <?php echo $height; ?>; right: <?php echo $right; ?>px; left: <?php echo $left; ?>px; top: <?php echo $top; ?>px; bottom: <?php echo $bottom; ?>px;  background-color: black">


	
</body>
</html>