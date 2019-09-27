<?php

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
Auth::routes();

Route::get('/', function(){
	return view('welcome');
});

//Route::get('/','HomeController@index');

Auth::routes();

Route::group(['namespace'=>'Auth'],function(){

	Route::get('dang-ki','RegisterController@getRegister')->name('get.register');

	Route::post('dang-ki','RegisterController@postRegister')->name('post.register');
});
Route::get('/', 'HomeController@index')->name('home');

Route::get('tuyen-sinh','CategoryController@getListLoaiTin')->name('get.list.loaitin');

Route::get('lien-he','ContactController@getContact')->name('get.contact');

Route::post('lien-he','ContactController@saveContact');

Route::get('lap-trinh-web','LoaiTinController@getLoaiTin')->name('get.loai.tin');

Route::get('gioi-thieu','IntroduceController@getListIntroduce')->name('get.introduce');

Route::get('tin-tuc-thu-vien','TinTucController@getListTinTuc')->name('get.tin.tuc');

Route::get('doi-song-hoc-vien','ArticleController@getListArticle')->name('get.list.article');

Route::get('thiet-ke-do-hoa-3D','DoHoa3DController@getListDoHoa3D')->name('get.list.do.hoa.3d');

Route::get('thiet-ke-do-hoa-2D','DoHoa2DController@getListDoHoa2D')->name('get.list.do.hoa.2d');

Route::get('lam-toc','LamTocController@getListLamToc')->name('get.list.lam.toc');

Route::get('che-bien-mon-an','NauAnController@getListNauAn')->name('get.list.nau.an');

Route::get('nghiep-vu-khach-san','KhachSanController@getListKhachSan')->name('get.list.khach.san');

Route::get('chinh-sua-video','VideoController@getListVideo')->name('get.list.video');

Route::get('ban-hang-marketing','MarketingController@getListMarketing')->name('get.list.marketing');

Route::get('nghiep-vu-ban-bar-pha-che','PhaCheController@getListPhaChe')->name('get.list.pha.che');

