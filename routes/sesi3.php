//Admin
Route::group(["prefix" => "admin", "namespace" => "Admin"], function(){
    Route::get('teacher', 'TeacherController@getIndex');
    Route::get('student', 'StudentController@getIndex');
    Route::get('classroom', 'ClassroomController@getIndex');
});

//queue
Route::post('queue', 'QueueController@getIndex');
