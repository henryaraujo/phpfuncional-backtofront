<?php

include_once '../books.php';

$getTitleAuthor = function ($obj) {
    return array(
        "title" => $obj['title'],
        "author" => $obj['author']
    );
};

$booksTitleAuthor = array_map($getTitleAuthor, $books);

print_r($booksTitleAuthor);
