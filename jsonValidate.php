<?php

$json = '{"key": "value"}';
$notJson = '{[]}';

var_dump(json_validate($json));
var_dump(json_validate($notJson));
var_dump(
    [
        json_last_error(),
        json_last_error_msg()
    ]
);