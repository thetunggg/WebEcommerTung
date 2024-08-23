<?php

namespace App\Http\Controllers;


use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
  use Illuminate\Support\Facades\Hash;
        use Illuminate\Support\Facades\Session;
        use Illuminate\Support\Facades\DB;
        
class CustomerController extends Controller
{
    public function index()
    {
        $pro = Product::get();
        return view('customer.index', compact('pro'));
    }
    
    public function product()
    {
        $pro = Product::get();
        return view('customer.product', compact('pro'));
    }
    public function delete($id)
        {
            $customer = Customer::get();
            Customer ::where('customerID', '=', $id) ->delete();
            return redirect () ->back() ->with('success', 'Customer deleted successfully');
        }
        
            public function register()
            {
                return view('customer.register');
            }
        
            public function login()
            {
                return view('customer.login');
            }
        
            public function processRegister(Request $request)
            {
                $cus = new Customer();
                $cus->CustomerName = $request->name;
                $cus->CustomerEmail = $request->email;
                $cus->CustomerPhonenumber = $request->phone;
                $cus->CustomerPassword = Hash::make($request->password);
                $res=$cus->save();
                if ($res) {
                    return redirect ('customer/login');
                } else {
                    return back()->with('fail', 'Something went wrong');
                }
            }


//             public function loginProcess(Request $request)
// {
//     $request->validate([
//         'username' => 'required|email',
//         'password' => 'required',
//     ]);

//     $cus = Customer::where('customerEmail', $request->username)->first();

//     if ($cus && Hash::check($request->password, $cus->customerPassword)) {
//         $request->session()->put('customername', $cus->CustomerName);
//         return redirect('customer/index');
//     }

//     return back()->with('fail', $cus ? 'Password not match!' : 'User name is not existed!');
// }

        
            public function loginProcess(Request $request)
            {
                $cus = Customer::where('customerEmail', '=', $request->username)->first();
                if($cus) {
                    if(Hash::check($request->password, $cus->customerPassword)) {
                        $request->session()->put('customername', $cus->CustomerName);
                        return  redirect ('customer/index');
                    } else {
                        return back()->with('fail', 'Password not match!');
                    }
                } else {
                    return back()->with('fail', 'User name is not existed!');
                }
                
            }
            // public function logout()
            // {
            //     Session::pull('customername');
                
            //     return view('customer.login');
            // }


//             public function logout()
// {
//     Session::flush(); // Xóa tất cả session để đảm bảo đăng xuất hoàn toàn
    
//     return redirect()->route('customer-login'); // Chuyển hướng về trang đăng nhập
// }

public function logout()
{
    Session::forget('customername');
    return redirect()->route('customer-login'); // Hoặc đường dẫn đến trang đăng nhập
}


            
            
        
            public function products()
            {
                $pro = Product::get();
                return view('customer.product', compact('pro'));
            }
            public function home()
            {
            return view ('customer.home');
        }
        public function edit()
        {
            $customerName = session('customername');
            $customer = Customer::where('CustomerName', $customerName)->first();
        
            return view('customer.edit', compact('customer'));
        }
        // CustomerController.php
        
        
        
        public function update(Request $request) {
            $customerName = session('customername');
        
            $customer = DB::table('customers')
                ->where('CustomerName', $customerName)
                ->first();
        
            if (!$customer) {
                return back()->with('fail', 'User not found');
            }
        
            $dataToUpdate = [
                'CustomerName' => $request->input('name'),
                'CustomerEmail' => $request->input('email'),
                'CustomerPhone' => $request->input('phone'),
            ];
        
            if ($request->filled('password')) {
                $dataToUpdate['CustomerPassword'] = Hash::make($request->input('password'));
            }
        
            $updatedRows = DB::table('customers')
                ->where('CustomerName', $customerName)
                ->update($dataToUpdate);
        
            if ($updatedRows > 0) {
                $request->session()->put('customername', $request->input('name'));
                return redirect()->back()->with('success', 'Profile updated successfully.');
    } else {
        return back()->with('fail', 'User not found or something went wrong');
    }
}


}