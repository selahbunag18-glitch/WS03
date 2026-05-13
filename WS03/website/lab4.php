<?php
$ligtings = [
    [
        'id' => 1,
        'title' => 'Software Engineer',
        'description' => 'We are looking for a skilled software engineer to develop high-quality web applications.',
        'salary' => 80000,
        'location' => 'San Francisco',
        'tags' => ['software development', 'PHP', 'JavaScript']
    ],
    [
        'id' => 2,
        'title' => 'Web Developer',
        'description' => 'Responsible for creating and maintaining responsive websites and web systems.',
        'salary' => 60000,
        'location' => 'New York',
        'tags' => ['HTML', 'CSS', 'JavaScript']
    ],
    [
        'id' => 3,
        'title' => 'Backend Developer',
        'description' => 'Develops server-side logic, APIs, and database structures for web applications.',
        'salary' => 75000,
        'location' => 'Chicago',
        'tags' => []
    ],
    [
        'id' => 4,
        'title' => 'Mobile App Developer',
        'description' => 'Builds and maintains mobile applications for Android and iOS platforms.',
        'salary' => 70000,
        'location' => 'Los Angeles',
        'tags' => ['Flutter', 'Android', 'iOS']
    ],
    [
        'id' => 5,
        'title' => 'Data Analyst',
        'description' => 'Analyzes data to help businesses make informed decisions.',
        'salary' => 65000,
        'location' => 'Seattle',
        'tags' => ['Data Analysis', 'Python', 'SQL']
    ]
];

function filterByLocation($ligtings, $location)
{
    return array_filter($ligtings, function ($job) use ($location) {
        return strcasecmp($job['location'], $location) === 0;
    });
}
if (isset($_GET['location'])) {
    $location = $_GET['location'];
    $filteredlist = filterByLocation($ligtings, $location);
} else {
    $filteredlist = $ligtings;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Job Listings</title>
</head>

<body class="bg-red-100">
    <header class="bg-fuchsia-300 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Job Listings</h1>

        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <form method="get">
            <input name="location" type="text">
            <button type="submit">search</button>
        </form>
        <?php foreach ($filteredlist as $index => $job): ?>
            <div class="md my-4">
                <?php if ($index % 2 === 0): ?>
                    <div class="bg-rose-200 rounded-lg shadow-md">
                    <?php else: ?>
                        <div class="bg-pink-200 rounded-lg shadow-md">
                        <?php endif ?>
                        <div class="p-4">
                            <h2 class="text-xl font-semibold"><?= $job['title'] ?></h2>
                            <p class="text-gray-700 text-lg mt-2"><?= $job['description'] ?></p>
                            <ul classs="mt-4">
                                <li class="mb-2">
                                    <strong>Salary:</strong> <?= $job['salary'] ?>
                                </li>
                                <li class="mb-2">
                                    <strong>Location:</strong> <?= $job['location'] ?>
                                    <?= $job['location'] === 'New York' ? '<span class="text-xs text-white bg-fuchsia-400 rounded-full px-2 py-1 ml-2">Remote</span>' : '<span class="text-xs text-white bg-red-600 rounded-full px-2 py-1 ml-2">On Site</span>'  ?>
                                </li>
                                <?php if (!empty($job['tags'])): ?>
                                    <li class="mb-2">
                                        <strong>Tags:</strong> <?= implode(', ', $job['tags']) ?>
                                    </li>
                                <?php endif ?>
                            </ul>
                        </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
</body>

</html>