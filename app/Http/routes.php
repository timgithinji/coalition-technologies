<?php

Route::get('/', array(
'as' => 'home',
'uses' => 'HomeController@index')
);

Route::post('post/products', array(
'as' => 'post-products',
'uses' => 'HomeController@postProducts')
);