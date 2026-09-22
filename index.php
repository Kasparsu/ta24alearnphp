<?php
$title = 'World';
$posts = [
  [
    'title' => 'Some World title 1',
    'date' => 'January 1, 2021',
    'author' => 'Pets',
    'body' => 'Some World content 1',
  ],
  [
    'title' => 'Some World title 2',
    'date' => 'January 3, 2021',
    'author' => 'Manivald',
    'body' => 'Some World content 2',
  ],
  [
    'title' => 'Some World title 3',
    'date' => 'January 5, 2021',
    'author' => 'Jorss',
    'body' => 'Some World content 3',
  ],
  [
    'title' => 'Some World title 4',
    'date' => 'January 7, 2021',
    'author' => 'Heli Kopter',
    'body' => 'Some World content 4',
  ],
];


?>


<?php include __DIR__ . '/partials/header.php'; ?>

<main class="container">
  <?php include __DIR__ . '/partials/hero.php'; ?>
  <?php include __DIR__ . '/partials/featured.php'; ?>

  <div class="row g-5">
    <div class="col-md-8">
      <?php include __DIR__ . '/partials/posts.php'; ?>
    </div>
    <div class="col-md-4">
      <?php include __DIR__ . '/partials/sidebar.php'; ?>
    </div>
  </div>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>