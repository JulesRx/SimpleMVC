<h2>This is a list of posts :</h2>

<?php foreach ($posts as $post): ?>
  <p>
    <i><?= $post->getTitle(); ?> </i>
    <a href="post/show/<?=$post->getId() ?>">See more</a>
  </p>
<?php endforeach; ?>
