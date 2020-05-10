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

/************************beta route*********************************/
if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
// Ignores notices and reports all other kinds... and warnings
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
// error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}

// Route::get('/beta', [
// 'uses'=>'HomeController@beta_index',
// 'as'=>'beta Home'
// ]);

Route::post('/moreLikeByLimit', [
'uses'=>'HomeController@moreLikeByLimit',
'as'=>'moreLikeByLimit'
]);

Route::post('/get-notification', [
'uses'=>'AjaxController@getNotification',
'as'=>'get-notification'
]);

Route::post('/notification-seen', [
'uses'=>'AjaxController@notificationSeen',
'as'=>'notificationSeen'
]);

Route::get('/load-more-like', [
'uses'=>'HomeController@load_more_like',
'as'=>'load_more_like'
]);

Route::get('/stripe', [
'uses'=>'HomeController@stripe',
'as'=>'stripe'
]);

Route::get('/checkout-order', [
'uses'=>'HomeController@beta_checkout_order',
'as'=>'beta Checkout Order'
]);

Route::post('/beta-product-by-key', [
'uses'=>'HomeController@beta_product_by_key',
'as'=>'beta Product By Key'
]);

Route::post('/beta-checkout-order', [
'uses'=>'HomeController@beta_checkout_order',
'as'=>'beta Checkout Order'
]);

// Route::get('beta-user-register', [
// 	'uses'=>'HomeController@beta_user_register',
// 	'as'=>'beta user-register'
// ]);

Route::post('beta-user-create', [
	'uses'=>'HomeController@beta_user_create',
	'as'=>'beta-user-create']);

Route::post('beta-edit-profile',[
	'uses'=>'UserController@edit_profile',
	'as'=>'beta-edit-profile'
]);

Route::post('beta-change-password',[
'uses'=>'HomeController@beta_change_password',
'as'=>'beta-change-password'
]);

Route::post('beta-update-address',[
'uses'=>'HomeController@beta_update_address',
'as'=>'beta-update-address'
]);

// Route::get('forget-pass',[
// 'uses'=>'HomeController@beta_forget_pass',
// 'as'=>'beta-forget-pass'
// ]);

Route::get('brands/{brand_id}',[
'uses'=>'HomeController@beta_brands',
'as'=>'beta-brands'
]);

Route::get('color/{color_id}',[
'uses'=>'HomeController@beta_color',
'as'=>'beta-color'
]);

Route::get('order-details/{order_no}',[
'uses'=>'HomeController@beta_order_details',
'as'=>'beta order-details'
]);

Route::get('/profile', [
'uses'=>'HomeController@beta_profile',
'as'=>'beta Profile'
]);

Route::get('/profile/{user_id}', [
'uses'=>'HomeController@beta_profile',
'as'=>'beta Profile'
]);

Route::get('like/',[
'uses'=>'HomeController@beta_like',
'as'=>'beta Like'
]);

Route::get('like/{page_id}',[
'uses'=>'HomeController@beta_like',
'as'=>'beta Like'
]);

// Route::get('beta-order-summary',[
// 'uses'=>'HomeController@beta_order_summary',
// 'as'=>'beta Order Summary'
// ]);

Route::get('collection', [
	'uses' => 'HomeController@beta_collection',
	'as' => 'beta Collection'
]);

Route::get('/payment', [
'uses'=>'HomeController@beta_payment',
'as'=>'beta Payment'
]);

Route::post('/beta-payment', [
'uses'=>'HomeController@beta_make_payment',
'as'=>'beta Payment'
]);

Route::get('/account', [
'uses'=>'HomeController@beta_account',
'as'=>'beta Account'
]);

Route::get('/seen', [
'uses'=>'HomeController@beta_seen',
'as'=>'beta seen'
]);

// Route::get('/beta-cart', [
// 'uses'=>'HomeController@beta_cart',
// 'as'=>'beta Cart'
// ]);

Route::post('/slide-cart', [
'uses'=>'HomeController@slide_cart',
'as'=>'beta-slide-cart'
]);

// Route::get('/beta-checkout', [
// 'uses'=>'HomeController@beta_checkout',
// 'as'=>'beta Checkout'
// ]);

Route::post('/beta-slide-checkout', [
'uses'=>'HomeController@slide_checkout',
'as'=>'beta-slide-checkout'
]);
Route::post('/update-slide-cart',[
'uses'=>'AjaxController@updateSlideCart',
'as'=>'update-slide-cart'
]);
// Route::get('/beta-compare', [
// 'uses'=>'HomeController@beta_compare',
// 'as'=>'beta Compare'
// ]);

