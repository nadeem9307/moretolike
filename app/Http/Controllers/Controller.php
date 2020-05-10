<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Request;
use DB;
use Instagram;
use Session;
use Cart;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $instagram_login_url;

    public function __construct()
    {
        
        /*****************************************beta code******************************************/
        $this->static_data['title'] = 'Moretolike.com - Your online shopping experience-Download our App';
        $this->instagram_login_url = Instagram::getLoginUrl();

        $this->website_menu = DB::table('website_menu')
                   ->where('status','=','1')
                   ->get();

        $this->website_color = DB::table('product_color')
                   ->where('status','=','Active')
                   ->orderBy('color_name','ASC')
                   ->groupBy('color_name')
                   ->paginate(8);

        $this->website_customer_service = DB::table('website_customer_service')
                   ->where('status','=','1')
                   ->get();

        $this->website_show_the_following = DB::table('website_show_the_following')
                   ->where('status','=','1')
                   ->get();
        $this->static_data['brands'] = DB::table('ms_brands')->where('status', 'Active')->limit(8)->get();
        

        $this->static_data['website_color'] = $this->website_color;
        $this->static_data['website_menu'] = $this->website_menu;
        $this->static_data['website_customer_service'] = $this->website_customer_service;
        $this->static_data['website_show_the_following'] = $this->website_show_the_following;

        $this->static_data['featured_product'] = DB::table('products_types')
        ->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
        ->where('fk_product_type_id','=',1)
        ->select('product.product_name','product.mrp','product.shareable_product','product.current_price','product.product_img','product.slug','product.product_id')
        ->orderby('products_types.pk_id', 'desc')
        ->limit(3)
        ->get();

        $this->static_data['top_rated'] = DB::table('products_types')
        ->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
        ->where('fk_product_type_id','=',2)
        ->select('product.product_name','product.mrp','product.current_price','product.product_img','product.slug','product.product_id')
        ->orderby('products_types.pk_id', 'desc')
        ->limit(3)
        ->get();

        $this->static_data['on_sale'] = DB::table('products_types')
        ->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
        ->where('fk_product_type_id','=',3)
        ->select('product.product_name','product.mrp','product.current_price','product.product_img','product.slug','product.product_id')
        ->orderby('products_types.pk_id', 'desc')
        ->limit(3)
        ->get();

        $this->static_data['categories_row_1'] = DB::table('ms_category')->orderBy('category_name','ASC')->paginate(8);
        $this->static_data['categories_row_2'] = DB::table('ms_category')
                                                ->orderby('id', 'desc')
                                                ->limit(8)
                                                ->get();
        $this->static_data['categories_all'] = DB::table('ms_category')
                                                ->orderby('id', 'desc')
                                                ->get();
        $this->static_data['menu_brands'] = DB::select(DB::raw('select ms_brands.id, ms_brands.name, ms_brands.brand_img, ms_brands.status, ms_brands.deleted_status, (select COUNT(*) from product where product.brand_id = ms_brands.id) as product from ms_brands limit 8'));
        $this->static_data['f_brands'] =   DB::table('ms_brands')->orderBy('name','ASC')->paginate(8);
        $this->static_data['retailer'] = DB::select(DB::raw('select id, store_name from users where deleted_status = "Not deleted" and  user_status = "Active" and  store_name != "" limit 8'));
        $this->static_data['f_retailer'] = DB::table('users')
                                                ->where('deleted_status', 'Not deleted')
                                                ->where('user_status','Active')
                                                ->where('store_name','<>','')
                                                ->orderby('id','DESC')
                                                ->paginate(8);
        $this->static_data['latest_product'] = DB::table('product')
                                            ->where('status', 'Active')
                                            ->where('deleted_status', 'Not deleted')
                                            ->orderby('product_id', 'desc')
                                            ->limit(8)
                                            ->get();
                                                
        /*****************************************beta code******************************************/
        

    }

     public function footerWidgets() {
        
         $featured_product = DB::table('products_types')
        ->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
         ->join('products_sub_category','products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
        ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
        ->join('ms_brands','product.brand_id','=','ms_brands.id')
        ->where('ms_brands.status','=','Active')
        ->where('ms_brands.deleted_status','=','Not deleted')
        ->where('fk_product_type_id','=',1)
        ->select('product.product_name','product.mrp','product.shareable_product','product.current_price','product.product_img','ms_sub_category.name','product.slug','product.product_id','ms_sub_category.id','ms_brands.brand_img')
        ->orderby('products_types.pk_id', 'desc')
        ->limit(3)
        ->get();
        
         $featured_product_slider = DB::table('products_types')
        ->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
         ->join('products_sub_category','products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
        ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
        ->join('ms_brands','product.brand_id','=','ms_brands.id')
        ->where('ms_brands.status','=','Active')
        ->where('ms_brands.deleted_status','=','Not deleted')
        ->where('fk_product_type_id','=',1)
        ->select('product.product_name','product.mrp','product.shareable_product','product.current_price','product.product_img','ms_sub_category.name','product.slug','product.product_id','ms_sub_category.id','ms_brands.brand_img', 'products_sub_category.pk_id', DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'))
        ->orderby('products_types.pk_id', 'desc')
        ->limit(20)
        ->get();

        $top_rated = DB::table('products_types')
        ->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
         ->join('products_sub_category','products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
        ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
        ->join('ms_brands','product.brand_id','=','ms_brands.id')
        ->where('ms_brands.status','=','Active')
        ->where('ms_brands.deleted_status','=','Not deleted')
        ->where('fk_product_type_id','=',2)
        ->select('product.product_name','product.mrp','product.current_price','product.product_img','ms_sub_category.name','product.slug','product.product_id','ms_sub_category.id','ms_brands.brand_img')
        ->orderby('products_types.pk_id', 'desc')
        ->limit(3)
        ->get();

        $top_rated_slider = DB::table('products_types')
        ->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
         ->join('products_sub_category','products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
        ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
        ->join('ms_brands','product.brand_id','=','ms_brands.id')
        ->where('ms_brands.status','=','Active')
        ->where('ms_brands.deleted_status','=','Not deleted')
        ->where('fk_product_type_id','=',2)
        ->select('product.product_name','product.mrp','product.shareable_product','product.current_price','product.product_img','ms_sub_category.name','product.slug','product.product_id','ms_sub_category.id','ms_brands.brand_img', 'products_sub_category.pk_id', DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'))
        ->orderby('products_types.pk_id', 'desc')
        ->limit(20)
        ->get();


        $on_sale = DB::table('products_types')
        ->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
         ->join('products_sub_category','products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
        ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
        ->join('ms_brands','product.brand_id','=','ms_brands.id')
        ->where('ms_brands.status','=','Active')
        ->where('ms_brands.deleted_status','=','Not deleted')
        ->where('fk_product_type_id','=',3)
        ->select('product.product_name','product.mrp','product.current_price','product.product_img','ms_sub_category.name','product.slug','product.product_id','ms_sub_category.id','ms_brands.brand_img')
        ->orderby('products_types.pk_id', 'desc')
        ->limit(3)
        ->get();


        $on_sale_slider = DB::table('products_types')
        ->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
         ->join('products_sub_category','products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
        ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
        ->join('ms_brands','product.brand_id','=','ms_brands.id')
        ->where('ms_brands.status','=','Active')
        ->where('ms_brands.deleted_status','=','Not deleted')
        ->where('fk_product_type_id','=',3)
        ->select('product.product_name','product.mrp','product.shareable_product','product.current_price','product.product_img','ms_sub_category.name','product.slug','product.product_id','ms_sub_category.id','ms_brands.brand_img', 'products_sub_category.pk_id', DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'))
        ->orderby('products_types.pk_id', 'desc')
        ->limit(20)
        ->get();

        $top_banner = DB::table('ms_banner')
        			  ->where('banner_type','=','m')
        			  ->where('status','=','Active')
        			  ->where('deleted_status','=','Not deleted')
        			  ->get();

        $top_sub_banner = DB::table('ms_banner')
                      ->where('banner_type','=','s')
                      ->where('status','=','Active')
                      ->where('deleted_status','=','Not deleted')
                      ->get();

        $down_banner = DB::table('ms_banner')
                      ->where('banner_type','=','d')
                      ->where('status','=','Active')
                      ->where('deleted_status','=','Not deleted')
                      ->get();

        $top_bottom_banner = DB::table('ms_banner')
        			  ->where('banner_type','=','b')
        			  ->where('status','=','Active')
        			  ->where('deleted_status','=','Not deleted')
        			  ->first();
        
        $customer_id = Session::get('user_id');
        $product_like = DB::table('product_like')->select('product_id')->distinct('product_id')->where('customer_id', $customer_id)->get();
        $product_like_array = array();

        foreach($product_like as $product){
            array_push($product_like_array, $product->product_id);
        }

        return response()->json(['featured_product'=>$featured_product,'top_rated'=> $top_rated,'on_sale'=>$on_sale,'top_banner'=>$top_banner,'top_sub_banner'=>$top_sub_banner,'top_bottom_banner'=>$top_bottom_banner, 'down_banner' => $down_banner, 'on_sale_slider' => $on_sale_slider, 'top_rated_slider' => $top_rated_slider, 'featured_product_slider' => $featured_product_slider, 'product_like' => $product_like_array]);

    }
	public function arrayPaginator($array, $request)
	{
		$page 		= $request->get('page', 1);
		$perPage 	= $request->get('per_page', 6);
		$offset 	= ($page * $perPage) - $perPage;

		return new LengthAwarePaginator(array_slice($array, $offset, $perPage, true), count($array), $perPage, $page,
			['path' => $request->url(), 'query' => $request->query()]);
	}
	protected function getSlug($table, $slug,$slug_column='')
    {
		$query = 'SELECT count(*) as total FROM '.$table.' WHERE '.$slug_column.' REGEXP "^'.$slug.'(-[0-9]*)?$"';
        $slugCount = DB::select(DB::raw($query));
		//dd($slugCount[0]->total);
		if($slugCount[0]->total){
			return $slug.'-'.$slugCount[0]->total;
		}else{
			return $slug;
		}
    }
}