<?php


use Test\PrintMessage\services\Message;

Route::get('package/test/print', function () {

    return 'Hello World';
});


Route::get('package/test/index',[\Test\PrintMessage\Http\Controllers\PrintController::class,'index']);

