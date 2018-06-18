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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('coba', function(){
	echo date('dmY');
});

Auth::routes();


Route::group(['middleware' => 'auth'], function(){
	Route::get('/', 'HomeController@index')->name('home');
	//Bagian Kategori
	Route::get('kategori/data', 'KategoriController@listData')->name('kategori.data');
	Route::resource('kategori', 'KategoriController', ['expect' => ['create', 'show']]);
	Route::post('kategori/hapus','KategoriController@deleteSelected');

	//Bagian Provinsi
	Route::get('provinsi/data', 'ProvinsiController@listData')->name('provinsi.data');
	Route::resource('provinsi', 'ProvinsiController');

	//Bagian Kota
	Route::get('kota/data', 'KotaController@listData')->name('kota.data');
	Route::post('kota/hapus','KotaController@deleteSelected');
	Route::resource('kota', 'KotaController'); 

	//Bagian Supplier
	Route::get('supplier/data', 'SupplierController@listData')->name('supplier.data');
	Route::get('supplier/view_laporan', 'SupplierController@makePDF');
	Route::get('supplier/get-kota-list/{id}','SupplierController@ambilDataKota');
	Route::post('supplier/hapus','SupplierController@deleteSelected');
	Route::resource('supplier', 'SupplierController');
	//bagian User
	Route::resource('profile', 'UserController');
	Route::post('pegawai/hapus','UserController@deleteSelected');
	Route::get('user/data', 'UserController@listData')->name('user.data');

	//bagian profil dan ubah password
	Route::get('edit/{profile}/profile','ProfileController@edit')->name('profile.data');
	Route::post('edit/{profile}/update','ProfileController@update')->name('profile.update_data');

	//bagian satuan
	Route::get('satuan/data', 'SatuanController@listData')->name('satuan.data');
	Route::resource('satuan', 'SatuanController');
	Route::post('satuan/hapus','SatuanController@deleteSelected');

	//bagian barang
	Route::get('barang/no', 'BarangController@getNewInvoiceNo')->name('barang.no');
	Route::get('barang/data', 'BarangController@listData')->name('barang.data');
	Route::resource('barang', 'BarangController');
	Route::post('barang/hapus','BarangController@deleteSelected');

	//Bagian Supplier
	Route::get('pelanggan/no', 'PelangganController@getNewInvoiceNo')->name('pelanggan.no');
	Route::get('pelanggan/data', 'PelangganController@listData')->name('pelanggan.data');
	Route::get('pelanggan/view_laporan', 'PelangganController@makePDF');
	Route::get('pelanggan/get-kota-list/{id}','PelangganController@ambilDataKota');
	Route::post('pelanggan/hapus','PelangganController@deleteSelected');
	Route::resource('pelanggan', 'PelangganController');

	//Bagian Manajemen Pembelian
	Route::get('pembelian/data', 'PembelianController@listData')->name('pembelian.data');
	Route::get('pembelian/{id}/tambah', 'PembelianController@create');
	Route::get('pembelian/{id}/lihat', 'PembelianController@show');
	Route::resource('pembelian', 'PembelianController');

	//detail pembelian
	Route::get('detail_pembelian/{id}/data', 'DetailPembelianController@listData')->name('detail_pembelian.data');
	Route::resource('detail_pembelian', 'DetailPembelianController');
});

