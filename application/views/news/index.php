<?php
/**
 * Created by PhpStorm.
 * User: Aditya
 * Date: 10/07/2015
 * Time: 1:04 AM
 */
?>

<h2><?php echo $title ?></h2>

<?php foreach ($news as $news_item): ?>

    <h3><?php echo $news_item['title'] ?></h3>
    <div class="main">
        <?php echo $news_item['text'] ?>
    </div>
    <p><a href=news/view/<?php echo $news_item['slug'] ?>>View article</a></p>

<?php endforeach ?>