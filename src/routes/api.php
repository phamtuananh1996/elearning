<?php
Route::get('gfl/elearning/api/login','GFL\Elearning\controllers\auths\LoginController@login');
Route::group(['prefix' => 'gfl/elearning/api','middleware'=>'jwt.auth'], function () {
    Route::resource('edocuments', 'GFL\Elearning\controllers\edocuments\EdocumentController');
});
