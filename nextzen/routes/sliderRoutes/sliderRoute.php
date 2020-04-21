<?php

// add slider route
Route::get('addSlider','admin\sliderController\SliderController@addSlider');

// slider insert ajax
Route::post('sliderInsertAjax', 'admin\sliderController\SliderController@sliderInsertAjax');

// slider veiw
Route::get('sliderView','admin\sliderController\SliderController@sliderView');

// slider edit
Route::post('sliderEditAjax','admin\sliderController\SliderController@sliderEditAjax');

// update Slider
Route::post('sliderUpdateAjax','admin\sliderController\SliderController@sliderUpdateAjax');

// slider delete ajax
Route::post('sliderDeleteAjax','admin\sliderController\SliderController@sliderDeleteAjax');

