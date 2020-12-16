<?php
include_once '../books.php';

$funcBookMax = function ($obj) {
    return $obj["pages"] > 400;
};

$booksMaxPages = array_filter($books, $funcBookMax);

print_r($booksMaxPages);
