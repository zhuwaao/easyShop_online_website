<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Product;
use Stripe\Customer;
use Stripe\Stripe;


class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        $rules = [
            'name' => ['required', 'string', 'max:40'],
            'username' => ['required', 'string', 'max:8', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:70', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];

        if (isset($data['phone'])) {
            $rules['phone'] = ['nullable', 'string', 'max:15','min:5'];
        }

        if (isset($data['address'])) {
            $rules['address'] = ['nullable', 'string', 'max:70'];
        }

        if (isset($data['id_number'])) {
            $rules['id_number'] = ['nullable', 'string', 'max:20', 'unique:users'];
        }

        if (isset($data['id_image'])) {
            $rules['id_image'] = ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048'];
        }

        return Validator::make($data, $rules);
    }

    protected function create(array $data)
    {
        $idImageName = null;

        if (isset($data['id_image'])) {
            $idImage = $data['id_image'];
            $idImageName = $idImage->getClientOriginalName();
            $idImage->move(public_path('images'), $idImageName);
        }

        // Create a new user
        $user = User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone_number' => $data['phone'] ?? null,
            'address' => $data['address'] ?? null,
            'id_number' => $data['id_number'] ?? null,
            'id_picture' => $idImageName,
        ]);


        Category::create([
            'category_name' => 'Default Category',
            'user_id' => $user->id,
        ]);

        Product::create([
            'title' => 'Default Product',
            'user_id' => $user->id,
        ]);

        return $user;
    }
}