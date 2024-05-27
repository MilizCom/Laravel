<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel dengan Video</title>\
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    color: #333;
    margin: 0;
    padding: 20px;
}

.container {
    width: 80%;
    margin: 0 auto;
    background: white;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.video-wrapper {
    margin: 20px 0;
}

video {
    width: 100%; /* Makes video responsive */
    height: auto;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Game</h1>
        <p>
            Game serasa pelampiasan untuk diriku di mana kita bisa seolah olah menjadi orang lain sesuai karakter yang kita mainkan dan merasakan emosi yang di rasa karakter tersebut adalah perasaan yang sangat menyenangkan dalam bermain game
        </p>
        <div class="video-wrapper">
            <video controls>
                <source src="{{ asset ('video\Street Fighter 6 - Akuma Gameplay Trailer.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</body>
</html>
