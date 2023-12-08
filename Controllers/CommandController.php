<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class CommandController extends Controller
{

public function generateFile(Request $request)
{
    $validatedData = $request->validate([
        'command' => 'required|string|max:255', // Validate user input
    ]);

    $command = $validatedData['command'];

    // Get the current Laravel project path
    $laravelProjectPath = base_path();

    // Generate .bat file content
    $batContent = "@echo off\r\n";
    $batContent .= "doskey $command=php artisan\r\n"; // Set doskey command for the user's input
    $batContent .= "doskey lp=$laravelProjectPath\r\n"; // Set doskey command for Laravel project path
    $batContent .= "pause";

    // File path for the .bat file in the storage folder
    $filePath = 'doskey.bat';

    // Save .bat file in the storage folder
    Storage::put($filePath, $batContent);

    // Provide the generated file for download
     return view('result')->with([
        'laravelProjectPath' => $laravelProjectPath,
        'filePath' => $filePath,
    ]);


}
}
