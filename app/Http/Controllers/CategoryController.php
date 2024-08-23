<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = Category::get(); // ~ select * from category
        return view('admin.category-list', compact('data'));
    }
    public function add()
    {
        $cat = Category::get();
        return view('admin.category-add', compact('cat'));
    }
    public function save (Request $request)
    {
        $cat = new Category();
        $cat->categoriesID = $request->id;
        $cat->categoriesName = $request->name;
        $cat->categoriesDescriptions = $request->descriptions;
        $cat->save();
        return redirect()->back()->with('success', 'Category added successfully!');
    }

        public function edit()
        {
            $cat = Category::get();
            return view ('admin\category-edit', compact('cat'));
        }
        // public function delete($id)
        // {

        //     Product::where('categoriesID', $id)->update(['categoriesID' => null]);
        //     Category ::where('categoriesID', '=', $id) ->delete();
        //     return redirect () ->back() ->with('success', 'Category deleted successfully');
        // }

        public function delete($id)
{
    // Kiểm tra nếu có sản phẩm nào liên quan đến category này
    $productCount = Product::where('categoriesID', $id)->count();

    if ($productCount > 0) {
        // Nếu có sản phẩm liên quan, không cho phép xóa
        return redirect()->back()->with('error', 'Category cannot be deleted because it is associated with products.');
    }

    // Nếu không có sản phẩm liên quan, tiến hành xóa category
    Category::where('categoriesID', $id)->delete();
    
    return redirect()->back()->with('success', 'Category deleted successfully');
}


        public function update (Request $request) {
            Category ::where('categoriesID', '=', $request->id) -> update([
            'categoriesName' => $request-> name,
            'categoriesDescriptions' => $request-> descriptions,
            

            ]);
            return redirect()->back() -> with('success', 'Category Updated Successfully');
        }

}
