<!DOCTYPE html>
<html>
<head>
    <title>Melamoniac Web Design</title>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Background Color Example</title>
    <style>
        body {
            background-image: url(../img/cp2.jpg); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 3;
            margin-right: 0;
            padding: 2px;
            font-family: Merriweather;
            color: white; 
            font-size: 23px;
            margin-top: -30px
        }
        .title-section {
            padding: 10px; 
            position: relative;
        }
        h1 {
            font-size: 25px;
            color: #ffff;
            font-family: Century Gothic;
            background-color: #800000;
            text-align: center;
            margin:0;
            padding: 0px;
			font-size: 20px;
            position: fixed;
            top: 0;
            width: 99%;
			height: 5%; 
			
        }
        .back-link {
            position:fixed;
            left: 0px;
            top: 0px;
            display: inline-block;
            color: white;
            text-decoration: none;
            padding: 8px 10px;
            margin:0;
            background-color: #800000; 
            border-radius: 5px; 
            line-height: 1;
            transition: color 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 2;
        }

        .back-link:hover {
            background-color: #ffff;
            color: maroon;
        }

        .content {
            margin-top: 100px;
            text-align: center;
        }

        .music-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .music-line {
            display: flex;
            color: maroon;
            align-items: center;
            justify-content: center;
        }

        .circle {
            width: 10px;
            height: 10px;
            background-color: #ffff;
            border-radius: 50%;
            margin: 0px;
            filter: blur(1.5px);
            margin-bottom: -60px;
        }

        .line {
            text-shadow: 6px 6px 3px maroon;
            width: 300px;
            height: 2px;
            background-color: #ffff;
            filter: blur(1.5px);
            margin-bottom: -60px;
            
        }

        .tiangle {
            width: 0;
            height: 0;
            border-top: 15px solid transparent;
            border-bottom: 15px solid transparent;
            border-left: 25px solid #ffff; 
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: -5px;
            margin-bottom: -25px;
            border-radius: 5px;
            filter: blur(1.5px);
        }

        .play-element:hover {
            background-color: #ffff; /* Change background color on hover */
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


</head>
<a href="javascript:history.go(-1)" class="back-link"><</a>
    <div style="text-align: center; padding: 20px;">
        <h1>Lyrics and Guitar Chords</h1><br>
<br>
        <div class="music-container">
        <div class="tiangle"></div>
            <div class="music-line">
                <div class="circle"></div>
                <div class="line"></div>
                <div class="circle"></div>
            </div>
    
        <?php
        $title = "CLOSURE";
        $subtitle = "Taylor Swift";
    ?>
    <h2 style="font-size: 60px;font-family: Playfair Display;color: #ffff;text-shadow: 6px 6px 3px maroon;"><?php echo $title; ?></h2>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lora:wght@400&family=Dancing+Script:wght@400&display=swap">
    <h3 style="font-size: 25px;font-family: Lora; color: #ffff;text-shadow: 6px 6px 3px maroon;margin-top: -20px;;"><?php echo $subtitle; ?></h3><br>
</body>

</html>

        <?php
            echo "<p>Intro: [F#m][A/C#][D]</p>";
            echo "<p>[F#m]It's been a long time</p>";
            echo "<p>[A/C#]And [D]seeing the [F#m]shape of your name[E]</p>";
            echo "<p>Still [A/C#]spells out [D]pain[F#m]</p>";
            echo "<p>[E]It wasn't right</p>";
            echo "<p>[A/C#]The way it [D]all went down[F#m][E]</p>";
            echo "<p>Looks like [A/C#]you know that now</p><br><br>";

            echo "<p>Chorus:</p>";
            echo "<p>[F#m]Yes, I got your [E]letter</p>";
            echo "<p>[A/C#]Yes, I'm doing [D]better</p>";
            echo "<p>It cut deep [E]to know ya</p>";
            echo "<p>[A/C#]Right to the [D]bone</p>";
            echo "<p>[F#m]Yes, I got your [E]letter</p>";
            echo "<p>[A/C#]Yes, I'm doing [D]better</p>";
            echo "<p>I know that it's [E]over</p>";
            echo "<p>[A/C#]I don't need [D]your [F#m]closure[A/C#][E]</p>";
            echo "<p>[D]Your closure</p><br><br>";

            echo "<p>[F#m]Don't [E]treat me like [A/C#]some [D]situation that [F#m]needs to be [E]handled[A/C#][D]</p>";
            echo "<p>I'm [E]fine with my spite[A/C#]</p>";
            echo "<p>And my [D]tears</p>";
            echo "<p>And my [F#m]beers and my [E]candles</p>";
            echo "<p>[F#m]I can feel [E]you [A/C#]smoothing me [D]over</p><br><br>";

            echo "<p>[F#m]Yes, I got your [E]letter</p>";
            echo "<p>[A/C#]Yes, I'm doing [D]better</p>";
            echo "<p>[F#m]It cut deep [E]to know ya</p>";
            echo "<p>[A/C#]Right to the [D]bone</p>";
            echo "<p>[F#m]Yes, I got your [E]letter</p>";
            echo "<p>[A/C#]Yes, I'm doing [D]better</p>";
            echo "<p>[F#m]I know that it's [E]over</p>";
            echo "<p>[A/C#]I don't need your [F#m][E]closure[A/C#]</p>";
            echo "<p>Your closure[F#m][D]</p>";
            echo "<p>Your closure[F#m][D]</p>";
            echo "<p>[D]Your closure</p><br><br>";
            

            echo "<p>[F#m]I know [E]I'm just a</p>";
            echo "<p>[A/C#]Wrinkle in [D]your new life</p>";
            echo "<p>[F#m]Staying [E]friends</p>";
            echo "<p>Would [A/C#]iron it [D]out so nice</p>";
            echo "<p>Guilty, [E]guilty [A/C#]reaching out across [D]the sea</p>";
            echo "<p>[F#m]That you [E]put between [A/C#]you and me[D]</p>";
            echo "<p>[F#m]But it's [E]fake</p>";
            echo "<p>And it's [A/C#]oh so [D]unnecessary</p><br><br>";

            echo "<p>[F#m]Yes, I got your [E]letter</p>";
            echo "<p>[A/C#]Yes, I'm doing [D]better</p>";
            echo "<p>[F#m]It cut deep [E]to know ya</p>";
            echo "<p>[A/C#]Right to the [D]bone</p>";
            echo "<p>[F#m]Yes, I got your [E]letter</p>";
            echo "<p>[A/C#]Yes, I'm doing [D]better</p>";
            echo "<p>[F#m]I know that it's [E]over</p>";
            echo "<p>[A/C#]I don't need your [F#m][E]closure[A/C#]</p>";
            echo "<p>Your closure[F#m][D]</p>";
            echo "<p>Your closure[F#m][D]</p>";
            echo "<p>[D]Your closure</p><br><br>";


            // Greeting echo
            echo "<p style='font-size: 24px; font-weight: bold;'>Free Lyrics</p>";
        ?>
                <footer>
    <img src="../img/md.png" alt="logo"> MUSICAL DELIGHT
</footer>
    
    </div>
</body>
</html>