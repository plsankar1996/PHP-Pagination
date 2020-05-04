# PHP-Pagination
PHP Pagination Script

The Pagination Class is be used to create dynamic page links with a specific range of page number easily.

![alt Pagination](<Screenshot.png>)


# Create Pages

    <?php
    require "Pagination.php";
                
    $page = $_GET['page'] ?? 1;
    $total = 9;
    $Pagination = new Pagination($total, $page, 3);
    $Pagination->create();
