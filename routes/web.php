<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;



Route::get('/contact', function () {
    return view('pages.home.contact');
});
Route::get('/blog', function () {
    return view('pages.news.blog');
});
Route::get('/blog-detail', function () {
    return view('pages.news.blog-detail');
});
Route::get('/about', function () {
    return view('pages.profile.about');
});
Route::get('/team', function () {
    return view('pages.team');
});
Route::get('/image-tpm', function () {
    return view('pages.galery.image-tpm');
});
Route::get('/image-tkr', function () {
    return view('pages.galery.image-tkr');
});
Route::get('/jurusan-tpm', function () {
    return view('pages.jurusan.jurusan-tpm');
});
Route::get('/jurusan-tkr', function () {
    return view('pages.jurusan.jurusan-tkr');
});
Route::get('/alumni', function () {
    return view('pages.alumni');
});
Route::get('/admin', function () {
    return view('backend.pages.dashboard');
});
Route::get('/visi', function () {
    return view('backend.pages.profile.visi');
});
Route::get('/misi', function () {
    return view('backend.pages.profile.misi');
});
Route::get('/tujuan', function () {
    return view('backend.pages.profile.tujuan');
});
Route::get('/jurusan', function () {
    return view('backend.pages.jurusan');
});
Route::get('/staf', function () {
    return view('backend.pages.staf');
});
Route::get('/gallery', function () {
    return view('backend.pages.gallery');
});
Route::get('/news', function () {
    return view('backend.pages.news');
});
Route::get('/alumni', function () {
    return view('backend.pages.alumni');
});
Route::get('/contact-person', function () {
    return view('backend.pages.contact');
});
Route::get('/manage-user', function () {
    return view('backend.pages.settings.manageuser');
});
Route::get('/header', function () {
    return view('backend.pages.settings.header');
});
Route::get('/footer', function () {
    return view('backend.pages.settings.footer');
});
Route::get('/sosmed', function () {
    return view('backend.pages.settings.sosmed');
});
Route::get('/jurusantpm', function () {
    return view('backend.pages.jurusan.tpm');
});
Route::get('/jurusantkr', function () {
    return view('backend.pages.jurusan.tkr');
});

Route::resource('/', HomeController::class);


