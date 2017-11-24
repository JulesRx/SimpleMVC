<p>Here is a list of all posts:</p>

<?php foreach($posts as $post) { ?>
  <p>
    <?php echo $post->getTitle(); ?>
    <a href='?controller=post&action=show&id=<?php echo $post->getId(); ?>'>See content</a>
  </p>
<?php } ?>
