<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EventsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(["prefix" => "events"], function () {
    // GET /events: show all articles
    Route::get("", [EventsController::class, "index"]);

    // POST /articles: create a new article
    Route::post("", [EventsController::class, "store"]);

    Route::group(["prefix" => "{event}"], function () {
        // GET /events/8: show the article
        Route::get("", [EventsController::class, "show"]);

        // PUT /articles/8: update the article
        Route::put("", [EventsController::class, "update"]);

        // DELETE /articles/8: delete the article
        Route::delete("", [EventsController::class, "destroy"]);
    });
});