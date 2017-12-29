<h2>Voici une liste de posts :</h2>

<?php foreach($posts as $post) { ?>
  <p>
    <i><?php echo $post->getTitle(); ?> </i>
    <a href='?controller=post&action=show&id=<?php echo $post->getId(); ?>'>Voir plus</a>
  </p>
<?php } ?>
