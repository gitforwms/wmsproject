<?php
Route::get('/', function() {
    return view('welcome')->with("msg","wangmaosen");
});
//必选选参数
//Route::get('get/{get}/post/{post}',function($get){
//    return 'get is'.$get;
//   });
////可选参数
//Route::get('user/{username?}',function($username=null){
//    return  $username;
//});
//Route::get("app/{app?}/abb/{abb}",function($id){
//    return "hello world".$id;
//});
//Route::get('add/{add}',function($add){
//        return  $add;
//})->where('add','[A-Za-z]
Route::group(['middleware'=>['web']],function(){

});