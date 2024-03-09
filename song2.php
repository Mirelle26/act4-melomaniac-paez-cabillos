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
            background-image: url(../img/t2.jpg); 
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
            right: 0;
            left: 0;
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
        $title = "DOROTHEA";
        $subtitle = "Taylor Swift";
    ?>
    <h2 style="font-size: 60px;font-family: Playfair Display;color: #ffff;text-shadow: 6px 6px 3px maroon;"><?php echo $title; ?></h2>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lora:wght@400&family=Dancing+Script:wght@400&display=swap">
    <h3 style="font-size: 25px;font-family: Lora; color: #ffff;text-shadow: 6px 6px 3px maroon;margin-top: -20px;;"><?php echo $subtitle; ?></h3><br>
</body>

</html>
        <?php
            echo "<p>Intro: [D] [A] [G] [A]</p>";
            echo "<p>[D]Hey Dorothea</p>";
            echo "<p>Do you [A]]ever stop and think about [G]me?</p>";
            echo "<p>[A]When we were younger</p>";
            echo "<p>[D]Down in the park</p>";
            echo "<p>Honey, [A]making a lark [G] [A]of the misery</p>";
            echo "<p>You [G]got shiny friends since [A]you left town</p>";
            echo "<p>[G]A tiny screen's the only place [A]I see you now</p>";
            echo "<p>And I [D]got nothing [A]but well wishes [G]for ya[A]</p><br><br>";

            echo "<p>[Em]Oooh</p>";
            echo "<p>[D]This place is the same as it [A]ever was</p>";
            echo "<p>[Em]Oooh[Bm][D]</p>";
            echo "<p>But you won't like it [A]that way</p><br><br>";

           
            echo "<p>[D]It's never too late</p>";
            echo "<p>To come [A]back to my side</p>";
            echo "<p>The [G]stars in your eyes</p>";
            echo "<p>Shined [A]brighter in Tupelo</p>";
            echo "<p>And [D]if you're ever tired of being [A]known</p>";
            echo "<p>For who you know</p>";
            echo "<p>You [G]know that you'll always know [A]me</p>";
            echo "<p>Doro[Em]thea[Bm]</p>";
            echo "<p>Doro[Em]thea[Bm]</p><br><br>";

            echo "<p>[Em]Ooh [Bm]ooh you're a [D]queen</p>";
            echo "<p>Selling dreams</p>";
            echo "<p>Selling [A]make-up and magazines</p>";
            echo "<p>[Em]Ooh[Bm] [D]Ooh, from you I'd buy [A]anything</p><br><br>";
            
            echo "<p>[D]Hey Dorothea</p>";
            echo "<p>Do you [A]ever stop and think about [G]me?</p>";
            echo "<p>[A]When it was calmer</p>";
            echo "<p>[D]Skipping the prom</p>";
            echo "<p>Just to [A]piss off your mom</p>";
            echo "<p>And her [G]pageant [A]schemes</p>";
            echo "<p>And [D]damn, Dorothea</p>";
            echo "<p>They [A]all wanna be ya</p>";
            echo "<p>But [G]are you still the same soul</p>";
            echo "<p>I [A]met under the bleachers? Well</p><br><br>";

            echo "<p>[Em]Ooh[Bm]</p>";
            echo "<p>I [A]guess I'll never know</p>";
            echo "<p>[Em]Ooh[Bm]</p>";
            echo "<p>And you'll go on with the [A]show</p><br><br>";

            echo "<p>But it's [Em]never too late</p>";
            echo "<p>To come [Bm]back to my side</p>";
            echo "<p>The [D]stars in your eyes</p>";
            echo "<p>Shined [A]brighter in Tupelo</p>";
            echo "<p>And [Em]if you're ever tired of being [Bm]known</p>";
            echo "<p>For who you [D]know</p>";
            echo "<p>You know that you'll always know [A]me</p>";
            echo "<p>Doro[D]thea[A]</p>";
            echo "<p>Doro[D]thea[A]</p><br><br>";

            echo "<p>Oooh[Em]</p>";
            echo "<p>Oooh[Bm]</p>";
            echo "<p[D]>Ooh-woo-ooh-ooh-ooh, [A]ooh-ooh-ooh-ooh</p>";
            echo "<p>[Em]Oooh[Bm]</p>";
            echo "<p>[Em]Oooh[Bm]</p><br><br>";


            echo "<p>Doro[D]thea[A]</p><br><br>";


            // Greeting echo
            echo "<p style='font-size: 24px; font-weight: bold;'>Free Lyrics</p>";
        ?>
                <footer>
    <img src="../img/md.png" alt="logo"> MUSICAL DELIGHT
</footer>

    
    </div>
</body>
</html>