<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2019-01-01
 * Time: 20:06
 */

return [
    'SERVER_NAME' => "EasySwoole",
    'MAIN_SERVER' => [
        'LISTEN_ADDRESS' => '0.0.0.0',
        'PORT' => 9501,
        /**
         * EASYSWOOLE_SERVER
         * EASYSWOOLE_WEB_SERVER
         * EASYSWOOLE_WEB_SOCKET_SERVER
         * EASYSWOOLE_REDIS_SERVER
         */
        'SERVER_TYPE' => EASYSWOOLE_WEB_SOCKET_SERVER,
        'SOCK_TYPE' => SWOOLE_TCP,
        'RUN_MODEL' => SWOOLE_PROCESS,
        'SETTING' => [
            'worker_num' => 8,
            'reload_async' => true,
            'max_wait_time'=>3
        ],
        'TASK'=>[
            'workerNum'=>4,
            'maxRunningNum'=>128,
            'timeout'=>15
        ]
    ],
    //'TEMP_DIR' => null,
    'TEMP_DIR' => '/data/es_tmp',
    'LOG_DIR' => null,
    'MYSQL'  => [
        'host'          => '127.0.0.1',
        'port'          => 3306,
        'user'          => 'root',
        'password'      => '123456',
        'database'      => 'easyswoole',
        'timeout'       => 5,
        'charset'       => 'utf8mb4',
    ],
];
