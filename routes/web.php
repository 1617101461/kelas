<?php


 Route::get('/', function () {
    return view('welcome');
 });

 Route::get('/about',function(){
 	return'<h1> Hallo </h1>'
 .'Selamat datang di webapp saya <br>'
 .'laravel,emang brrr.';
 });

 Route::get('/about/1',function(){
 	return'<h1> ini halaman about 1 </h1>';
 });	


 Route::get('/about/2',function(){
 	return'<h1> ini halaman about 2 </h1>';
 });


 Route::get('/about/3',function(){
 	return'<h1> ini halaman about 3 </h1>';
 });


 Route::get('/about/4',function(){
 	return'<h1> ini halaman about 4 </h1>';
 });


 Route::get('/about/5',function(){
 	return'<h1> ini halaman about 5 </h1>';
 });

Route::get('/about/{page}',function($a){
 	return' ini halaman about <b>'.$a.'</b>';
 });

/* Tentang Parameter*/
/* pembelajaran pertama saya mengenai parameter di rauting*/

Route::get('/kontak',function(){
 	return view('kontak');
 });

Route::get('/kantin/bakso/susu/bolu',function(){
 	return view('user.kantin');
 });

Route::get('/about/{rizki}/{nur}/{fadilah}',function($a,$b,$c){
 	return  ' Saya Makan <b>'.$a.'</b> <br>'
    		.' Minumnya <b>'.$b.'</b><br>'
 			.' Cemilannya <b>'.$c.'</b><br>';
 });

/*reuto optional parameter 
*/

Route::get('user/{name?}',function($name = 'Rizki'){
	return 'Nama Saya '.$name;
});
