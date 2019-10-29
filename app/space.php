<?php

require __DIR__ . '/pangu.php';

if (isset($_POST['input'])) {
    $result = [
        'data' => pangu($_POST['input']),
    ];

    echo json_encode($result);
}
