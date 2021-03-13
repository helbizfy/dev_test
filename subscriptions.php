<?php

include('connect.php');

$uptd_mail = mysqli_query($conn, "UPDATE `newsletter_emails` SET `e_provider`= SUBSTRING_INDEX(SUBSTR(email, INSTR(email, '@') + 1),'.',1)");

include('filter.php');

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL data table</title>
</head>

<body>
    <table>
        <tr>
            <th>Email</th>
            <th>Timestamp</th>
            <th>Action</th>
        </tr>
        <?php

        while ($rows = mysqli_fetch_assoc($result)) {

        ?>
            <tr>
                <td><?php echo $rows['email']; ?></td>
                <td><?php echo $rows['date']; ?></td>
                <td><a href="delete.php?id=<?php echo $rows['id']; ?>">Delete</td>

            </tr>

        <?php

        }
        ?>
    </table>


    <form action="" method="POST">
        <input type="text" name='keyword' placeholder="Search for email..."></input>
        <input type="submit" name="search" value="Search"></input>

    </form>


    <?php



    if (isset($_POST['search'])) {
        $searchValue = $_POST['keyword'];
        $src = mysqli_query($conn, "SELECT * FROM newsletter_emails WHERE email LIKE '%$searchValue%'"); // search query

        if ($src) {

            while ($row = mysqli_fetch_assoc($src)) {
    ?>

                <span><?php echo $row['email'] . "<br>" ?></span>

    <?php }
        }
    } ?>

</body>

</html>