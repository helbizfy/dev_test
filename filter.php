<?php

include('connect.php');

$mail_provider = mysqli_query($conn, "SELECT DISTINCT e_provider FROM newsletter_emails");


?>

<html>


<?php
if ($mail_provider) {
    while ($row = mysqli_fetch_assoc($mail_provider)) {

?>

        <form action="" method="POST">

            <input type="submit" name="filter" value="<?php echo $row['e_provider'] ?>"></input>

        </form>

<?php }

    if (isset($_POST['filter'])) {
        $filterBy =  $_POST['filter'];
        $sql = "SELECT * FROM newsletter_emails WHERE e_provider LIKE '%$filterBy%'";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "SELECT * FROM `newsletter_emails` ORDER BY `email`, 'date'";
        $result = mysqli_query($conn, $sql);
    }
}
?>




</html>