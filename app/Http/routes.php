<?php

Route::post('/contact', [ 'as' => 'contact', 'uses' => 'ContactController@send' ]);