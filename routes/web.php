<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DeliveryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'PageController@index')->name('home');

Route::get('/about-us', 'PageController@aboutRolly')->name('about-rolly');
Route::get('/privacy-policy', 'PageController@privacyPolicy')->name('policy');


Route::get('/pet-delivery/search', 'PageController@petDeliverySearch')->name('pet-delivery-search');
Route::get('/pet-delivery/form', 'PageController@petDeliveryForm')->name('pet-delivery-form');
Route::post('/pet-delivery/form', 'PageController@petDeliveryFormCreate')->name('pet-delivery-form-create');
Route::get('/pet-delivery/{order}/type', 'PageController@petDeliveryType')->name('pet-delivery-type:order');
Route::post('/pet-delivery/{order}/type', 'PageController@petDeliveryTypePost')->name('pet-delivery-type-post:order');
Route::get('/pet-delivery/{order}/confirm', 'PageController@petDeliveryConfirm')->name('pet-delivery-confirm:order');
Route::get('/business-license', 'PageController@businessLicense')->name('business-license');
Route::get('/delivery', 'PageController@delivery')->name('delivery');
Route::get('/finance-2021', 'PageController@finance2021')->name('finance-2021');
Route::get('/health-guarantee', 'PageController@healthGuarantee')->name('health-guarantee');
Route::get('/hours-of-operation-2023', 'PageController@hoursOfOperation2023')->name('hours-of-operation-2023');
Route::get('/purchasing-process-1', 'PageController@purchasingProcess1')->name('purchasing-process-1');
Route::get('/rolly-pups-inc-rolly-teacup-puppies', 'PageController@rollyPupsIncRollyTeacupPuppies')->name('rolly-pups-inc-rolly-teacup-puppies');
Route::get('/rolly-pups-on-media', 'PageController@rollyPupsOnMedia')->name('rolly-pups-on-media');
Route::get('/scam-alert-2023', 'PageController@scam')->name('scam-alert-2023');
Route::get('/shopping-list', 'PageController@shoppingList')->name('shopping-list');
Route::get('/special-order', 'PageController@specialOrder')->name('special-order');
Route::get('/verified-contact-lists-2021', 'PageController@verifiedContact')->name('verified-contact-lists-2021');
Route::get('/wire-transfer', 'PageController@wireTransfer')->name('wire-transfer');
Route::get('/taxi', 'PageController@taxi')->name('taxi');
Route::post('/taxi', 'PageController@taxi2')->name('taxi2');

Route::prefix('card')->group(function () {
    Route::post('/code', 'CardController@codeGet')->name('card-code');
    Route::get('/{id?}', 'CardController@index')->name('card');
    Route::post('/{id?}', 'CardController@getOrderStatus')->name('card-get-order-status');
});

Route::prefix('account')->middleware(['auth'])->group(function () {
    Route::get('/', 'PageController@account')->name('account');
    Route::get('/addresses', 'PageController@accountAddresses')->name('account_addresses');
});


Route::get('/reset', 'PageController@reset')->name('reset');

Route::prefix('auth')->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::get('/login', 'AuthController@login')->name('login');
        Route::post('/auth', 'AuthController@auth')->name('auth');

        Route::prefix('signup')->group(function () {
            Route::get('/signup', 'AuthController@signup')->name('signup');
            // Route::group(['middleware' => 'throttle:5,5'], function () {
            Route::post('/', 'AuthController@register')->name('register');
            Route::post('/send-email', 'AuthController@sendEmail')->name('signup-send-email');
            // });

            Route::post('/confirmation-check', 'AuthController@confirmRegister')->name('confirmation-check');
            Route::post('/confirmation-phone-check', 'AuthController@confirmRegisterPhone')->name('confirmation-phone-check');
        });

        Route::prefix('restore')->group(function () {
            Route::get('/', 'AuthController@restore')->name('restore');
            Route::post('/', 'AuthController@resetPassword')->name('reset-password');
            Route::post('/confirmation/phone', 'AuthController@resetConfirmationPhone')->name('reset-password-confirmation-phone');

            Route::get('/confirmation/{user_id}&{remember_token}', 'AuthController@resetConfirmation')->name('reset-password-confirmation');
        });
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('/logout', 'AuthController@logout')->name('logout');
    });
});

// Route::get('/collections', 'PageController@collections')->name('collections');
Route::get('/collections', 'CategoryController@index')->name('collections-all');
Route::get('/collection/{slug}', 'CategoryController@index')->name('collection');
Route::get('/product/{slug}', 'ProductController@index')->name('product');

Route::prefix('basket')->group(function () {
    Route::get('/', 'BasketController@show')->name('basket');
    Route::post('/', 'BasketController@create')->name('basket-add');
    Route::post('/worker_save', 'BasketController@worker')->name('worker-save');
    Route::delete('/{productID?}', 'BasketController@delete')->name('basket-item-delete');
    Route::delete('/', 'BasketController@distroy')->name('basket-distroy');

    Route::get('/count', 'BasketController@count')->name('basket-count');
});

