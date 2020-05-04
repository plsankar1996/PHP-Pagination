<?php

/**
 * index.php
 *
 * PHP Pagination
 *
 * @author     plsankar1996
 * @copyright  2020 plsankar1996
 * @license    Apache License 2.0
 * @version    1.1
 * @link       https://github.com/plsankar1996/PHP-Pagination
 * 
 */


$page = $_GET['page'] ?? 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container m-5">
        <nav>
            <ul class="pagination justify-content-center">

                <?php

                require "Pagination.php";

                $total = 9;

                $Pagination = new Pagination($total, $page, 2);
                $Pagination->create();

                ?>
            </ul>
        </nav>
    </div>

</body>

</html>