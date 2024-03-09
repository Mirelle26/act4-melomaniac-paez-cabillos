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
            background-image: url(../img/t3.jpg); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 3;
            margin-right: 0;
            padding: 3px;
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
        $title = "EVERMORE";
        $subtitle = "Taylor Swift ft. Bon Iver";
    ?>
    <h2 style="font-size: 60px;font-family: Playfair Display;color: #ffff;text-shadow: 6px 6px 3px maroon;"><?php echo $title; ?></h2>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lora:wght@400&family=Dancing+Script:wght@400&display=swap">
    <h3 style="font-size: 25px;font-family: Lora; color: #ffff;text-shadow: 6px 6px 3px maroon;margin-top: -20px;;"><?php echo $subtitle; ?></h3><br>
</body>

</html>

        <?php
            echo "<p>Intro: [C] [F] [C] [F]</p>";
            echo "<p>[C]Gray November</p>";
            echo "<p>I've been down since [F]July</p>";
            echo "<p>[C]Motion capture</p>";
            echo "<p>Put me in a [F]bad light</p><br>";

            echo "<p>[C]I replay my footsteps on each stepping [F]stone</p>";
            echo "<p>Trying to find the one where I went [C]wrong</p>";
            echo "<p>[C]Writing letters</p>";
            echo "<p>Addressed to the [F]fire</p><br>";

            echo "<p>Chorus:</p>";
            echo "<p>And I was [C]catching my breath</p>";
            echo "<p>[C]Staring out an open window</p>";
            echo "<p>[F]Catching my death</p>";
            echo "<p>And I [C]couldn't be sure</p>";
            echo "<p>I had a feeling so [F]peculiar</p>";
            echo "<p>[F]That this pain would be for</p>";
            echo "<p>[C]Evermore</p><br>";

            echo "<p>Verse:</p>";
            echo "<p>[C]Hey December</p>";
            echo "<p>Guess I'm feeling [F]unmoored</p>";
            echo "<p>[C]Can't remember</p>";
            echo "<p>What I used to [F]fight for</p><br>";

            echo "<p>[C]I rewind the tape but all it does is [F]pause</p>";
            echo "<p>[F]On the very moment all was lost</p>";
            echo "<p>[C]Sending signals</p>";
            echo "<p>To be [F]double-crossed</p><br>";
            
            echo "<p>Chorus:</p>";
            echo "<p>And I was [C]catching my breath</p>";
            echo "<p>[C]Barefoot in the wildest winter</p>";
            echo "<p>[F]Catching my death</p>";
            echo "<p>And I [C]couldn't be sure</p>";
            echo "<p>I had a feeling so [F]peculiar</p>";
            echo "<p>[F]That this pain would be for</p>";
            echo "<p>[C]Evermore</p>";
            echo "<p>[F](Evermore)</p><br>";

            echo "<p>Bridge:</p>";
            echo "<p><i>[Justin Vernon:]</i></p>";
            echo "<p>Can't not [G]think of all the cost[Am7]</p>";
            echo "<p>And the things that will be lost[F]</p>";
            echo "<p>Oh, can [G]we just get a pause?[Am7]</p>";
            echo "<p>To be certain we'll be tall again[F]</p>";
            echo "<p>Whether [G]weather be the frost[Am7]</p>";
            echo "<p>Or the violence of the dog days[F]</p>";
            echo "<p>I'm on [G]waves, out being tossed[Am7]</p>";
            echo "<p>Is there a line that I could just go cross?[F]</p><br>";
            
            echo "<p>Bridge:</p>";
            echo "<p><i>[Taylor Swift and Justin Vernon:]</i></p>";
            echo "<p>And when I was shipwrecked (Can't [G]think of all the cost)</p>";
            echo "<p>I [Am7]thought of you (All the things that will be lost now)[F]</p>";
            echo "<p>In the cracks of light (Can we [G]just get a pause?)</p>";
            echo "<p>I [Am7]dreamed of you (To be certain we'll be tall again)</p>";
            echo "<p>(If you [F]think of all the costs)</p>";
            echo "<p>It was real enough (Whether [G]weather be the frost)</p>";
            echo "<p>To [Am7]get me through (Or the violence of the dog days)</p>";
            echo "<p>(Or the violence of the dog [F]days)</p>";
            echo "<p>(Out on waves, being tossed)</p>";
            echo "<p>(I'm on [G]waves, out being tossed)</p>";
            echo "<p>I [Am7]swear (Is there a line that we could just go [C]cross?)</p>";
            echo "<p>[C]You were there[F] [C] [F]</p><br>";

            echo "<p>Chorus:</p>";
            echo "<p>And I was [C]catching my breath</p>";
            echo "<p>Floors of a cabin creaking [F]under my step</p>";
            echo "<p>And I [C]couldn't be sure</p>";
            echo "<p>I had a feeling so [F]peculiar</p>";
            echo "<p>[F]That this pain would be for</p>";
            echo "<p>[C]Evermore</p>";
            echo "<p>[F]Evermore</p>";
            echo "<p>[C]Evermore</p>";
            echo "<p>This pain would be [F]for evermore</p>";
            echo "<p>[C]Evermore[F]</p><br>";




            // Greeting echo
            echo "<p style='font-size: 24px; font-weight: bold;'>Free Lyrics</p>";
        ?>
        <footer>
    <img src="../img/md.png" alt="logo"> MUSICAL DELIGHT
</footer>
    
    </div>
</body>
</html>