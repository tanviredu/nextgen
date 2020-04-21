<?php
// add future and route 
Route::get('addFutureTrainnings','futureAndTraining\FutureAndTrainingContorller@addFutureTrainnings');

//Insert add future and training
Route::post('insertFutureAndTrainingAjax','futureAndTraining\FutureAndTrainingContorller@insertFutureAndTrainingAjax');

//future and training view
Route::get('futureTrainingsView','futureAndTraining\FutureAndTrainingContorller@futureTrainingsView');

//future and trainings edit
Route::post('futureAndTrainingsEdit','futureAndTraining\FutureAndTrainingContorller@futureAndTrainingsEdit');

// future and training update
Route::post('futureAndTrainingsUpdateAjax','futureAndTraining\FutureAndTrainingContorller@futureAndTrainingsUpdateAjax');

// future and trainings delete
Route::post('futureAndTrainingDeleteAjax','futureAndTraining\FutureAndTrainingContorller@futureAndTrainingDeleteAjax');