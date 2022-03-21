
<?php 

$connect = new mysqli('localhost', 'phpuser', 'phpuser', 'ab_unique');

session_start();



if ($_SESSION['counter'] >= 3) {
    
} else if (isset($_POST['movieTitle']) && isset($_POST['movieRating'])) {
    $name = htmlentities($_POST['movieTitle']);
    $rating = htmlentities($_POST['movieRating']);
    $sql = "INSERT INTO `movies`(`name`, `rating`) VALUES ('$name','$rating')";
    mysqli_query($GLOBALS['connect'], $sql);
    $_SESSION['counter']++;
} 

// function addMovie($name, $rating) {
//     if(isset($_POST['movieTitle'])) {
//     $name = htmlentities($_POST['movieTitle']);
//     $rating = htmlentities($_POST['movieRating']);
//     $sql = "INSERT INTO `movies`(`name`, `rating`) VALUES ('$name','$rating')";
//     mysqli_query($GLOBALS['connect'], $sql);
//     $_SESSION['counter']++;
//     }
// }

function showMovies() {
    $sql = "SELECT * FROM movies;";
    $result = mysqli_query($GLOBALS['connect'], $sql);
    $resultCheck = mysqli_num_rows($result);
    
    if ($resultCheck > 0 ) {
        echo "<table class=\"table\"><tr><th>ID</th><th>Name</th><th>Rating</th><th>Date</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row['id']."</td><td>" . $row['name']."</td><td>" . $row['rating']."</td><td>" . $row['date'] . "</td></tr>";
        }
        echo "</table>";
    }
}




?>
