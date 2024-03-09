<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taylor Swift's Evermore Album</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lora:wght@400&family=Dancing+Script:wght@400&display=swap">
    <style>
        body {
            background-image: url(../img/c1.jpg); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            font-family: Lobster; /* Use Georgia as the default font */
            text-align: center;
        }

        h1 {
            font-size: 12.5em;
            color: #800000; /* Set your title color */
			text-shadow: 15px 9px 5px white; /* Add white shadow with offset and blur */
        
        }
		h2 {
            font-size: 3.125em;
            color: #800000; /* Set your h2 color */
			text-shadow: 6px 6px 3px white; /* Add white shadow with offset and blur */
            margin-left: 250px; /* Adjust the margin as needed */
			margin-top: -170px;
        }
	    h3 {
            font-size: 60px;
            color: #ffff;
            font-family: Century Gothic;
            background-color: #800000;
            text-align: center;
            margin:0%;
            padding: 0px;
			font-size: 20px;
            position: fixed;
            top: 59;
			left: 35%;
            width: 30%;
			height: 5%; 
		}

        p {
            font-size: 1.2em;
            line-height: 1.6;
        }
		

		button {
            padding: 10px 20px;
            margin: 5px;
			font-family: Lora;
            font-size: 25px;
            background-color: #FEFEFA;
            color: maroon;
            border: none;
            border-radius: 70px;
            cursor: pointer;
			margin-top: 70px;
        }

        button:hover {
            background-color: #800000;
            color: white;
        }
		footer {
            background-color: #800000;
            color: #faf9f6;
            padding: 10px;
			font-family: Century gothic;
			font-size: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
			height: 5%;
        }

        footer img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <h1>Evermore</h1>
	<h2>Taylor's Version</h2>
	<h3>Tracks</h3>
    <p></p>
</body>
</html>

<?php
// Handle button clicks
if (isset($_POST["Evermore"])) {
    header("Location: http://localhost/song1.php/");
    exit();
} elseif (isset($_POST["Dorothea"])) {
    header("Location: http://localhost/song2.php/");
    exit();
} elseif (isset($_POST["Closure"])) {
    header("Location: http://localhost/song3.php/");
    exit();
} elseif (isset($_POST["Champagne_Problems"])) {
    header("Location: http://localhost/song4.php/");
    exit();
} elseif (isset($_POST["Coney_Island"])) {
    header("Location: http://localhost/song5.php/");
    exit();
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <button type="submit" name="Evermore">Evermore</button>
    <button type="submit" name="Dorothea">Dorothea</button>
    <button type="submit" name="Closure">Closure</button>
    <button type="submit" name="Champagne_Problems">Champagne Problems</button>
    <button type="submit" name="Coney_Island">Coney Island</button>
</form>
<footer>
    <img src="../img/md.png" alt="logo"> MUSICAL DELIGHT
</footer>
</body>
</html>