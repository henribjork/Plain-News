<?php

require __DIR__.'/data.php';
require __DIR__.'/functions.php';
usort($posts, "sortFunction");
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
        <title></title>
    </head>
    <body>
    
    <header>
        <h1>Yrgo Times</h1>
        
    </header>

    <nav>
        <a>HOME</a>
        <a onclick="scrollToArticlePosition()">ARTICLES</a>
        <a onclick="scrollToAboutPosition()">ABOUT</a>
    </nav>

    <div class="newsfeedTitle">
        <h2>ARTICLES</h2>
    </div>
    <?php foreach ($posts as $post) :?>

    <article>
        <img class="headerImage" src="<?= $post['header']?>">
        <h3 class="postTitle"><?= $post['title']?></h3>
        <p class="publishDate">Published: <?= $post['date']?></p>
        <p class="postContent"><?= $post['content']?></p>
        <p class="postAuthor"><?= getAuthorName($authors, $post);?><p>
    </article>

    <?php endforeach ;?>

    <footer>
        <h2 class="aboutSection">Yrgo Times	&#8482;</h2>
        <p>Yrgo Times is an English satirical digital media company and newspaper organization that publishes articles on international, national, and local news. The company is based in Gothenburg but originated as a weekly print publication on August 29, 1988 in Jokkmokk, Sweden. Yrgo Times began publishing online in the spring of 1996. In 2007, they began publishing satirical news audio and video online as Yrgo Times News Network.</p>
        <p class="copyright">&copy; 2019 Yrgo Times</p>
    </footer>

    <script src="main.js">
    </script>
    </body>
</html>