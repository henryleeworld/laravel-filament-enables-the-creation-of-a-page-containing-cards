<?php

return [

    'title' => '驗證您的電子郵件',

    'heading' => '驗證您的電子郵件',

    'actions' => [

        'resend_notification' => [
            'label' => '重新傳送',
        ],

    ],

    'messages' => [
        'notification_not_received' => '沒有收到我們發送的電子郵件？',
        'notification_sent' => '我們已向 :email 發送了一封電子郵件，其中包含有關如何驗證您的電子郵件地址的說明。',
    ],

    'notifications' => [

        'notification_resent' => [
            'title' => '我們已重新發送該電子郵件。',
        ],

        'notification_resend_throttled' => [
            'title' => '嘗試重新傳送次數過多',
            'body' => '請在 :seconds 秒後重試。',
        ],

    ],

];
