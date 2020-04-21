<?php
// process work flow create route
Route::get('addProcessWorkflow','processWorkflowController\ProcessWorkflowController@addProcessWorkflow');

//processWorkflow insert ajax
Route::post('insertProcessWorkflowAjax','processWorkflowController\ProcessWorkflowController@insertProcessWorkflowAjax');

// process workflow view
Route::get('processWorkflowView','processWorkflowController\ProcessWorkflowController@processWorkflowView');

// process workflow edit
Route::post('processWorkflowEditAjax','processWorkflowController\ProcessWorkflowController@processWorkflowEditAjax');

// process workflow update ajax
Route::post('processWorkflowUpdateAjax','processWorkflowController\ProcessWorkflowController@processWorkflowUpdateAjax');

// process workflow delete ajax
Route::post('processWorkflowDeleteAjax','processWorkflowController\ProcessWorkflowController@processWorkflowDeleteAjax');