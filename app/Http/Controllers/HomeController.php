<?php

namespace App\Http\Controllers;

use Stripe;
use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Users\UpdateProfileRequest;


class HomeController extends Controller
{


    public function index()
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;

            if ($userType == 'user') {
                $adminUsers = User::where('usertype', 'admin')->paginate(1);
                return view('user.home', compact('adminUsers'));
            } elseif ($userType == 'admin') {
                $total_product=product::all()->count();

                $total_order=order::all()->count();
                
                $total_user=user::all()->count();

                $order=order::all();

                $total_revenue=0;

                foreach($order as $order)
                {
                    $total_revenue=$total_revenue + $order->price;
                }
               
                $total_processing=order::where('delivery_status','=','processing')->get()->count();

                return view('admin.dashboard',compact('total_product','total_user','total_revenue','total_processing'));
            }
        }

        return redirect('/home');
    }

    
    
    public function shopHome(Request $request, $id)
    {
        $searchQuery = $request->input('search_product');

        $query = Product::where('user_id', $id);

        if ($searchQuery) {
            $query->where('title', 'LIKE', '%' . $searchQuery . '%')->orwhere('category', 'LIKE', '%' . $searchQuery . '%');
        }

        $products = $query->get();
        $username = User::findOrFail($id)->name;

        if (Auth::check()) {
            $user = Auth::user();
            $count_cart = Cart::where('user_id', $user->id)->sum('quantity');
        } else {
            $count_cart = 0;
        }

        return view('shop.home', compact('products', 'username', 'id', 'count_cart'));
    }
    
