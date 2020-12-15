<?php

namespace App\Http;

Route::match(['get', 'post'], '/', function()
{
    return 'Hello World';
});

?>