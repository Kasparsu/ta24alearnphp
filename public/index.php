<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

function dump(...$values)
{
    echo '<pre>';
    var_dump(...$values);
    echo '</pre>';
}

switch ($_SERVER['REQUEST_URI']) {
    case '/':
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
        include __DIR__ . '/../views/index.php';
        break;
    case '/us':
        $title = 'U.S';
        $posts = [
            [
                'title' => 'Some U.S title 1',
                'date' => 'January 1, 2021',
                'author' => 'Pets',
                'body' => 'Some U.S content 1',
            ],
            [
                'title' => 'Some U.S title 2',
                'date' => 'January 3, 2021',
                'author' => 'Manivald',
                'body' => 'Some U.S content 2',
            ],
            [
                'title' => 'Some U.S title 3',
                'date' => 'January 5, 2021',
                'author' => 'Jorss',
                'body' => 'Some U.S content 3',
            ],
            [
                'title' => 'Some U.S title 4',
                'date' => 'January 7, 2021',
                'author' => 'Heli Kopter',
                'body' => 'Some U.S content 4',
            ],
        ];

        include __DIR__ . '/../views/us.php';
        break;
    default:
        echo '404';
}
