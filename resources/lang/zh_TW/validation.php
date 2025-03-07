<?php
return [
    'required' => ':attribute 不能為空。',
    'email' => ':attribute 必須是有效的電子郵件地址。',
    'min' => [
        'string' => ':attribute 必須至少 :min 個字元。',
    ],
    'max' => [
        'string' => ':attribute 不能超過 :max 個字元。',
    ],
    'confirmed' => ':attribute 與確認欄位不相符。',
    
    // 自訂欄位名稱
    'attributes' => [
        'email' => '電子郵件',
        'password' => '密碼',
        'name' => '使用者名稱',
    ],
];