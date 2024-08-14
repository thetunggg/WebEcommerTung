<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Customer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.index');
    }
    public function CustomerList()
    {
        $data = Customer::get(); // ~ select * from products
        return view('admin.customer-list', compact('data'));

    }
    public function login()
    {
        return view('admin.login');
    }

    public function loginProcess(Request $request)
    {
        $admin = Admin::where('adminID', '=', $request-> username) -> first();
        if ($admin) {
            if($admin->adminPassword == $request-> password){
                $request -> session() -> put('adminID', $admin -> adminID);
                $request -> session() -> put('adminInfo', $admin -> adminInfo);
                return redirect('admin/index');
            }else {
                return back()->with('fail', 'Password not match');
            }
        }
        else{
            return back()->with ('fail', 'User is not existed');

        }
    }

}