public function product_details($product_id,$id)
{
    $product = Product::find($product_id);
    $username = $product->user->name;
    $user = $product->user; 
    if (Auth::check()) {
        $user = Auth::user();
        $count_cart = Cart::where('user_id', $user->id)->sum('quantity');
    } else {
        $count_cart = 0;
    }

    return view('shop.product_details', compact('product', 'username', 'user','id','count_cart'));
}

    public function add_cart(Request $request, $id ,$shop_name)
    {
        if(Auth::id())
        {
            $user=Auth::user();

            $product=product::find($id);

            $userid=$user->id;

            $product_exist_id=cart::where('product_id','=',$id)->where('user_id','=',$userid)->get('id')->first();

            if($product_exist_id)
            {

                $cart=cart::find($product_exist_id)->first();

                $quantity=$cart->quantity;

                $cart->quantity=$quantity + $request->quantity;

                $cart->price = $product->price * ($quantity + $request->quantity);

                $cart->save();

                Alert::success('Product Added to Cart Successfully');

                return redirect()->back();


            } else
            {
                $cart=new cart;

                $cart->name=$user->name;

                $cart->email=$user->email;

                $cart->user_id=$user->id;

                $cart->product_title=$product->title;

                $cart->description=$product->description; 

                $cart->price=$product->price * $request->quantity;

                $cart->image=$product->image;

                $cart->product_id=$product->id;

                $cart->quantity=$request->quantity;
                
                $cart->shop_name=$shop_name;

                $cart->save();

                Alert::success('Product Added to Cart Successfully');

                return redirect()->back();
            }

            
            
        }
        else
        {
            return redirect('login');
        }
    }

    public function show_cart($shop_id)
{
    if (Auth::id()) {
        $user = '';
        $user_id = Auth::user()->id;

        $cart = cart::where('user_id', '=', $user_id)->get();
        $count_cart = $cart->sum('quantity');
        $id = $shop_id;
        return view('shop.show_cart', compact('cart', 'user', 'user_id', 'count_cart','id'));
    } else {
        return redirect('/login');
    }
}

    public function remove_cart($id)
    {
        $cart=cart::find($id);

        $cart->delete();

        Alert::success('Product Removed from Cart Successfully');

        return redirect()->back();
    }

    public function remove_order($id)
    {
        $order=order::find($id);

        $order->delete();

        Alert::success('Product Removed from Cart Successfully');

        return redirect()->back();
    }

    public function fill_in($total,$id)
    {
        $username = 'Add Details';
    
        if (Auth::check()) {
            $user = Auth::user();
            $count_cart = Cart::where('user_id', $user->id)->sum('quantity');
        } else {
            $count_cart = 0;
        }
    
        return view('shop.fill_in', compact('total', 'username', 'count_cart','id'));
    }
    
    public function fill_in_subscribe($total,$id)
    {
        $username = 'Add Details';
    
        if (Auth::check()) {
            $user = Auth::user();
            $count_cart = Cart::where('user_id', $user->id)->sum('quantity');
        } else {
            $count_cart = 0;
        }
    
        return view('shop.fill_in_subscribe', compact('total', 'username', 'count_cart','id'));
    }

    public function stripe($totalprice)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $count_cart = Cart::where('user_id', $user->id)->sum('quantity');
            return view('shop.stripe', compact('totalprice', 'count_cart'));
        } else {
            return redirect('/login');
        }
    }

    public function stripePost(Request $request, $totalprice)
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([
            "amount" => $totalprice * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => 'Paid'
        ]);

        $user = Auth::user();
        $user_id = $user->id;
        $data = cart::where('user_id', '=', $user_id)->get();

        foreach ($data as $data) {
            $order = new order;

            $order->name = $data->name;
            $order->email = $data->email;
            $order->user_id = $data->user_id;
            $order->product_title = $data->product_title;
            $order->price = $data->price;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->product_id = $data->product_id;
            $order->payment_status = 'Paid';
            
            Session::flash('success', 'Payment successful!');

            $order->delivery_status = 'processing';
            $order->save();

            $cart_id = $data->id;
            $cart = cart::find($cart_id);
            $cart->delete();
        }

        return back();
    }
    
    


    public function show_order($id)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $count_cart = Cart::where('user_id', $userid)->sum('quantity');
            $order = Order::where('user_id', $userid)->get();
            return view('shop.show_order', compact('order', 'count_cart','id'));
        } else {
            return redirect('/login');
        }
    }

    public function search_product(Request $request)
    {
        $search_text = $request->search_product;
    
        $products = Product::where('title', 'LIKE', '%' . $search_text . '%')
            ->orWhere('category', 'LIKE', '%' . $search_text . '%')
            ->with('user')
            ->get();
    
        $username = '';
    
        if (Auth::check()) {
            $user = Auth::user();
            $count_cart = Cart::where('user_id', $user->id)->sum('quantity');
        } else {
            $count_cart = 0;
        }
    
        return view('shop.home', compact('products', 'username', 'count_cart'));
    }

    public function order_history($id)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $previousOrders = Order::where('user_id', $user->id)->get();
    
            $count_cart = Cart::where('user_id', $user->id)->sum('quantity');
    
            return view('shop.order_history', compact('previousOrders', 'count_cart','id'));
        } else {
            return redirect('/login');
        }
    }

    public function aboutUs()
    {
        return view('user.aboutUs');
    }

    public function search_compare($product_id, $id)
    {
        // Retrieve the product with the matching IDs
        $product = Product::find($product_id);

        // Retrieve other products with similar titles
        $similarProducts = Product::where('title', $product->title)
            ->where('id', '!=', $product_id)
            ->get();

        // Merge the collections into a single collection
        $products = $similarProducts->prepend($product);

        $username = '';

        if (Auth::check()) {
            $user = Auth::user();
            $count_cart = Cart::where('user_id', $user->id)->sum('quantity');
        } else {
            $count_cart = 0;
        }

        $product = Product::find($product_id);

        $user = $product->user; 

        return view('shop.search_compare', compact('products', 'id', 'user', 'username', 'count_cart'));
    }





    public function user_details_subscribe(Request $request, $total,$shop_id)
    {
        
        $userDetails = UserDetail::where('user_id', Auth::id())->first();
    
        if ($userDetails) {
            $order = Order::where('user_id', Auth::id())
                ->orderBy('created_at', 'desc')
                ->first();
    
            if (!$order || $order->delivery_status === 'Delivered') {
                // Update the user details
                $userDetails->name = $request->input('name');
                $userDetails->phone = $request->input('phone');
                $userDetails->address = $request->input('address');
                $userDetails->save();
            }
            
            $username = '';
    
            if (Auth::check()) {
                $user = Auth::user();
                $count_cart = Cart::where('user_id', $user->id)->sum('quantity');
            } else {
                $count_cart = 0;
            }

            $id = $shop_id;
    
            return view('shop.subscribe', ['total' => $total, 'username' => $username, 'count_cart' => $count_cart,'id'=>$id]);
        }
    
        $rules = [
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'address' => 'required|max:255',
        ];
    
        $messages = [
            'name.required' => 'Please enter your full name.',
            'name.string' => 'The name field must be letters only.',
            'name.max' => 'The name field should not exceed 255 characters.',
            'phone.required' => 'Please enter your phone number.',
            'phone.numeric' => 'The phone number must be a valid number.',
            'address.required' => 'Please enter your address for delivery.',
            'address.max' => 'The address field should not exceed 255 characters.',
        ];
    
        $validator = Validator::make($request->all(), $rules, $messages);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Store the form data in the userDetails table
        $userDetail = new UserDetail();
        $userDetail->name = $request->input('name');
        $userDetail->phone = $request->input('phone');
        $userDetail->address = $request->input('address');
        $userDetail->user_id = Auth::id();
        $userDetail->save();
    
        $username = '';
    
        if (Auth::check()) {
            $user = Auth::user();
            $count_cart = Cart::where('user_id', $user->id)->sum('quantity');
        } else {
            $count_cart = 0;
        }
    
        $totalprice = $total;
    
        return view('shop.subscribe', ['total' => $totalprice, 'username' => $username, 'count_cart' => $count_cart]);
    }


    public function user_details(Request $request, $total)
    {
        $userDetails = UserDetail::where('user_id', Auth::id())->first();

        if ($userDetails) {
            $order = Order::where('user_id', Auth::id())
                ->orderBy('created_at', 'desc')
                ->first();

            if (!$order || $order->delivery_status === 'Delivered') {
                // Update the user details
                $userDetails->name = $request->input('name');
                $userDetails->phone = $request->input('phone');
                $userDetails->address = $request->input('address');
                $userDetails->save();
            }

            $username = '';

            if (Auth::check()) {
                $user = Auth::user();
                $count_cart = Cart::where('user_id', $user->id)->sum('quantity');
            } else {
                $count_cart = 0;
            }

            // Redirect to the next route
            return redirect()->route('stripe.post', ['totalprice' => $total, 'count_cart' => $count_cart]);
        }

        $rules = [
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'address' => 'required|max:255',
        ];

        $messages = [
            'name.required' => 'Please enter your full name.',
            'name.string' => 'The name field must be of letters only.',
            'name.max' => 'The name field should not exceed 255 characters.',
            'phone.required' => 'Please enter your phone number.',
            'phone.numeric' => 'The phone number must be a valid number.',
            'address.required' => 'Please enter your address for delivery.',
            'address.max' => 'The address field should not exceed 255 characters.',
        ];

        $this->validate($request, $rules, $messages);

        // Store the form data in the userDetails table
        $userDetail = new UserDetail();
        $userDetail->name = $request->input('name');
        $userDetail->phone = $request->input('phone');
        $userDetail->address = $request->input('address');
        $userDetail->user_id = Auth::id();
        $userDetail->save();

        $username = '';

        if (Auth::check()) {
            $user = Auth::user();
            $count_cart = Cart::where('user_id', $user->id)->sum('quantity');
        } else {
            $count_cart = 0;
        }

        $totalprice = $total;

        // Redirect to the stripe.post route with totalprice and count_cart parameters
        return redirect()->route('stripe.post', ['totalprice' => $totalprice, 'count_cart' => $count_cart]);
    }

    public function about_subscription()
    {
        return view('user.about_subscription');
    }
    
    public function about_b2b()
    {
        return view('user.about_b2b');
    }

    public function edit()
    {
        return view('user.edit')->with('user',auth()->user());
    }

    public function update(UpdateProfileRequest $request)
    {
        $user= auth()->user();

        $user->update([
            'name' => $request->name,
            'username' => $request->username,
        ]);

        session()->flash('success','User updated successefully');

        return redirect()->back();
    }

    

}