<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BranchController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = Branch::get(); // ~ select * from branch
        return view('admin\branch-list', compact('data'));
    }
    public function add()
    {
        $branch = Branch::get();
        return view('admin.branch-add', compact('branch'));
    }
    public function save (Request $request)
    {
        $branch = new Branch();
        $branch->branch_id = $request->id;
        $branch->branch_name = $request->name;
        $branch->email = $request->email;
        $branch->address = $request->address;
        $branch->branch_phonenumber = $request->phonenumber;
        $branch->save();
        return redirect()->back()->with('success', 'Branch added successfully!');
    }

        public function edit()
        {
            $branch = Branch::get();
            return view ('admin\branch-edit', compact('branch'));
        }
        // public function delete($id)
        // {
        //     Product::where('branch_branch_id', $id)->update(['branch_branch_id' => null]);
        //     Branch ::where('branch_id', '=', $id) ->delete();
        //     return redirect () ->back() ->with('success', 'Branch deleted successfully');
        // }

        public function delete($id)
{
    // Kiểm tra xem có sản phẩm nào liên quan đến branch này hay không
    $productCount = Product::where('branch_branch_id', $id)->count();

    if ($productCount > 0) {
        // Nếu có sản phẩm liên quan, không cho phép xóa
        return redirect()->back()->with('error', 'Branch cannot be deleted because it is associated with products.');
    }

    // Nếu không có sản phẩm liên quan, tiến hành xóa branch
    Branch::where('branch_id', $id)->delete();

    return redirect()->back()->with('success', 'Branch deleted successfully');
}


        public function update (Request $request) {
            Branch ::where('branch_id', '=', $request->id) -> update([
            'branch_name' => $request-> name,
            'email' => $request-> email,
            'address' => $request-> address,
            'branch_phonenumber' => $request-> phonenumber,

            ]);
            return redirect()->back() -> with('success', 'Branch Updated Successfully');
        }

}
