<?php

$fruits = [
    ['banana', 'yellow'],
    ['aple', 'red'],
    ['orange', 'orange',],
    ['watermelon', 'green']
];

$users = [
    [
        'name' => 'selah bunag',
        'email' => 'selahbunag18@gmail.com',
        'passaword' => '********'
    ],
    [
        'name' => 'jf yuzon',
        'email' => 'jf@gmail.com',
        'passaword' => '********'
    ],
    [
        'name' => 'ela san',
        'email' => 'ela@gmail.com',
        'passaword' => '********'
    ]
];

//$output = $users[1]["email"];

$user = [
    "name" => "selah",
    "age" => 21,
    "email" => "selahbunag18@gmail.com",
    "passaword" => "********",
    "hobbies" => ["Playing", "Waching movie"]
];

//$output = $fruits["orange"] = "dicarma";


?>

<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Asso & Multi</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP</h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <p class="text-xl"><?= $output ?></p>
            <h2 class="text-xl font-semibold my-4">User's Array</h2>
            <pre>
                <?php print_r($users) ?>
            </pre>
        </div>
    </div>
</body>

</html>