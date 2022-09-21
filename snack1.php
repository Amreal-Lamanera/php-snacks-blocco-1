<?php
$match = [
    'home_team' => 'Heat',
    'guest_team' => 'Bulls',
    'home_score' => 100,
    'guest_score' => 0
];

$matches = [
    $match,
    [
        'home_team' => 'Cavaliers',
        'guest_team' => 'Sixers',
        'home_score' => 80,
        'guest_score' => 100
    ],
    [
        'home_team' => 'Raptors',
        'guest_team' => 'Celtics',
        'home_score' => 70,
        'guest_score' => 90
    ],
];

// var_dump($matches);

?>

<ul>
    <?php
    for ($i = 0; $i < count($matches); $i++) {
    ?>
        <li>
            <?php
            echo "{$matches[$i]['home_team']} - {$matches[$i]['guest_team']} | "
            ?>
            <strong>
                <?php
                echo "{$matches[$i]['home_score']} - {$matches[$i]['guest_score']}"
                ?>
            </strong>
        </li>
    <?php
    }
    ?>
</ul>