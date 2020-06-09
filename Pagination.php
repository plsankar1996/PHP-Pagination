<?php

/**
 * Pagination.php
 *
 * PHP Pagination
 *
 * @author     plsankar1996
 * @copyright  2020 plsankar1996
 * @license    Apache License 2.0
 * @version    1.2
 * @link       https://github.com/plsankar1996/PHP-Pagination
 * 
 */

class Pagination
{

    public $total;
    public $current;
    public $balance;
    public $urlbase;

    public function __construct($current, $total, $urlbase, $balance)
    {
        $this->total = $total;
        $this->current = $current;
        $this->balance = $balance;
        $this->urlbase = $urlbase;
    }

    public function create()
    {
        $start = $this->current - $this->balance;
        $end = $this->current + $this->balance;

        if ($start < 1) {
            $end = $end + (1 - $start);
            $start = 1;
        }

        if ($end > $this->total) {
            $start = $start - ($end - $this->total);
            $end = $this->total;
        }

        if ($this->current > 1) {
            $this->createPageItem(1, false, "First");
        }

        for ($x = $start; $x <= $end; $x++) {
            if ($x < 1) {
                continue;
            } else if ($x > $this->total) {
                break;
            } else {
                $this->createPageItem($x, $x == $this->current, $x);
            }
        }

        if ($this->current < $this->total) {
            $this->createPageItem($this->total, false, "Last");
        }
    }

    public function createPageItem($x, $active, $name)
    {
        echo "<li class=\"page-item";
        if ($active) {
            echo " active\"><a class=\"page-link\">";
        } else {
            echo "\"><a class=\"page-link\" href=\"" . $this->urlbase . "page=$x\">";
        }
        echo "$name</a></li>";
    }
}