// Route::get('/beta-store-list', [
// 'uses'=>'HomeController@beta_store_list',
// 'as'=>'beta Store List'
// ]);

// Route::get('/beta-store-details/{vendor_id}', [
// 'uses'=>'HomeController@beta_store_details',
// 'as'=>'beta Store Details'
// ]);

Route::post('/create-support', [
'uses'=>'HomeController@create_support',
'as'=>'create-support'
]);

Route::get('/store/{slug}', [
	'uses'=>'HomeController@beta_store_details',
	'as'=>'store-details'
]);

// Route::get('/beta-product-details/{product_id}', [
// 'uses'=>'HomeController@beta_product_details',
// 'as'=>'beta Product Details'
// ]);
Route::get('/tab-product', [
'uses'=>'HomeController@beta_tab_product',
'as'=>'beta tab product'
]);

// Route::get('/beta-blog', [
// 'uses'=>'HomeController@beta_blog',
// 'as'=>'beta Blog'
// ]);


// Route::get('/beta-blog-details', [
// 'uses'=>'HomeController@blog_details',
// 'as'=>'beta-blog-details'
// ]);


// Route::get('/beta-contact', [
// 'uses'=>'HomeController@beta_contact',
// 'as'=>'beta contact'
// ]);


// Route::get('/beta-faq', [
// 'uses'=>'HomeController@beta_faq',
// 'as'=>'beta faq'
// ]);


// Route::get('/beta-track-order', [
// 'uses'=>'OrderController@track_order',
// 'as'=>'beta-blog-details'
// ]);


// Route::get('/beta-category/{category_id}', [
// 'uses'=>'HomeController@beta_category',
// 'as'=>'beta category'
// ]);

Route::get('/notification', [
'uses'=>'HomeController@beta_notification',
'as'=>'beta Notification'
]);

Route::post('user-login', [
	'uses'=>'UserController@userLogin',
	'as'=>'user-login']);

Route::post('/beta-product-filter', [
'uses'=>'AjaxController@beta_product_filter',
'as'=>'beta_product_filter'
]);

Route::post('/load-store-products/{store_id}', [
'uses'=>'HomeController@load_store_products',
'as'=>'load-store-products'
]);

Route::get('/product-detail', [
'uses'=>'AjaxController@product_detail',
'as'=>'product-detail'
]);

Route::get('/product/{product_id}', [
'uses'=>'AjaxController@product_detail',
'as'=>'productdetail'
]);

Route::post('/load-state',[
	'uses'=>'AjaxController@load_state',
	'as'=>'load-state'
]);

Route::post('/load-city',[
	'uses'=>'AjaxController@load_city',
	'as'=>'load-city'
]);

Route::post('beta-upgrade-vendor',[
'uses'=>'HomeController@beta_upgrade_vendor',
'as'=>'beta-upgrade-vendor'
]);

Route::post('user-follower',[
'uses'=>'AjaxController@userFollower',
'as'=>'user-follower'
]);

/************************beta route*********************************/




Route::post('update-member',[
'uses'=>'CustomerController@updateMember',
'as'=>'update-member'
]);


Route::get('/', [
'uses'=>'HomeController@index',
'as'=>'home'
]);

Route::get('admin/{any}/{all?}', function () {
    return View::make('admin/index');
});

Route::get('/home_1', [
'uses'=>'HomeController@home_1',
'as'=>'home_1'
]);

Route::get('/daily-deals-section', [
'uses'=>'HomeController@dailyDealsSection',
'as'=>'daily-deals-section'
]);

Route::get('category-product/{category_id}', [
'uses'=>'ProductController@subCategoryProductListing',
'as'=>'category-product-listing'
]);

Route::get('category/{category_id}', [
'uses'=>'HomeController@beta_category',
'as'=>'category-product'
]);

Route::get('/contact', [
'uses'=>'HomeController@beta_contact',
'as'=>'contact'
]);


Route::get('/faq', [
'uses'=>'HomeController@beta_faq',
'as'=>'faq'
]);

Route::get('my-collections', [
	'uses' => 'HomeController@myCollections',
	'as' => 'my-collections'
]);

Route::get('my-likes', [
	'uses' => 'HomeController@myLikes',
	'as' => 'my-likes'
]);

