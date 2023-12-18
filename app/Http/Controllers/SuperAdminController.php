<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\UserDetail;


class SuperAdminController extends Controller
{
    public function redirect(Request $request)
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;

            if ($userType == 'superAdmin') {

                $total_product=product::all()->count();

                $total_order=order::all()->count();
                
                $total_user=user::all()->count();

                $order=order::all();

                $total_revenue=0;

                foreach($order as $order)
                {
                    $total_revenue=$total_revenue + $order->price;
                }

                $total_delivered=order::where('delivery_status','=','delivered')->get()->count();
       
                $total_OnItsWay=order::where('delivery_status','=','On Its Way')->get()->count();
               
                $total_processing=order::where('delivery_status','=','processing')->get()->count();

                return view('superAdmin.dashboard',compact('total_product','total_order','total_user','total_revenue','total_delivered','total_OnItsWay','total_processing'));
            } elseif($userType == 'user') {
                $adminUsers = User::where('usertype', 'admin')->paginate(2);
                $searchText = $request->query('search_product');
                return view('user.home', compact('adminUsers'));
            } elseif ($userType == 'admin') {
                return view('admin.dashboard');
            } elseif ($userType == 'b2b') {
                $adminUsers = User::where('usertype', 'admin')->paginate(2);
                $searchText = $request->query('search_product');
                return view('user.home', compact('adminUsers'));
            } 
        }

        
        $adminUsers = User::where('usertype', 'admin')->paginate(1);
        return view('user.home', compact('adminUsers'));
    }

    public function order()
    {
        if(Auth::id())
        {
            
            $order=order::all();
            return view('superAdmin.order',compact('order',));
        }
        else{
            return redirect('login');
        }
        
    }

    public function coming($id)
    {
        Order::where('user_id', $id)
            ->where('delivery_status', '!=', 'Delivered')
            ->update(['delivery_status' => 'On Its Way']);

        return redirect()->back();
    }

    public function delivered($id)
    {
        Order::where('user_id', $id)
            ->where('delivery_status', '!=', 'Delivered')
            ->update(['delivery_status' => 'Delivered']);

        return redirect()->back();
    }


    public function searchdata(Request $request)
    {
        if(Auth::id())
        {
            $searchText=$request->search;

            $order=order::where('name','LIKE',"%$searchText%")->orWhere('email','LIKE',"%$searchText%")->orWhere('delivery_status','LIKE',"%$searchText%")->orWhere('payment_status','LIKE',"%$searchText%")->get();

            return view('superAdmin.order',compact('order'));

        }
        else{
            return redirect('login');
        }
        
    }

    public function view_users()
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;

            if ($userType == 'superAdmin') {

                $superAdminUsers = User::where('usertype', 'superAdmin')->get();
                $adminUsers = User::where('usertype', 'admin')->get();
                $users = User::where('usertype', 'user')->get();
                $b2b = User::where('usertype', 'b2b')->get();

                return view('superAdmin.users', compact('superAdminUsers','adminUsers','users','b2b'));
            }

            else
            {
                return redirect('login');
            }


        }
        
    }

    public function delete_user($id)
    {
            $data=user::find($id);

            $data->delete();

            return redirect()->back()->with('message', 'User Deleted Successefully'); 
    }

    public function edit_user($id)
    {
        $user=user::find($id);

        return view('superAdmin.spu_view',compact('user'));
    }

    public function make_superAdmin($id)
    {
        if(Auth::id())
        {
            $user=user::find($id);

            $user->usertype="superAdmin";

            $user->save();

            return redirect()->back();
        }
        else{
            return redirect('login');
        }
        
    }
    public function make_admin($id)
    {
        if(Auth::id())
        {
            $user=user::find($id);

            $user->usertype="admin";

            $user->save();

            return redirect()->back();
        }
        else{
            return redirect('login');
        }
        
    }
    public function make_b2b($id)
    {
        if(Auth::id())
        {
            $user=user::find($id);

            $user->usertype="b2b";

            $user->save();

            return redirect()->back();
        }
        else{
            return redirect('login');
        }
        
    }
    public function make_user($id)
    {
        if(Auth::id())
        {
            $user=user::find($id);

            $user->usertype="user";

            $user->save();

            return redirect()->back();
        }
        else{
            return redirect('login');
        }
        
    }

    public function viewItems($email)
    {
        $userDetails = UserDetail::all();
        $orders = Order::where('email', $email)->get();
        $deliveredOrders = $orders->where('delivery_status', 'Delivered');
    
        return view('superAdmin.view_suborders', compact('orders', 'userDetails','deliveredOrders'));
    }
}
