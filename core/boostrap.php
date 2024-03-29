<?php 

    /**
     * Configuration
     */
    $appConfig = include dirname(__DIR__) . '/config.php';

    /**
     * Helper Functions
     */
    require_once __DIR__ . '/functions.php';

    /**
     * Session
     */
    session_start();

    /**
     * Timezone
     */
    date_default_timezone_set($appConfig->timezone);

    /**
     * Database Connection
     */
    include __DIR__ . '/database.php';