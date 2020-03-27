<?php


Route::get('/', function () {
    return view('sample_data');
});

Route::resource('sample', 'SampleController');

Route::post('sample/update', 'SampleController@update')->name('sample.update');

Route::get('sample/destroy/{id}', 'SampleController@destroy');

//Route::get('full-text-search', 'Full_text_search_Controller@index');

//Route::post('full-text-search/action', 'Full_text_search_Controller@action')->name('full-text-search.action');

//Route::get('full-text-search/normal-search', 'Full_text_search_Controller@normal_search')->name('full-text-search.normal-search');
