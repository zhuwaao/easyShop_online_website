<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;



class AdminController extends Controller
{
    public function redirect()
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;

            if ($userType == 'admin') {
                return view('admin.dashboard');
            }
        }

        return view('user.home');
    }

        public function view_category()
    {
        if (Auth::check()) {
            $userId = Auth::id();
            $data = Category::where('user_id', $userId)->get();
            
            return view('admin.view_category', compact('data'));
        } else {
            return redirect('login');
        }
    }

    public function add_category(Request $request)
    {
        if (Auth::check()) {
            $category = new Category;
            $category->category_name = $request->category;
            $category->user_id = Auth::id();
            $category->save();

            return redirect()->back()->with('message', 'Category added successfully');
        } else {
            return redirect('login');
        }
    }

    public function delete_category($id)
    {
        if(Auth::id())
        {
            $data=category::find($id);

            $data->delete();

            return redirect()->back()->with('message', 'Category Deleted Successefully'); 
        }
        else{
            return redirect('login');
        }
        
    }

    public function view_product()
    {
        if(Auth::id())
        {
            $userId = Auth::id();
            $category=category::where('user_id', $userId)->get();
            return view('admin.product',compact('category'));
        }
        else{
            return redirect('login');
        }
        
    }

    public function add_product(Request $request)
    {

        if (Auth::check()) {
            $product = new Product;

            $product->title = $request->product_title;
            $product->description = $request->product_description;
            $product->price = $request->product_price;
            $product->quantity = $request->product_quantity;
            $product->discount_price = $request->discount_price;

            
            $user = Auth::user();
            $product->user_id = $user->id;

            $category = Category::where('user_id', $user->id)->first();
            $product->category = $category->category_name;

            $image = $request->file('product_image');

            if ($image) {
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('product_image', $imageName);
                $product->image = $imageName;
            }

            $product->save();

            return redirect()->back()->with('message', 'Product Added Successfully');
        }
        else{
            return redirect('login');
        }
        
    }

    public function show_product()
    {if(Auth::id())
        {
            $userId = Auth::id();
            $product = Product::where('user_id', $userId)->get();
            return view('admin.show_product',compact('product'));
        }
        else{
            return redirect('login');
        }
          
    }

    public function delete_product($id)
    {
        if(Auth::id())
        {
            $product=product::find($id);

            $product->delete();

            return redirect()->back()->with('message', 'Product Deleted Successefully');
        }
        else{
            return redirect('login');
        }
        
    }

    public function update_product($id)
    {
        if(Auth::id())
        {
            $product=product::find($id);
            $category=category::all();
            return view('admin.update_product',compact('product','category'));
        }
        else{
            return redirect('login');
        }
        
    }

    public function update_product_confirm(Request $request, $id)
    {
        if(Auth::id())
        {
            $product=product::find($id);

            $product->title=$request->product_title;
            
            $product->description=$request->product_description;

            $product->price=$request->product_price;

            $product->quantity=$request->product_quantity;

            $product->discount_price=$request->discount_price;

            $product->category=$request->category;

            $image = $request->file('product_image');

            if ($image) {
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('product_image', $imageName);
                $product->image = $imageName;
            }

            $product->save();

            return redirect()->back()->with('message', 'Product Updated Successefully');
        }
        else{
            return redirect('login');
        }
        

    }
}
