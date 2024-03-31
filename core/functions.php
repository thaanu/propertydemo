<?php 
function getHeader() : void {
    global $appConfig;
    include dirname(__DIR__) . '/layout/header.php';
}
function getFooter() : void {
    global $appConfig;
    include dirname(__DIR__) . '/layout/footer.php';
}
function isActiveTab( string $tab ) : string {
    global $page;
    if ( $page == $tab ) {
        return ' active ';
    }
    return '';
}