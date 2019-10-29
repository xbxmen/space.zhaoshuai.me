<?php

require './pangu/pangu.php';

if (isset($_POST['input'])) {
    $result = [
        'data' => pangu($_POST['input']),
    ];

    echo json_encode($result);
}
