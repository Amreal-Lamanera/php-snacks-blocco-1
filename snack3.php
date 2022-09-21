<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

?>

<?php
foreach ($posts as $key => $value) {
?>

    <h2>

        <?=
        $key;
        ?>

    </h2>

    <?php
    foreach ($value as $key => $post) {
    ?>
        <div>

            <em>
                <?=
                $post['title'];
                ?>
            </em>
            <span>

                | author:
                <?=
                $post['author'];
                ?>
            </span>
            <p>
                <?=
                $post['text'];
                ?>
            </p>
        </div>
    <?php
    }
    ?>

<?php
}
?>