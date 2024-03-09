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
            background-image: url(../img/cp1.jpg); 
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
            background-color: #800000;
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
        $title = "CHAMPAGNE PROBLEMS";
        $subtitle = "Taylor Swift ft. Bon Iver";
    ?>
    <h2 style="font-size: 60px;font-family: Playfair Display;color: #ffff;text-shadow: 6px 6px 3px maroon;"><?php echo $title; ?></h2>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lora:wght@400&family=Dancing+Script:wght@400&display=swap">
    <h3 style="font-size: 25px;font-family: Lora; color: #ffff;text-shadow: 6px 6px 3px maroon;margin-top: -20px;;"><?php echo $subtitle; ?></h3><br>
</body>

</html>
        <?php
            echo "<p>Intro: [C][G][Am][F]</p>";
            echo "<p>[C]You booked the night train for a [G]reason</p>";
            echo "<p>So you could [Am]sit there in this [F]hurt</p>";
            echo "<p>[C]Bustling crowds or silent [G]sleepers</p>";
            echo "<p>You're [Am]not sure which is [F]worse</p><br><br>";

            echo "<p>Because I [C]dropped your hand while [G]dancing</p>";
            echo "<p>Left you out there standing[Am]</p>";
            echo "<p>Crestfallen on the landing</p>";
            echo "<p>[F]Champagne problems</p>";
            echo "<p>Your mom's ring in your pocket</p>";
            echo "<p>My picture in your wallet[Am]</p>";
            echo "<p>Your heart was glass, I dropped it</p>";
            echo "<p>[F]Champagne problems</p><br><br>";

            echo "<p>[C]You told your family for a [G]reason</p>";
            echo "<p>You [Am]couldn't keep it [F]in</p>";
            echo "<p>[C]Your sister splashed out on the [G]bottle</p>";
            echo "<p>Now [Am]no one's [F]celebrating</p><br><br>";

            echo "<p>[C]Dom Pérignon, you brought it[G]</p>";
            echo "<p>No crowd of friends applauded[Am]</p>";
            echo "<p>Your hometown skeptics called it</p>";
            echo "<p>[F]Champagne problems</p>";
            echo "<p>Dom Pérignon, you brought it</p>";
            echo "<p>[C]You had a speech, you're speechless[G]</p>";
            echo "<p>Love slipped beyond your reaches[Am]</p>";
            echo "<p>And I couldn't give a reason</p>";
            echo "<p>[F]Champagne problems</p><br><br>";
            
            echo "<p>[C]Your Midas touch on the Chevy door[G]</p>";
            echo "<p>November flush and your flannel cure[Am]</p>";
            echo "<p>This dorm was once a madhouse</p>";
            echo "<p>I [F]made a joke, Well, it's made for me</p>";
            echo "<p>How [C]evergreen, our group of [G]friends</p>";
            echo "<p>Don't think we'll say that word again[Am]</p>";
            echo "<p>And soon they'll have the nerve to [F]deck the halls</p>";
            echo "<p>That we once walked through</p>";
            echo "<p>[C]One for the money, two for the show</p>";
            echo "<p>I [G]never was ready, so I watch you go</p>";
            echo "<p>[Am]Sometimes you just don't know the answer</p>";
            echo "<p>'Til [F]someone's on their knees and asks you</p>";
            echo "<p>She [C]would've made such a lovely bride</p>";
            echo "<p>What a [G]shame she's fucked in the head, they said</p>";
            echo "<p>But [Am]you'll find the real thing instead</p>";
            echo "<p>She'll [F]patch up your tapestry that I shred</p><br><br>";

            echo "<p>[C]And hold your hand while [G]dancing</p>";
            echo "<p>Never leave you standing[Am]</p>";
            echo "<p>Crestfallen on the landing[F]</p>";
            echo "<p>Champagne problems</p>";
            echo "<p>Your mom's ring in your [G]pocket</p>";
            echo "<p>Her picture in your wallet</p>";
            echo "<p>You won't remember all my</p>";
            echo "<p>[F]Champagne Problems</p><br><br>";

            echo "<p>[Am]You won't remember all my</p>";
            echo "<p>You won't remember all my</p><br><br>";
            echo "<p>[F]Champagne Problems</p><br><br>";



            
            echo "<p style='font-size: 24px; font-weight: bold;'>Free Lyrics</p>";
        ?>
                <footer>
    <img src="../img/md.png" alt="logo"> MUSICAL DELIGHT
</footer>
    
    </div>
</body>
</html>
