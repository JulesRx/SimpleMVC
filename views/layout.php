<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <script src="assets/js/simplemvc.js"></script>

  <link rel="stylesheet" href="assets/css/simplemvc.css">

  <title>SimpleMVC</title>
</head>
<body>

  <header>
    <a href='?action=home'>Home</a>
    <a href='?controller=post&action=index'>Posts</a>
  </header>

  <?php require_once('routes.php'); ?>

</body>
</html>
