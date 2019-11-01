<?php

declare(strict_types=1);

/**
 * gets the post authors name by comparing the two ID's in the $posts and $authors array.
 *
 * @param array $authors
 * @param array $post
 * @return string
 */
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


/**
 * sorts an arrays items by latest given date
 *
 * @param array $a
 * @param array $b
 * @return integer
 */
function sortFunction(array $a, array $b) : int {
    return strtotime($b['date']) - strtotime($a['date']);
}