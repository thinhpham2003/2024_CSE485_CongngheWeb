<?php
$uses = [
    [
        "username" => "johndoe",
        "password" =>  password_hash("password123", PASSWORD_DEFAULT),
        "name" => "John Doe",
        "email" => "johndoe@example.com",
        "role" => "user"

    ],
    [
        "username" => "abc",
        "password" => password_hash( "123", PASSWORD_DEFAULT),
        "name" => "Shelba Kiledal",
        "email" => "skiledal0@blogspot.com",
        "role" => "user"
    ], [
        "username" => "abcd",
        "password" => password_hash( "1234",PASSWORD_DEFAULT),
        "name" => "Dorisa Hazeldean",
        "email" => "dhazeldean1@wsj.com",
        "role" => "admin"
    ], [
        "username" => "cpickthorn2",
        "password" => password_hash( "zX2~y[xtnX0ku",PASSWORD_DEFAULT),
        "name" => "Chance Pickthorn",
        "email" => "cpickthorn2@skyrock.com",
        "role" => "user"
    ], [
        "username" => "pclimance3",
        "password" => password_hash( "xU3~4km3",PASSWORD_DEFAULT),
        "name" => "Peirce Climance",
        "email" => "pclimance3@pinterest.com",
         "role" => "user"
    ], [
        "username" => "jrochelle4",
        "password" => password_hash( "sF0>N2ILqi>Sn|`",PASSWORD_DEFAULT),
        "name" => "Jocelin Rochelle",
        "email" => "jrochelle4@zimbio.com",
        "role" => "user"
    ], [
        "username" => "lgiovannelli5",
        "password" => password_hash( "vC0~PCQJB5WE+LN",PASSWORD_DEFAULT),
        "name" => "Leola Giovannelli",
        "email" => "lgiovannelli5@canalblog.com",
        "role" => "user"
    ],
];

$authorization_levels = [
    "user" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => false,
    ],
    "admin" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => true,
        "manage_users" => true,
    ],
];
?>

