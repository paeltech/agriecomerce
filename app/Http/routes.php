




//category Resources
/********************* category ***********************************************/
Route::resource('category','\App\Http\Controllers\CategoryController');
Route::post('category/{id}/update','\App\Http\Controllers\CategoryController@update');
Route::get('category/{id}/delete','\App\Http\Controllers\CategoryController@destroy');
Route::get('category/{id}/deleteMsg','\App\Http\Controllers\CategoryController@DeleteMsg');
/********************* category ***********************************************/




//type Resources
/********************* type ***********************************************/
Route::resource('type','\App\Http\Controllers\TypeController');
Route::post('type/{id}/update','\App\Http\Controllers\TypeController@update');
Route::get('type/{id}/delete','\App\Http\Controllers\TypeController@destroy');
Route::get('type/{id}/deleteMsg','\App\Http\Controllers\TypeController@DeleteMsg');
/********************* type ***********************************************/

