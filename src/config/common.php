<?php

return [
    'logger' => [
        '__class' => \yii\log\Logger::class,
    ],

    \Psr\Log\LoggerInterface::class => \yii\di\Reference::to('logger'),
];