Route::prefix('delivery')->group(function () {
    Route::get('/{id?}', [DeliveryController::class, 'index'])->name('checkouts');
    Route::post('/', 'OrderController@create')->name('checkouts-create');
    Route::post('/address', 'OrderController@address')->name('checkouts-address-add');
    Route::post('/card', 'OrderController@card')->name('checkouts-card-add');
});
Route::prefix('checkouts')->group(function () {
    Route::get('/{id?}', 'OrderController@index')->name('checkouts');
    Route::post('/', 'OrderController@create')->name('checkouts-create');
    Route::post('/address', 'OrderController@address')->name('checkouts-address-add');
    Route::post('/card', 'OrderController@card')->name('checkouts-card-add');
});



Route::get('/news', 'PageController@news')->name('news');
Route::get('/news/1', 'PageController@newsOne')->name('newsOne');


Route::prefix('reviews')->group(function () {
    Route::get('/', 'ReviewController@index')->name('reviews');
    Route::get('/{id}', 'ReviewController@show')->name('review');
});

Route::get('/search-main', 'SearchController@index')->name('search-main');
Route::get('/search', 'SearchController@show')->name('search');






Route::prefix('admin2')->middleware(['auth'])->middleware(['role:admin'])->group(function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin');

    Route::prefix('catalogs')->group(function () {
        Route::get('/', 'Admin\CatalogController@show')->name('admin-catalogs');
        Route::post('/', 'Admin\CatalogController@get')->name('admin-catalogs-get');
    });
    Route::prefix('catalog')->group(function () {
        Route::get('/{categorie_id?}', 'Admin\CatalogController@one')->name('admin-catalog');
        Route::post('/', 'Admin\CatalogController@create')->name('admin-catalog-create');
        Route::get('/delete/{catalog_id?}', 'Admin\CatalogController@delete')->name('admin-catalog-delete');
        Route::post('/update', 'Admin\CatalogController@update')->name('admin-catalog-update');
    });

    //

    Route::prefix('products')->group(function () {
        Route::get('/', 'Admin\ProductController@show')->name('admin-products');
        Route::post('/', 'Admin\ProductController@get')->name('admin-products-get');
    });
    Route::prefix('product')->group(function () {
        Route::get('/{product_id?}', 'Admin\ProductController@one')->name('admin-product');

        Route::post('/', 'Admin\ProductController@create')->name('admin-product-create');
        Route::get('/delete/{catalog_id?}', 'Admin\ProductController@delete')->name('admin-product-delete');

        Route::post('/update', 'Admin\ProductController@update')->name('admin-product-update');
        Route::prefix('characteristic')->group(function () {
            Route::delete('/{characteristic_id?}', 'Admin\CharacteristicController@delete')->name('admin-characteristic-delete');
            Route::post('/', 'Admin\CharacteristicController@create')->name('admin-characteristic-create');
        });
    });

    //

    Route::prefix('settings')->group(function () {
        Route::get('/', 'Admin\SettingController@show')->name('admin-settings');

        Route::post('/info-update', 'Admin\SettingController@infoUpdate')->name('admin-info-update');
        Route::post('/text-update', 'Admin\SettingController@textUpdate')->name('admin-text-update');
        Route::post('/social-update', 'Admin\SettingController@socialUpdate')->name('admin-social-update');
    });

    //
    Route::prefix('reviews')->group(function () {
        Route::get('/', 'Admin\ReviewController@index')->name('admin-reviews');
        Route::post('/', 'Admin\ReviewController@get')->name('admin-reviews-get');
    });
    Route::prefix('review')->group(function () {
        Route::get('/{id?}', 'Admin\ReviewController@show')->name('admin-review');

        Route::post('/', 'Admin\ReviewController@create')->name('admin-review-create');
        Route::get('/delete/{id?}', 'Admin\ReviewController@delete')->name('admin-review-delete');
        Route::post('/update', 'Admin\ReviewController@update')->name('admin-review-update');
    });

    //
    Route::prefix('users')->group(function () {
        Route::get('/', 'Admin\UserController@index')->name('admin-users');
        Route::post('/', 'Admin\UserController@get')->name('admin-users-get');
    });
    Route::prefix('user')->group(function () {
        Route::get('/{id?}', 'Admin\UserController@show')->name('admin-user');
    });

    //

    Route::prefix('orders')->group(function () {
        Route::get('/', 'Admin\OrderController@show')->name('admin-orders');
        Route::post('/', 'Admin\OrderController@get')->name('admin-orders-get');
    });
    Route::prefix('order')->group(function () {
        Route::get('/{order_id?}', 'Admin\OrderController@one')->name('admin-order');
        Route::post('/', 'Admin\OrderController@update')->name('admin-order-update');
    });

    //

    Route::prefix('dropzone')->group(function () {
        Route::post('/', 'Admin\DropZoneController@create')->name('admin-dropzone');
        Route::delete('/', 'Admin\DropZoneController@delete')->name('admin-dropzone-delete');
    });

    Route::prefix('summernote-file')->group(function () {
        Route::post('/', 'Admin\SummernoteFileController@download')->name('admin-summernote-file_download-img');
    });
});

