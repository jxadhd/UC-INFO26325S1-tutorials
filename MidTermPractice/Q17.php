<?php
function get_key_value($arr, $key) {
    foreach ($arr as $k => $v) {
        if ($k == $key) {
            return $v;
        }
    }
    return null;
}
?>