Route::get('blog', [
	'uses' => 'HomeController@beta_blog',
	'as' => 'blog'
]);

Route::get('/blog-details', [
'uses'=>'HomeController@blog_details',
'as'=>'beta-blog-details'
]);

Route::get('my-notifications', [
	'uses' => 'HomeController@myCollections',
	'as' => 'my-notifications'
]);

Route::get('my-profile', [
	'uses' => 'CustomerController@profile',
	'as' => 'my-profile'
]);

Route::get('/profile/{user_id}', [
'uses'=>'HomeController@beta_profile',
'as'=>'beta Profile'
]);

Route::get('/my-account', [
'uses'=>'CustomerController@my_account',
'as'=>'beta Account'
]);

Route::get('/track-order', [
'uses'=>'OrderController@track_order',
'as'=>'beta-track-order'
]);

Route::get('categories-products/{category_id}', [
'uses'=>'ProductController@categoryProductListing',
'as'=>'category-product-listing'
]);

Route::get('product-details/{slug}',[
'uses'=>'ProductController@show',
'as'=>'product-details'
]);

Route::post('product-details/add-user-follow',[
'uses'=>'ProductController@addUserFollow',
'as'=>'add-user-follow'
]);

Route::post('get-product-by-id',[
'uses'=>'ProductController@getProductById',
'as'=>'get-product-by-id'
]);

Route::post('collection-category',[
'uses'=>'CustomerController@collectionCategory',
'as'=>'collection-category'
]);

Route::get('cart',[
'uses'=>'CartController@index',
'as'=>'cart'
]);

Route::get('checkout',[
'uses'=>'CheckoutController@index',
'as'=>'checkout'
]);

Route::post('home/deals-tab-products',[
'uses'=>'AjaxController@dealsAndTabsProducts',
'as'=>'deals-and-tabs'
]);

Route::post('product-details/add-to-cart',[
'uses'=>'AjaxController@addCart',
'as'=>'add-to-cart'
]);

Route::post('product-details/add-to-store',[
'uses'=>'AjaxController@addToStore',
'as'=>'add-to-store'
]);

Route::post('product-details/add-to-customer-collection',[
'uses'=>'AjaxController@addToCustomerCollection',
'as'=>'add-to-customer-collection'
]);

Route::post('follow-collection',[
'uses'=>'AjaxController@followCollection',
'as'=>'follow-collection'
]);

Route::post('add-like',[
'uses'=>'AjaxController@addLike',
'as'=>'add-like'
]);

Route::get('product-add/add-to-cart-flyto',[
'uses'=>'AjaxController@addCartFlyto',
'as'=>'add-to-cart-flyto'
]);

Route::post('cart/update-cart',[
'uses'=>'AjaxController@updateCart',
'as'=>'update-cart'
]);

Route::post('register', [
	'uses'=>'Auth\RegisterController@create',
	'as'=>'vender-register']);


Route::get('user-register', [
	'uses'=>'HomeController@beta_user_register',
	'as'=>'beta user-register'
]);

Route::post('user-create', [
	'uses'=>'CustomerController@userCreate',
	'as'=>'user-create']);

Route::post('facebook-login', [
	'uses'=>'UserController@facebookLogin',
	'as'=>'facebook-login']);

Route::post('instagram-login', [
	'uses'=>'AjaxController@instagramLogin',
	'as'=>'instagram-login']);

Route::get('store-list', [
	'uses'=>'ShopController@storeList',
	'as'=>'store-list']);

Route::get('store-details/{vendor_id}', [
	'uses'=>'HomeController@beta_store_details',
	'as'=>'beta Store Details'
]);

Route::get('fetch-collection/{collection_id}', [
	'uses'=>'ShopController@fetchCollection',
	'as'=>'fetch-collection']);

/*support routs*/
Route::post('add-support-ticket', [
	'uses'=>'ShopController@addSupportTicket',
	'as'=>'add-support-ticket']);

Route::post('add-ticket-response', [
	'uses'=>'ShopController@addTicketResponse',
	'as'=>'add-ticket-response']);

Route::get('beta-search-result', [
	'uses'=>'HomeController@beta_search',
	'as'=>'beta search-result']);
/*support routs*/


Route::post('rating', [
	'uses'=>'ReviewController@store',
	'as'=>'rating']);

Route::get('logout', [
	'uses'=>'CustomerController@logout',
	'as'=>'logout']);

