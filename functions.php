<?php

declare(strict_types=1);

// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.

// gets the post authors name by comparing the two ID's in the $posts and $authors array.
function getAuthorName(array $authors, array $post) : string  
{
    $postId = $post['authorId'];

    foreach ($authors as $author) {
        $id = $author['id'];
        $name = $author['name'];
        if ($postId === $id) {
            return "Author: $name";
        }
    }
}

// sorts the $posts array by latest date
function sortFunction($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
}