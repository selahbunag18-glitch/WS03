<?php
$title = "My Love story";
$author = "Nethuselah S.P. Bunag <br> author";
$start = "One day, Nethu went to the computer shop to play R.O.S. or Rules of Survival, 
    while she was playing with her crew or group in the clan, her clan master brought Slayer with her. 
    Slayer is one of the famous R.O.S stars or Streamers who are famous, 
    as their game with Slayer lasted longer, they became friends with him. 
    After a few days of playing together, Slayer and nethu became close to each other, 
    and they gave each other a Facebook name so they could talk about the game. 
    The time came when nethu needed help because she found out that her partner was just cheating with other girl. 
    She didn't know what to do, so she just played and found out that Slayer was also playing, and he told her stories and 
    also advised her properly so that she could think clearly and make a good decision.
    3 months passed, and they continued to talk and play together, and nethu started to like Slayer.";
$mid = "When she told Slayer how she feel.
    Until the day came when they found out that the game they were playing would be gone, 
    many were sad because R.O.S. was one of the best games. 
    Because of its loss, the two never talked again, because they played a different game.
    After 3 years, the two talked again, and when nethu found out that it was Slayer's birthday,
    she asked him what gift he wanted. Slayer replied, I want you to be my girl friend.
    This was nethu excitement because she had been waiting for that opportunity for a long time, 
    so she agreed to what he wanted.";
$end = "November 13 was when they became relationship and planned to meet, and when they met, 
    nethu brought Slayer to them and introduced him as her partner. 
    Slayer continued, and their relationship went well.";
$pageTitle = "Ms.Bunag love story";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title ?></title>
</head>

<body class="bg-gray-100">

    <header class="bg-[#fdf5e6] text-center p-4" style="font-family: 'Abadi MT Condensed Light', 'Arial Narrow', Arial, sans-serif;">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= $pageTitle ?></h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4 flex bg-amber-900 justify-center text-center" style="font-family: 'Times New Roman', Times, serif;">
        <div class="bg-[#fff5ee] rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?= $author ?></h2>
            <p><?= $start ?></p>
            <p><?= $mid ?></p>
            <p><?= $end ?></p>
            <br>
            <img src="love.jpg" class="h-1/2 w-1/2  mx-auto mt-4">
        </div>
        <a href="ass2.php" class="bg-[#fff5ee] rounded-lg shadow-md p-6">ASSEMENT 2 </a>
    </div>


</body>

</html>