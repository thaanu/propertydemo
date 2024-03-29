<?php 
function getHeader() {
    global $appConfig;
    include dirname(__DIR__) . '/layout/header.php';
}
function getFooter() {
    global $appConfig;
    include dirname(__DIR__) . '/layout/footer.php';
}