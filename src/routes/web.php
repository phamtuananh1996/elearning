<?php
Route::get('/elearning/{all?}/{all1?}/{all2?}',function (){
  return \File::get(public_path() . '/elearning.html');
});
