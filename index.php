<?php
try {
    http_response_code(filter_input(INPUT_GET, 'ec', FILTER_SANITIZE_NUMBER_INT) * 1);
} catch (Exception $e) {
    echo 'error: ',  $e->getMessage();
}
