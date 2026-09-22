<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
        name="author"
        content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Astro v5.13.2" />
    <title><?= $title ?? 'Blog' ?></title>
    <link
        rel="canonical"
        href="https://getbootstrap.com/docs/5.3/examples/blog/" />
    <script src="/assets/js/color-modes.js"></script>
    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <meta name="theme-color" content="#712cf9" />
    <link
        href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&display=swap"
        rel="stylesheet" />
    <link href="blog.css" rel="stylesheet" />
</head>

<body>
    <?php include __DIR__ . '/icons.php'; ?>
    <?php include __DIR__ . '/theme-select.php'; ?>
    <?php include __DIR__ . '/nav.php'; ?>