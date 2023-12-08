<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
return view('form');

});
Route::post('/generate-file', 'App\Http\Controllers\CommandController@generateFile')->name('generateFile');

Route::get('/show-gif', function () {
    $filePath = storage_path('app/guide.gif');

    if (file_exists($filePath)) {
        $fileContents = file_get_contents($filePath);
        return Response::make($fileContents, 200, [
            'Content-Type' => 'image/gif',
            'Content-Disposition' => 'inline; filename=guide.gif',
        ]);
    }

    // If the file doesn't exist, return a 404 response or handle it appropriately
    abort(404);
})->name('show-gif');