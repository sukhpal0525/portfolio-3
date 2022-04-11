<?php
function useRegex($username) {
    $regex = '(@aston.ac.uk)';
    return preg_match($regex, $username);
}
?>