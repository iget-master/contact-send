<?php

Route::post('/contact/{site}', ['as' => 'contact', 'uses' => 'ContactController@send' ]);