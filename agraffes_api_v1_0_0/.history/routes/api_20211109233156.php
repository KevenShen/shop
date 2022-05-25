<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Auth;
use App\Http\Controllers\Index\Base\BaseController;
use App\Http\Controllers\Index\Index\IndexController;
use App\Http\Controllers\Admin\Base\BaseController as AdminBaseController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Configure\ConfigureController;
use App\Http\Controllers\Admin\Ad\Banner\BannerController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\User\AddressController;
use App\Http\Controllers\Admin\Goods\GoodsController;
use App\Http\Controllers\Admin\Goods\GoodsAttrController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\AdminUser\AdminUserController;
use App\Http\Controllers\Admin\Order\OrderInfoController;
use App\Http\Controllers\Test\TestController;


Route::Resources(
    [
        '/index/base' => BaseController::class,
        // '/index/index' => IndexController::class,
        // 'test' => TestController::class
    ]
);
Route::group(['middleware' => 'auther'], function () {
    Route::Resources(
        [
            '/admin/base' => AdminBaseController::class,
            '/admin/configure' => ConfigureController::class,
            '/admin/banner' => BannerController::class,
            '/admin/user' => UserController::class,
            '/admin/address' => AddressController::class,
            '/admin/goods' => GoodsController::class,
            '/admin/goodsAttr' => GoodsAttrController::class,
            '/admin/orderInfo' => OrderInfoController::class,
            '/admin/category' => CategoryController::class,
            '/admin/adminuser' => AdminUserController::class
        ]
    );
});
Route::Resources([
    '/admin/auth' => AuthController::class,
]);
