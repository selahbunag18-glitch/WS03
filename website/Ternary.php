<?php

// MUSIC LIBRARY
$songs = [

    [
        "title" => "Perfect",
        "author" => "Ed Sheeran",
        "url" => "https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3"
    ],

    [
        "title" => "Believer",
        "author" => "Imagine Dragons",
        "url" => "https://www.soundhelix.com/examples/mp3/SoundHelix-Song-2.mp3"
    ],

    [
        "title" => "Shape of You",
        "author" => "Ed Sheeran",
        "url" => "https://www.soundhelix.com/examples/mp3/SoundHelix-Song-3.mp3"
    ]

];


// INTERFACE
interface Playable
{
    public function playMessage();
}


// ABSTRACT ACCOUNT
abstract class Account
{

    protected $username;
    protected $plan;

    public function __construct($username, $plan)
    {
        $this->username = $username;
        $this->plan = $plan;
    }

    public function getInfo()
    {
        return "User: " . $this->username . " | Plan: " . $this->plan;
    }
}


// FREE ACCOUNT
class Free extends Account implements Playable
{

    public function __construct($username)
    {
        parent::__construct($username, "Free");
    }

    public function playMessage()
    {
        return "Playing with Ads";
    }
}


// PREMIUM ACCOUNT
class Premium extends Account implements Playable
{

    private $price = 199;

    public function __construct($username)
    {
        parent::__construct($username, "Premium");
    }

    public function getPayment()
    {
        return "Subscription Fee: ₱" . $this->price . "/month (Ad-Free)";
    }

    public function playMessage()
    {
        return "No Ads - Premium Music";
    }
}


// LOGOUT
if (isset($_POST['logout'])) {
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

$account = null;

if (isset($_POST['account'])) {
    $type = $_POST['account'];
    $username = $_POST['username'];

    if ($type == "premium") {
        $account = new Premium($username);
    } else {
        $account = new Free($username);
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Mini Spotify System</title>

    <style>
        body {
            font-family: Arial;
            background: #2F4F4F;
            color: white;
            text-align: center;
            padding: 30px;
        }

        .container {
            background: #536878;
            padding: 30px;
            border-radius: 10px;
            width: 90%;
            max-width: 700px;
            margin: auto;
        }

        input {
            padding: 8px;
            margin: 5px;
            width: 80%;
        }

        button {
            padding: 10px 18px;
            margin: 5px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .free {
            background: #ff4d4d;
            color: white;
        }

        .premium {
            background: #4CAF50;
            color: white;
        }

        .logout {
            background: #fa1e1e;
            color: white;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #444;
        }

        audio {
            width: 100%;
            margin-top: 20px;
        }
    </style>

</head>

<body>

    <div class="container">

        <h2> Music Play</h2>

        <?php if (!$account): ?>

            <form method="POST">

                <h3>Login</h3>

                <input type="text" name="username" placeholder="Enter Username" required>

                <br>

                <button class="free" name="account" value="free">Free Account</button>
                <button class="premium" name="account" value="premium">Premium Account</button>

            </form>

        <?php endif; ?>


        <?php if ($account): ?>

            <form method="POST">
                <button class="logout" name="logout">Logout</button>
            </form>

            <p><?php echo $account->getInfo(); ?></p>

            <?php if ($account instanceof Premium) {
                echo "<p>" . $account->getPayment() . "</p>";
            } ?>

            <h3>Search Music</h3>

            <input type="text" id="search" placeholder="Search title or author..." onkeyup="filterMusic()">


            <table id="musicTable">

                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Play</th>
                </tr>

                <?php foreach ($songs as $song): ?>

                    <tr>

                        <td><?php echo $song['title']; ?></td>
                        <td><?php echo $song['author']; ?></td>

                        <td>

                            <button onclick="playSong('<?php echo $song['url']; ?>','<?php echo $song['title']; ?>','<?php echo $song['author']; ?>')">
                                Play
                            </button>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </table>

            <h3 id="nowPlaying"></h3>

            <audio id="player" controls></audio>

            <p id="adsMessage"><?php echo $account->playMessage(); ?></p>

        <?php endif; ?>

    </div>


    <script>
        function playSong(url, title, author) {

            let player = document.getElementById("player");

            player.src = url;
            player.play();

            document.getElementById("nowPlaying").innerText = "Now Playing: " + title + " - " + author;

        }

        function filterMusic() {

            let input = document.getElementById("search").value.toLowerCase();
            let rows = document.querySelectorAll("#musicTable tr");

            rows.forEach((row, index) => {

                if (index == 0) return;

                let text = row.innerText.toLowerCase();

                row.style.display = text.includes(input) ? "" : "none";

            });

        }
    </script>

</body>

</html>