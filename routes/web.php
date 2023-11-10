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


/**
 * Web Route 공간
 */
// Route::get('/', function () {

//     return view('welcome');
// });

/**
 * route arguments 활용
 * 
 * '/test/{foo}' (foo 의무)
 * '/test/{foo?}' (선택적)
 * 
 */

# ========== 숫자나영어 3개 필수로.. (pattern 은 모든 foo를 사용하는곳) ==========
# Route::pattern('foo', '[0-9a-zA-Z]{3}');
Route::get('/test/{foo}', function ($foo) {

    echo $foo;

    return '<h1>Hello !</h1>';
});
# ========== ->where('foo', '[0-9a-zA-Z]{3}'); 는 해당 라우터만 패턴적용 ==========


Route::get('/', [
    'as' => 'home', // 라우터의 별칭 적용

    /**
     * 접근시 실행 시킬 함수
     */
    function () {
        return '제 이름은 "home" 입니다.';
    }
]);

Route::get('/home', function () {

    /**
     * 별칭 home 루트로 강제 이동
     */
    return redirect(route('home'));
});
