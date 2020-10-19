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

Route::get('/', function () {return view('front.home.index');});
Route::get('/chart', function () {return view('front.chart');});
Route::get('/compare', function () {return view('front.compare');});
Route::get('/counter', function () {return view('front.counter');});
Route::get('/financials', function () {return view('front.financials');});
Route::get('/leadership', function () {return view('front.leadership');});
Route::get('/matching-stock', function () {return view('front.matching-stock');});
Route::get('/media', function () {return view('front.media');});
Route::get('/news', function () {return view('front.news');});
Route::get('/operating-performance', function () {return view('front.operating-performance');});
Route::get('/post', function () {return view('front.post');});
Route::get('/ratios', function () {return view('front.ratios');});
Route::get('/sens', function () {return view('front.sens');});
Route::get('/shareholders', function () {return view('front.shareholders');});
Route::get('/trailing-returns', function () {return view('front.trailing-returns');});
Route::get('/videos-index', function () {return view('front.videos');});
