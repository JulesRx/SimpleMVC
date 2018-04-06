<!DOCTYPE html>
<html lang="fr">
<head>
  <base href="<?= $GLOBALS['base_url'] ?>">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
  <script src="assets/js/simplemvc.js"></script>

  <link rel="shortcut icon" href="assets/img/favicon.png">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/simplemvc.css">

  <?php if (isset($title)): ?>
    <title><?= $GLOBALS['site_title'] ?> - <?= $title ?></title>
  <?php else: ?>
    <title><?= $GLOBALS['site_title'] ?></title>
  <?php endif; ?>

</head>
<body>

  <nav id="myNav" class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?= $GLOBALS['base_url']; ?>"><?= $GLOBALS['site_title'] ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsedNav" aria-controls="collapsedNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsedNav">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="post">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">About</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
