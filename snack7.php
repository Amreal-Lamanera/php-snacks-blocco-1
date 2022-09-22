<?php
$alumns = [
    [
        'name' => 'Antonio',
        'last_name' => 'Barbarossa',
        'votes' => [2, 7, 3, 4, 5, 3, 5]
    ],
    [
        'name' => 'Giorgio',
        'last_name' => 'Vanni',
        'votes' => [10, 9, 10, 9.5, 10]
    ],
    [
        'name' => 'Mauro',
        'last_name' => 'Formisano',
        'votes' => [10, 10, 10, 10, 10]
    ],
    [
        'name' => 'Tiziano',
        'last_name' => 'Nicolai',
        'votes' => [10, 6, 7, 9, 8, 9, 9]
    ],
];
?>

<?php
foreach ($alumns as $value) {
?>

    <div>
        <h3>
            <?=
            "{$value['name']} {$value['last_name']}";
            ?>
        </h3>
        <p>
            Media Voti: <em>
                <?=
                round(array_sum($value['votes']) / count($value['votes']), 2);
                ?>
            </em>
        </p>
    </div>

<?php
}
?>