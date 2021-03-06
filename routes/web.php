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

Route::get('/',"CampaignController@index");

Route::get('/edit/{id}',"CampaignController@edit");

Route::get('/show/{id}',"CampaignController@show");

Route::get('/create',"CampaignController@create");

Route::get('/store',"CampaignController@store");

Route::get('/update/{id}',"CampaignController@update");

Route::get('/destroy/{id}',"CampaignController@destroy");

