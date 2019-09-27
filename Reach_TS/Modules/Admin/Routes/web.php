<?php
use App\Http\Middleware\CheckLoginAdmin;
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
Route::get('/admin_login','AdminLoginController@login');

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');

    Route::group(['prefix'=>'category'],function(){

    	Route::get('/','AdminCategoryController@index')->name('admin.get.list.category');

    	Route::get('/create','AdminCategoryController@create')->name('admin.get.create.category');

    	Route::post('/create','AdminCategoryController@store');

    	Route::get('/update/{id}','AdminCategoryController@edit')->name('admin.get.edit.category');

    	Route::post('/update/{id}','AdminCategoryController@update');

    	Route::get('/{action}/{id}','AdminCategoryController@action')->name('admin.get.action.category');
    });

    Route::group(['prefix'=>'loaitin'],function(){

    	Route::get('/','AdminLoaiTinController@index')->name('admin.get.list.loaitin');

    	Route::get('/create','AdminLoaiTinController@create')->name('admin.get.create.loaitin');

    	Route::post('/create','AdminLoaiTinController@store');

    	Route::get('/update/{id}','AdminLoaiTinController@edit')->name('admin.get.edit.loaitin');

    	Route::post('/update/{id}','AdminLoaiTinController@update');

    	Route::get('/{action}/{id}','AdminLoaiTinController@action')->name('admin.get.action.loaitin');
    });

    Route::group(['prefix'=>'tintuc'],function(){

        Route::get('/','AdminTinTucController@index')->name('admin.get.list.tintuc');

        Route::get('/create','AdminTinTucController@create')->name('admin.get.create.tintuc');

        Route::post('/create','AdminTinTucController@store');

        Route::get('/update/{id}','AdminTinTucController@edit')->name('admin.get.edit.tintuc');

        Route::post('/update/{id}','AdminTinTucController@update');

        Route::get('/{action}/{id}','AdminTinTucController@action')->name('admin.get.action.tintuc');
    });

    Route::group(['prefix'=>'slide'],function(){

        Route::get('/','AdminSlideController@index')->name('admin.get.list.slide');

        Route::get('/create','AdminSlideController@create')->name('admin.get.create.slide');

        Route::post('/create','AdminSlideController@store');

        Route::get('/update/{id}','AdminSlideController@edit')->name('admin.get.edit.slide');

        Route::post('/update/{id}','AdminSlideController@update');

        Route::get('/{action}/{id}','AdminSlideController@action')->name('admin.get.action.slide');
    });

    Route::group(['prefix'=>'introduce'],function(){

        Route::get('/','AdminIntroduceController@index')->name('admin.get.list.introduce');

        Route::get('/create','AdminIntroduceController@create')->name('admin.get.create.introduce');

        Route::post('/create','AdminIntroduceController@store');

        Route::get('/update/{id}','AdminIntroduceController@edit')->name('admin.get.edit.introduce');

        Route::post('/update/{id}','AdminIntroduceController@update');

        Route::get('/{action}/{id}','AdminIntroduceController@action')->name('admin.get.action.introduce');
    });

     Route::group(['prefix'=>'contact'],function(){

        Route::get('/','AdminContactController@index')->name('admin.get.list.contact');

        Route::get('/create','AdminContactController@create')->name('admin.get.create.contact');

        Route::post('/create','AdminContactController@store');

        Route::get('/update/{id}','AdminContactController@edit')->name('admin.get.edit.contact');

        Route::post('/update/{id}','AdminContactController@update');

        Route::get('/{action}/{id}','AdminContactController@action')->name('admin.get.action.contact');
    });

     Route::group(['prefix'=>'comment'],function(){

        Route::get('/','AdminCommentController@index')->name('admin.get.list.comment');

        Route::get('/create','AdminCommentController@create')->name('admin.get.create.comment');

        Route::post('/create','AdminCommentController@store');

        Route::get('/update/{id}','AdminCommentController@edit')->name('admin.get.edit.comment');

        Route::post('/update/{id}','AdminCommentController@update');

        Route::get('/{action}/{id}','AdminCommentController@action')->name('admin.get.action.comment');
    });

     Route::group(['prefix'=>'user'],function(){

        Route::get('/','AdminUserController@index')->name('admin.get.list.user');

        Route::get('/create','AdminUserController@create')->name('admin.get.create.user');

        Route::post('/create','AdminUserController@store');

        Route::get('/update/{id}','AdminUserController@edit')->name('admin.get.edit.user');

        Route::post('/update/{id}','AdminUserController@update');

        Route::get('/{action}/{id}','AdminUserController@action')->name('admin.get.action.user');
    });
});
