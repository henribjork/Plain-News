<?php
declare(strict_types=1);
// This is the file where you can keep your data arrays such as articles and
// authors.

$authors = [
    ['name' => 'Guy McMan', 'id' => 1],
    ['name' => 'Per Son', 'id' => 2],
    ['name' => 'Arn Arthur', 'id' => 3],
    ['name' => 'Wright Er', 'id' => 4],
    ['name' => 'Faye K. Neighm', 'id' => 5]
];


$posts = [
    ['header' => './images/jerry.jpg', 'title' => '‘Seinfeld’ Producers Reveal They Originally Planned To Kill Off Jerry In The Pilot', 'date' => '2019-01-22', 'content' => file_get_contents('./articles/jerry.txt'), 'authorId' => 4, 'likes' => 5],

    ['header' => './images/emo.jpg', 'title' => 'Uh Oh: Myspace Just Sold All the Data About Your Emo Phase to the Russians', 'date' => '2019-01-01', 'content' => file_get_contents('./articles/emo.txt'), 'authorId' => 1, 'likes' => 3],

    ['header' => './images/ears.jpg', 'title' => 'Fan Brings Earplugs to Morrissey Concert in Case He Talks', 'date' => '2019-01-15', 'content' => file_get_contents('./articles/ears.txt'), 'authorId' => 2, 'likes' => 7],

    ['header' => './images/dudecrowdsurf.jpg', 'title' => 'Dude Crowd Surfer Has Been Dead for Hours', 'date' => '2019-01-19', 'content' => file_get_contents('./articles/dudecrowdsurf.txt'), 'authorId' => 3, 'likes' => 2],

    ['header' => './images/kim.jpg', 'title' => 'Kim Kardashian Tries To Escape L.A. In Rowboat After Realizing Past 12 Years Of Life Have Been TV Show', 'date' => '2019-01-21', 'content' => file_get_contents('./articles/kim.txt'), 'authorId' => 5, 'likes' => 10],

    ['header' => './images/bustour.jpg', 'title' => 'Bus Tour Takes Fans Down Iconic ‘Joker’ Stairs', 'date' => '2019-01-10', 'content' => 'Forem Ipsum', 'authorId' => 1, 'likes' => 9],

    ['header' => './images/legstretch.jpg', 'title' => 'Why Stretching Your Legs is Overrated', 'date' => '2019-01-07', 'content' => 'Gorem Ipsum', 'authorId' => 2, 'likes' => 5],

    ['header' => './images/vandelay.jpg', 'title' => 'Vandelay Industries Files for Bankruptcy', 'date' => '2019-01-08', 'content' => 'Horem Ipsum', 'authorId' => 3, 'likes' => 2],

    ['header' => './images/punk.jpg', 'title' => 'Punk Mortified After Being Named Employee of the Month', 'date' => '2019-01-12', 'content' => file_get_contents('./articles/punk.txt'), 'authorId' => 4, 'likes' => 10],

    ['header' => './images/skincare.jpg', 'title' => 'Man Tricked into Skincare by Wolf on Package', 'date' => '2019-01-10', 'content' => file_get_contents('./articles/skincare.txt'),'authorId' => 5, 'likes' => 1]
];


