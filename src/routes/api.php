<?php
Route::post('gfl/elearning/api/login','GFL\Elearning\controllers\auths\LoginController@login');
Route::group(['prefix' => 'gfl/elearning/api','middleware'=>'jwt.auth'], function () {
    Route::resource('emodules', 'GFL\Elearning\controllers\emodules\EModuleController',['except'=>["create","edit"]]);
    Route::resource('edocuments', 'GFL\Elearning\controllers\edocuments\EDocumentController',['except'=>["create","edit"]]);
    Route::resource('users', 'GFL\Elearning\controllers\users\UserController');
    Route::resource('organizations', 'GFL\Elearning\controllers\organizations\OrganizationController')->except(['create', 'edit']);
});
