<?php
/**
 * (In a very simpleminded way) validate the username.
 * @param $username - the value to check.
 * @return bool - TRUE if the value is a match, FALSE otherwise.
 */
function check_username($username) {
    $server_user = "superman";
    return $username == $server_user;
}
/**
 * (In a very simpleminded and dangerous way) validate the password.
 * @param $password - the value to check.
 * @return bool - TRUE if the value is a match, FALSE otherwise.
 */
function check_password($password) {
    $server_pass = "super";
  return $password == $server_pass;
}
?>