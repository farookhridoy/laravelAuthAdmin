<?php
Auth::routes();
Route::get('404',['as'=>'notfound', 'uses'=>'NotFoundController@pagenotfound']);


Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});