Route::post('store-follower',[
'uses'=>'AjaxController@storeFollower',
'as'=>'store-follower'
]);
Route::post('searching-filter',[
'uses'=>'AjaxController@searchFilter',
'as'=>'store-follower'
]);

Route::get('customer',[
'uses'=>'CustomerController@customerSection',
'as'=>'customer'
]);

Route::post('is-store-available',[
'uses'=>'AjaxController@isStoreAvailable',
'as'=>'is-store-available'
]);



Route::post('edit-profile',[
'uses'=>'UserController@editProfile',
'as'=>'edit-profile'
]);
Route::post('/change-password',[
'uses'=>'UserController@change_password',
'as'=>'change-password'
]);
Route::post('update-address',[
'uses'=>'UserController@update_address',
'as'=>'update-address'
]);

Route::get('forget-pass',[
'uses'=>'CustomerController@forget_pass',
'as'=>'forget-pass'
]);

Route::post('customer-forget-pass',[
'uses'=>'CustomerController@customerForgetPass',
'as'=>'customer-forget-pass'
]);




Route::get('upgrade-profile',[
'uses'=>'CustomerController@upgradeProfile',
'as'=>'upgrade-profile'
]);


Route::post('get-country-code',[
'uses'=>'AjaxController@getCountryCode',
'as'=>'get-country-code'
]);

Route::post('get-state',[
'uses'=>'AjaxController@getState',
'as'=>'get-state'
]);

Route::post('get-city',[
'uses'=>'AjaxController@getCity',
'as'=>'get-city'
]);


Route::post('add-staff',[
'uses'=>'CustomerController@addStaff',
'as'=>'add-staff'
]);

Route::post('upgrade-vendor',[
'uses'=>'CustomerController@upgrade_vendor',
'as'=>'upgrade-vendor'
]);
Route::post('user-available',[
'uses'=>'CustomerController@userAvailable',
'as'=>'user-available'
]);


Route::post('email-available',[
'uses'=>'CustomerController@emailAvailable',
'as'=>'email-available'
]);

Route::post('remove-cart-item',[
'uses'=>'AjaxController@removeCart',
'as'=>'remove-cart-item'
]);

Route::get('remove-cart-item/{cart_id}/{cart}',[
'uses'=>'AjaxController@removeCart',
'as'=>'remove-cart-item'
]);

Route::post('add-wishlist',[
'uses'=>'AjaxController@addWishlist',
'as'=>'add-wishlist'
]);

Route::get('wishlist',[
	'uses'=>'WishlistController@index',
	'as'=>'wishlist'
]);

Route::get('remove-wishlist/{id}',[
	'uses'=>'WishlistController@destroy',
	'as'=>'remove-wishlist'
]);

Route::post('checkout/order',[
'uses'=>'CheckoutController@store',
'as'=>'place-order'
]);

Route::post('compare',[
'uses'=>'AjaxController@compare',
'as'=>'compare'
]);

Route::post('remove-compare',[
'uses'=>'AjaxController@remove_compare',
'as'=>'compare'
]);

/* Route::get('compare',[
'uses'=>'CompareController@index',
'as'=>'compare-page'
]); */

Route::get('compare',[
'uses'=>'HomeController@beta_compare',
'as'=>'Compare'
]);

Route::get('remove-compare/{id}',[
'uses'=>'CompareController@remove',
'as'=>'compare-remove'
]);

Route::get('order-details/{order_no}',[
'uses'=>'OrderController@details',
'as'=>'order-details'
]);

Route::get('order-review/{order_no}',[
'uses'=>'OrderController@review',
'as'=>'order-review'
]);

Route::get('order-summary',[
'uses'=>'OrderController@index',
'as'=>'order'
]);
Route::post('customer/address',[
'uses'=>'CustomerController@customerAddress',
'as'=>'customer/address'
]);


Route::post('edit-address',[
'uses'=>'AjaxController@customerAddressEdit',
'as'=>'edit-address'
]);

Route::post('delete-address',[
'uses'=>'AjaxController@customerAddressDelete',
'as'=>'delete-address'

]);

//page lode
Route::get('customer/forget-pass',[
'uses'=>'CustomerController@customerForgetPass',
'as'=>'forget-pass'
]);

//check email
Route::post('customer/forget-pass-email',[
'uses'=>'UserController@customerForgetPassEmail',
'as'=>'forget-pass-email'
]);

