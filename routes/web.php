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




Route::get('admin/login', function () {
    return view('admin/login');
});

Route::get('/admin/Announcemen', function () {
    return view('admin/adminAnnouncement');
});

Route::get('/admin/editprofile', function () {
    return view('admin/adminEditProfile');
});

Route::get('/admin/home', function () {
    return view('admin/adminHome');
});

Route::get('/admin/userreports', function () {
    return view('admin/adminUserReports');
});

Route::get('/admin/ViewAllTransaction', function () {
    return view('admin/adminViewAllTransaction');
});

Route::get('/admin/ViewAllUserInfo', function () {
    return view('admin/adminViewAllUserInfo');
});



// seller

Route::get('/seller/login', function () {
    return view('seller/login');
});
Route::get('/seller/register', function () {
    return view('seller/sellerRegister');
});
Route::get('/seller/applyforprimeseller', function () {
    return view('seller/applyForPrimeSeller');
});
Route::get('/seller/createsellpost', function () {
    return view('seller/CreateSellPost');
});
Route::get('/seller/myposts', function () {
    return view('seller/myposts');
});
Route::get('/seller/contactsupport', function () {
    return view('seller/sellerContactSupport');
});



// user or buyer
Route::get('/user/editprofile', function () {
    return view('user/editProfile');
});
Route::get('/user/orderhistory', function () {
    return view('user/userorderHistory');
});
Route::get('/user/register', function () {
    return view('user/userRegister');
});


// Home
Route::get('/home/index', function () {
    return view('home/index');
});

Route::get('/home/login', function () {
    return view('home/login');
});

Route::get('/home/chatbox', function () {
    return view('home/chatbox');
});

Route::get('/home/login','HomeController@login')->name('home.login');
Route::get('/home/index','HomeController@index')->name('home.index');
Route::get('/home/contact','HomeController@contact')->name('home.contact');
Route::get('/home/help','HomeController@help')->name('home.help');
Route::get('/home/index','HomeController@home')->name('home.index');
Route::get('/home/announcement','HomeController@announcement')->name('home.announcement');
Route::get('/home/postCard','HomeController@postCard')->name('home.postCard');
Route::get('/home/chatbox','HomeController@chatbox')->name('home.chatbox');