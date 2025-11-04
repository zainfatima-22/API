<?php

use App\Http\Controllers\Api\V1\TicketController;
use App\Http\Controllers\Api\V1\UsersController;
use Illuminate\Foundation\Console\ApiInstallCommand;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIController;
use Illuminate\Http\Request;

Route::apiResource('ticket', TicketController::class);
Route::apiResource('users', UsersController::class);
Route::put('ticket/{ticket}', [TicketController::class, 'edit']);
Route::patch('ticket/{ticket}', [TicketController::class, 'update']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});