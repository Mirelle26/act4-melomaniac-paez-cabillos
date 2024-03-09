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
            background-image: url(../img/t9.jpg); 
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
            background-color: #800000; /* Change background color on hover */
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
        $title = "CONEY ISLAND";
        $subtitle = "Taylor Swift ft. The National";
    ?>
    <h2 style="font-size: 60px;font-family: Playfair Display;color: #ffff;text-shadow: 6px 6px 3px maroon;"><?php echo $title; ?></h2>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lora:wght@400&family=Dancing+Script:wght@400&display=swap">
    <h3 style="font-size: 25px;font-family: Lora; color: #ffff;text-shadow: 6px 6px 3px maroon;margin-top: -20px;;"><?php echo $subtitle; ?></h3><br>
</body>

</html>

        <?php
            echo "<p>Intro: [G][C][D][Em][C]</p>";
            echo "<p>[Bm]Break my soul in two</p>";
            echo "<p>Looking for you but you're right here</p>";
            echo "<p>If I can't relate to you anymore</p>";
            echo "<p>Then who am I [Em]related to?</p>";
            echo "<p>[Bm]And if this is the long haul</p>";
            echo "<p>How'd we get here so soon[D]?</p>";
            echo "<p>Did I close my fist around something delicate?</p>";
            echo "<p>Did [Em]I shatter you?</p><br><br>";



            echo "<p>And I'm sitting on a bench in Coney Island wondering where did my [G]baby go?</p>";
            echo "<p>The fast times, the bright lights, the [Bm]merry go</p>";
            echo "<p>Sorry for not making you my centerfold</p><br><br>";

            echo "<p>Over and [Em]over</p>";
            echo "<p>Lost again with no surprises</p>";
            echo "<p>Disappointments, close your eyes</p>";
            echo "<p>And [Bm]it gets colder and colder</p>";
            echo "<p>When the sun [D]goes down</p><br><br>";

            echo "<p>[Bm]The question pounds my head</p>";
            echo "<p>What's a lifetime of achievement?</p>";
            echo "<p>[D]If I pushed you to the edge</p>";
            echo "<p>But you were too polite to [Em]leave me</p>";
            echo "<p>And [Bm]do you miss the rogue</p>";
            echo "<p>Who coaxed you into paradise and left you there?</p>";
            echo "<p>[D]Will you forgive my soul</p>";
            echo "<p>When you're too wise to trust me and [Em]too old to care?</p>";
            echo "<p>'Cause [Em]we were like the mall before the Internet</p>";
            echo "<p>It was the one place to be</p>";
            echo "<p>The mischief, the gift wrapped [Bm]suburban dreams</p>";
            echo "<p>Sorry for not winning you an [D]arcade ring</p><br><br>";
            
            echo "<p>Over and [Em]over</p>";
            echo "<p>Lost again with no surprises</p>";
            echo "<p>Disappointments, close your eyes</p>";
            echo "<p>And [Bm]it gets colder and colder</p>";
            echo "<p>When the sun [D]goes down</p><br><br>";

            echo "<p>[Bm]Were you waiting at our old spot</p>";
            echo "<p>In the tree line by the gold clock</p>";
            echo "<p>Did I leave you hanging every single day?</p>";
            echo "<p>Were you standing in the hallway</p>";
            echo "<p>With a big cake, happy [D]birthday</p>";
            echo "<p>Did I paint your bluest skies the darkest gray?</p>";
            echo "<p>A [Em]universe away</p>";
            echo "<p>And when I got into the accident</p>";
            echo "<p>The [G]sight that flashed before me was your face</p>";
            echo "<p>[Bm]But when I walked up to the [D]podium</p>";
            echo "<p>I think that I forgot to say your name</p><br><br>";

            echo "<p>[Em]I'm on a bench in Coney Island wondering where did my [G]baby go?</p>";
            echo "<p>The fast times, the bright lights, [Bm]the merry go</p>";
            echo "<p>Sorry for not making [D]you my centerfold</p><br><br>";

            echo "<p>Lost again with no surprises</p>";
            echo "<p>[G]Disappointments, close your eyes</p>";
            echo "<p>And [Bm]it gets colder and colder</p>";
            echo "<p>When the sun [D]goes down</p>";
            echo "<p>When the sun [Em]goes down</p><br><br>";

            
            echo "<p>The [G]sight that flashed before me was your face</p>";
            echo "<p>When the sun [Bm]goes down</p>";
            echo "<p>But I [D]think that I forgot to say your name</p>";
            echo "<p>Over and [Em]over</p>";
            echo "<p>[G]Sorry for not making you my</p>";
            echo "<p>[Bm]Making you my</p>";
            echo "<p>Making you my [D]centerfold</p><br><br>";


            // Greeting echo
            echo "<p style='font-size: 24px; font-weight: bold;'>Free Lyrics</p>";
        ?>
                <footer>
    <img src="../img/md.png" alt="logo"> MUSICAL DELIGHT
</footer>
    
    </div>
</body>
</html>