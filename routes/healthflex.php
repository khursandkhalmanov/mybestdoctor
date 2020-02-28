<?php
Route::get('/aboutus', function () {
    return view('healthflex.aboutus');
});
Route::get('/staff', function () {
    return view('healthflex.staff');
});
Route::get('/careers', function () {
    return view('healthflex.careers');
});
Route::get('/departments', function () {
    return view('healthflex.departments');
});
Route::get('/services', function () {
    return view('healthflex.services');
});
Route::get('/visit-guide ', function () {
    return view('healthflex.visitguide');
});
Route::get('/appointment-booking', function () {
    return view('healthflex.booking');
});
Route::get('/health-plans', function () {
    return view('healthflex.healthplans');
});
Route::get('/health-library', function () {
    return view('healthflex.healthlibrary');
});
Route::get('/fees-insurance', function () {
    return view('healthflex.feesinsurance');
});
Route::get('/faq', function () {
    return view('healthflex.faq');
});
Route::get('/blog', function () {
    return view('healthflex.blog');
});
Route::get('/contact', function () {
    return view('healthflex.contact');
});
Route::get('/shop', function () {
    return view('healthflex.shop');
});
