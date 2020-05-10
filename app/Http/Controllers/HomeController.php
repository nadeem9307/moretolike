<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Stripe;
use DB;
use Cart;
use Cookie;
use Session;
use Redirect;
use Instagram;
use App\CustomerWishlist;

class HomeController extends Controller
{
    /**
     * Display a listing of the myCollections
     *
     *  @return \Illuminate\Http\Response
     */
    /************************beta code*********************************/
    public function stripe(Request $request)
    {
        $stripe = Stripe::make();
        /*$charges = $stripe->charges()->all();
        return json_encode($charges);
        foreach ($charges['data'] as $charge) {
          var_dump($charge['id']);
        }*/
        $customers = $stripe->customers()
            ->all();
        return json_encode($customers);
        var_dump($customers);
        foreach ($customers['data'] as $customer)
        {
            var_dump($customer['email']);
        }
    }
    public function load_more_like(Request $request)
    {
        return json_encode($request->all());
    }
    
    public static function getRecentAddedProduct()
    {
        $recent_added_products = DB::table('products_types')->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
            ->join('products_sub_category', 'products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
            ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
            ->join('ms_category', 'products_sub_category.fk_category_id', '=', 'ms_category.id')
            ->join('ms_brands', 'product.brand_id', '=', 'ms_brands.id')
            ->where('ms_brands.status', '=', 'Active')
            ->where('ms_brands.deleted_status', '=', 'Not deleted')
            ->select('product.shareable_product', 'product.product_id', 'product.product_name', 'product.slug', 'product.sku', 'product.mrp', 'product.current_price', 'product.user_id', 'product.stock_quantity', 'product.description', 'product.product_details', 'product.product_img', 'product.specification', 'product.vendor_commission_type', 'product.vendor_commission', 'ms_category.id', 'ms_category.category_name', DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'))
            ->limit(20)
            ->get();
        if (isset($recent_added_products) && !empty($recent_added_products))
        {
            $i = 0;
            foreach ($recent_added_products as $row)
            {
                $recent_added_products[$i]->product_color = DB::select('CALL getProductColorByProductId(' . $row->product_id . ')');
                $recent_added_products[$i]->product_size = DB::select('CALL getProductSizeByProductId(' . $row->product_id . ')');
                $recent_added_products[$i]->product_attr = DB::select('CALL getProductAttributeByProductId(' . $row->product_id . ')');
                $recent_added_products[$i]->product_like = DB::select('CALL getPeopleByProductId(' . $row->product_id . ')');
                $recent_added_products[$i]->store_details = DB::select('CALL getStoreDetailsByStoreId(' . $row->user_id . ')');
                $recent_added_products[$i]->product_review = DB::select('CALL getProductReviewsByProductId(' . $row->product_id . ')');
                $recent_added_products[$i]->acc_product = DB::select('CALL getProductAccessoriesByProductId(' . $row->product_id . ')');
                $recent_added_products[$i]->store_product = DB::select('CALL getProductByStoreId(' . $row->user_id . ', "3")');
                $recent_added_products[$i]->product_review_count = DB::select('CALL getReviewCountByProductId(' . $row->product_id . ')');
                if ($user_login = true)
                {
                    $recent_added_products[$i]->is_liked = DB::table('product_like')
                        ->where('product_id', $row->product_id)
                        ->where('customer_id', Session::get('user_id'))
                        ->count();
                    $recent_added_products[$i]->userReview = DB::table('reviews')
                        ->join('customers', 'reviews.fk_customer_id', '=', 'customers.id')
                        ->select('reviews.*', 'customers.f_name', 'customers.l_name')
                        ->where('ref_id', '=', $row->product_id)
                        ->where('fk_customer_id', '=', Session::get('user_id'))
                        ->first();
                }
                $recent_added_products[$i]->people_who_like = HomeController::people_who_like($row->product_id);
                $i++;
            }
        }
        //echo '<pre>'.$recent_added_products.'</pre>';
        return json_encode($recent_added_products);
    }
    
    public function add_notification($user_id, $title, $description)
    {
        if (isset($user_id) && !empty($user_id))
        {
            $insert_data['title'] = $title;
            $insert_data['description'] = $description;
            $insert_data['user_id'] = $user_id;
            $result = DB::table('notification')->insert($insert_data);
            return $result;
        }
    }
    public function index(Request $request)
    {
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = CustomerWishlist::where('fk_customer_id', '=', $session)->get()
                ->count();
            $total_cart = 0;
            if (!empty($this->static_data['cart']))
            {
                foreach ($this->static_data['cart'] as $id => $val)
                {
                    if ($val > 0)
                    {
                        $total_cart += $val['quantity'];
                    }
                }
            }
            $this->static_data['my_cart_total'] = $total_cart;
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
            $total_cart = 0;
            if (!empty($this->static_data['cart']))
            {
                foreach ($this->static_data['cart'] as $id => $val)
                {
                    if ($val > 0)
                    {
                        $total_cart += $val['quantity'];
                    }
                }
            }
            $this->static_data['my_cart_total'] = $total_cart;
        }
        // return (new ProductController())->recentAddedProduct();
        // $user_login = null;
        // if(Session::has('user_id')){
        //   $user_login = true;
        // }else{
        //   $user_login = false;
        // }
        $recent_added_products = DB::table('product')
        //->join('product','products_types.fk_product_id','=', 'product.product_id')
        // ->join('products_sub_category','products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
        // ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
        ->leftjoin('ms_category', 'product.category', '=', 'ms_category.id')
            ->leftjoin('ms_brands', 'product.brand_id', '=', 'ms_brands.id')
        //->where('ms_brands.status','=','Active')
        
            ->where('product.product_name', '!=', '')
            ->where('product.deleted_status', '=', 'Not deleted')
            ->where('product.status', '=', 'Active')
            ->select('product.shareable_product', 'product.product_id', 'product.product_name', 'product.slug', 'product.sku', 'product.mrp', 'product.current_price', 'product.actual_price', 'product.user_id', 'product.stock_quantity', 'product.description', 'product.product_details', 'product.product_img', 'product.specification', 'product.vendor_commission_type', 'product.vendor_commission', 'product.category as category_id', 'ms_category.id as sub_category_id', 'ms_category.category_name', DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'))
            ->orderBy('product.product_id', 'desc')
            ->limit(20)
            ->get();
        //return json_encode($recently_added);
        /*recent_added_products*/
        //$recent_added_products = DB::select("CALL `getRecentAddedProduct`()");
        // return $recent_added_products;
        if (isset($recent_added_products) && !empty($recent_added_products))
        {
            $i = 0;
            foreach ($recent_added_products as $row)
            {
                $recent_added_products[$i]->product_color = DB::select('CALL getProductColorByProductId(' . $row->product_id . ')');
                $recent_added_products[$i]->product_size = DB::select('CALL getProductSizeByProductId(' . $row->product_id . ')');
                $recent_added_products[$i]->product_attr = DB::select('CALL getProductAttributeByProductId(' . $row->product_id . ')');
                $recent_added_products[$i]->product_like = DB::select('CALL getPeopleByProductId(' . $row->product_id . ')');
                $recent_added_products[$i]->store_details = DB::select('CALL getStoreDetailsByStoreId(' . $row->user_id . ')');
                $recent_added_products[$i]->product_review = DB::select('CALL getProductReviewsByProductId(' . $row->product_id . ')');
                $recent_added_products[$i]->acc_product = DB::select('CALL getProductAccessoriesByProductId(' . $row->product_id . ')');
                $recent_added_products[$i]->store_product = DB::select('CALL getProductByStoreId(' . $row->user_id . ', "3")');
                $recent_added_products[$i]->product_review_count = DB::select('CALL getReviewCountByProductId(' . $row->product_id . ')');
                if ($user_login = true)
                {
                    $recent_added_products[$i]->is_liked = DB::table('product_like')
                        ->where('product_id', $row->product_id)
                        ->where('customer_id', Session::get('user_id'))
                        ->count();
                    $recent_added_products[$i]->userReview = DB::table('reviews')
                        ->join('customers', 'reviews.fk_customer_id', '=', 'customers.id')
                        ->select('reviews.*', 'customers.f_name', 'customers.l_name')
                        ->where('ref_id', '=', $row->product_id)
                        ->where('fk_customer_id', '=', Session::get('user_id'))
                        ->first();
                }
                $recent_added_products[$i]->people_who_like = $this->people_who_like($row->product_id);
                $i++;
            }
        }
        $data['recent_added_products'] = $recent_added_products;

        /*recent_added_products*/

        /************* best deals ***********/
        $best_deals = DB::table('product')
        //->join('product','products_types.fk_product_id','=', 'product.product_id')
        // ->join('products_sub_category','products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
        // ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
        ->leftjoin('ms_category', 'product.category', '=', 'ms_category.id')
            ->leftjoin('ms_brands', 'product.brand_id', '=', 'ms_brands.id')
            ->where('product.product_name', '!=', '')
            ->where('product.deleted_status', '=', 'Not deleted')
            ->where('product.status', '=', 'Active')
        //->where('ms_brands.deleted_status','=','Not deleted')
        
            ->select('product.shareable_product', 'product.product_id', 'product.product_name', 'product.slug', 'product.sku', 'product.mrp', 'product.current_price', 'product.actual_price', 'product.user_id', 'product.stock_quantity', 'product.description', 'product.product_details', 'product.product_img', 'product.specification', 'product.vendor_commission_type', 'product.vendor_commission', 'product.category as category_id', 'ms_category.id as sub_category_id', 'ms_category.category_name', DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'))
            ->orderBy('product.current_price', 'asc')
            ->limit(5)
            ->get();
        //return json_encode($recently_added);
        /*recent_added_products*/
        //$recent_added_products = DB::select("CALL `getRecentAddedProduct`()");
        //return json_encode($recent_added_products);
        if (isset($best_deals) && !empty($best_deals))
        {
            $i = 0;
            foreach ($best_deals as $row)
            {

                $best_deals[$i]->product_review = DB::select('CALL getProductReviewsByProductId(' . $row->product_id . ')');
                $best_deals[$i]->acc_product = DB::select('CALL getProductAccessoriesByProductId(' . $row->product_id . ')');
                $best_deals[$i]->store_product = DB::select('CALL getProductByStoreId(' . $row->user_id . ', "3")');
                $best_deals[$i]->product_review_count = DB::select('CALL getReviewCountByProductId(' . $row->product_id . ')');
                if ($user_login = true)
                {
                    $best_deals[$i]->is_liked = DB::table('product_like')
                        ->where('product_id', $row->product_id)
                        ->where('customer_id', Session::get('user_id'))
                        ->count();
                    $best_deals[$i]->userReview = DB::table('reviews')
                        ->join('customers', 'reviews.fk_customer_id', '=', 'customers.id')
                        ->select('reviews.*', 'customers.f_name', 'customers.l_name')
                        ->where('ref_id', '=', $row->product_id)
                        ->where('fk_customer_id', '=', Session::get('user_id'))
                        ->first();
                }
                $best_deals[$i]->people_who_like = $this->people_who_like($row->product_id);
                $i++;
            }
        }
        $data['best_deals'] = $best_deals;
        //return $best_deals;
        /****************************************/
        /*populer_products*/
        ///$populer_products = DB::select("CALL `getProductByTypeId`('6')");
        $populer_products = DB::table('product')
        //->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
        // ->join('products_sub_category','products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
        //->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
        ->leftjoin('ms_category', 'product.category', '=', 'ms_category.id')
        //->join('ms_category', 'products_sub_category.fk_category_id', '=', 'ms_category.id')
        //->where('products_types.fk_product_type_id','=',1)
        
            ->where('product.product_name', '!=', '')
            ->where('product.deleted_status', '=', 'Not deleted')
            ->where('product.status', '=', 'Active')
            ->select('product.shareable_product', 'product.product_id', 'product.product_name', 'product.slug', 'product.sku', 'product.mrp', 'product.current_price', 'product.user_id', 'product.stock_quantity', 'product.description', 'product.product_details', 'product.product_img', 'product.specification', 'product.vendor_commission_type', 'product.vendor_commission',
        // 'ms_sub_category.id as category_id',
        'ms_category.id as sub_category_id', 'ms_category.category_name', DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'))
            ->limit(20)
            ->get();
        // return 'aa';
        if (isset($populer_products) && !empty($populer_products))
        {
            $i = 0;
            foreach ($populer_products as $row)
            {
                $populer_products[$i]->product_color = DB::select('CALL getProductColorByProductId(' . $row->product_id . ')');
                $populer_products[$i]->product_size = DB::select('CALL getProductSizeByProductId(' . $row->product_id . ')');
                $populer_products[$i]->product_attr = DB::select('CALL getProductAttributeByProductId(' . $row->product_id . ')');
                $populer_products[$i]->product_like = DB::select('CALL getPeopleByProductId(' . $row->product_id . ')');
                $populer_products[$i]->store_details = DB::select('CALL getStoreDetailsByStoreId(' . $row->user_id . ')');
                $populer_products[$i]->product_review = DB::select('CALL getProductReviewsByProductId(' . $row->product_id . ')');
                $populer_products[$i]->acc_product = DB::select('CALL getProductAccessoriesByProductId(' . $row->product_id . ')');
                $populer_products[$i]->store_product = DB::select('CALL getProductByStoreId(' . $row->user_id . ', "3")');
                $populer_products[$i]->product_review_count = DB::select('CALL getReviewCountByProductId(' . $row->product_id . ')');
                if ($user_login = true)
                {
                    $populer_products[$i]->is_liked = DB::table('product_like')
                        ->where('product_id', $row->product_id)
                        ->where('customer_id', Session::get('user_id'))
                        ->count();
                    $populer_products[$i]->userReview = DB::table('reviews')
                        ->join('customers', 'reviews.fk_customer_id', '=', 'customers.id')
                        ->select('reviews.*', 'customers.f_name', 'customers.l_name')
                        ->where('ref_id', '=', $row->product_id)
                        ->where('fk_customer_id', '=', Session::get('user_id'))
                        ->first();
                }
                $populer_products[$i]->people_who_like = $this->people_who_like($row->product_id);
                $i++;
            }
        }
        $data['populer_products'] = $populer_products;

        /*populer_products*/
        /*best_seller_products*/
        //$best_seller_products = DB::select("CALL `getProductByTypeId`('4')");
        $best_seller_products = DB::table('products_types')->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
            ->join('products_sub_category', 'products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
            ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
            ->join('ms_category', 'products_sub_category.fk_category_id', '=', 'ms_category.id')
            ->join('ms_brands', 'product.brand_id', '=', 'ms_brands.id')
            ->where('ms_brands.status', '=', 'Active')
            ->where('ms_brands.deleted_status', '=', 'Not deleted')
            ->where('products_types.fk_product_type_id', '=', 4)
            ->where('product.product_name', '!=', '')
            ->where('product.deleted_status', '=', 'Not deleted')
            ->where('product.status', '=', 'Active')
            ->select('product.shareable_product', 'product.product_id', 'product.product_name', 'product.slug', 'product.sku', 'product.mrp', 'product.current_price', 'product.user_id', 'product.stock_quantity', 'product.description', 'product.product_details', 'product.product_img', 'product.specification', 'product.vendor_commission_type', 'product.vendor_commission', 'ms_sub_category.id as category_id', 'ms_category.id as sub_category_id', 'ms_category.category_name', DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'))
            ->limit(20)
            ->get();
        if (isset($best_seller_products) && !empty($best_seller_products))
        {
            $i = 0;
            foreach ($best_seller_products as $row)
            {
                $best_seller_products[$i]->product_color = DB::select('CALL getProductColorByProductId(' . $row->product_id . ')');
                $best_seller_products[$i]->product_size = DB::select('CALL getProductSizeByProductId(' . $row->product_id . ')');
                $best_seller_products[$i]->product_attr = DB::select('CALL getProductAttributeByProductId(' . $row->product_id . ')');
                $best_seller_products[$i]->product_like = DB::select('CALL getPeopleByProductId(' . $row->product_id . ')');
                $best_seller_products[$i]->store_details = DB::select('CALL getStoreDetailsByStoreId(' . $row->user_id . ')');
                $best_seller_products[$i]->product_review = DB::select('CALL getProductReviewsByProductId(' . $row->product_id . ')');
                $best_seller_products[$i]->acc_product = DB::select('CALL getProductAccessoriesByProductId(' . $row->product_id . ')');
                $best_seller_products[$i]->store_product = DB::select('CALL getProductByStoreId(' . $row->user_id . ', "3")');
                $best_seller_products[$i]->product_review_count = DB::select('CALL getReviewCountByProductId(' . $row->product_id . ')');
                if ($user_login = true)
                {
                    $best_seller_products[$i]->is_liked = DB::table('product_like')
                        ->where('product_id', $row->product_id)
                        ->where('customer_id', Session::get('user_id'))
                        ->count();
                    $best_seller_products[$i]->userReview = DB::table('reviews')
                        ->join('customers', 'reviews.fk_customer_id', '=', 'customers.id')
                        ->select('reviews.*', 'customers.f_name', 'customers.l_name')
                        ->where('ref_id', '=', $row->product_id)
                        ->where('fk_customer_id', '=', Session::get('user_id'))
                        ->first();
                }
                $best_seller_products[$i]->people_who_like = $this->people_who_like($row->product_id);
                $i++;
            }
        }
        $data['best_seller_products'] = $best_seller_products;
        /*best_seller_products*/
        /*top_rated_products*/
        //$top_rated_products = DB::select("CALL `getProductByTypeId`('2')");
        $top_rated_products = DB::table('products_types')->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
            ->join('products_sub_category', 'products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
            ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
            ->join('ms_category', 'products_sub_category.fk_category_id', '=', 'ms_category.id')
            ->where('products_types.fk_product_type_id', '=', 2)
            ->where('product.product_name', '!=', '')
            ->where('product.deleted_status', '=', 'Not deleted')
            ->where('product.status', '=', 'Active')
            ->select('product.shareable_product', 'product.product_id', 'product.product_name', 'product.slug', 'product.sku', 'product.mrp', 'product.current_price', 'product.user_id', 'product.stock_quantity', 'product.description', 'product.product_details', 'product.product_img', 'product.specification', 'product.vendor_commission_type', 'product.vendor_commission', 'ms_sub_category.id as category_id', 'ms_category.id as sub_category_id', 'ms_category.category_name', DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'))
            ->limit(20)
            ->get();
        if (isset($top_rated_products) && !empty($top_rated_products))
        {
            $i = 0;
            foreach ($top_rated_products as $row)
            {
                $top_rated_products[$i]->product_color = DB::select('CALL getProductColorByProductId(' . $row->product_id . ')');
                $top_rated_products[$i]->product_size = DB::select('CALL getProductSizeByProductId(' . $row->product_id . ')');
                $top_rated_products[$i]->product_attr = DB::select('CALL getProductAttributeByProductId(' . $row->product_id . ')');
                $top_rated_products[$i]->product_like = DB::select('CALL getPeopleByProductId(' . $row->product_id . ')');
                $top_rated_products[$i]->store_details = DB::select('CALL getStoreDetailsByStoreId(' . $row->user_id . ')');
                $top_rated_products[$i]->product_review = DB::select('CALL getProductReviewsByProductId(' . $row->product_id . ')');
                $top_rated_products[$i]->acc_product = DB::select('CALL getProductAccessoriesByProductId(' . $row->product_id . ')');
                $top_rated_products[$i]->store_product = DB::select('CALL getProductByStoreId(' . $row->user_id . ', "3")');
                $top_rated_products[$i]->product_review_count = DB::select('CALL getReviewCountByProductId(' . $row->product_id . ')');
                if ($user_login = true)
                {
                    $top_rated_products[$i]->is_liked = DB::table('product_like')
                        ->where('product_id', $row->product_id)
                        ->where('customer_id', Session::get('user_id'))
                        ->count();
                    $top_rated_products[$i]->userReview = DB::table('reviews')
                        ->join('customers', 'reviews.fk_customer_id', '=', 'customers.id')
                        ->select('reviews.*', 'customers.f_name', 'customers.l_name')
                        ->where('ref_id', '=', $row->product_id)
                        ->where('fk_customer_id', '=', Session::get('user_id'))
                        ->first();
                }
                $top_rated_products[$i]->people_who_like = $this->people_who_like($row->product_id);
                $i++;
            }
        }
        $data['top_rated_products'] = $top_rated_products;
        /*top_rated_products*/
        $data['recent_view_products'] = DB::table('products_types')->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
            ->where('fk_product_type_id', '=', 7)
            ->select('product.product_name', 'product.mrp', 'product.current_price', 'product.product_img', 'product.slug', 'product.product_id')
            ->orderby('products_types.pk_id', 'desc')
            ->get();
        $data['m_banner'] = DB::table('ms_banner')->where('status', 'Active')
            ->where('banner_type', 'm')
            ->where('deleted_status', 'Not deleted')
            ->get();
        $data['s_banner'] = DB::table('ms_banner')->where('status', 'Active')
            ->where('banner_type', 's')
            ->where('deleted_status', 'Not deleted')
            ->get();
        $data['d_banner'] = DB::table('ms_banner')->where('status', 'Active')
            ->where('banner_type', 'd')
            ->where('deleted_status', 'Not deleted')
            ->get();
        $data['b_banner'] = DB::table('ms_banner')->where('status', 'Active')
            ->where('banner_type', 'b')
            ->where('deleted_status', 'Not deleted')
            ->get();
        $data['categories'] = DB::table('ms_category')->where('status', 'Active')
            ->where('deleted_status', 'Not deleted')
            ->orderby('id', 'desc')
            ->limit(7)
            ->get();
        $data['home_slider'] = DB::table('slider')->join('product', 'product.product_id', '=', 'slider.product_id')
            ->get();
        //return json_encode($this->static_data['cart']['638']->attributes->img);
        return view('frontend/index', ['static_data' => $this->static_data, 'data' => $data]);
    }
    
    public static function people_who_like($product_id)
    {
        $people_who_like = array();
        if (Session::has('user_id'))
        {
            $data_people = DB::table('product_like')->join('customers', 'customers.id', '=', 'product_like.customer_id')
                ->where('product_like.product_id', $product_id)->get();
            foreach ($data_people as $row)
            {
                $is_follow = DB::table('user_follower')->where('follower_id', Session::get('user_id'))
                    ->where('following_id', $row->customer_id)
                    ->where('status', '1')
                    ->count();
                if ($is_follow == 1)
                {
                    $row->is_follow = 1;
                }
                else
                {
                    $row->is_follow = 0;
                }
                array_push($people_who_like, $row);
            }
        }
        else
        {
            $people_who_like = DB::table('product_like')->join('customers', 'customers.id', '=', 'product_like.customer_id')
                ->where('product_like.product_id', $product_id)->get();
        }
        return $people_who_like;
    }
    
    public static function getProductById($product_id)
    {
        return DB::table('product')->where('product_id', $product_id)->first();
    }
    public static function getCustomerById($customer_id)
    {
        return DB::table('customers')->where('id', $customer_id)->first();
    }
    public static function collectionFollowerCountByCollectionById($collection_id)
    {
        return DB::table('collection_followers')->where('collection_id', $collection_id)->count();
    }
    public static function collectionFollowerByCollectionById($collection_id)
    {
        return DB::table('collection_followers')->where('collection_id', $collection_id)->get();
    }
  
    public function getDataByUrl($url)
    {
        $options = array(
            CURLOPT_RETURNTRANSFER => true, // return web page
            CURLOPT_HEADER => false, // don't return headers
            CURLOPT_FOLLOWLOCATION => true, // follow redirects
            CURLOPT_MAXREDIRS => 10, // stop after 10 redirects
            CURLOPT_ENCODING => "", // handle compressed
            CURLOPT_USERAGENT => "test", // name of client
            CURLOPT_AUTOREFERER => true, // set referrer on redirect
            CURLOPT_CONNECTTIMEOUT => 120, // time-out on connect
            CURLOPT_TIMEOUT => 120, // time-out on response
            
        );
        $ch = curl_init($url);
        curl_setopt_array($ch, $options);
        $content = curl_exec($ch);
        curl_close($ch);
        return $content;
    }
    public static function isLiked($product_id, $customer_id)
    {
        $like = DB::table('product_like')->where('customer_id', $customer_id)->where('product_id', $product_id)->count();
        return $like;
    }
    
    public function slide_cart(Request $request)
    {
        //dd(session()->all());
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        if ($this->static_data['getTotlaQty'] <= 0)
        {
            $message = '<h2>Kindly add product in your cart</h2>';
            $returnHTML = view('frontend/cart')->with('static_data', $this->static_data)
                ->render();
            return response()
                ->json(array(
                'success' => true,
                'html' => $returnHTML
            ));
            return Redirect::back()->withErrors(['msg' => $message]);
        }
        //return view('frontend/cart',['static_data' => $this->static_data]);
        $returnHTML = view('frontend/cart')->with('static_data', $this->static_data)
            ->render();
        return response()
            ->json(array(
            'success' => true,
            'html' => $returnHTML
        ));
    }
   
    public function create_support(Request $request)
    {

        DB::table('support')->insert(['customer_id' => $request->customer_id, 'shop_id' => $request->shop_id, 'vendor_id' => $request->shop_id, 'order_id' => $request->order_id, 'title' => $request->subject, 'description' => $request->message, 'response' => '', 'status' => 0, 'deleted_status' => 'Not Deleted', ]);
        //return 'created';
        return redirect('/store/' . $request->store_url)
            ->with('status', 'support created');
    }

    public function productsByStoreId(Request $request, $store_id)
    {

        $request
            ->request
            ->add(['per_page' => 20]);
        $query = 'select product.*, ms_category.category_name from product left join products_sub_category on product.product_id = products_sub_category.fk_product_id left join ms_category on ms_category.id=products_sub_category.fk_category_id where product.user_id = ' . $store_id;
        $products = DB::select(DB::raw($query));
        $product = $this->arrayPaginator($products, $request);
        $pagination = $product;
        //dd($product);
        return $product;
    }
    public function load_store_products(Request $request, $store_id)
    {
        $products = $this->productsByStoreId($request, $store_id);
        $pagination = $products;
        if (isset($products) && !empty($products))
        {
            $i = 0;
            foreach ($products as $row)
            {
                $products[$i]->is_liked = DB::table('product_like')
                    ->where('product_id', $row->product_id)
                    ->where('customer_id', Session::get('user_id'))
                    ->count();
                $products[$i]->product_color = DB::select('CALL getProductColorByProductId(' . $row->product_id . ')');
                $products[$i]->product_size = DB::select('CALL getProductSizeByProductId(' . $row->product_id . ')');
                $products[$i]->product_attr = DB::select('CALL getProductAttributeByProductId(' . $row->product_id . ')');
                $products[$i]->product_like = DB::select('CALL getPeopleByProductId(' . $row->product_id . ')');
                $products[$i]->store_details = DB::select('CALL getStoreDetailsByStoreId(' . $row->user_id . ')');
                $products[$i]->product_review = DB::select('CALL getProductReviewsByProductId(' . $row->product_id . ')');
                $products[$i]->acc_product = DB::select('CALL getProductAccessoriesByProductId(' . $row->product_id . ')');
                $products[$i]->store_product = DB::select('CALL getProductByStoreId(' . $row->user_id . ', "3")');
                $products[$i]->product_review_count = DB::select('CALL getReviewCountByProductId(' . $row->product_id . ')');
                $i++;
            }
        }
        return view('frontend/include/load_more_store_products', ['pagination' => $pagination, 'store_products' => $products, 'store_id' => $store_id]);
    }
   
    public function slide_checkout(Request $request)
    {
        //return json_encode(Session::all());
        if (Session::has('user_id'))
        {
            $user_id = $request->session()
                ->get('user_id');
            $this->static_data['user'] = DB::table('customers')
                ->where('id', $user_id)->first();
            $this->static_data['cart'] = Cart::session($user_id)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($user_id)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($user_id)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $user_id)->get()
                ->count();
        }
        else
        {
            $this->static_data['user'] = null;
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        if ($this->static_data['getTotlaQty'] <= 0)
        {
            $message = 'Kindly add product in your cart';
            return Redirect::back()->withErrors(['msg' => $message]);
        }
        $data['country'] = DB::table('ms_countries')->get();
        if (Session::has('user_id'))
        {
            $customer_id = Session::get('user_id');
            $data['customer'] = DB::table('customers')->where('id', $customer_id)->first();
        }
        // return view('frontend/checkout',['static_data' => $this->static_data, 'data' => $data]);
        $returnHTML = view('frontend/checkout', ['static_data' => $this->static_data, 'data' => $data])->render();
        return response()
            ->json(array(
            'success' => true,
            'html' => $returnHTML
        ));
    }

    /********************Beta functionality Start**************************/
    public function beta_product_by_key(Request $request)
    {
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        $orderby = 'order by p.product_id desc';
        if ($request->type == 'new')
        {
            $orderby = 'order by p.product_id desc';
        }
        elseif ($request->type == 'popularity')
        {
            $orderby = 'order by p.product_id desc';
        }
        elseif ($request->type == 'rating')
        {
            $orderby = 'order by p.product_id desc';
        }
        elseif ($request->type == 'price-asc')
        {
            $orderby = 'order by p.product_id desc';
        }
        else
        {
            $orderby = 'order by p.product_id desc';
        }
        $search_value = $request->search_value;
        $cond = '1';
        if (isset($requestData['search_value']) && !empty($requestData['search_value']))
        {
            $cond .= ' AND  p.product_name LIKE "%' . $requestData['search_value'] . '%"';
        }
        $product = DB::select(DB::raw('select  psc.fk_sub_category_id, p.product_id,p.product_name , p.mrp , p.slug , p.current_price , p.product_img, p.brand_id, msc.name  from product as p left join products_sub_category as psc on p.product_id = psc.fk_product_id left join  ms_sub_category as msc on  psc.fk_sub_category_id = msc.id where ' . $cond));
        return view('frontend/search', ['static_data' => $this->static_data, 'data' => $data]);
    }

    public function beta_search(Request $request)
    {
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        $category_id = 1;
        $requestData = $request->all();
        $data['category'] = DB::table('ms_category')->where('id', $category_id)->first();
        $cond = '1';
        $join = '';
        if ($request->get('s'))
        {
            $cond .= ' AND p.product_name LIKE "%' . $request->get('s') . '%"';
        }
        if ($request->get('category') && count($request->get('category')) > 0)
        {
            $cat_q = implode("','", $request->get('category'));
            $cond .= " AND (psc.fk_sub_category_id IN('" . $cat_q . "'))";
        }
        if ($request->get('brand') && count($request->get('brand')) > 0)
        {
            $brand_q = implode("','", $request->get('brand'));
            $cond .= " AND (p.brand_id IN('" . $brand_q . "'))";
        }
        if ($request->get('color') && count($request->get('color')) > 0)
        {
            $join = 'JOIN product_color pc ON p.product_id = pc.fk_product_id';
            $color_q = implode("','", $request->get('color'));
            $cond .= " AND (pc.color_name IN('" . $color_q . "'))";
        }
        if ($request->get('retailer') && count($request->get('retailer')) > 0)
        {
            $retailer_q = implode("','", $request->get('retailer'));
            $cond .= " AND (p.user_id IN('" . $retailer_q . "'))";
        }
        if ($request->get('min_price') && $request->get('max_price'))
        {
            $cond .= " AND (p.current_price BETWEEN '" . $request->get('min_price') . "' AND '" . $request->get('max_price') . "')";
        }
        $order_by = '';
        $per_page = '';
        if ($request->get('sort_by'))
        {
            if ($request->get('sort_by') == 'price-asc') $order_by .= " ORDER BY p.current_price ASC";
            elseif ($request->get('sort_by') == 'price-desc') $order_by .= " ORDER BY p.current_price DESC";
            elseif ($request->get('sort_by') == 'new') $order_by .= " ORDER BY p.product_id DESC";
        }
        if ($request->get('per_page'))
        {
            if ($request->get('per_page') != '-1') $per_page .= " LIMIT " . $request->get('per_page');
        }
        $query = "SELECT psc.fk_sub_category_id, msc.category_id, p.product_id, p.product_name, p.mrp, p.slug, p.current_price, p.product_img, p.brand_id,msc.name FROM product as p left JOIN products_sub_category as psc ON p.product_id = psc.fk_product_id left JOIN ms_sub_category as msc ON  psc.fk_sub_category_id = msc.id " . $join . " WHERE " . $cond . "";
        $product = DB::select(DB::raw($query));
        $product = $this->arrayPaginator($product, $request);
        $pagination = $product;
        if (isset($product) && !empty($product))
        {
            $i = 0;
            foreach ($product as $row)
            {
                $product[$i]->product_color = DB::select('CALL getProductColorByProductId(' . $row->product_id . ')');
                $product[$i]->product_size = DB::select('CALL getProductSizeByProductId(' . $row->product_id . ')');
                $product[$i]->product_attr = DB::select('CALL getProductAttributeByProductId(' . $row->product_id . ')');
                $product[$i]->product_like = DB::select('CALL getPeopleByProductId(' . $row->product_id . ')');
                //$product[$i]->store_details = DB::select('CALL getStoreDetailsByStoreId('.$row->user_id.')');
                $product[$i]->product_review = DB::select('CALL getProductReviewsByProductId(' . $row->product_id . ')');
                $product[$i]->acc_product = DB::select('CALL getProductAccessoriesByProductId(' . $row->product_id . ')');
                //$product[$i]->store_product = DB::select('CALL getProductByStoreId('.$row->user_id.', "3")');
                $product[$i]->product_review_count = DB::select('CALL getReviewCountByProductId(' . $row->product_id . ')');
                if ($user_login = true)
                {
                    $product[$i]->is_liked = DB::table('product_like')
                        ->where('product_id', $row->product_id)
                        ->where('customer_id', Session::get('user_id'))
                        ->count();
                }
                $i++;
            }
        }
        //return $product;
        $data['product'] = $product;
        $data['search_key'] = $requestData['s'];
        $data['page'] = 'home';
        $data['brands'] = DB::table('ms_brands')->where('status', 'Active')
            ->get();
        return view('frontend/search', ['static_data' => $this->static_data, 'data' => $data, 'pagination' => $pagination, 'requestData' => $requestData]);

        $session = '';
        $compare_count = 0;
        $compare_ids = Cookie::get('compare_id');
        if (is_array($compare_ids))
        {
            $compare_count = count($compare_ids);
        }
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $cart = Cart::session($session)->getContent();
            $getTotlaQty = Cart::session($session)->getTotalQuantity();
            $getSubTotal = Cart::session($session)->getSubTotal();
            $wishlistCount = DB::table('customer_wishlist')->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $cart = Cart::getContent();
            $getTotlaQty = Cart::getTotalQuantity();
            $getSubTotal = Cart::getSubTotal();
            $wishlistCount = 0;
        }
        $vertical_product_types = DB::table('ms_product_types')->where('position', '=', 'v')
            ->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->orderBy('position_order', 'asc')
            ->get();
        $menus = DB::table('ms_menu')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category = DB::table('ms_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category_home = DB::table('ms_category')->where('category_order', '=', 's')
            ->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->limit(9)
            ->get();
        $sub_category = DB::table('ms_sub_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $requestData = $request->all();
        // return $requestData;
        // $recently_added = DB::table('products_types')
        // ->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
        // ->join('ms_brands','product.brand_id','=','ms_brands.id')
        // ->where('fk_product_type_id','=',5)
        // ->limit(10)
        // ->get();
        $brands = DB::select(DB::raw('select p.brand_id,count(p.brand_id) as brand_count,brand.name as brand_name from product as p inner join ms_brands as brand on p.brand_id = brand.id  group by p.brand_id'));
        $colors = DB::select(DB::raw('select id, color_name,color_code,count(color_code) as code_count from product_color group by color_code'));
        // return $colors;
        // $searchResult = DB::table('product')
        //                 ->leftjoin('products_sub_category','product.product_id','=','products_sub_category.fk_product_id')
        //                 ->leftjoin('ms_sub_category','products_sub_category.fk_sub_category_id','=','ms_sub_category.id')
        /*  $searchResult = DB::table('product')
                      ->join('products_sub_category','product.product_id','=','products_sub_category.fk_product_id')
                      ->join('ms_sub_category','products_sub_category.fk_sub_category_id','=','ms_sub_category.id')
                      ->where('product_name','like',"%".$requestData['search_value']."%")
                      ->orWhere('ms_sub_category.id','=',$requestData['product_cat'])
                      ->select('product.product_name','product.mrp','product.slug','current_price','product.product_img','ms_sub_category.name')
                      ->get();*/
        $cond = '1';
        if (isset($requestData['s']) && !empty($requestData['s']))
        {
            $cond .= ' AND  p.product_name LIKE "%' . $requestData['s'] . '%"';
        }
        if (isset($requestData['product_cat']) && !empty($requestData['product_cat']))
        {
            $cond .= ' AND msc.id LIKE "%' . $requestData['product_cat'] . '%"';
        }
        if (isset($requestData['s']) && isset($requestData['product_cat']) && !empty($requestData['s']) && !empty($requestData['product_cat']))
        {
            $cond .= ' AND p.product_name LIKE "%' . $requestData['s'] . '%" AND  msc.id LIKE "%' . $requestData['product_cat'] . '%"';
        }
        $searchResult = DB::select(DB::raw('select  psc.fk_sub_category_id, p.product_id,p.product_name , p.mrp , p.slug , p.current_price , p.product_img , msc.name  from product as p left join products_sub_category as psc on p.product_id = psc.fk_product_id left join  ms_sub_category as msc on  psc.fk_sub_category_id = msc.id where ' . $cond));
        /* $searchResult =  DB::select(DB::raw('select p.product_name , p.mrp , p.slug , p.current_price , p.product_img , ms_sub_category.name  from product as p inner join products_sub_category as psc on p.product_id = psc.fk_product_id inner join  ms_sub_category as msc on  psc.fk_sub_category_id = msc.id where p.product_name LIKE %'.$requestData['search_value'].'% or  msc.id LIKE '.%$requestData['product_cat'].%' '));  */
        // return  $searchResult ;
        // return $searchResult;
        return view('search-result', ['vertical_product_types' => $vertical_product_types, 'menu' => $menus, 'category' => $category, 'sub_category' => $sub_category, 'searchData' => $searchResult, 'cart' => $cart, 'getTotlaQty' => $getTotlaQty, 'getSubTotal' => $getSubTotal, 'search_val' => $requestData['s'], 'brand' => $brands, 'color' => $colors, 'searching_product_sub_cat' => $requestData['product_cat'], 's' => $requestData['s'], 'product_cat' => $requestData['product_cat'], 'session' => $session, 'wishlistCount' => $wishlistCount, 'compare_count' => $compare_count, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
    }

    public function beta_checkout_order(Request $request)
    {
        //return json_encode($request->all());
        $session = $request->session()
            ->get('user_id');
        $requestData = $request->all();
        $insert_data['billing_first_name'] = $requestData['billing_first_name'];
        $insert_data['billing_last_name'] = $requestData['billing_last_name'];
        $insert_data['billing_company'] = $requestData['billing_company'];
        $insert_data['billing_email'] = $requestData['billing_email'];
        $insert_data['billing_phone'] = $requestData['billing_phone'];
        $insert_data['billing_address_1'] = $requestData['billing_address_1'];
        $insert_data['billing_address_2'] = $requestData['billing_address_2'];
        $insert_data['billing_city'] = $requestData['billing_city'];
        $insert_data['billing_postcode'] = $requestData['billing_postcode'];
        $insert_data['fk_billing_country'] = $requestData['country'];
        //$insert_data['billing_country_code'] = $requestData['contact_country_code'];
        if (isset($requestData['ship_to_different_address']))
        {
            $insert_data['ship_to_different_address'] = 'y';
            $insert_data['shipping_first_name'] = $requestData['shipping_first_name'];
            $insert_data['shipping_last_name'] = $requestData['shipping_last_name'];
            $insert_data['shipping_company'] = $requestData['shipping_company'];
            $insert_data['shipping_email'] = $requestData['shipping_email'];
            $insert_data['shipping_phone'] = $requestData['shipping_phone'];
            $insert_data['shipping_address_1'] = $requestData['shipping_address_1'];
            $insert_data['shipping_address_2'] = $requestData['shipping_address_2'];
            $insert_data['shipping_city'] = $requestData['shipping_city'];
            $insert_data['shipping_postcode'] = $requestData['shipping_postcode'];
            $insert_data['fk_shipping_country'] = $requestData['shipping_country'];
            //$insert_data['shipping_country_code'] = $requestData['shipping_contact_country_code'];
            
        }
        $total_amount = Cart::session($session)->getSubTotal();
        $insert_data['fk_customer_id'] = $requestData['fk_customer_id'];
        Session::put('cart_id_payment', json_encode($requestData['cart_id']));
        if ($requestData['payment_mode'] == 'cod')
        {
            $address_info_insertion = DB::table('order_address_info')->insert($insert_data);
            $address_id = DB::getPdo()->lastInsertId();
            $order_data['fk_customer_id'] = $session;
            $order_data['fk_address_id'] = $address_id;
            Session::put('cart_id_address', $address_id);
            //$order_data['fk_payment_type'] = $requestData['payment_method'];
            $order_data['fk_payment_type'] = 'COD';
            $order_data['order_no'] = 'OD' . time() . mt_rand();
            $dt = date("Y-m-d");
            $deliver_date = date("Y-m-d", strtotime("$dt +1 day"));
            $order_data['deliver_date'] = $deliver_date;
            $order_data['total_amount'] = Cart::session($session)->getSubTotal();
            $order_insertion = DB::table('orders')->insert($order_data);
            $last_order_id = DB::getPdo()->lastInsertId();
            foreach ($requestData['cart_id'] as $value)
            {
                DB::table('cart')->where('cart_id', $value)->update(['fk_order_id' => $last_order_id]);
                Cart::session($session)->clear();
            }
            $order_list = DB::table('cart')->join('orders', 'cart.fk_order_id', '=', 'orders.pk_order_id')
                ->where('cart.fk_order_id', '!=', 0)
                ->where('cart.fk_user_id', '=', $session)->select('orders.*', 'cart.*')
                ->orderBy('orders.created_date', 'desc')
                ->get();
            $message = '<div class="row storelist">
        </div>
         <div class="alert alert-success">
           <strong>Success!</strong> Congrantulation! Your order placed with <code><a href="/order-details/' . $order_data["order_no"] . '" class="morebold">' . $order_data['order_no'] . '</a></code> and We have found payment mode <code>COD</code>
         </div>';
            $title = 'Hey! just you have placed a new order.';
            /*add notification*/
            HomeController::add_notification(Session::get('user_id') , $title, $message);
            return ['msg' => $message];
            return $this->beta_order_summary();
            /*add notification*/
            return redirect('/beta-order-summary');
        }
        else
        {
            $address_info_insertion = DB::table('order_address_info')->insert($insert_data);
            $address_id = DB::getPdo()->lastInsertId();
            $order_data['fk_customer_id'] = $session;
            $order_data['fk_address_id'] = $address_id;
            Session::put('cart_id_address', $address_id);
            $order_data['fk_payment_type'] = 'stripe';
            $order_data['order_no'] = 'OD' . time() . mt_rand();
            $dt = date("Y-m-d");
            $deliver_date = date("Y-m-d", strtotime("$dt +1 day"));
            $order_data['deliver_date'] = $deliver_date;
            $order_data['total_amount'] = Cart::session($session)->getSubTotal();
            /*stripe initializations*/
            $stripe = Stripe::make();
            if (Session::has('user_id'))
            {
                $session = $request->session()
                    ->get('user_id');
                $this->static_data['cart'] = Cart::session($session)->getContent();
                $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
                $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
                $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                    ->where('fk_customer_id', '=', $session)->get()
                    ->count();
                $customer = DB::table('customers')->where('id', $session)->first();
                /*customer verify*/
                if (isset($customer->stripe_token) && !empty($customer->stripe_token) && $customer->stripe_token != '' && $customer->stripe_token != null)
                {
                    $stripe_customer_id = $customer->stripe_token;
                    //getting existing customers from stripe using stripe id
                    try
                    {
                        $stripe_customer = $stripe->customers()
                            ->find($stripe_customer_id);
                    }
                    catch(\Cartalyst\Stripe\Exception\NotFoundException $e)
                    {
                        // Get the status code
                        $code = $e->getCode();
                        // Get the error message returned by Stripe
                        $message = $e->getMessage();
                        // Get the error type returned by Stripe
                        $type = $e->getErrorType();
                        return ['msg' => $message];
                        return Redirect::back()->withErrors(['msg' => $message]);
                    }
                    //fetch customers card details using customers stripe id
                    try
                    {
                        $stripe_customer_card = $stripe->cards()
                            ->all($stripe_customer['id']);
                    }
                    catch(\Cartalyst\Stripe\Exception\NotFoundException $e)
                    {
                        // Get the status code
                        $code = $e->getCode();
                        // Get the error message returned by Stripe
                        $message = $e->getMessage();
                        // Get the error type returned by Stripe
                        $type = $e->getErrorType();
                        return ['msg' => $message];
                        return Redirect::back()->withErrors(['msg' => $message]);
                    }
                    $data['stripe_cards'] = $stripe_customer_card['data'];
                    $data['stripe_customer'] = $stripe_customer;
                    $data['stripe_customer_id'] = $stripe_customer['id'];
                }
                else
                {
                    try
                    {
                        $customer = $stripe->customers()
                            ->create(['email' => $requestData['billing_email'], 'description' => json_encode($requestData['cart_id']) , ]);
                    }
                    catch(\Cartalyst\Stripe\Exception\NotFoundException $e)
                    {
                        // Get the status code
                        $code = $e->getCode();
                        // Get the error message returned by Stripe
                        $message = $e->getMessage();
                        // Get the error type returned by Stripe
                        $type = $e->getErrorType();
                        return ['msg' => $message];
                        return Redirect::back()->withErrors(['msg' => $message]);
                    }
                    //updating stripe_token in current customers details in database
                    DB::table('customers')->where('id', Session::get('user_id'))
                        ->update(['stripe_token' => $customer['id']]);
                    $data['stripe_customer_id'] = $customer['id'];
                    $data['stripe_customer'] = $stripe->customers()
                        ->find($customer['id']);
                    $data['stripe_cards'] = $stripe->cards()
                        ->all($customer['id']);
                }
                /*customer verify*/
            }
            else
            {
                $this->static_data['cart'] = Cart::getContent();
                $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
                $this->static_data['getSubTotal'] = Cart::getSubTotal();
                $this->static_data['wishlistCount'] = 0;
            }
            $stripe = Stripe::make();
            $customer = $stripe->customers()
                ->create(['email' => $requestData['billing_email'], 'description' => json_encode($requestData['cart_id']) , ]);

            return view('frontend/payment_card', ['static_data' => $this->static_data, 'order' => $order_data, 'form_data' => $insert_data, 'data' => $data]);
            //return redirect('/beta-payment');
            
        }
    }
    public function beta_payment(Request $request)
    {
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        if ($this->static_data['getTotlaQty'] <= 0)
        {
            $message = 'Kindly add product in your cart';
            return Redirect::back()->withErrors(['msg' => $message]);
        }
        return view('frontend/payment_card', ['static_data' => $this->static_data]);
    }
    public function beta_color(Request $request)
    {
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        $color_id = $request->color_id;
        $category_id = $request->color_id;
        $product = DB::select('CALL getProductByCategoryId(' . $category_id . ')');
        if (isset($product) && !empty($product))
        {
            $i = 0;
            foreach ($product as $row)
            {
                $product[$i]->product_color = DB::select('CALL getProductColorByProductId(' . $row->product_id . ')');
                $product[$i]->product_size = DB::select('CALL getProductSizeByProductId(' . $row->product_id . ')');
                $product[$i]->product_attr = DB::select('CALL getProductAttributeByProductId(' . $row->product_id . ')');
                $product[$i]->product_like = DB::select('CALL getPeopleByProductId(' . $row->product_id . ')');
                $product[$i]->store_details = DB::select('CALL getStoreDetailsByStoreId(' . $row->user_id . ')');
                $product[$i]->product_review = DB::select('CALL getProductReviewsByProductId(' . $row->product_id . ')');
                $product[$i]->acc_product = DB::select('CALL getProductAccessoriesByProductId(' . $row->product_id . ')');
                $product[$i]->store_product = DB::select('CALL getProductByStoreId(' . $row->user_id . ', "3")');
                $product[$i]->product_review_count = DB::select('CALL getReviewCountByProductId(' . $row->product_id . ')');
                if ($user_login = true)
                {
                    $product[$i]->is_liked = DB::table('product_like')
                        ->where('product_id', $row->product_id)
                        ->where('customer_id', Session::get('user_id'))
                        ->count();
                }
                $i++;
            }
        }
        $data['recent_added_products'] = $product;
        $data['product'] = $product;
        $data['color'] = DB::table('product_color')->where('id', $color_id)->first();
        return view('frontend/color', ['static_data' => $this->static_data, 'data' => $data]);
    }
    public function beta_brands(Request $request)
    {
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        $brand_id = $request->brand_id;
        $category_id = $request->brand_id;
        $product = DB::select('CALL getProductByCategoryId(' . $category_id . ')');
        if (isset($product) && !empty($product))
        {
            $i = 0;
            foreach ($product as $row)
            {
                $product[$i]->product_color = DB::select('CALL getProductColorByProductId(' . $row->product_id . ')');
                $product[$i]->product_size = DB::select('CALL getProductSizeByProductId(' . $row->product_id . ')');
                $product[$i]->product_attr = DB::select('CALL getProductAttributeByProductId(' . $row->product_id . ')');
                $product[$i]->product_like = DB::select('CALL getPeopleByProductId(' . $row->product_id . ')');
                $product[$i]->store_details = DB::select('CALL getStoreDetailsByStoreId(' . $row->user_id . ')');
                $product[$i]->product_review = DB::select('CALL getProductReviewsByProductId(' . $row->product_id . ')');
                $product[$i]->acc_product = DB::select('CALL getProductAccessoriesByProductId(' . $row->product_id . ')');
                $product[$i]->store_product = DB::select('CALL getProductByStoreId(' . $row->user_id . ', "3")');
                $product[$i]->product_review_count = DB::select('CALL getReviewCountByProductId(' . $row->product_id . ')');
                if ($user_login = true)
                {
                    $product[$i]->is_liked = DB::table('product_like')
                        ->where('product_id', $row->product_id)
                        ->where('customer_id', Session::get('user_id'))
                        ->count();
                }
                $i++;
            }
        }
        $data['recent_added_products'] = $product;
        $data['product'] = $product;
        $data['brand'] = DB::table('ms_brands')->where('id', $brand_id)->first();
        return view('frontend/brands', ['static_data' => $this->static_data, 'data' => $data]);
    }
    public function beta_forget_pass(Request $request)
    {
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        return view('frontend/forget_password', ['static_data' => $this->static_data]);
    }
    public function beta_user_register(Request $request)
    {
        if (Session::has('user_id'))
        {
            return redirect('/');
        }
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        return view('frontend/user_register', ['static_data' => $this->static_data]);
    }
    public function beta_user_create(Request $request)
    {

        $items = $request->validate(['f_name' => 'required', 'contact_no' => 'required:numeric|size:10', 'email' => "required|unique:customers,email", 'customer_name' => "required|unique:customers,customer_name"], ['customer_name.required' => 'Username is required', 'customer_name.unique' => 'The username has already been taken.', ]);
        $date = date('Y-m-d h:i:s');
        if ($request['profile_image'])
        {
            $profile_extension = $request['profile_image']->getClientOriginalExtension();
            if ($profile_extension == 'jpeg' || $profile_extension == 'png' || $profile_extension == 'jpg')
            {
                $profile_image = $request['f_name'] . '-' . $request['l_name'] . '-' . time() . '' . uniqid() . '.' . $profile_extension;
                $request['profile_image']->move(public_path('uploads') , $profile_image);
            }
            else
            {
                $profile_image = '';
            }
        }
        else
        {
            $profile_image = '';
        }
        if ($request['profile_banner'])
        {
            $profile_extension = $request['profile_banner']->getClientOriginalExtension();
            if ($profile_extension == 'jpeg' || $profile_extension == 'png' || $profile_extension == 'jpg')
            {
                $profile_banner = $request['f_name'] . '-' . $request['l_name'] . '-' . time() . '' . uniqid() . '.' . $profile_extension;
                $request['profile_banner']->move(public_path('uploads') , $profile_banner);
            }
            else
            {
                $profile_banner = '';
            }
        }
        else
        {
            $profile_banner = '';
        }
        $fields = ['f_name' => $request['f_name'], 'l_name' => $request['l_name'], 'customer_name' => $request['customer_name'], 'password' => md5($request['password']) , 'email' => $request['email'], 'contact_no' => $request['contact_no'], 'dob' => $request['dob'], 'gender' => $request['gender'], 'description' => $request['description'], 'profile_image' => $profile_image, 'profile_banner' => $profile_banner, 'customer_status' => 'Active', 'deleted_status' => 'Not deleted', 'created_date' => $date, ];
        DB::table('customers')->insert($fields);
        return redirect()->back()
            ->with('success', 'You are registered successfully..');
    }

    public function beta_change_password(Request $request)
    {

        $customer_id = Session::get('user_id');
        $checkPass = DB::table('customers')->where('id', '=', $customer_id)->where('password', '=', md5($request['old_password']))->exists();

        if (!$checkPass)
        {
            return redirect()->back()
                ->with('err_msg', 'Please Enter Old Password Correctly.');
        }
        elseif ($request['new_password'] != $request['re_new_password'])
        {
            return redirect()->back()
                ->with('err_msg', 'Please Enter Correct Re-enter password.');
        }
        else
        {
            $inputs['password'] = md5($request['new_password']);
            $pass_update = DB::table('customers')->where('id', '=', $customer_id)->update($inputs);
            return redirect()->back()
                ->with('success', 'Your password changed successfully.');
        }
    }

    public function beta_update_address(Request $request)
    {
        //return $request;
        $customer_id = Session::get('user_id');
        $inputs['billing_name'] = $request['billing_name'];
        $inputs['billing_contact'] = $request['billing_contact'];
        $inputs['billing_zipcode'] = $request['billing_zipcode'];
        $inputs['billing_locality'] = $request['billing_locality'];
        $inputs['billing_address1'] = $request['billing_address1'];
        $inputs['billing_country'] = $request['billing_country'];
        $inputs['billing_state'] = $request['billing_state'];
        $inputs['billing_city'] = $request['billing_city'];
        $inputs['shipping_name'] = $request['shipping_name'];
        $inputs['shipping_contact'] = $request['shipping_contact'];
        $inputs['shipping_zipcode'] = $request['shipping_zipcode'];
        $inputs['shipping_locality'] = $request['shipping_locality'];
        $inputs['shipping_address1'] = $request['shipping_address1'];
        $inputs['shipping_country'] = $request['shipping_country'];
        $inputs['shipping_state'] = $request['shipping_state'];
        $inputs['shipping_city'] = $request['shipping_city'];
        DB::table('customers')->where('id', '=', $customer_id)->update($inputs);
        return redirect()->back()
            ->with('success', 'Your Address updated successfully.');
    }
    public function beta_order_invoice(Request $request, $order_no)
    {
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        $data['order_no'] = $order_no;
        $data['order_details'] = DB::select(DB::raw("select c.product_name,c.product_attributes,c.quantity,c.product_price,c.updated_date as order_date,o.order_no, o.total_amount,p.slug, cntry.country_name, (c.product_price*c.quantity) as amt,oa.* , o.deliver_date, u.f_name, u.l_name from cart as c inner join orders as o on o.pk_order_id = c.fk_order_id inner join product as p on p.product_id = c.fk_product_id  inner join users as u on u.id = p.user_id  inner join order_address_info as oa on oa.pk_address_id = o.fk_address_id  inner join ms_countries as cntry on cntry.id = oa.fk_billing_country  where o.order_no = '" . $order_no . "' and c.fk_user_id = " . $session));
        return view('frontend/order_invoice', ['static_data' => $this->static_data, 'data' => $data]);
    }
    public function beta_order_details(Request $request, $order_no)
    {

        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        $data['order_no'] = $order_no;
        $data['order_details'] = DB::select(DB::raw("select c.product_name,c.product_attributes,c.quantity,c.product_price,c.updated_date as order_date,o.order_no, o.total_amount,p.slug, cntry.country_name, (c.product_price*c.quantity) as amt,oa.* , o.deliver_date, u.f_name, u.l_name from cart as c inner join orders as o on o.pk_order_id = c.fk_order_id inner join product as p on p.product_id = c.fk_product_id  inner join users as u on u.id = p.user_id  inner join order_address_info as oa on oa.pk_address_id = o.fk_address_id  inner join ms_countries as cntry on cntry.id = oa.fk_billing_country  where o.order_no = '" . $order_no . "' and c.fk_user_id = " . $session));
        return view('frontend/order_details', ['static_data' => $this->static_data, 'data' => $data]);
    }
    public function beta_order_summary(Request $request)
    {
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        $data['order_summary'] = DB::table('cart')->join('orders', 'cart.fk_order_id', '=', 'orders.pk_order_id')
            ->join('product', 'cart.fk_product_id', '=', 'product.product_id')
            ->join('users', 'product.user_id', '=', 'users.id')
            ->where('cart.fk_order_id', '!=', 0)
            ->where('cart.fk_user_id', '=', $session)->select('orders.*', 'cart.*', 'users.f_name', 'users.l_name', 'product.*')
            ->orderBy('orders.pk_order_id', 'DESC')
            ->get();
        return view('frontend/order_summary', ['static_data' => $this->static_data, 'data' => $data]);
    }
    public function beta_collection(Request $request)
    {
        if (Session::has('user_id'))
        {
            $user_id = Session::has('user_id');
        }
        else
        {
            return redirect()->back()
                ->with('success', 'You are not logged in now..');
        }
        //dd($this->static_data['categories_row_1']);
        $customer_id = Session::get('user_id');
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        $category_id = 1;
        //$product = DB::select('CALL getLikedProductByCustomerId('.Session::has('user_id').')');
        // $data['recent_added_products'] = $product;
        //$data['product'] = $product;
        $data['page'] = 'ajax';
        return view('frontend/collection', ['static_data' => $this->static_data, 'data' => $data]);
    }
    public function beta_like(Request $request, $page_id = 1)
    {
        if (Session::has('user_id'))
        {
            $user_id = Session::has('user_id');
        }
        else
        {
            return redirect()->back()
                ->with('success', 'You are not logged in now..');
        }
        $pagignation = 15;
        if (isset($page_id) && !empty($page_id))
        {
            $to = $page_id * $pagignation;
            $from = $page_id * $pagignation - $pagignation;
        }
        else
        {
            $to = 1 * $pagignation;
            $from = 1 * $pagignation - $pagignation;
        }
        //echo 'to : '.$to.' from : '.$from; exit;
        $customer_id = Session::get('user_id');
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        $data['categories'] = DB::table('ms_category')->where('status', 'Active')
            ->where('deleted_status', 'Not deleted')
            ->orderby('id', 'desc')
            ->limit(7)
            ->get();
        $category_id = 1;
        //$product = DB::select('CALL getLikedProductByCustomerId('.Session::has('user_id').')');
        $query = 'select product_like.product_id, product.* from product_like inner join product on product_like.product_id = product.product_id where product_like.customer_id = ' . $customer_id;
        $product = DB::select(DB::raw($query));
        $product = $this->arrayPaginator($product, $request);
        $pagination = $product;
        //dd($pagination);
        if (isset($product) && !empty($product))
        {
            $i = 0;
            foreach ($product as $row)
            {
                $product[$i]->product_color = DB::select('CALL getProductColorByProductId(' . $row->product_id . ')');
                $product[$i]->product_size = DB::select('CALL getProductSizeByProductId(' . $row->product_id . ')');
                $product[$i]->product_attr = DB::select('CALL getProductAttributeByProductId(' . $row->product_id . ')');
                $product[$i]->product_like = DB::select('CALL getPeopleByProductId(' . $row->product_id . ')');
                $product[$i]->store_details = DB::select('CALL getStoreDetailsByStoreId(' . $row->user_id . ')');
                $product[$i]->product_review = DB::select('CALL getProductReviewsByProductId(' . $row->product_id . ')');
                $product[$i]->acc_product = DB::select('CALL getProductAccessoriesByProductId(' . $row->product_id . ')');
                $product[$i]->store_product = DB::select('CALL getProductByStoreId(' . $row->user_id . ', "3")');
                $product[$i]->product_review_count = DB::select('CALL getReviewCountByProductId(' . $row->product_id . ')');
                if ($user_login = true)
                {
                    $product[$i]->is_liked = DB::table('product_like')
                        ->where('product_id', $row->product_id)
                        ->where('customer_id', Session::get('user_id'))
                        ->count();
                }
                $i++;
            }
        }
        $data['recent_added_products'] = $product;
        $data['product'] = $product;
        $data['page_id'] = $page_id;
        $data['pagignation'] = $pagignation;
        $data['page'] = 'ajax';
        return view('frontend/like', ['static_data' => $this->static_data, 'data' => $data, 'pagination' => $pagination]);
    }
    public function beta_make_payment(Request $request)
    {
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        if ($this->static_data['getTotlaQty'] <= 0)
        {
            $message = 'Kindly add product in your cart';
            return ['msg' => $message];
            return Redirect::back()->withErrors(['msg' => $message]);
        }
        $stripe = Stripe::make();
        $stripe_customer_id = $request->stripe_customer_id;
        //return json_encode($request->all());
        if ($request->pay_with_card == 'pay_with_saved_card')
        {
            $stripe_card_id = $request->card['0'];
            if (Session::has('user_id'))
            {
                $session = $request->session()
                    ->get('user_id');
                $total_amount = Cart::session($session)->getSubTotal();
            }
            else
            {
                $total_amount = Cart::getSubTotal();
            }
        }
        else
        {
            //if by form
            //create a card
            try
            {
                $token = $stripe->tokens()
                    ->create(['card' => ['number' => $request->card_number, 'exp_month' => $request->month, 'cvc' => $request->cvv, 'exp_year' => $request->year, ], ]);
            }
            catch(\Cartalyst\Stripe\Exception\CardErrorException $e)
            {
                // Get the status code
                $code = $e->getCode();
                // Get the error message returned by Stripe
                $message = $e->getMessage();
                // Get the error type returned by Stripe
                $type = $e->getErrorType();
                return ['msg' => $message];
                return Redirect::back()->withErrors(['msg' => $message]);
            }
            try
            {
                $card = $stripe->cards()
                    ->create($stripe_customer_id, $token['id']);
            }
            catch(\Cartalyst\Stripe\Exception\CardErrorException $e)
            {
                // Get the status code
                $code = $e->getCode();
                // Get the error message returned by Stripe
                $message = $e->getMessage();
                // Get the error type returned by Stripe
                $type = $e->getErrorType();
                return ['msg' => $message];
                return Redirect::back()->withErrors(['msg' => $message]);
            }
            if (Session::has('user_id'))
            {
                $session = $request->session()
                    ->get('user_id');
                $total_amount = Cart::session($session)->getSubTotal();
            }
            else
            {
                $total_amount = Cart::getSubTotal();
            }
            //return json_encode($request->all());
            /*$amt = $request->payment_amt*100;
            $data = exec('curl https://api.stripe.com/v1/charges    -u sk_test_g80ct44kFORPOnfArRXrTbU9:    -d amount='.$amt.'    -d currency=usd    -d description="Example charge"    -d source=tok_visa');
            return json_encode($request->all());*/
        }
        $charge = $stripe->charges()
            ->create(['customer' => $stripe_customer_id, 'currency' => 'USD', 'amount' => $total_amount, ]);
        if ($charge['status'] == 'succeeded')
        {
            $session = $request->session()
                ->get('user_id');
            $order_data['fk_customer_id'] = Session::get('user_id');
            $order_data['fk_address_id'] = Session::get('cart_id_address');
            //$order_data['fk_payment_type'] = $requestData['payment_method'];
            $order_data['fk_payment_type'] = 'STRIPE';
            $order_data['order_no'] = 'OD' . time() . mt_rand();
            $dt = date("Y-m-d");
            $deliver_date = date("Y-m-d", strtotime("$dt +1 day"));
            $order_data['deliver_date'] = $deliver_date;
            $order_data['total_amount'] = Cart::session($session)->getSubTotal();
            $order_insertion = DB::table('orders')->insert($order_data);
            $last_order_id = DB::getPdo()->lastInsertId();
            $cart_id_payment = Cart::session(Session::get('user_id'))->getContent();
            foreach ($cart_id_payment as $key => $value)
            {
                DB::table('cart')->where('cart_id', $key)->update(['fk_order_id' => $last_order_id]);
                Cart::session($session)->clear();
            }
            DB::table('orders')
                ->where('order_no', $order_data['order_no'])->update(['transaction_id' => $charge['id'], 'payment_status' => 's']);
            $this->static_data['message'] = 'Congrantulation! Your order placed with <code><a href="/beta-order-details/' . $order_data['order_no'] . '" class="morebold">' . $order_data['order_no'] . '</a></code> and We have successfully deducted payment from transaction id : # <code>' . $charge['id'] . '</code>';
            $this->static_data['order_id'] = $order_data['order_no'];
            $this->static_data['transaction_id'] = $charge['id'];
            $title = 'Hey! just you have placed a new order.';
            /*add notification*/
            HomeController::add_notification(Session::get('user_id') , $title, $this->static_data['message']);
            /*add notification*/
            return view('frontend/payment_card', ['static_data' => $this->static_data]);
        }
        else
        {
            $this->static_data['message'] = 'Sorry! We could not deducted payment from your account.';
            return view('frontend/payment_card', ['static_data' => $this->static_data]);
        }
        /*$this->static_data['message'] = 'Sorry! We could not deducted payment from your account.';
         return view('frontend/payment_card',['static_data' => $this->static_data]);*/
        /*curl https://api.stripe.com/v1/charges    -u sk_test_g80ct44kFORPOnfArRXrTbU9:    -d amount=999    -d currency=usd    -d description="Example charge"    -d source=tok_visa*/
        //return json_encode($request->all());
        
    }

    /*user profile function started */
    public function beta_profile(Request $request, $user_id = null)
    {
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            return redirect(getenv('BASEURL'))
                ->with('success', 'You are not logged in now..');
        }
        $following_id = $user_id;
        if (isset($user_id) && !empty($user_id))
        {
            $user_id = $user_id;
        }
        else
        {
            $user_id = Session::get('user_id');
        }
        $data['current_follower'] = DB::table('user_follower')->where('following_id', '=', $user_id)->where('follower_id', '=', Session::get('user_id'))
            ->first();
        if (isset($user_id) && !empty($user_id))
        {
            $customer = DB::table('customers')->where('id', $user_id)->first();
            $data['collection'] = DB::table('vendor_collections')->join('customers', 'vendor_collections.user_id', '=', 'customers.fk_vendor_id')
                ->select('vendor_collections.*', 'customers.id as customer_id', 'customers.f_name', 'customers.l_name')
                ->where('user_id', $customer->fk_vendor_id)
                ->get();
            //$vendor_id = $request->vendor_id;
            $vendor_id = $customer->fk_vendor_id;
            $instagram_media = '';
            /*for getting customer by Vendor_id*/
            if (is_object($customer))
            {
                $customer_id = $customer->id;
            }
            else
            {
                $customer_id = Session::get('user_id');
            }
            $user_vendor_id = $vendor_id;
            $instagram_access_token = $customer->insta_access_token;
            if (is_object($customer) && $instagram_access_token)
            {
                /*instagram user details*/
                $user_url = "https://api.instagram.com/v1/users/self/?access_token=" . $instagram_access_token;
                $insta_user_details = app('App\Http\Controllers\CustomerController')->getDataByUrl($user_url);
                $insta_user_details = json_decode($insta_user_details);
                if (isset($insta_user_details) && property_exists($insta_user_details, 'data'))
                {
                    $data['insta_user_details'] = $insta_user_details->data;
                }
                else
                {
                    $data['insta_user_details'] = '';
                }
                /*instagram user details*/
                $data['instagram_url'] = "https://api.instagram.com/v1/users/self/media/recent/?access_token=" . $instagram_access_token;
                $instagram_media = app('App\Http\Controllers\CustomerController')->getDataByUrl($data['instagram_url']);
                $instagram_media = json_decode($instagram_media);
                if (is_object($instagram_media) && property_exists($instagram_media, 'data'))
                {
                    $data['instagram_media'] = $instagram_media->data;
                }
                else
                {
                    $data['instagram_media'] = '';
                }
            }
            else
            {
                $data['instagram_url'] = Instagram::getLoginUrl();
                $data['insta_user_details'] = '';
                $data['instagram_media'] = '';
            }
            /*for getting customer by Vendor_id*/
            /*loved item*/
            $data['product_like'] = DB::table('product_like')->join('product', 'product_like.product_id', '=', 'product.product_id')
                ->join('products_sub_category', 'products_sub_category.fk_product_id', '=', 'product.product_id')
                ->join('ms_category', 'ms_category.id', '=', 'products_sub_category.fk_category_id')
                ->where('product_like.customer_id', $customer_id)->get();
            if (isset($data['product_like']) && !empty($data['product_like']))
            {
                $i = 0;
                foreach ($data['product_like'] as $row)
                {
                    $data['product_like'][$i]->is_liked = DB::table('product_like')
                        ->where('product_id', $row->product_id)
                        ->where('customer_id', Session::get('user_id'))
                        ->count();
                    $data['product_like'][$i]->product_like = DB::select('CALL getPeopleByProductId(' . $row->product_id . ')');
                    $i++;
                }
            }
            /*loved item*/
            /*/*following*/
            $data['following'] = DB::table('user_follower')->join('customers', 'customers.id', '=', 'user_follower.following_id')
                ->where('follower_id', $customer_id)->get();
            //echo json_encode($data['following']); exit;
            /*following*/
            /*follower*/
            $data['follower'] = DB::table('user_follower')->join('customers', 'customers.id', '=', 'user_follower.follower_id')
                ->where('following_id', $customer_id)->get();
            //dd($data['follower']);
            /*follower*/
            /*store_follower*/
            $data['store_follower'] = DB::table('store_follower')->join('users', 'users.id', '=', 'store_follower.fk_vendor_id')
                ->where('store_follower.fk_customer_id', $customer_id)->get();
            /*store_follower*/
            $data['user'] = DB::select("CALL `getCustomerById`('" . $user_id . "')") ['0'];
            /*user_store*/
            $data['stores'] = DB::table('users')->where('users.id', $data['user']->fk_vendor_id)
                ->get();
            /*user_store*/
            return view('frontend/profile', ['static_data' => $this->static_data, 'data' => $data]);
        }
        else
        {
            return redirect()->back()
                ->with('success', 'You are not logged in now..');
        }
    }
    /*user profile function completed */
      public function beta_account(Request $request)
    {
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            return redirect(getenv('BASEURL'))
                ->with('success', 'You are not logged in now..');
        }
        if (Session::has('user_id'))
        {
            $user_id = Session::get('user_id');
            /*for getting instagram post*/
            $customer = DB::table('customers')->where('id', $session)->get();
            $data['vendor'] = DB::table('users')->where('customer_id', $user_id)->first();
            //return $vendor;
            $c_insta_access_token = $customer[0]->insta_access_token;
            if ($c_insta_access_token == '' && $request->code == '')
            {
                $data['instagram_url'] = Instagram::getLoginUrl();
            }
            else
            {
                if ($request->code != '')
                {
                    $code = $request->code;
                    $data = Instagram::getOAuthToken($code);
                    if ($data->access_token != '')
                    {
                        $updateCart = DB::table('customers')->where('id', '=', $user_id)->update(['insta_access_token' => $data->access_token]);
                        $c_insta_access_token = $data->access_token;
                    }
                }
                /*fetch instagram data*/
                $url = "https://api.instagram.com/v1/users/self/media/recent/?access_token=" . $c_insta_access_token;
                $return_data = $this->getDataByUrl($url);
                $data['instagram_media'] = json_decode($return_data)->data;
            }
            /*for getting instagram post*/
            $data['support_list'] = DB::table('support')->where('customer_id', $user_id)->orderBy('id', 'desc')
                ->get();
            foreach ($data['support_list'] as $key => $value)
            {
                $result = DB::table('messages')->where('support_id', $value->id)
                    ->select('messages.*', 'users.f_name as from_u_f_name', 'users.l_name as from_u_l_name', 'users.profile_image as from_u_profile', 'customers.f_name', 'customers.l_name', 'customers.profile_image')
                    ->leftJoin('users', 'users.id', '=', 'messages.from_user_id')
                    ->leftJoin('customers', 'customers.id', '=', 'messages.from_user_id')
                    ->get();
                $seen_msg = DB::table('messages')->where('support_id', $value->id)
                    ->where('view', '0')
                    ->where('to_user_id', $user_id)->select('id')
                    ->get();

                if (!empty($result))
                {
                    foreach ($result as $key1 => $value1)
                    {

                        if ($value1->profile_image == '')
                        {
                            $result[$key1]->to_img = 'https://moretolike.com/uploads/no-image.png';
                        }
                        else
                        {
                            $result[$key1]->to_img = 'https://moretolike.com/uploads/' . $value1->profile_image;
                        }

                        if ($value1->from_u_profile == '')
                        {
                            $result[$key1]->from_u_profile = 'https://moretolike.com/uploads/default-user.png';
                        }
                        else
                        {
                            $result[$key1]->from_u_profile = 'https://moretolike.com/uploads/' . $value1->from_u_profile;
                        }
                        // unset($value->restaurant);
                        
                    }
                    $data['support_list'][$key]->chat_message = $result;
                }
                else
                {
                    $data['support_list'][$key]->chat_message = '';
                }
                $data['support_list'][$key]->seen_msg = count($seen_msg);
            }
            //  return $data['support_list'];
            /*support list*/
            $data['product_rating'] = DB::table('reviews')->join('product', 'reviews.ref_id', '=', 'product.product_id')
                ->where('fk_customer_id', '=', $user_id)->where('review_type', '=', 'p')
                ->select('reviews.*', 'product.product_name')
                ->get();
            $data['store_ratings'] = DB::table('reviews')->join('product', 'reviews.ref_id', '=', 'product.product_id')
                ->where('fk_customer_id', '=', $user_id)->where('review_type', '=', 's')
                ->select('reviews.*', 'product.product_name')
                ->get();
            //dd($data['store_rating']);
            $data['order_list'] = DB::table('cart')->join('orders', 'cart.fk_order_id', '=', 'orders.pk_order_id')
                ->join('product', 'cart.fk_product_id', '=', 'product.product_id')
                ->join('users', 'product.user_id', '=', 'users.id')
                ->where('cart.fk_order_id', '!=', 0)
                ->where('cart.fk_user_id', '=', $user_id)->select('orders.*', 'cart.*', 'users.f_name', 'users.l_name', 'product.*')
                ->orderBy('orders.created_date', 'desc')
                ->get();
            $data['user'] = DB::select("CALL `getCustomerById`('" . $user_id . "')") ['0'];
            $data['user_role'] = DB::table('user_group')->whereNotIn('id', [1, 2, 3, 4])
                ->get();
            $data['payment_history'] = DB::table('orders')->where('fk_customer_id', Session::get('user_id'))
                ->where('fk_payment_type', 'STRIPE')
                ->where('transaction_id', '!=', '')
                ->get();
            $data['member'] = DB::table('users')->where('created_by', Session::get('user_id'))
                ->get();
            $stripe = Stripe::make();
            $i = 0;
            foreach ($data['payment_history'] as $row)
            {
                try
                {
                    $data['payment_history'][$i]->charge = $stripe->charges()
                        ->find($row->transaction_id);
                }
                catch(\Cartalyst\Stripe\Exception\NotFoundException $e)
                {
                    // Get the status code
                    $code = $e->getCode();
                    // Get the error message returned by Stripe
                    $message = $e->getMessage();
                    // Get the error type returned by Stripe
                    $type = $e->getErrorType();
                    //return Redirect::back()->withErrors(['msg'=>$message]);
                    
                }
                $i++;
            }
            //return json_encode($data['payment_history']);
            $customer_stripe_id_data = DB::table('customers')->select('stripe_token')
                ->where('id', Session::get('user_id'))
                ->first();
            try
            {
                $data['active_card'] = $cards = $stripe->cards()
                    ->all($customer_stripe_id_data->stripe_token);
            }
            catch(\Cartalyst\Stripe\Exception\NotFoundException $e)
            {
                // Get the status code
                $code = $e->getCode();
                // Get the error message returned by Stripe
                $message = $e->getMessage();
                // Get the error type returned by Stripe
                $type = $e->getErrorType();
                //return Redirect::back()->withErrors(['msg'=>$message]);
                
            }
            $data['collection_category'] = DB::table('collection_category')->where('customer_id', $user_id)->get();
            $data['product_collection'] = DB::table('customer_collections')->join('product', 'customer_collections.product_id', '=', 'product.product_id')
                ->where('customer_collections.customer_id', $user_id)->where('customer_collections.type', 'p')
                ->get();
            $data['countries'] = DB::table('ms_countries')->get();

            $data['b_country'] = DB::table('ms_countries')->where('id', $data['user']->billing_country)
                ->first();
            $data['s_country'] = DB::table('ms_countries')->where('id', $data['user']->shipping_country)
                ->first();

            $data['bstates'] = DB::table('ms_states')->where('country_id', $data['user']->billing_country)
                ->get();
            $data['b_state'] = DB::table('ms_states')->where('id', $data['user']->billing_state)
                ->first();
            $data['v_states'] = DB::table('ms_states')->where('country_id', $data['vendor']->country)
                ->get();
            $data['bcities'] = DB::table('ms_cities')->where('state_id', $data['user']->billing_state)
                ->get();
            $data['b_city'] = DB::table('ms_cities')->where('id', $data['user']->billing_city)
                ->first();
            $data['v_cities'] = DB::table('ms_cities')->where('state_id', $data['vendor']->state)
                ->get();

            $data['sstates'] = DB::table('ms_states')->where('country_id', $data['user']->shipping_country)
                ->get();
            $data['s_state'] = DB::table('ms_states')->where('id', $data['user']->shipping_state)
                ->first();
            $data['scities'] = DB::table('ms_cities')->where('state_id', $data['user']->shipping_state)
                ->get();
            $data['s_city'] = DB::table('ms_cities')->where('id', $data['user']->shipping_city)
                ->first();
            $data['current_user_id'] = $session;
            //return $data['scities'];
            return view('frontend/account', ['static_data' => $this->static_data, 'data' => $data]);
        }
        else
        {
            return redirect()->back()
                ->with('success', 'You are not logged in now..');
        }
    }
    public function beta_seen(Request $request)
    {
        $user_id = $request->session()
            ->get('user_id');
        $seen_msg = DB::table('messages')->where('support_id', $request->support_id)
            ->where('to_user_id', $user_id)->update(['view' => '1']);
        return 'success';
    }
    public function beta_upgrade_vendor(Request $request)
    {
        $customer_id = $request->session()
            ->get('user_id');
        $date = date('Y-m-d h:i:s');
        $slug = str_slug($request['store_name']);
        $slug = $this->getSlug($table = 'users', $slug, 'store_url');

        if ($request['store_logo'])
        {
            $profile_extension = $request['store_logo']->getClientOriginalExtension();
            if ($profile_extension == 'jpeg' || $profile_extension == 'png' || $profile_extension == 'jpg')
            {
                $store_logo = str_replace(' ', '-', $request['store_name']) . '-logo-' . time() . '' . uniqid() . '.' . $profile_extension;
                $request['store_logo']->move(public_path('uploads') , $store_logo);
            }
            else
            {
                $store_logo = $request['old_store_logo'];
            }
        }
        else
        {
            $store_logo = $request['old_store_logo'];
        }
        if ($request['store_banner'])
        {
            $profile_extension = $request['store_banner']->getClientOriginalExtension();
            if ($profile_extension == 'jpeg' || $profile_extension == 'png' || $profile_extension == 'jpg')
            {
                $store_banner = str_replace(' ', '-', $request['store_name']) . '-banner-' . time() . '' . uniqid() . '.' . $profile_extension;
                $request['store_banner']->move(public_path('uploads') , $store_banner);
            }
            else
            {
                $store_banner = $request['old_store_banner'];
            }
        }
        else
        {
            $store_banner = $request['old_store_banner'];
        }
        $fields = ['customer_id' => $customer_id, 'role' => '3', 'store_name' => $request['store_name'], 'store_url' => $slug, 'contact_no' => $request['contact_no'], 'address1' => $request['address1'], 'address2' => $request['address2'], 'country' => $request['country'], 'state' => $request['state'], 'city' => $request['city'], 'zip_code' => $request['zip_code'], 'facebook' => $request['facebook'], 'youtube' => $request['youtube'], 'instagram' => $request['instagram'], 'store_banner' => $store_banner, 'store_logo' => $store_logo, ];
        //return $fields;
        $vendor_details = DB::table('users')->where('customer_id', $customer_id)->first();
        //dd($vendor_details);
        if ($vendor_details)
        {
            $fields['updated_date'] = $date;
            DB::table('users')->where('customer_id', $customer_id)->update($fields);
        }
        else
        {
            $fields['created_date'] = $date;
            DB::table('users')->insert($fields);
            $id = DB::getPdo()->lastInsertId();;
            $fields1['fk_vendor_id'] = $id;
            DB::table('customers')->where('id', $customer_id)->update($fields1);
        }
        return redirect()->back()
            ->with('success', 'Your vendor upgraded successfully...');
    }

    public function beta_cart(Request $request)
    {
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        if ($this->static_data['getTotlaQty'] <= 0)
        {
            $message = 'Kindly add product in your cart';
            return Redirect::back()->withErrors(['msg' => $message]);
        }
        return view('frontend/cart', ['static_data' => $this->static_data]);
    }
 public function beta_compare(Request $request)
    {
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        $product_ids = Session::get('compare_id');
        $compare_count = 0;
        if (is_array($product_ids))
        {
            $compare_count = count($product_ids);
        }
        if ($compare_count > 0)
        {
            $products_info = DB::select(DB::raw('select product_id,product_name,product_img,current_price,availability,description,mrp, product.slug from product where product_id in (' . implode(',', $product_ids) . ')'));
        }
        else
        {
            $products_info = [];
        }
        return view('frontend/compare', ['static_data' => $this->static_data, 'products_info' => $products_info]);
    }
    public function beta_store_list(Request $request)
    {
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        $store_list = DB::select("CALL `getStoreListAll`()");
        if (isset($store_list) && !empty($store_list))
        {
            $i = 0;
            foreach ($store_list as $row)
            {
                $store_list[$i]->product_image = DB::select("CALL `getProductByStoreId`('" . $row->id . "', '3')");
                $i++;
            }
        }
        $data['store_list'] = $store_list;
        return view('frontend/store_list', ['static_data' => $this->static_data, 'data' => $data]);
    }
    public function beta_store_details(Request $request)
    {
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        $store_id = (int)$request->vendor_id;
        $slug = $request->slug;

        if (is_int($store_id) && !empty($store_id))
        {
            $store_details = DB::select("CALL `getStoreDetailsByStoreId`('" . $store_id . "')") ['0'];
        }
        elseif ($slug)
        {
            $store_details = DB::select("CALL `getStoreDetailsBySlug`('" . $slug . "')") ['0'];
            $store_id = $store_details->id;
        }

        $reviews->product_review = DB::select('CALL getStoreReviewsByStoreId(' . $store_id . ')');
        $reviews->product_review_count = DB::select('CALL getReviewCountByStoreId(' . $store_id . ')');
        if (Session::get('user_id'))
        {
            $reviews->userReview = DB::table('reviews')
                ->join('customers', 'reviews.fk_customer_id', '=', 'customers.id')
                ->select('reviews.*', 'customers.f_name', 'customers.l_name')
                ->where('ref_id', '=', $store_id)->where('review_type', '=', 's')
                ->where('fk_customer_id', '=', Session::get('user_id'))
                ->first();
            $store_follower = DB::table('store_follower')->select('*')
                ->where('fk_customer_id', '=', Session::get('user_id'))
                ->where('fk_vendor_id', '=', $store_id)->first();
        }
        // $products = DB::select("CALL `getProductByStoreId`('".$store_id."', 10)");
        $products = $this->productsByStoreId($request, $store_id);
        if (isset($products) && !empty($products))
        {
            $i = 0;
            foreach ($products as $row)
            {
                $products[$i]->is_liked = DB::table('product_like')
                    ->where('product_id', $row->product_id)
                    ->where('customer_id', Session::get('user_id'))
                    ->count();
                $products[$i]->product_color = DB::select('CALL getProductColorByProductId(' . $row->product_id . ')');
                $products[$i]->product_size = DB::select('CALL getProductSizeByProductId(' . $row->product_id . ')');
                $products[$i]->product_attr = DB::select('CALL getProductAttributeByProductId(' . $row->product_id . ')');
                $products[$i]->product_like = DB::select('CALL getPeopleByProductId(' . $row->product_id . ')');
                $products[$i]->store_details = DB::select('CALL getStoreDetailsByStoreId(' . $row->user_id . ')');
                $products[$i]->product_review = DB::select('CALL getProductReviewsByProductId(' . $row->product_id . ')');
                $products[$i]->acc_product = DB::select('CALL getProductAccessoriesByProductId(' . $row->product_id . ')');
                $products[$i]->store_product = DB::select('CALL getProductByStoreId(' . $row->user_id . ', "3")');
                $products[$i]->product_review_count = DB::select('CALL getReviewCountByProductId(' . $row->product_id . ')');
                $i++;
            }
        }
        $vendor_id = $store_details->id;
        $instagram_media = '';
        /*for getting customer by Vendor_id*/
        $user_vendor_id = $vendor_id;
        $customer = DB::table('customers')->where('fk_vendor_id', $vendor_id)->first();
        $customer_id = $customer->id;
        $logged_user_id = $session;
        if (is_object($customer))
        {
            $instagram_access_token = $customer->insta_access_token;
            /*instagram user details*/
            $user_url = "https://api.instagram.com/v1/users/self/?access_token=" . $instagram_access_token;
            $insta_user_details = app('App\Http\Controllers\CustomerController')->getDataByUrl($user_url);
            $insta_user_details = json_decode($insta_user_details);
            if (isset($insta_user_details) && property_exists($insta_user_details, 'data'))
            {
                $data['insta_user_details'] = $insta_user_details->data;
            }
            else
            {
                $data['insta_user_details'] = '';
            }
            //dd($data['insta_user_details']);
            /*instagram user details*/
            $data['instagram_url'] = "https://api.instagram.com/v1/users/self/media/recent/?access_token=" . $instagram_access_token;
            $instagram_media = app('App\Http\Controllers\CustomerController')->getDataByUrl($data['instagram_url']);
            $instagram_media = json_decode($instagram_media);
            if (is_object($instagram_media) && property_exists($instagram_media, 'data'))
            {
                $data['instagram_media'] = $instagram_media->data;
            }
            else
            {
                $data['instagram_media'] = '';
            }
        }

        $store_details->customer_id = $logged_user_id;
        $data['store_details'] = $store_details;
        // print_r($store_details);
        $data['store_follwers'] = DB::select('CALL getFollowerByStoreId(' . $store_details->id . ')');
        $data['store_product'] = $products;
        //DB::enableQueryLog();
        $data['collection'] = DB::table('customer_collections')->join('customers', 'customer_collections.customer_id', '=', 'customers.id')
        // ->join('collection_followers','collection_followers.collection_id', '=','customer_collections.id' )
        
            ->select('customer_collections.*', 'customers.f_name', 'customers.l_name' /*DB::raw('COUNT(collection_followers.id) as followers')*/)
            ->where('customer_collections.customer_id', $user_vendor_id)->where('customer_collections.type', 's')
            ->get();
        //dd(DB::getQueryLog());
        if (isset($data['collection']) && !empty($data['collection']))
        {
            $i = 0;
            foreach ($data['collection'] as $collection_product)
            {
                $data['collection'][$i]->is_liked = DB::table('product_like')
                    ->where('product_id', $collection_product->product_id)
                    ->where('customer_id', Session::get('user_id'))
                    ->count();
                $data['collection'][$i]->product_like = DB::select('CALL getPeopleByProductId(' . $collection_product->product_id . ')');
                $data['collection'][$i]->product = DB::select('CALL getProductById(' . $collection_product->product_id . ')');
                $i++;
            }
        }

        $orders = DB::table('orders')->select('pk_order_id', 'order_no')
            ->where('fk_customer_id', $logged_user_id)->get();

        //    dd(array_sum($vc_product_count));
        // return $data['collection'];
        return view('frontend/store_details', ['static_data' => $this->static_data, 'data' => $data, 'review' => $reviews, 'store_follower' => $store_follower, 'orders' => $orders]);
    }

     public function beta_product_details(Request $request)
    {
        $product_id = $request->product_id;
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        $product = DB::table('product')->where('product_id', $product_id)->first();
        $data['product'] = $product;
        $data['products_sub_category'] = DB::table('products_sub_category')->where('fk_product_id', $product_id)->first();
        $data['sub_category'] = DB::table('ms_sub_category')->where('id', $data['products_sub_category']->fk_sub_category_id)
            ->first();
        $data['category'] = DB::table('ms_category')->where('id', $data['products_sub_category']->fk_category_id)
            ->first();
        $data['recent_added_products'] = DB::table('products_types')->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
            ->join('products_sub_category', 'products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
            ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
            ->join('ms_category', 'products_sub_category.fk_category_id', '=', 'ms_category.id')
            ->join('ms_brands', 'product.brand_id', '=', 'ms_brands.id')
            ->where('ms_brands.status', '=', 'Active')
            ->where('ms_brands.deleted_status', '=', 'Not deleted')
            ->select('product.shareable_product', 'product.product_id', 'product.product_name', 'product.slug', 'product.sku', 'product.mrp', 'product.current_price', 'product.user_id', 'product.stock_quantity', 'product.description', 'product.product_details', 'product.product_img', 'product.specification', 'product.vendor_commission_type', 'product.vendor_commission', 'ms_category.id', 'ms_category.category_name', DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'))
            ->limit(20)
            ->get();
        $recent_added_products = $product;
        $recent_added_products->product_color = DB::select('CALL getProductColorByProductId(' . $product->product_id . ')');
        $recent_added_products->product_size = DB::select('CALL getProductSizeByProductId(' . $product->product_id . ')');
        $recent_added_products->product_attr = DB::select('CALL getProductAttributeByProductId(' . $product->product_id . ')');
        $recent_added_products->product_like = DB::select('CALL getPeopleByProductId(' . $product->product_id . ')');
        $recent_added_products->store_details = DB::select('CALL getStoreDetailsByStoreId(' . $product->user_id . ')');
        $recent_added_products->product_review = DB::select('CALL getProductReviewsByProductId(' . $product->product_id . ')');
        $recent_added_products->acc_product = DB::select('CALL getProductAccessoriesByProductId(' . $product->product_id . ')');
        $recent_added_products->store_product = DB::select('CALL getProductByStoreId(' . $product->user_id . ', "3")');
        $recent_added_products->product_review_count = DB::select('CALL getReviewCountByProductId(' . $product->product_id . ')');
        if ($user_login = true)
        {
            $recent_added_products->is_liked = DB::table('product_like')
                ->where('product_id', $product->product_id)
                ->where('customer_id', Session::get('user_id'))
                ->count();
            $recent_added_products->userReview = DB::table('reviews')
                ->join('customers', 'reviews.fk_customer_id', '=', 'customers.id')
                ->select('reviews.*', 'customers.f_name', 'customers.l_name')
                ->where('ref_id', '=', $product->product_id)
                ->where('fk_customer_id', '=', Session::get('user_id'))
                ->first();
        }
        $recent_added_products->people_who_like = $this->people_who_like($product->product_id);
        return view('frontend/product_details', ['static_data' => $this->static_data, 'data' => $data, 'row' => $recent_added_products]);
    }
    public function beta_tab_product(Request $request)
    {
        $best_deals = DB::table('product')->leftjoin('ms_category', 'product.category', '=', 'ms_category.id')
            ->leftjoin('ms_brands', 'product.brand_id', '=', 'ms_brands.id')
            ->where('product.product_name', '!=', '')
            ->where('product.category', $request->cat_id)
        //->where('ms_brands.deleted_status','=','Not deleted')
        
            ->select('product.shareable_product', 'product.product_id', 'product.product_name', 'product.slug', 'product.sku', 'product.mrp', 'product.current_price', 'product.actual_price', 'product.user_id', 'product.stock_quantity', 'product.description', 'product.product_details', 'product.product_img', 'product.specification', 'product.vendor_commission_type', 'product.vendor_commission', 'product.category as category_id', 'ms_category.id as sub_category_id', 'ms_category.category_name', DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'))
            ->orderBy('product.current_price', 'asc')
            ->limit(5)
            ->get();

        if (isset($best_deals) && !empty($best_deals))
        {
            $i = 0;
            foreach ($best_deals as $row)
            {

                $best_deals[$i]->product_review = DB::select('CALL getProductReviewsByProductId(' . $row->product_id . ')');
                $best_deals[$i]->acc_product = DB::select('CALL getProductAccessoriesByProductId(' . $row->product_id . ')');
                $best_deals[$i]->store_product = DB::select('CALL getProductByStoreId(' . $row->user_id . ', "3")');
                $best_deals[$i]->product_review_count = DB::select('CALL getReviewCountByProductId(' . $row->product_id . ')');
                if ($user_login = true)
                {
                    $best_deals[$i]->is_liked = DB::table('product_like')
                        ->where('product_id', $row->product_id)
                        ->where('customer_id', Session::get('user_id'))
                        ->count();
                    $best_deals[$i]->userReview = DB::table('reviews')
                        ->join('customers', 'reviews.fk_customer_id', '=', 'customers.id')
                        ->select('reviews.*', 'customers.f_name', 'customers.l_name')
                        ->where('ref_id', '=', $row->product_id)
                        ->where('fk_customer_id', '=', Session::get('user_id'))
                        ->first();
                }
                $best_deals[$i]->people_who_like = $this->people_who_like($row->product_id);
                $i++;
            }
        }
        // $data['best_deals'] = $best_deals;
        return view('frontend/include/tab_product', ['best_deals' => $best_deals]);
    }
    public function beta_checkout(Request $request)
    {
        //return json_encode(Session::all());
        if (Session::has('user_id'))
        {
            $user_id = $request->session()
                ->get('user_id');
            $this->static_data['user'] = DB::table('customers')
                ->where('id', $user_id)->first();
            $this->static_data['cart'] = Cart::session($user_id)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($user_id)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($user_id)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $user_id)->get()
                ->count();
        }
        else
        {
            $this->static_data['user'] = null;
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        if ($this->static_data['getTotlaQty'] <= 0)
        {
            $message = 'Kindly add product in your cart';
            return Redirect::back()->withErrors(['msg' => $message]);
        }
        $data['country'] = DB::table('ms_countries')->get();
        if (Session::has('user_id'))
        {
            $customer_id = Session::get('user_id');
            $data['customer'] = DB::table('customers')->where('id', $customer_id)->first();
        }
        return view('frontend/checkout', ['static_data' => $this->static_data, 'data' => $data]);
    }

    public function beta_blog(Request $request)
    {
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        $instagram_media = '';
        /*for getting customer by Vendor_id*/
        $customer_id = Session::get('user_id');
        $user_vendor_id = $vendor_id;
        $customer = DB::table('customers')->where('id', $customer_id)->first();
        if (is_object($customer))
        {
            $instagram_access_token = $customer->insta_access_token;
            /*instagram user details*/
            $user_url = "https://api.instagram.com/v1/users/self/?access_token=" . $instagram_access_token;
            $insta_user_details = app('App\Http\Controllers\CustomerController')->getDataByUrl($user_url);
            $insta_user_details = json_decode($insta_user_details);
            if (isset($insta_user_details) && property_exists($insta_user_details, 'data'))
            {
                $data['insta_user_details'] = $insta_user_details->data;
            }
            else
            {
                $data['insta_user_details'] = '';
            }
            /*instagram user details*/
            $data['instagram_url'] = "https://api.instagram.com/v1/users/self/media/recent/?access_token=" . $instagram_access_token;
            $instagram_media = app('App\Http\Controllers\CustomerController')->getDataByUrl($data['instagram_url']);
            $instagram_media = json_decode($instagram_media);
            if (is_object($instagram_media) && property_exists($instagram_media, 'data'))
            {
                $data['instagram_media'] = $instagram_media->data;
            }
            else
            {
                $data['instagram_media'] = '';
            }
        }
        return view('frontend/blog', ['static_data' => $this->static_data, 'data' => $data]);
    }
    public function beta_category(Request $request)
    {
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        $category_id = $request->category_id;
        // $product = DB::select('CALL getProductByCategoryId('.$category_id.')');
        // $product  = $this->arrayPaginator($product,$request);
        // $pagination = $product;
        $cond = '1';
        $join = '';
        $cond .= " AND product.category = " . $category_id;
        // if($request->get('brand')&&count($request->get('brand'))>0)
        // {
        //   $brand_q = implode("','", $request->get('brand'));
        //   $cond .= " AND (p.brand_id IN('".$brand_q."'))";
        // }
        // if($request->get('color')&&count($request->get('color'))>0)
        // {
        //   $join = 'JOIN product_color pc ON p.product_id = pc.fk_product_id';
        //   $color_q = implode("','", $request->get('color'));
        //   $cond   .= " AND (pc.color_name IN('".$color_q."'))";
        // }
        // if($request->get('retailer')&&count($request->get('retailer'))>0)
        // {
        //   $retailer_q = implode("','", $request->get('retailer'));
        //   $cond   .= " AND (p.user_id IN('".$retailer_q."'))";
        // }
        if ($request->get('min_price') && $request->get('max_price'))
        {
            $cond .= " AND product.current_price BETWEEN '" . $request->get('min_price') . "' AND '" . $request->get('max_price') . "'";
        }
        $order_by = ' ORDER BY product.product_id DESC';
        if ($request->get('sort_by'))
        {
            if ($request->get('sort_by') == 'price-asc') $order_by = " ORDER BY product.current_price ASC";
            elseif ($request->get('sort_by') == 'price-desc') $order_by = " ORDER BY product.current_price DESC";
            elseif ($request->get('sort_by') == 'new') $order_by = " ORDER BY product.product_id DESC";
        }
        $per_page = 24;
        if ($request->get('page'))
        {
            $page = $request->get('page') * $per_page;
        }
        else
        {
            $page = 0;
        }
        $limit = "LIMIT " . $per_page . " OFFSET " . $page;
        $query = "SELECT 
        product.product_id,
        product.product_name,
        product.slug,
        product.sku,
        product.mrp,
        product.current_price,
        product.user_id,
        product.stock_quantity,
        product.description,
        product.product_details,
        product.product_img,
        product.specification,
        ms_category.id,
        ms_category.category_name

        FROM `product` 
        inner join ms_category on ms_category.id = product.category 
        WHERE " . $cond . " " . $order_by . " " . $limit . "";
        $product = DB::select(DB::raw($query));
        $product = $this->arrayPaginator($product, $request);
        $pagination = $product;
        if (isset($product) && !empty($product))
        {
            $i = 0;
            foreach ($product as $row)
            {
                $product[$i]->product_color = DB::select('CALL getProductColorByProductId(' . $row->product_id . ')');
                $product[$i]->product_size = DB::select('CALL getProductSizeByProductId(' . $row->product_id . ')');
                $product[$i]->product_attr = DB::select('CALL getProductAttributeByProductId(' . $row->product_id . ')');
                $product[$i]->product_like = DB::select('CALL getPeopleByProductId(' . $row->product_id . ')');
                $product[$i]->store_details = DB::select('CALL getStoreDetailsByStoreId(' . $row->user_id . ')');
                $product[$i]->product_review = DB::select('CALL getProductReviewsByProductId(' . $row->product_id . ')');
                $product[$i]->acc_product = DB::select('CALL getProductAccessoriesByProductId(' . $row->product_id . ')');
                $product[$i]->store_product = DB::select('CALL getProductByStoreId(' . $row->user_id . ', "3")');
                $product[$i]->product_review_count = DB::select('CALL getReviewCountByProductId(' . $row->product_id . ')');
                if ($user_login = true)
                {
                    $product[$i]->is_liked = DB::table('product_like')
                        ->where('product_id', $row->product_id)
                        ->where('customer_id', Session::get('user_id'))
                        ->count();
                }
                $i++;
            }
        }
        $data['recent_added_products'] = $product;
        $data['product'] = $product;
        return view('frontend/category', ['static_data' => $this->static_data, 'data' => $data, 'pagination' => $pagination]);
    }
    public function beta_notification(Request $request)
    {
        if (Session::has('user_id'))
        {
            $user_id = Session::has('user_id');
        }
        else
        {
            return redirect()->back()
                ->with('success', 'You are not logged in now..');
        }
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
                ->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        $user_id = Session::get('user_id');
        $data = DB::table('notification')->where('user_id', $user_id)->orderby('id', 'desc')
            ->get();
        return view('frontend/notification', ['static_data' => $this->static_data, 'data' => $data]);
    }

    public function beta_contact(Request $request)
    {
        return view('frontend/contact', ['static_data' => $this->static_data, 'data' => $data]);

    }

    public function beta_faq(Request $request)
    {
        return view('frontend/faq', ['static_data' => $this->static_data, 'data' => $data]);

    }
    /***********************Beta functionality End**********************/
    /************************Beta code End*********************************/
    public function myBlog(Request $request)
    {
        $session = '';
        $id = 4;
        $compare_count = 0;
        $compare_ids = Cookie::get('compare_id');
        if (is_array($compare_ids))
        {
            $compare_count = count($compare_ids);
        }
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $cart = Cart::session($session)->getContent();
            $getTotlaQty = Cart::session($session)->getTotalQuantity();
            $getSubTotal = Cart::session($session)->getSubTotal();
            $getTotal = Cart::session($session)->getTotal();
            $wishlistCount = DB::table('customer_wishlist')->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $cart = Cart::getContent();
            $getTotlaQty = Cart::getTotalQuantity();
            $getSubTotal = Cart::getSubTotal();
            $getTotal = Cart::getTotal();
            $wishlistCount = 0;
        }
        $vertical_product_types = DB::table('ms_product_types')->where('position', '=', 'v')
            ->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->orderBy('position_order', 'asc')
            ->get();
        $menus = DB::table('ms_menu')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category = DB::table('ms_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category_home = DB::table('ms_category')->where('category_order', '=', 's')
            ->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->limit(9)
            ->get();
        $sub_category = DB::table('ms_sub_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $brands = DB::select(DB::raw('select p.brand_id,count(p.brand_id) as brand_count,brand.name as brand_name from product as p inner join ms_brands as brand on p.brand_id = brand.id  group by p.brand_id'));
        $colors = DB::select(DB::raw('select id, color_name,color_code,count(color_code) as code_count from product_color group by color_code'));
        /*  $pro_info = DB::table('product')
                              ->join('users','product.user_id','=','users.id')
                               ->join('ms_brands','product.brand_id','=','ms_brands.id')
                              ->where('slug','=',$slug)
                              ->first();
        */
        $subcategory_details = DB::table('ms_sub_category')->where('id', $id)->first();
        $products = DB::select(DB::raw('select p.product_name,p.current_price,p.brand_id,p.mrp, p.product_img,p.slug, p.product_id, psc.fk_sub_category_id, ms.name as sub_cat_name from products_sub_category as psc inner join product as p on p.product_id = psc.fk_product_id inner join ms_sub_category as ms on ms.id = psc.fk_sub_category_id where psc.fk_sub_category_id =' . $id));
        /*
              echo "<pre>";
              print_r($products);
              die;*/
        // return $products;
        return view('my-blog', ['vertical_product_types' => $vertical_product_types, 'menu' => $menus, 'category' => $category, 'sub_category' => $sub_category, 'products' => $products, 'cart' => $cart, 'getTotlaQty' => $getTotlaQty, 'getSubTotal' => $getSubTotal, 'getTotal' => $getTotal, 'session' => $session, 'wishlistCount' => $wishlistCount, 'compare_count' => $compare_count, 'brand' => $brands, 'color' => $colors, 'subcategory_details' => $subcategory_details, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
    }
    /**
     * Display a listing of the myCollections
     *
     *  @return \Illuminate\Http\Response
     */
    public function myCollections(Request $request)
    {
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $this->static_data['cart'] = Cart::session($session)->getContent();
            $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
            $this->static_data['wishlistCount'] = CustomerWishlist::where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $this->static_data['cart'] = Cart::getContent();
            $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
            $this->static_data['getSubTotal'] = Cart::getSubTotal();
            $this->static_data['wishlistCount'] = 0;
        }
        $compare_count = 0;
        $customer_id = 0;
        $compare_ids = Cookie::get('compare_id');
        if (is_array($compare_ids))
        {
            $compare_count = count($compare_ids);
        }
        if (Session::has('user_id'))
        {
            $vertical_product_types = DB::table('ms_product_types')->where('position', '=', 'v')
                ->where('status', '=', 'Active')
                ->where('deleted_status', '=', 'Not deleted')
                ->orderBy('position_order', 'asc')
                ->get();
            $menus = DB::table('ms_menu')->where('status', '=', 'Active')
                ->where('deleted_status', '=', 'Not deleted')
                ->get();
            $category = DB::table('ms_category')->where('status', '=', 'Active')
                ->where('deleted_status', '=', 'Not deleted')
                ->get();
            $category_home = DB::table('ms_category')->where('category_order', '=', 's')
                ->where('status', '=', 'Active')
                ->where('deleted_status', '=', 'Not deleted')
                ->limit(9)
                ->get();
            $sub_category = DB::table('ms_sub_category')->where('status', '=', 'Active')
                ->where('deleted_status', '=', 'Not deleted')
                ->get();
            $brands = DB::select(DB::raw('select p.brand_id,count(p.brand_id) as brand_count,brand.name as brand_name from product as p inner join ms_brands as brand on p.brand_id = brand.id  group by p.brand_id'));
            $colors = DB::select(DB::raw('select id, color_name,color_code,count(color_code) as code_count from product_color group by color_code'));
            /*  $pro_info = DB::table('product')
                              ->join('users','product.user_id','=','users.id')
                               ->join('ms_brands','product.brand_id','=','ms_brands.id')
                              ->where('slug','=',$slug)
                              ->first();
            */
            $subcategory_details = DB::table('ms_sub_category')->where('id', $id)->first();
            /*$products = DB::table('customer_collections')
              ->join('product', 'product.product_id', '=', 'customer_collections.product_id')
              ->where('customer_collections.customer_id', $customer_id)
              ->get();*/
            $products = DB::table('customer_collections')->join('product', 'product.product_id', '=', 'customer_collections.product_id')
                ->join('products_sub_category', 'product.product_id', '=', 'products_sub_category.fk_product_id')
                ->join('ms_sub_category', 'ms_sub_category.id', '=', 'products_sub_category.fk_sub_category_id')
                ->where('customer_collections.customer_id', $customer_id)->get();
            return view('my-collections', ['vertical_product_types' => $vertical_product_types, 'menu' => $menus, 'category' => $category, 'sub_category' => $sub_category, 'products' => $products, 'cart' => $cart, 'getTotlaQty' => $getTotlaQty, 'getSubTotal' => $getSubTotal, 'getTotal' => $getTotal, 'session' => $session, 'wishlistCount' => $wishlistCount, 'compare_count' => $compare_count, 'brand' => $brands, 'color' => $colors, 'subcategory_details' => $subcategory_details, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
        }
    }
    /**
     * Display a listing of the myCollections
     *
     *  @return \Illuminate\Http\Response
     */
    public function myLikes(Request $request)
    {
        $session = '';
        $id = 4;
        $compare_count = 0;
        $customer_id = Session::get('user_id');
        $compare_ids = Cookie::get('compare_id');
        if (is_array($compare_ids))
        {
            $compare_count = count($compare_ids);
        }
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $cart = Cart::session($session)->getContent();
            $getTotlaQty = Cart::session($session)->getTotalQuantity();
            $getSubTotal = Cart::session($session)->getSubTotal();
            $getTotal = Cart::session($session)->getTotal();
            $wishlistCount = DB::table('customer_wishlist')->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $cart = Cart::getContent();
            $getTotlaQty = Cart::getTotalQuantity();
            $getSubTotal = Cart::getSubTotal();
            $getTotal = Cart::getTotal();
            $wishlistCount = 0;
        }
        $vertical_product_types = DB::table('ms_product_types')->where('position', '=', 'v')
            ->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->orderBy('position_order', 'asc')
            ->get();
        $menus = DB::table('ms_menu')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category = DB::table('ms_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category_home = DB::table('ms_category')->where('category_order', '=', 's')
            ->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->limit(9)
            ->get();
        $sub_category = DB::table('ms_sub_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $brands = DB::select(DB::raw('select p.brand_id,count(p.brand_id) as brand_count,brand.name as brand_name from product as p inner join ms_brands as brand on p.brand_id = brand.id  group by p.brand_id'));
        $colors = DB::select(DB::raw('select id, color_name,color_code,count(color_code) as code_count from product_color group by color_code'));
        $subcategory_details = DB::table('ms_sub_category')->where('id', $id)->first();
        $products = DB::select(DB::raw('select distinct product_like.product_id, product.* from product_like inner join product on product_like.product_id = product.product_id where product_like.customer_id = ' . $customer_id));
        return view('my-likes', ['vertical_product_types' => $vertical_product_types, 'menu' => $menus, 'category' => $category, 'sub_category' => $sub_category, 'products' => $products, 'cart' => $cart, 'getTotlaQty' => $getTotlaQty, 'getSubTotal' => $getSubTotal, 'getTotal' => $getTotal, 'session' => $session, 'wishlistCount' => $wishlistCount, 'compare_count' => $compare_count, 'brand' => $brands, 'color' => $colors, 'subcategory_details' => $subcategory_details, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
    }
    /**
     * Display profile information
     * @return \Illuminate\Http\Response
     *
     *
     */
    function myProfile(Request $request)
    {
        $request->vendor_id = 37;
        $session = '';
        $compare_count = 0;
        $customer_orders = 0;
        $insta_user_details = '';
        $collection = '';
        $compare_ids = Cookie::get('compare_id');
        if (is_array($compare_ids))
        {
            $compare_count = count($compare_ids);
        }
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $cart = Cart::session($session)->getContent();
            $getTotlaQty = Cart::session($session)->getTotalQuantity();
            $getSubTotal = Cart::session($session)->getSubTotal();
            $getTotal = Cart::session($session)->getTotal();
            $wishlistCount = DB::table('customer_wishlist')->where('fk_customer_id', '=', $session)->get()
                ->count();
            $customer_orders = DB::table('orders')->where('fk_customer_id', $session)->get();
        }
        else
        {
            $cart = Cart::getContent();
            $getTotlaQty = Cart::getTotalQuantity();
            $getSubTotal = Cart::getSubTotal();
            $getTotal = Cart::getTotal();
            $wishlistCount = 0;
        }
        //$vendor_id = $request->vendor_id;
        $vendor_id = 37;
        $instagram_media = '';
        /*for getting customer by Vendor_id*/
        $customer = DB::table('customers')->where('fk_vendor_id', $vendor_id)->first();
        if (is_object($customer))
        {
            $customer_id = $customer->id;
        }
        else
        {
            $customer_id = Session::get('user_id');
        }
        $user_vendor_id = $vendor_id;
        if (is_object($customer))
        {
            $instagram_access_token = $customer->insta_access_token;
            /*instagram user details*/
            $user_url = "https://api.instagram.com/v1/users/self/?access_token=" . $instagram_access_token;
            $insta_user_details = app('App\Http\Controllers\CustomerController')->getDataByUrl($user_url);
            $insta_user_details = json_decode($insta_user_details);
            if (isset($insta_user_details) && property_exists($insta_user_details, 'data'))
            {
                $insta_user_details = $insta_user_details->data;
            }
            else
            {
                $insta_user_details = '';
            }
            /*instagram user details*/
            $instagram_url = "https://api.instagram.com/v1/users/self/media/recent/?access_token=" . $instagram_access_token;
            $instagram_media = app('App\Http\Controllers\CustomerController')->getDataByUrl($instagram_url);
            $instagram_media = json_decode($instagram_media);
            if (is_object($instagram_media) && property_exists($instagram_media, 'data'))
            {
                $instagram_media = $instagram_media->data;
            }
            else
            {
                $instagram_media = '';
            }
        }
        /*for getting customer by Vendor_id*/
        $vertical_product_types = DB::table('ms_product_types')->where('position', '=', 'v')
            ->where('status', '=', 'Active')
            ->orderBy('position_order', 'asc')
            ->get();
        $menus = DB::table('ms_menu')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category = DB::table('ms_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category_home = DB::table('ms_category')->where('category_order', '=', 's')
            ->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->limit(9)
            ->get();
        $sub_category = DB::table('ms_sub_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $store_list_details = DB::table('users')->join('ms_countries', 'users.country', '=', 'ms_countries.id')
            ->join('ms_states', 'users.state', '=', 'ms_states.id')
            ->join('ms_cities', 'users.city', '=', 'ms_cities.id')
            ->where('users.id', '=', $request->vendor_id)
            ->select('users.*', 'ms_countries.country_name', 'ms_states.state_name', 'ms_cities.name')
            ->first();
        $store_product_list = DB::table('product')->join('products_sub_category', 'product.product_id', '=', 'products_sub_category.fk_product_id')
            ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
            ->where('product.user_id', '=', $request->vendor_id)
            ->where('product.shareable_product', '=', 'non shareable')
            ->where('ms_sub_category.status', '=', 'Active')
            ->where('ms_sub_category.deleted_status', '=', 'Not deleted')
            ->select('product.*', 'ms_sub_category.name')
            ->limit(20)
            ->get();
        /*to get collection list*/
        $store_collection_list = DB::table('product_shared_vendors')->join('product', 'product.product_id', '=', 'product_shared_vendors.fk_product_id')
            ->where('product_shared_vendors.fk_vendor_id', $request->vendor_id)
            ->where('product.shareable_product', '=', 'shareable')
            ->where('product.deleted_status', '=', 'Not deleted')
            ->limit(20)
            ->get();
        $collection = DB::table('vendor_collections')->join('customers', 'vendor_collections.user_id', '=', 'customers.fk_vendor_id')
            ->select('vendor_collections.*', 'customers.f_name', 'customers.l_name')
            ->where('user_id', $request->vendor_id)
            ->get();
        //return $collection->id;
        /*to get collection list*/
        //return var_dump($store_collection_list);
        $customer_id = Session::get('user_id');
        $follower_list = DB::table('store_follower')->join('customers', 'store_follower.fk_customer_id', '=', 'customers.id')
            ->join('ms_countries', 'customers.country', '=', 'ms_countries.id')
            ->where('store_follower.fk_vendor_id', '=', $request->vendor_id)
            ->where('store_follower.fk_customer_id', '!=', $customer_id)->where('follower_type', '=', 'c')
            ->select('customers.*', 'ms_countries.country_name')
            ->get();
        $current_follower = DB::table('store_follower')->join('customers', 'store_follower.fk_customer_id', '=', 'customers.id')
            ->where('fk_customer_id', '=', $customer_id)->where('follower_type', '=', 'c')
            ->select('customers.*')
            ->first();
        $session = $request->session()
            ->get('user_id');
        $reviewData = DB::table('reviews')->join('customers', 'reviews.fk_customer_id', '=', 'customers.id')
            ->select('reviews.*', 'customers.f_name', 'customers.l_name')
            ->where('ref_id', '=', $request->vendor_id)
            ->where('review_type', '=', 's')
            ->where('admin_approval', '=', 'a')
            ->where('fk_customer_id', '!=', $session)->limit(5)
            ->get();
        //  return $reviewData;
        $reviewAvg = DB::table('reviews')->where('ref_id', '=', $request->vendor_id)
            ->where('review_type', '=', 's')
            ->avg('rating');
        $reviewCount['total'] = DB::table('reviews')->where('ref_id', '=', $request->vendor_id)
            ->where('review_type', '=', 's')
            ->get()
            ->count();
        $reviewCount['one'] = DB::table('reviews')->where('ref_id', '=', $request->vendor_id)
            ->where('rating', '=', 1)
            ->where('review_type', '=', 's')
            ->get()
            ->count();
        $reviewCount['two'] = DB::table('reviews')->where('ref_id', '=', $request->vendor_id)
            ->where('rating', '=', 2)
            ->where('review_type', '=', 's')
            ->get()
            ->count();
        $reviewCount['three'] = DB::table('reviews')->where('ref_id', '=', $request->vendor_id)
            ->where('rating', '=', 3)
            ->where('review_type', '=', 's')
            ->get()
            ->count();
        $reviewCount['four'] = DB::table('reviews')->where('ref_id', '=', $request->vendor_id)
            ->where('rating', '=', 4)
            ->where('review_type', '=', 's')
            ->get()
            ->count();
        $reviewCount['five'] = DB::table('reviews')->where('ref_id', '=', $request->vendor_id)
            ->where('rating', '=', 5)
            ->where('review_type', '=', 's')
            ->get()
            ->count();
        $userReview = DB::table('reviews')->join('customers', 'reviews.fk_customer_id', '=', 'customers.id')
            ->select('reviews.*', 'customers.f_name', 'customers.l_name')
        //  ->where('reviews.ref_id','=',$request->vendor_id)
        
            ->where('review_type', '=', 's')
            ->where('reviews.admin_approval', '=', 'a')
            ->where('fk_customer_id', '=', $session)->first();
        // return $userReview->rating;
        return view('user-profile', ['vertical_product_types' => $vertical_product_types, 'menu' => $menus, 'category' => $category, 'sub_category' => $sub_category, 'store_list_details' => $store_list_details, 'store_product_list' => $store_product_list, 'store_collection_list' => $store_collection_list, 'follower_list' => $follower_list, 'current_follower' => $current_follower, 'review' => $reviewData, 'avg' => $reviewAvg, 'count' => $reviewCount, 'userReview' => $userReview, 'cart' => $cart, 'getTotlaQty' => $getTotlaQty, 'getSubTotal' => $getSubTotal, 'getTotal' => $getTotal, 'session' => $session, 'wishlistCount' => $wishlistCount, 'compare_count' => $compare_count, 'instagram_media' => $instagram_media, 'customer_orders' => $customer_orders, 'vendor_id' => $customer_id, 'insta_user_details' => $insta_user_details, 'user_vendor_id' => $user_vendor_id, 'collection' => $collection, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
        //return view('store-list-details', ['store_list_details'=>$store_list_details]);
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //  $session = '';
    //  $compare_count = 0;
    //  $compare_ids = Cookie::get('compare_id');
    //  if(is_array($compare_ids)){
    //  $compare_count = count($compare_ids);
    //  }
    //   if(Session::has('user_id')){
    //        $session = $request->session()->get('user_id');
    //       $cart = Cart::session($session)->getContent();
    //      $getTotlaQty = Cart::session($session)->getTotalQuantity();
    //      $getSubTotal = Cart::session($session)->getSubTotal();
    //      $wishlistCount = DB::table('customer_wishlist')
    //               ->where('fk_customer_id','=',$session)
    //               ->get()
    //               ->count();
    //   } else {
    //      $cart = Cart::getContent();
    //      $getTotlaQty = Cart::getTotalQuantity();
    //      $getSubTotal = Cart::getSubTotal();
    //      $wishlistCount = 0;
    //   }
    //      $hori_product_types = DB::table('ms_product_types')
    //      ->where('position','=','h')
    //       ->where('status','=','Active')
    //      ->where('deleted_status','=','Not deleted')
    //       ->orderBy('position_order', 'asc')
    //      ->get();
    //      // return $hori_product_types;
    //      $vertical_product_types = DB::table('ms_product_types')
    //      ->where('position','=','v')
    //      ->where('status','=','Active')
    //      ->where('deleted_status','=','Not deleted')
    //      ->orderBy('position_order', 'asc')
    //      ->get();
    //      $menus = DB::table('ms_menu')
    //              ->where('status','=','Active')
    //              ->where('deleted_status','=','Not deleted')
    //              ->get();
    //      $category  = DB::table('ms_category')
    //                  ->where('status','=','Active')
    //                  ->where('deleted_status','=','Not deleted')
    //                  ->get();
    //       $category_home  = DB::table('ms_category')
    //                  ->where('category_order','=','s')
    //                  ->where('status','=','Active')
    //                  ->where('deleted_status','=','Not deleted')
    //                  ->limit(9)
    //                  ->get();
    //       /*$website_menu = DB::table('website_menu')
    //                  ->where('status','=','1')
    //                  ->get();
    //       $website_customer_service = DB::table('website_customer_service')
    //                  ->where('status','=','1')
    //                  ->get();
    //       $website_show_the_following = DB::table('website_show_the_following')
    //                  ->where('status','=','1')
    //                  ->get();*/
    //       foreach($category_home as $category_home1){
    //           $cat_id[] = $category_home1->id;
    //       }
    //       $cat_id1 = $cat_id[0];
    //       $cat_product = DB::table('products_sub_category')
    //                       ->join('product', 'products_sub_category.fk_product_id', '=', 'product.product_id')
    //                       ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
    //                      ->where('fk_category_id','=', $cat_id1)
    //                      ->limit(5)
    //                      ->get();
    //      $sub_category = DB::table('ms_sub_category')
    //                  ->where('status','=','Active')
    //                  ->where('deleted_status','=','Not deleted')
    //                  ->get();
    //                  // return $sub_category;
    //       $best_seller_products = DB::table('products_types')
    //       ->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
    //       ->join('products_sub_category','products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
    //       ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
    //       ->where('fk_product_type_id','=',4)
    //       ->select('product.product_name','product.mrp','product.shareable_product','product.current_price','product.product_img','ms_sub_category.name','product.slug','product.product_id','ms_sub_category.id', 'products_sub_category.pk_id', DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'))
    //       ->limit(20)
    //       ->get();
    //       $recently_added = DB::table('products_types')
    //       ->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
    //        ->join('products_sub_category','products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
    //       ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
    //       ->join('ms_brands','product.brand_id','=','ms_brands.id')
    //       ->where('ms_brands.status','=','Active')
    //       ->where('ms_brands.deleted_status','=','Not deleted')
    //       ->where('fk_product_type_id','=',5)
    //       ->select('product.product_name','product.mrp','product.shareable_product','product.current_price','product.product_img','ms_sub_category.name','product.slug','product.product_id','ms_sub_category.id','ms_brands.brand_img', 'products_sub_category.pk_id', DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'))
    //       ->limit(20)
    //       ->get();
    //     $brand_carousel = DB::table('ms_brands')
    //                       ->where('brand_img','!=',null)
    //                       ->select('name','brand_img')
    //                       ->get();
    //       // print_r($recently_added); die;
    //       $footer_cont = $this->footerWidgets();
    //       //return json_encode($footer_cont->original['top_rated_slider']);
    //       $home_slider = DB::table('slider')->join('product', 'product.product_id', '=', 'slider.product_id')->get();
    //       //return json_encode($home_slider);
    //      return view('home',['hori_product_types'=>$hori_product_types,  'vertical_product_types'=>$vertical_product_types, 'menu'=>$menus, 'category'=>$category,  'category_home'=>$category_home,
    //       'cat_product'=>$cat_product,  'sub_category'=>$sub_category,  'best_seller_products'=>$best_seller_products, 'recently_added'=>$recently_added, 'brand_carousel'=>$brand_carousel,  'cart'=>$cart, 'getTotlaQty'=>$getTotlaQty,  'getSubTotal'=>$getSubTotal,'session'=>$session,'wishlistCount'=>$wishlistCount,'compare_count'=>$compare_count,'featured_product'=>$footer_cont->original['featured_product'],'top_rated'=>$footer_cont->original['top_rated'],'top_rated_slider'=>$footer_cont->original['top_rated_slider'],'on_sale'=>$footer_cont->original['on_sale'],'on_sale_slider'=>$footer_cont->original['on_sale_slider'],'top_banner'=>$footer_cont->original['top_banner'],'top_sub_banner'=>$footer_cont->original['top_sub_banner'],'top_bottom_banner'=>$footer_cont->original['top_bottom_banner'],'down_banner'=>$footer_cont->original['down_banner'],'featured_product_slider'=>$footer_cont->original['featured_product_slider'],'product_like'=>$footer_cont->original['product_like'], 'home_slider' => $home_slider, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
    // }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
    }
    public function search(Request $request)
    {
        $session = '';
        $compare_count = 0;
        $compare_ids = Cookie::get('compare_id');
        if (is_array($compare_ids))
        {
            $compare_count = count($compare_ids);
        }
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $cart = Cart::session($session)->getContent();
            $getTotlaQty = Cart::session($session)->getTotalQuantity();
            $getSubTotal = Cart::session($session)->getSubTotal();
            $wishlistCount = DB::table('customer_wishlist')->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $cart = Cart::getContent();
            $getTotlaQty = Cart::getTotalQuantity();
            $getSubTotal = Cart::getSubTotal();
            $wishlistCount = 0;
        }
        $vertical_product_types = DB::table('ms_product_types')->where('position', '=', 'v')
            ->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->orderBy('position_order', 'asc')
            ->get();
        $menus = DB::table('ms_menu')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category = DB::table('ms_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category_home = DB::table('ms_category')->where('category_order', '=', 's')
            ->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->limit(9)
            ->get();
        $sub_category = DB::table('ms_sub_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $requestData = $request->all();
        // return $requestData;
        // $recently_added = DB::table('products_types')
        // ->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
        // ->join('ms_brands','product.brand_id','=','ms_brands.id')
        // ->where('fk_product_type_id','=',5)
        // ->limit(10)
        // ->get();
        $brands = DB::select(DB::raw('select p.brand_id,count(p.brand_id) as brand_count,brand.name as brand_name from product as p inner join ms_brands as brand on p.brand_id = brand.id  group by p.brand_id'));
        $colors = DB::select(DB::raw('select id, color_name,color_code,count(color_code) as code_count from product_color group by color_code'));
        // return $colors;
        // $searchResult = DB::table('product')
        //                 ->leftjoin('products_sub_category','product.product_id','=','products_sub_category.fk_product_id')
        //                 ->leftjoin('ms_sub_category','products_sub_category.fk_sub_category_id','=','ms_sub_category.id')
        /*  $searchResult = DB::table('product')
                          ->join('products_sub_category','product.product_id','=','products_sub_category.fk_product_id')
                          ->join('ms_sub_category','products_sub_category.fk_sub_category_id','=','ms_sub_category.id')
                          ->where('product_name','like',"%".$requestData['search_value']."%")
                          ->orWhere('ms_sub_category.id','=',$requestData['product_cat'])
                          ->select('product.product_name','product.mrp','product.slug','current_price','product.product_img','ms_sub_category.name')
                          ->get();*/
        $cond = '1';
        if (isset($requestData['search_value']) && !empty($requestData['search_value']))
        {
            $cond .= ' AND  p.product_name LIKE "%' . $requestData['search_value'] . '%"';
        }
        if (isset($requestData['product_cat']) && !empty($requestData['product_cat']))
        {
            $cond .= ' AND msc.id LIKE "%' . $requestData['product_cat'] . '%"';
        }
        if (isset($requestData['search_value']) && isset($requestData['product_cat']) && !empty($requestData['search_value']) && !empty($requestData['product_cat']))
        {
            $cond .= ' AND p.product_name LIKE "%' . $requestData['search_value'] . '%" AND  msc.id LIKE "%' . $requestData['product_cat'] . '%"';
        }
        $searchResult = DB::select(DB::raw('select  psc.fk_sub_category_id, p.product_id,p.product_name , p.mrp , p.slug , p.current_price , p.product_img , msc.name  from product as p left join products_sub_category as psc on p.product_id = psc.fk_product_id left join  ms_sub_category as msc on  psc.fk_sub_category_id = msc.id where ' . $cond));
        /* $searchResult =  DB::select(DB::raw('select p.product_name , p.mrp , p.slug , p.current_price , p.product_img , ms_sub_category.name  from product as p inner join products_sub_category as psc on p.product_id = psc.fk_product_id inner join  ms_sub_category as msc on  psc.fk_sub_category_id = msc.id where p.product_name LIKE %'.$requestData['search_value'].'% or  msc.id LIKE '.%$requestData['product_cat'].%' '));  */
        // return  $searchResult ;
        // return $searchResult;
        dd($searchResult);
        return view('search-products', ['vertical_product_types' => $vertical_product_types, 'menu' => $menus, 'category' => $category, 'sub_category' => $sub_category, 'searchData' => $searchResult, 'cart' => $cart, 'getTotlaQty' => $getTotlaQty, 'getSubTotal' => $getSubTotal, 'search_val' => $requestData['search_value'], 'brand' => $brands, 'color' => $colors, 'searching_product_sub_cat' => $requestData['product_cat'], 'search_value' => $requestData['search_value'], 'product_cat' => $requestData['product_cat'], 'session' => $session, 'wishlistCount' => $wishlistCount, 'compare_count' => $compare_count, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
    }
    /*************function daily deal section ***************/
    public function dailyDealsSection(Request $request)
    {
        $id = 4;
        $session = '';
        $compare_count = 0;
        $compare_ids = Cookie::get('compare_id');
        if (is_array($compare_ids))
        {
            $compare_count = count($compare_ids);
        }
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $cart = Cart::session($session)->getContent();
            $getTotlaQty = Cart::session($session)->getTotalQuantity();
            $getSubTotal = Cart::session($session)->getSubTotal();
            $getTotal = Cart::session($session)->getTotal();
            $wishlistCount = DB::table('customer_wishlist')->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $cart = Cart::getContent();
            $getTotlaQty = Cart::getTotalQuantity();
            $getSubTotal = Cart::getSubTotal();
            $getTotal = Cart::getTotal();
            $wishlistCount = 0;
        }
        $vertical_product_types = DB::table('ms_product_types')->where('position', '=', 'v')
            ->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->orderBy('position_order', 'asc')
            ->get();
        $menus = DB::table('ms_menu')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category = DB::table('ms_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category_home = DB::table('ms_category')->where('category_order', '=', 's')
            ->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->limit(9)
            ->get();
        $sub_category = DB::table('ms_sub_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $brands = DB::select(DB::raw('select p.brand_id,count(p.brand_id) as brand_count,brand.name as brand_name from product as p inner join ms_brands as brand on p.brand_id = brand.id  group by p.brand_id'));
        $colors = DB::select(DB::raw('select id, color_name,color_code,count(color_code) as code_count from product_color group by color_code'));
        /*  $pro_info = DB::table('product')
                                    ->join('users','product.user_id','=','users.id')
                                     ->join('ms_brands','product.brand_id','=','ms_brands.id')
                                    ->where('slug','=',$slug)
                                    ->first();
        */
        $subcategory_details = DB::table('ms_sub_category')->where('id', $id)->first();
        $products = DB::select(DB::raw('select p.product_name,p.current_price,p.mrp, p.product_img,p.slug, p.product_id, psc.fk_sub_category_id, ms.name as sub_cat_name from products_sub_category as psc inner join product as p on p.product_id = psc.fk_product_id inner join ms_sub_category as ms on ms.id = psc.fk_sub_category_id where psc.fk_sub_category_id =' . $id));
        /*
                    echo "<pre>";
                    print_r($products);
                    die;*/
        // return $products;
        return view('daily-deals-section', ['vertical_product_types' => $vertical_product_types, 'menu' => $menus, 'category' => $category, 'sub_category' => $sub_category, 'products' => $products, 'cart' => $cart, 'getTotlaQty' => $getTotlaQty, 'getSubTotal' => $getSubTotal, 'getTotal' => $getTotal, 'session' => $session, 'wishlistCount' => $wishlistCount, 'compare_count' => $compare_count, 'brand' => $brands, 'color' => $colors, 'subcategory_details' => $subcategory_details, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
    }
    /*************function daily deal section ***************/
    public function faq(Request $request)
    {
        $session = '';
        $compare_count = 0;
        $compare_ids = Cookie::get('compare_id');
        if (is_array($compare_ids))
        {
            $compare_count = count($compare_ids);
        }
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $cart = Cart::session($session)->getContent();
            $getTotlaQty = Cart::session($session)->getTotalQuantity();
            $getSubTotal = Cart::session($session)->getSubTotal();
            $getTotal = Cart::session($session)->getTotal();
            $wishlistCount = DB::table('customer_wishlist')->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $cart = Cart::getContent();
            $getTotlaQty = Cart::getTotalQuantity();
            $getSubTotal = Cart::getSubTotal();
            $getTotal = Cart::getTotal();
            $wishlistCount = 0;
        }
        $vertical_product_types = DB::table('ms_product_types')->where('position', '=', 'v')
            ->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->orderBy('position_order', 'asc')
            ->get();
        $menus = DB::table('ms_menu')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category = DB::table('ms_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category_home = DB::table('ms_category')->where('category_order', '=', 's')
            ->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->limit(9)
            ->get();
        $sub_category = DB::table('ms_sub_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        return view('faq', ['vertical_product_types' => $vertical_product_types, 'menu' => $menus, 'category' => $category, 'sub_category' => $sub_category, 'cart' => $cart, 'getTotlaQty' => $getTotlaQty, 'getSubTotal' => $getSubTotal, 'getTotal' => $getTotal, 'session' => $session, 'wishlistCount' => $wishlistCount, 'compare_count' => $compare_count, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
    }
    public function storeLocator(Request $request)
    {
        $session = '';
        $compare_count = 0;
        $compare_ids = Cookie::get('compare_id');
        if (is_array($compare_ids))
        {
            $compare_count = count($compare_ids);
        }
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $cart = Cart::session($session)->getContent();
            $getTotlaQty = Cart::session($session)->getTotalQuantity();
            $getSubTotal = Cart::session($session)->getSubTotal();
            $getTotal = Cart::session($session)->getTotal();
            $wishlistCount = DB::table('customer_wishlist')->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $cart = Cart::getContent();
            $getTotlaQty = Cart::getTotalQuantity();
            $getSubTotal = Cart::getSubTotal();
            $getTotal = Cart::getTotal();
            $wishlistCount = 0;
        }
        $vertical_product_types = DB::table('ms_product_types')->where('position', '=', 'v')
            ->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->orderBy('position_order', 'asc')
            ->get();
        $menus = DB::table('ms_menu')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category = DB::table('ms_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category_home = DB::table('ms_category')->where('category_order', '=', 's')
            ->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->limit(9)
            ->get();
        $sub_category = DB::table('ms_sub_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        return view('store-locator', ['vertical_product_types' => $vertical_product_types, 'menu' => $menus, 'category' => $category, 'sub_category' => $sub_category, 'cart' => $cart, 'getTotlaQty' => $getTotlaQty, 'getSubTotal' => $getSubTotal, 'getTotal' => $getTotal, 'session' => $session, 'wishlistCount' => $wishlistCount, 'compare_count' => $compare_count, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
    }
    
    public function raghu(Request $request)
    {
        $session = '';
        $id = 4;
        $compare_count = 0;
        $compare_ids = Cookie::get('compare_id');
        if (is_array($compare_ids))
        {
            $compare_count = count($compare_ids);
        }
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $cart = Cart::session($session)->getContent();
            $getTotlaQty = Cart::session($session)->getTotalQuantity();
            $getSubTotal = Cart::session($session)->getSubTotal();
            $getTotal = Cart::session($session)->getTotal();
            $wishlistCount = DB::table('customer_wishlist')->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $cart = Cart::getContent();
            $getTotlaQty = Cart::getTotalQuantity();
            $getSubTotal = Cart::getSubTotal();
            $getTotal = Cart::getTotal();
            $wishlistCount = 0;
        }
        $vertical_product_types = DB::table('ms_product_types')->where('position', '=', 'v')
            ->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->orderBy('position_order', 'asc')
            ->get();
        $menus = DB::table('ms_menu')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category = DB::table('ms_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category_home = DB::table('ms_category')->where('category_order', '=', 's')
            ->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->limit(9)
            ->get();
        $sub_category = DB::table('ms_sub_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $brands = DB::select(DB::raw('select p.brand_id,count(p.brand_id) as brand_count,brand.name as brand_name from product as p inner join ms_brands as brand on p.brand_id = brand.id  group by p.brand_id'));
        $colors = DB::select(DB::raw('select id, color_name,color_code,count(color_code) as code_count from product_color group by color_code'));
        /*  $pro_info = DB::table('product')
                              ->join('users','product.user_id','=','users.id')
                               ->join('ms_brands','product.brand_id','=','ms_brands.id')
                              ->where('slug','=',$slug)
                              ->first();
        */
        $subcategory_details = DB::table('ms_sub_category')->where('id', $id)->first();
        $products = DB::select(DB::raw('select p.product_name,p.current_price,p.brand_id,p.mrp, p.product_img,p.slug, p.product_id, psc.fk_sub_category_id, ms.name as sub_cat_name from products_sub_category as psc inner join product as p on p.product_id = psc.fk_product_id inner join ms_sub_category as ms on ms.id = psc.fk_sub_category_id where psc.fk_sub_category_id =' . $id));
        /*
              echo "<pre>";
              print_r($products);
              die;*/
        // return $products;
        return view('raghu', ['vertical_product_types' => $vertical_product_types, 'menu' => $menus, 'category' => $category, 'sub_category' => $sub_category, 'products' => $products, 'cart' => $cart, 'getTotlaQty' => $getTotlaQty, 'getSubTotal' => $getSubTotal, 'getTotal' => $getTotal, 'session' => $session, 'wishlistCount' => $wishlistCount, 'compare_count' => $compare_count, 'brand' => $brands, 'color' => $colors, 'subcategory_details' => $subcategory_details, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
    }
    public static function is_follow($customer_id, $collection_id)
    {
        $is_already_followed = DB::table('collection_followers')->where('customer_id', $customer_id)->where('collection_id', $collection_id)->count();
        if ($is_already_followed != 0)
        {
            return true;
        }
    }

    public function blog_details(Request $request)
    {
        return view('frontend/blog-details', ['static_data' => $this->static_data, 'data' => $data]);

    }

    public function collectionNew()
    {
        return view('frontend/new-collection', ['static_data' => $this->static_data]);

    }
    public function followerNew()
    {
        return view('frontend/new-follower', ['static_data' => $this->static_data]);

    }
    public function followingNew()
    {
        return view('frontend/new-following', ['static_data' => $this->static_data]);

    }

    public function gigs()
    {
        return view('frontend/gigs', ['static_data' => $this->static_data]);

    }

    public function myblogsecond()
    {
        return view('frontend/my-blog', ['static_data' => $this->static_data]);
    }

    public function gigs2()
    {

        return view('frontend/gigs2', ['static_data' => $this->static_data]);

    }

    public function featured()
    {
        return view('frontend/featured', ['static_data' => $this->static_data]);
    }

    public function customerservice()
    {
        return view('frontend/customer-service', ['static_data' => $this->static_data]);
    }

    public function brands()
    {
        return view('frontend/brands', ['static_data' => $this->static_data]);
    }

    public function people()
    {
        return view('frontend/people', ['static_data' => $this->static_data]);
    }

    public function trending()
    {
        return view('frontend/trending', ['static_data' => $this->static_data]);
    }

    public function cryptocollectibles()
    {
        return view('frontend/cryptocollectibles', ['static_data' => $this->static_data]);
    }

    public function like()
    {
        return view('frontend/like', ['static_data' => $this->static_data]);
    }

    public function newsfeed()
    {
        return view('frontend/news-feed', ['static_data' => $this->static_data]);
    }

    public function activity()
    {
        return view('frontend/activity', ['static_data' => $this->static_data]);
    }
}
