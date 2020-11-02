<?php 

use App\Http\Controllers\EmployeeImageUploadController;
Route::get('/', function () {
    return view('employeeImageUpload');
});

Route::get('employeeImageUpload', [EmployeeImageUploadController::class,'employeeImageUpload']);
 

Route::post('employeeImageUpload', [EmployeeImageUploadController::class,'employeeImageUploadPost'])->name('employeeImageUpload');