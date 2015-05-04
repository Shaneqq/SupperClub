<?php



Route::get('/', array(
    'as'=>'home',
    'uses'=>'HomeController@home'
)
);
Route::get('/SignUp',array(
   'as'=>'sign-up',
    'uses'=>'HomeController@signUp'
));


