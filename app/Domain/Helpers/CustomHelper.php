<?php

function sendInternalSuccess($message = "", $data = [], $code = 200)
{
    # code...
    return array(
        "success" => true,
        "message" => $message,
        "data" => $data,
        "code" => $code
    );
}


function sendInternalError($message = "", $data = [], $code = 400)
{
    # code...
    return array(
        "success" => false,
        "message" => $message,
        "data" => $data,
        "code" => $code
    );
}


function sendExternalSuccess($message = "", $data = [], $code = 200)
{
    # code...
    return array(
        "success" => true,
        "message" => $message,
        "data" => $data,
        "code" => $code
    );
}


function sendExternalError($message = "", $data = [], $code = 400)
{
    # code...
    return array(
        "success" => false,
        "message" => $message,
        "data" => $data,
        "code" => $code
    );
}


