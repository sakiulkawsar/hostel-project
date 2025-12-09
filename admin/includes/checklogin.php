<?php
// call session_start() at the top of the script (only once per request)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function check_login()
{
    // If no session id or empty, redirect to login
    if (empty($_SESSION['id'])) {
        // build a relative path to avoid protocol issues
        $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'index.php';
        // optional: remove the id from session
        unset($_SESSION['id']);
        // redirect and stop execution
        header("Location: $uri/$extra");
        exit;
    }
}
?>
