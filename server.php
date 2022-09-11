<?php

include 'connect.php';
?>

<!DOCTYPE html>
<html lang="ro">
<head>
  <meta charset ="UTF-8">
    <title>Update feedback</title>
</head>

<style>

    th, td{
        padding : 10px;
        top: 30px;
    }

    th{
        background : #101820FF;
        color : white;
    }

    td{
        background : #F2AA4CFF;
    }
</style>

<body>

<table class ="jos">
        <tr>
            <th>ID </th>
            <th>Nume </th>
            <th>Email </th>
            <th>Phone </th>
            <th>Message</th>
        </tr>

        <?php
            $feedback = mysqli_query($connect,"SELECT * FROM `feedback`");
            $feedback = mysqli_fetch_all($feedback);
            foreach($feedback as $feed){
                ?>

                <tr>
                    <td><?= $feed[0] ?></td>
                    <td><?= $feed[1] ?></td>
                    <td><?= $feed[2] ?></td>
                    <td><?= $feed[3] ?></td>
                    <td><?= $feed[4] ?></td>


                    <td><a href="update.php?id=<?= $feed[0] ?>"><button>Update</button></a></td>
                    <td><a href="delete.php?id=<?= $feed[0] ?>"><button>Delete</button></a></td>
                </tr>

                <?php
            }
        ?>

    </table>

</body>
</html>
