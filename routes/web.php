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

Route::get('/', function () {
    if(Auth::check()){
        //return view('welcome');
        return redirect('/index');
    }else{
        return view('auth.login');
    }

});


Route::get('no-js', function () {
    return view('/exception/nojs');
});

Route::get('/profile', function () {
    return view('auth/profile');
});

Route::get('/teacher_reg', function () {
    return view('teacher/register');
});

Route::get('/student_reg', function () {
    return view('student/register');
});
Route::get('/teacher_reg', function () {
    return view('teacher/register');
});

Route::get('/logout','Auth\LogoutController@logout');

Route::group(['middleware' => 'guest'], function (){
    Auth::routes();
});


Route::get('/index', 'HomeController@index');

/*Global --- Profile*/
Route::group(['middleware' =>'auth'], function () {



    Route::get('photos',function(){
        return view('/photos');
    });

    Route::get('profile-editform', function () {
        return view('auth/edit');
    });

    Route::post('profile/edit', 'UserController@edit');

    Route::get('/profile', function () {
        return view('auth/profile');
    });

    Route::get('uploadImage','ImageController@getUploadImage');
    Route::post('uploadImage','ImageController@postUploadImage');
    Route::get('createDir','ImageController@CreateDirectory');

});

/*Student*/

Route::group(['middleware' =>'student'], function () {
    Route::get('/student-conf', function (){
        return view('student/confirmation');
    });
    Route::post('/student-conf', 'StudentController@confirmation');
});



/*Teacher*/

Route::group(['middleware' => 'teacher'], function()
{
    Route::get('/teacher/home', 'HomeController@teacherindex');
    Route::get('/teacher-conf', function (){
        return view('teacher/confirmation');
    });
    Route::post('/teacher-conf', 'TeacherController@confirmation');
    Route::get('newexam',function(){
        return view('exam/new_exam');
    });
    Route::get('add_exam',function(){
        return view('exam/add_exam');
    });

});

/*Admin*/
Route::group(['middleware' =>'admin'], function ()
{
    /* Should be in admin middleware */
    Route::get('user_token', 'UserController@token');

    Route::get('showUser', 'UserController@index');

    Route::get('user/delete/{name}', 'UserController@delete')->where('name','.+');

    Route::get('user/block/{name}', 'UserController@block')->where('name','.+');

    Route::get('user/unblock/{name}', 'UserController@unblock')->where('name','.+');

    Route::get('print_token/{name}', 'UserController@token_print')->where('name','.+');

    Route::get('new_class', function(){
        return view('class/new_class');
    });

    Route::post('class_add', 'ClassController@add');
    
    Route::get('showClass', 'ClassController@index');

    Route::get('class/delete/{class_name}', 'ClassController@delete')->where('class_name','.+');

    Route::get('class/edit/{class_name}', 'ClassController@index');

});
// //Filemanager routes
$middleware = array_merge(\Config::get('lfm.middlewares'), [
    '\Unisharp\Laravelfilemanager\middlewares\MultiUser',
    '\Unisharp\Laravelfilemanager\middlewares\CreateDefaultFolder'
]);
$prefix = \Config::get('lfm.prefix', 'laravel-filemanager');
$as = 'unisharp.lfm.';
$namespace = '\Unisharp\Laravelfilemanager\controllers';

// make sure authenticated
Route::group(compact('middleware', 'prefix', 'as', 'namespace'), function () {

    // Show LFM
    Route::get('/', [
        'uses' => '\Unisharp\Laravelfilemanager\controllers\LfmController@show',
        'as' => 'show'
    ]);

    // Show integration error messages
    Route::get('/errors', [
        'uses' => '\Unisharp\Laravelfilemanager\controllers\LfmController@getErrors',
        'as' => 'getErrors'
    ]);

    // upload
    Route::any('/upload', [
        'uses' => '\Unisharp\Laravelfilemanager\controllers\UploadController@upload',
        'as' => 'upload'
    ]);

    // list images & files
    Route::get('/jsonitems', [
        'uses' => '\Unisharp\Laravelfilemanager\controllers\ItemsController@getItems',
        'as' => 'getItems'
    ]);

    // folders
    Route::get('/newfolder', [
        'uses' => '\Unisharp\Laravelfilemanager\controllers\FolderController@getAddfolder',
        'as' => 'getAddfolder'
    ]);
    Route::get('/deletefolder', [
        'uses' => '\Unisharp\Laravelfilemanager\controllers\FolderController@getDeletefolder',
        'as' => 'getDeletefolder'
    ]);
    Route::get('/folders', [
        'uses' => '\Unisharp\Laravelfilemanager\controllers\FolderController@getFolders',
        'as' => 'getFolders'
    ]);

    // crop
    Route::get('/crop', [
        'uses' => '\Unisharp\Laravelfilemanager\controllers\CropController@getCrop',
        'as' => 'getCrop'
    ]);
    Route::get('/cropimage', [
        'uses' => '\Unisharp\Laravelfilemanager\controllers\CropController@getCropimage',
        'as' => 'getCropimage'
    ]);

    // rename
    Route::get('/rename', [
        'uses' => '\Unisharp\Laravelfilemanager\controllers\RenameController@getRename',
        'as' => 'getRename'
    ]);

    // scale/resize
    Route::get('/resize', [
        'uses' => '\Unisharp\Laravelfilemanager\controllers\ResizeController@getResize',
        'as' => 'getResize'
    ]);
    Route::get('/doresize', [
        'uses' => '\Unisharp\Laravelfilemanager\controllers\ResizeController@performResize',
        'as' => 'performResize'
    ]);

    // download
    Route::get('/download', [
        'uses' => '\Unisharp\Laravelfilemanager\controllers\DownloadController@getDownload',
        'as' => 'getDownload'
    ]);

    // delete
    Route::get('/delete', [
        'uses' => '\Unisharp\Laravelfilemanager\controllers\DeleteController@getDelete',
        'as' => 'getDelete'
    ]);

    Route::get('/demo', '\Unisharp\Laravelfilemanager\controllers\DemoController@index');
});
// /* end of Filemanager routes */