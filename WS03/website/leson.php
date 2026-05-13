<?php
//date_default_timezone_set('Asia/Manila');

$ids=[10,22,15,45,67];
$users=['user1','user2','user3'];

/*
y-year
m-month
f-full month
d-day
D-week short name
l-week full name
h-hour
i-minute
s-second
a-am/pm
*/

//array_sum
$output = "Sum of Ids: " . array_sum($ids);

//array_seaech
$output = "user 2 is ther index:" . array_search('user4',$users);

//in_array
$output = "user 2 exists: " . in_array('user2',$users);

//explode - turn input into array
$tags = 'salesladay,cityhall,wheeltek';
$tagsArr = explode(',', $tags);
var_dump($tags,$tagsArr);

$user=[
    "name" => "selah",
    "age" => 21,
    "email" =>"selahbunag18@gmail.com"
];
echo $user["email"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title></title>
</head>
<body>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <p class="text-xl"><?= $output ?></p>
            <h2 class="text-xl font-semibold my-4">IDs Array</h2>
            <p>
                <?php print_r($users); ?>
            </p>
        </div>
    </div>
</body>
</html>