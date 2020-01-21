<?php
if (isset($_POST['submit'])) {
    $toppings = filter_input (INPUT_POST, 'top', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
    if ($toppings !==null) {
        foreach ($toppings as $value ) {
            echo $value . '<br>';
        }
    } else {
        echo 'No toppings selected.';
    }
}

?>