//view page for reset password
Route::get('reset-customer-pass/{token}/{timestamp}/{email}',[
'uses'=>'CustomerController@resetCustomerPass',
'as'=>'reset-pass-customer'
]);

//password update
Route::post('reset-password',[
'uses'=>'AjaxController@resetCustomerPassUpdate',
'as'=>'reset-pass-customer'
]);

Route::get('reset-password-success',[
'uses'=>'CustomerController@resetPassSuccess',
'as'=>'reset-password-success'
]);
Route::post('quick-view',[
'uses'=>'AjaxController@quickView',
'as'=>'quick-view']);

Route::get('product-type/{product_type_id}',[
'uses'=>'ProductController@ProductTypeListing',
'as'=>'product-type'
]);

Route::post('search-drp-filter',[
'uses'=>'AjaxController@search_drp_filter',
'as'=>'search-drp-filter'

]);


Route::post('search-for-search-page',[
'uses'=>'AjaxController@search_for_search_page',
'as'=>'search-for-search-page'

]);


Route::post('color-filter',[
'uses'=>'AjaxController@colorFilter',
'as'=>'color-filter'

]);


Route::post('delete-collection-category',[
'uses'=>'AjaxController@deleteCollectionCategory',
'as'=>'delete-collection-category'

]);


Route::get('product-details/get-color-by-id/{id}',[
'uses'=>'AjaxController@getColorById',
'as'=>'get-color-by-id'
]);

Route::post('get-collection-category', [
'uses'=>'AjaxController@getCollectionCategory', 
'as'=>'get-collection-category'
]);

Route::get('get-asset-url', [
'uses' => 'AjaxController@getAssetUrl',
'as' => 'get-asset-url'
]);

Route::post('get-collection-product-details', [
'uses' => 'AjaxController@getCollectionProductDetails',
'as' => 'get-collection-product-details'
]);

Route::post('get-collection-product', [
'uses' => 'AjaxController@getCollectionProduct',
'as' => 'get-collection-product'
]);


Route::post('update-collection-category', [
'uses' => 'AjaxController@updateCollectionCategory',
'as' => 'update-collection-category'
]);

Route::post('search-general', [
'uses' => 'AjaxController@searchGeneral',
'as' => 'search-general'
]);

Route::get('raghu', [
'uses' => 'HomeController@raghu',
'as' => 'raghu'
]);

Route::post('load-more', [
'uses' => 'AjaxController@load_more',
'as' => 'load-more'
]);

Route::post('load-more-details', [
'uses' => 'AjaxController@load_more_details',
'as' => 'load-more'
]);


/*******NEW Routes********/

Route::get('new-collection', [
'uses' => 'HomeController@collectionNew',
'as' => 'new-collection'
]);
Route::get('new-follower', [
'uses' => 'HomeController@followerNew',
'as' => 'new-follower'
]);

Route::get('new-following', [
'uses' => 'HomeController@followingNew',
'as' => 'new-following'
]);



Route::get('gigs', [
'uses' => 'HomeController@gigs',
'as' => 'gigs'
]);

Route::get('gigs2', [
'uses' => 'HomeController@gigs2',
'as' => 'gigs2'
]);

Route::get('my-blog', [
'uses' => 'HomeController@myblogsecond',
'as' => 'my-blog'
]);


Route::get('featured', [
'uses' => 'HomeController@featured',
'as' => 'featured'
]);



Route::get('customer-service', [
'uses' => 'HomeController@customerservice',
'as' => 'customer-service'
]);



Route::get('brands', [
'uses' => 'HomeController@brands',
'as' => 'brands'
]);


Route::get('people', [
'uses' => 'HomeController@people',
'as' => 'people'
]);



Route::get('trending', [
'uses' => 'HomeController@trending',
'as' => 'trending'
]);


Route::get('cryptocollectibles', [
'uses' => 'HomeController@cryptocollectibles',
'as' => 'cryptocollectibles'
]);



Route::get('like', [
'uses' => 'HomeController@like',
'as' => 'like'
]);


Route::get('news-feed', [
'uses' => 'HomeController@newsfeed',
'as' => 'news-feed'
]);

Route::get('activity', [
'uses' => 'HomeController@activity',
'as' => 'activity'
]);

Route::post('search-result', [
	'uses'=>'HomeController@search',
	'as'=>'search-result']);

Route::post('user-registeration', [
	'uses'=>'UserController@user_create',
	'as'=>'user-registeration']);







