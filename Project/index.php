<?php

/**
 * @author 
 * @copyright 2020
 */

//вставляємо файл для подєднання до бази данних
require 'config/conection.php';

//phpinfo();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>United Transport</title>
</head>
<style>
    th, td {
        /*border: 1px solid #000;*/
        padding: 1rem;
    }
    th{
        background-color: #1C222F;
        color: #ECEDF0;
    }
    td{
        background-color: aliceblue;
    }
</style>
<body>
    <table>
        <tr>
            <th>
                Id
            </th>
            <th>
                name
            </th>
            <th>
                phone
            </th>
            <th>
                login
            </th>
            <th>
                pass
            </th>
            <th>
                description
            </th>
        </tr>


        <?php
        $value = mysqli_query($connect, "SELECT * FROM `united`");
        $result = mysqli_fetch_all($value);
        // var_dump($result);
        //print_r($result);
        foreach ($result as $value ){
            echo '<tr>
                    <td>
                        '. $value[0] .'  <!-- конкотенація, вставляєм елементи-->
                    </td>
                    <td>
                        '. $value[1] .'
                    </td>
                    <td>
                        '. $value[2] .'
                    </td>
                    <td>
                        '. $value[3] .'
                    </td>
                    <td>
                       '. $value[4] .'
                    </td>
                    <td>
                       '. $value[5] .'
                    </td>
                    <td>
                        <a href="vew.php?id='. $value[0] .'">View</a>
                    </td>
                    <td>
                        <a href="update.php?id='. $value[0] .'">Update</a>
                    </td>
                    <td>
                        <a href="vendor/delete.php?id='. $value[0] .'">Delete</a>
                    </td>
                </tr>';
        }
        ?>

    </table>

    <!--===============================================================-->
    <!--  створюєм форму для занесення даних в базу  -->
    <h3>Add new dispatcher</h3>
    <form action="../vendor/create.php" method="post">
        <span>Title</span><br>
        <input type="text" name="title_kay" placeholder="input name"><br>
        <span>Description</span><br>
        <textarea name="description_kay"></textarea><br>
        <span>Phone</span><br>
        <input type="number" name="phone_kay" placeholder="phone"><br><br>
        <button type="submit ">Add</button>
    </form>



    <!--===============================================================-->

    <!--створюємо запит до бази данних на вивід -->
<!--    <pre>-->
<!--        --><?php
//            $name = mysqli_query($connect, "SELECT * FROM `united`");
//            $result = mysqli_fetch_all($name);
//            // var_dump($result);
//            print_r($result);
//        ?>
<!--    </pre>-->
</body>
</html>
