<?php

use Illuminate\Http\Request;
header('Access-Control-Allow-Origin: *');
header( 'Access-Control-Allow-Headers: Authorization, Content-Type, x-xsrf-token' );

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/','API\UserController@user_test');
Route::post('login','API\PassportController@login');

Route::post('forget-pass','API\PassportController@forgetPassword');

Route::post('create-vendor','API\UserController@user_register');

//after login its use for authentication
// Route::group(['middleware' => 'auth:api'],function(){


//vendor
Route::get('vendor/getall','API\UserController@vendor_listing');
Route::get('vendor/delete/{vendor_id}','API\UserController@vendor_delete');
Route::post('vendor/status','API\UserController@vendor_status');
Route::get('vendor/info/{edit_id}','API\UserController@vendor_info');
Route::post('vendor/update','API\UserController@update_vendor');
Route::post('vendor/updateuser','API\UserController@update_vendor_username');
Route::post('vendor/updatepass','API\UserController@update_vendor_userpass');
Route::post('vendor/search','API\UserController@serach');
Route::post('logout','API\PassportController@logout');
Route::get('isLogin','API\PassportController@isLogin');


//customer
Route::get('customer/getall','API\CustomerController@customerListing');
Route::get('customer/info/{info_id}', 'API\CustomerController@customerInfo');
Route::post('customer/status', 'API\CustomerController@customerStatus');
Route::get('customer/delete/{del_id}', 'API\CustomerController@customerDelete');
Route::post('customer/search','API\CustomerController@serach');

//reviews
Route::get('reviews/getall', 'API\ReviewsController@reviewsListing');
Route::get('reviews/info/{info_id}', 'API\ReviewsController@reviewsInfo');
Route::post('reviews/status', 'API\ReviewsController@reviewsStatus');
Route::get('reviews/delete/{del_id}', 'API\ReviewsController@reviewsDelete');
Route::post('reviews/search','API\ReviewsController@serach');


//menu
Route::get('menu/menulist','API\MenuController@menu_listing');
Route::post('menu/addMenu','API\MenuController@add_menu');
Route::post('menu/updateMenu', 'API\MenuController@updateMenu');
Route:: get('menu/delete/{menu_id}', 'API\MenuController@menuDelete');
Route:: get('menu/info/{menu_id}', 'API\MenuController@menuInfo');
Route:: post('menu/status', 'API\MenuController@menuStatus');
Route:: post('menu/search', 'API\MenuController@menuSearch');
Route::get('menu/product-type','API\MenuController@product_type_listing');
Route::get('menu/name-search/{menu_name}', 'API\MenuController@menuInfoByName');
Route:: post('menu/dashboard-service', 'API\MenuController@dashboardService');


//category
Route::get('category/categorylist','API\CategoryController@category_listing');
Route::post('category/addCategory','API\CategoryController@addCategory');

Route::get('category/info/{cat_id}','API\CategoryController@getDataCategory');
Route::post('category/updateCat','API\CategoryController@updateCat');
Route::get('category/delete/{del_id}','API\CategoryController@deleteCategory');
Route::post('category/status', 'API\CategoryController@CategoryStatus');
Route::post('category/search', 'API\CategoryController@CategorySearch');
Route::get('category/categoryListAss', 'API\CategoryController@categoryListAss');
Route::get('category/name-search/{category_name}', 'API\CategoryController@getDataCategoryByName');

//subcategory
Route::get('subCategory/getall','API\SubCategoryController@subCategoryList');
Route::get('subCategory/delete/{del_id}', 'API\SubCategoryController@deleteSubCategory');
Route::get('subCategory/info/{sub_cat_id}', 'API\SubCategoryController@getSubCategoryData');
Route::post('subCategory/status', 'API\SubCategoryController@SubCategoryStatus');
Route::post('subCategory/addSubCategory', 'API\SubCategoryController@addSubCategory');

Route::post('subCategory/updateSubCategory', 'API\SubCategoryController@updateSubCategory');
Route::post('subCategory/getCategory', 'API\SubCategoryController@getCategory');
Route::post('subCategory/search', 'API\SubCategoryController@SubCategorySearch');
Route::post('subCategory/getSubCategory', 'API\SubCategoryController@getSubCategory');
Route::get('subCategory/name-search/{sub_cat_name}', 'API\SubCategoryController@getDataSubCategoryByName');


//brand
Route::get('brand/brandlist', 'API\BrandController@brand_listing');
Route::post('brand/addBrand', 'API\BrandController@addBrand');
Route::get('brand/info/{brand_id}', 'API\BrandController@getBrandData');
Route::post('brand/updateBrand', 'API\BrandController@updateBrand');
Route::get('brand/delete/{del_id}', 'API\BrandController@deleteBrand');
Route::post('brand/status', 'API\BrandController@brandStatus');
Route::post('brand/search', 'API\BrandController@BrandSearch');
Route::get('brand/name-search/{brand_name}', 'API\BrandController@getBrandDataByName');

//user groups
Route::get('user-group/getall', 'API\UserGroupController@userGroupAll');
Route::get('user-group/get-user-group-by-id/{id}', 'API\UserGroupController@getUserGroupById');
Route::get('user-group/permission/{id}', 'API\UserGroupController@permission');
Route::post('user-group/permission', 'API\UserGroupController@updatePermission');

