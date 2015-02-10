<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
           // 'catchAll' => 'site/offline',
            //'showScriptName' => false,
            /* 'rules' => [

                   'thumbs/<path:.*>' => 'site/thumb',

                 ],*/
        ],
    ],
    //'catchAll' => ['site/offline'],
];
