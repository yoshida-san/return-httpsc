<?php

try {
    $ec = filter_input(INPUT_GET, 'ec', FILTER_SANITIZE_NUMBER_INT) * 1;
    http_response_code($ec);
    echo 'http status: ', http_response_code();
} catch (Exception $e) {
    echo 'error: ',  $e->getMessage();
}
