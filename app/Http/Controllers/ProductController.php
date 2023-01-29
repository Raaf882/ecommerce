<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
// use Illuminate\Contracts\Session\Session;
//use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Session;


class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::all();

        return view('Product', ['products' => $data]);
    }

    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }

    function search(Request $req)
    {
        $data = Product::where('name', 'like', '%' . $req->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }

    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) 
        {
            $cart=new Cart;
            $cart->user_id=session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/cart');


        } else {
            return redirect('/login');
        }
    }

    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    function cartList()
    {
        $userId = Session::get('user')['id'];
        $product=DB::table('cart')->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')->get();

        return view('cartList',['products'=>$product]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('/cart');
    }

    function ordernow()
    {
        $userId = Session::get('user')['id'];
        $total= $product=DB::table('cart')->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }

}
