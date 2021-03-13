<?php

include('connect.php');

$searchValue = $_POST['keyword'];

$src = mysqli_query($conn, "SELECT * FROM newsletter_emails WHERE email LIKE '%$searchValue%'"); // search query


?>

<html>



<form action="search.php" method="POST">
    <input type="text" name='keyword' placeholder="Search for email..."></input>
    <input type="submit" name="search" value="Search"></input>

</form>


<?php

if (isset($_POST['search'])) {
    if ($src) {
        while ($row = mysqli_fetch_assoc($src)) {
?>

            <span><?php echo $row['email'] . "<br>" ?></span>

<?php }
    }
} ?>




</html>