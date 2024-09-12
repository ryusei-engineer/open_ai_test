<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

Route::get("/", [QuestionController::class, "showForm"]);
Route::post("/submit", [QuestionController::class, "submitForm"]);