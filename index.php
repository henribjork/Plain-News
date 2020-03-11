<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';
usort($posts, "sortFunction");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://use.fontawesome.com/a3e141a305.js"></script>
    <title></title>
</head>

<body>

    <header class="home">
        <h1>Yrgo Times</h1>
    </header>

    <nav>
        <a href="#">HOME</a>
        <a onclick="scrollToArticlePosition()">ARTICLES</a>
        <a onclick="scrollToAboutPosition()">ABOUT</a>
    </nav>

    <div class="newsfeedTitle">
        <h2>ARTICLES</h2>
    </div>
    <?php foreach ($posts as $post) : ?>

        <article>
            <div class="headerImageContainer">
                <img class="headerImage" loading="lazy" alt="article image" src="<?= $post['header'] ?>">
            </div>
            <h3 class="postTitle"><?= $post['title'] ?></h3>
            <p class="publishDate">Published: <?= $post['date'] ?></p>
            <p class="postContent"><?= $post['content'] ?></p>
            <p class="postAuthor"><?= getAuthorName($authors, $post); ?><p>
                    <div class="postLikesContainer">
                        <p class="fa fa-thumbs-o-up" aria-hidden="true"><?= $post['likes'] ?><p>
                    </div>
        </article>

    <?php endforeach; ?>

    <!-- To improve web accessibility, using aria-hidden="true"  on post likes hides icons used purely for decoration.-->

    <button class="btnScrollToTop" onclick="scrollToHomePosition()">
        <i class="material-icons">arrow_upward</i>
    </button>

    <footer>
        <h2 class="aboutSection">Yrgo Times &#8482;</h2>
        <p>Yrgo Times is an English satirical digital media company and newspaper organization that publishes articles on international, national, and local news. The company is based in Gothenburg but originated as a weekly print publication on August 29, 1988 in Jokkmokk, Sweden. Yrgo Times began publishing online in the spring of 1996. In 2007, they began publishing satirical news audio and video online as Yrgo Times News Network.</p>
    </footer>
    <p class="copyright">&copy; 2019 Yrgo Times</p>

    <script src="main.js">
    </script>
</body>

</html>