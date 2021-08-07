<?php

/**
 * Growth Engineering Youtube Test
 * OpenAPI declarations for Growth Engineering youtube test
 * PHP version 7.2.5
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: hello@oguzozcan.com
 *
 * NOTE: This class is auto generated by OpenAPI-Generator
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 * Source files are located at:
 *
 * > https://github.com/OpenAPITools/openapi-generator/blob/master/modules/openapi-generator/src/main/resources/php-laravel/
 */


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * get getPlaylist
 * Summary: Get - List Playlist
 * Notes: List playlist
 * Output-Formats: [application/json]
 */
Route::get('/playlist/{playlist_id}', 'YoutubeController@getPlaylist');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
