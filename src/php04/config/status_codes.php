<?php
$status_codes = [
    [
        'code' => '102',
        'meaning' => 'Processing',
        'description' => '処理中である'
    ],
    [
        'code' => '200',
        'meaning' => 'OK',
        'description' => 'リクエストが正常に成功できた'
    ],
    [
        'code' => '302',
        'meaning' => 'Moved',
        'description' => 'リクエストしたリソースが恒久的に移動されている'
    ],
    [
        'code' => '304',
        'meaning' => 'Not Modified',
        'description' => 'リクエストしたリソースは更新されていない'
    ],
    [
        'code' => '400',
        'meaning' => 'Bat Request',
        'description' => 'クライアントのリクエストに異常がある'
    ],
    [
        'code' => '401',
        'meaning' => 'Unauthorized',
        'description' => 'アクセストークンが無効なときや、認証がされていない'
    ],
    [
        'code' => '403',
        'meaning' => 'Forbidden',
        'description' => '閲覧権限がないフォルダである'
    ],
    [
        'code' => '404',
        'meaning' => 'Not found',
        'description' => 'Webページが見つからない'
    ],
    [
        'code' => '500',
        'meaning' => 'Internal Server Erro',
        'description' => '処理中である'
    ],
    [
        'code' => '502',
        'meaning' => 'Bat Gateway',
        'description' => 'サーバーがリクエストを満たすのに必要な機能をサポートしていない'
    ],
    [
        'code' => '503',
        'meaning' => 'Service Unavailable',
        'description' => '一時的にサーバーにアクセスが出来ない'
    ],
];
