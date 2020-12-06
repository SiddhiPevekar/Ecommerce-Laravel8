<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
class ProductController extends Controller
{
    //
    function index()
    {
        $data= Product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id)
    {
        $data= Product::find($id);
        return view('detail',['product'=>$data]);
    }

    function search(Request $req)
    {
        $data= Product::
        where('name', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }

    function addToCart(Request $req)
    {
        //check whether the user is loggedin
        if($req->session()->has('user'))
        {
            $cart= new Cart;
            //=> is for setting values in arrays, is used in associative array key value assignment
            //->is used for calling class methods and properties
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
    
    //static as we are going to use function in header
    static function cartItem()
    {
        //Sessions are used to store information about the user across the requests. Session can be configured in the file stored at config/session.
        $userId=Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();//to get the count according to the user's products in cart in the header section
    }
}