//product
Route::post('dropship/addCollection', 'API\ProductController@addCollection');
Route::post('dropship/search', 'API\ProductController@dropshipProductSearch');
Route::get('dropship/info/{id}','API\ProductController@dropshipgetProduct');
Route::get('dropship/getall', 'API\ProductController@dropshipAll');
Route::post('dropship/status', 'API\ProductController@dropshipStatus');
Route::post('dropship/product_delete', 'API\ProductController@dropshipProductDelete');
Route::get('dropship/delete/{del_id}', 'API\ProductController@dropshipDelete');


Route::post('product/addProduct', 'API\ProductController@addProduct');
Route::post('product/add-product-bulk', 'API\ProductController@addProductBulk');
Route::post('product/productList', 'API\ProductController@productList');
Route::get('product/delete/{del_id}', 'API\ProductController@productDelete');
Route:: post('product/search', 'API\ProductController@productSearch');
Route:: post('product/productStatus', 'API\ProductController@productStatus');
Route:: post('product/updateProduct', 'API\ProductController@updateProduct');
Route::post('product/shareable', 'API\ProductController@shareableList');

Route::post('product/add-shareable-product', 'API\ProductController@addShareableProduct');
Route::get('product/info/{product_id}','API\ProductController@getProduct');
Route::post('product/sub-cat', 'API\ProductController@addProductSubCat');
Route::post('product/product-type', 'API\ProductController@addProductType');
Route::get('product/productSubCatList/{product_id}','API\ProductController@productSubCatList');


//notification
Route::get('product/notification/{edit_id}','API\ProductController@getNotification');

//subscription
Route::get('subscription/subscription-list','API\SubscriptionController@getSubscription');

//withdrwa
Route::get('withdraw/withdraw-list','API\WithdrawController@getWithdraw');

//attribut
Route::post('product/add-attribute', 'API\ProductController@addAttribute');
Route::get('product/attribute/{product_id}','API\ProductController@getAttribute');
Route::get('product/attr-delete/{del_id}','API\ProductController@deleteAttribute');
Route::post('product/attr-status','API\ProductController@statusAttribute');
Route:: post('product/attrSearching', 'API\ProductController@attrSearch');
Route:: post('product/upload', 'API\ProductController@upload');
Route:: post('product/multiple-upload', 'API\ProductController@multipleUpload');

/*Route::get('product/attribute','API\ProductController@getAttribute');*/


//color
Route:: post('product/add-color', 'API\ProductController@addColor');
Route::get('product/color/{product_id}','API\ProductController@getColor');
Route::get('product/color-delete/{del_id}','API\ProductController@deleteColor');
Route::post('product/color-status','API\ProductController@statusColor');
Route::post('product/color-search','API\ProductController@colorSearching');




//tag
Route::get('product/tag/{product_id}','API\ProductController@getTag');
Route:: post('product/add-tag', 'API\ProductController@addTag');
Route::get('product/tag-delete/{del_id}','API\ProductController@deleteTag');
Route::post('product/tag-status','API\ProductController@statusTag');
Route::post('product/tag-search','API\ProductController@tagSearching');




//discount
Route::post('discount/addDiscount', 'API\ProductController@addDiscount');
Route::post('product/getProduct', 'API\ProductController@getProduct');


//banner
Route::post('banner/add-banner', 'API\BannerController@addBanner');
Route::get('banner/banner-list', 'API\BannerController@bannerListing');
Route::post('slider/add-slider', 'API\BannerController@addSlider');
Route::get('slider/slider-list', 'API\BannerController@sliderListing');
Route::get('slider/product-list', 'API\BannerController@productListing');
Route:: get('slider/delete/{menu_id}', 'API\BannerController@sliderDelete');
Route::post('banner/status', 'API\BannerController@bannerStatus');


//size
Route::get('product/size/{product_id}','API\ProductController@getSize');
Route:: post('product/add-size', 'API\ProductController@addSize');
Route:: get('product/size-delete/{del_id}', 'API\ProductController@deleteSize');
Route:: post('product/size-status', 'API\ProductController@changeSizeStatus');
Route:: post('product/size-search', 'API\ProductController@sizeSearching');



//product-type
Route:: post('product/productType-status', 'API\ProductController@changeProductTypeStatus');
Route::get('product/productTypeList/{product_id}','API\ProductController@productTypeList');
Route:: post('product/productType-search', 'API\ProductController@productTypeSearch');
Route:: post('product/product_drp', 'API\ProductController@productDrp');
Route::get('product/productTypeDel/{delid}','API\ProductController@productTypeDel');



Route::get('product/productSubCatDelete/{delid}','API\ProductController@productSubCatDelete');


//productAccessories
Route:: post('product/addProductAccess', 'API\ProductController@addProductAccess');
Route:: post('product/productAccessList', 'API\ProductController@productAccessList');
Route::get('product/accessDel/{delid}','API\ProductController@delProductAccess');

//Order Routes
Route::post('order/order-list', 'API\OrderController@orderListing');
Route::post('order/info', 'API\OrderController@getOrderDetails');
Route::post('order/shipping-status', 'API\OrderController@shippingStatus');
Route::post('order/order-filter', 'API\OrderController@filterOrder');

//reviews Routes
//Route::get('reviews/getall', 'API\ProductController@reviewsListing');

//reports
Route::post('report/report-inventory', 'API\ReportController@reportInventory');
Route::post('report/report-inventory-by-daterange', 'API\ReportController@reportInventoryByDateRange');

// });






