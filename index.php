<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script src="script.js"></script>
    <title>Otify Home</title>
</head>
<body>
    <div class="main-div">
        <div>
            <head>
                <H1>Otify Web App</H1>
                <nav>
                    <a href="#">Just for show</a>
                    <a href="#">Just for show</a>
                    <a href="#">Just for show</a>
                </nav>
            </head>
        </div>
        <div>
            <button onclick="fun02()">
                <p>
                    Click me!
                </p>
            </button>
            <div id="songsdiv">
                <p><?php echo glob("songs/*.mp3")[0] ?></p>
                
            </div>
            
        </div>
    </div>
    <footer>
        <ul>
            <li style="background-color: blue; margin-left: 0.5%;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing!</p>
            </li>
            <li style="background-color: black;">
                <audio controls id="song-controlls" src="songs/Elgate - Shine (feat. Spektrem)-tFxKmJ-Y4Nc.mp3" type="audio/mpeg"></audio>
            </li>
            <li style="background-color: green;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing!</p>
            </li>
        </ul>
    </footer>
</body>
</html>
