<?php

namespace App\Http\Controllers;

<?php
   
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'index']);

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
