<?php

declare(strict_types=1);

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

// sorts an arrays items by latest given date
function sortFunction($a, $b) : int {
    return strtotime($b['date']) - strtotime($a['date']);
}