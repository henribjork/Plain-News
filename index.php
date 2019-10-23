<?php

require __DIR__.'/data.php';
require __DIR__.'/functions.php';
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title></title>
    </head>
    <body>
    
    <?php foreach ($posts as $post) :?>

        <h1><?= $post['title']?></h1>
        <p><?= $post['date']?></p>
        <p><?= $post['content']?></p>
        <?= getAuthorName($authors, $post);?>

    <?php endforeach ;?>

    </body>
</html>