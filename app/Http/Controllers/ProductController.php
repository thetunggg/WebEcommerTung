<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = Product::get(); // ~ select * from products
        return view('admin\product-list', compact('data'));

    }
    public function product()
    {
        $pro = Product::get();
        return view('customer.index', compact('pro'));
    }
    public function add()
    {
        $categories = Category::get();
        $pro = Product::get();
        return view('admin.product-add', compact('categories', 'pro'));
    }
    public function save (Request $request)
    {
        $pro = new Product();
        $pro->productID = $request->id;
        $pro->productName = $request->name;
        $pro->productPrice = $request->price;
        $pro->productImage = $request->image;
        $pro->productDetails = $request->details;
        $pro->categoriesID = $request->category;
        $pro->save();
        return redirect()->back()->with('success', 'Product added successfully!');
    }


    public function edit()
    {
        $products = Product::get();
        $categories = Category::get();
        return view ('admin\product-edit', compact('products','categories'));
    }
    public function delete($id)
    {
        Product::where('productID', '=', $id) ->delete();
        return redirect () ->back() ->with('success', 'Product deleted successfully');
    }

    public function update (Request $request) {
        Product::where('productID', '=', $request->id) -> update([
        'productName' => $request-> name,
        'productPrice' => $request-> price,
        'productImage' => $request-> image,
        'productDetails' => $request-> details,
        'categoriesID' => $request -> category
        ]);
        return redirect()->back() -> with('success', 'Product Updated Successfully');
    }


}





        // $pro = new Product();
        // $pro->productID = $productID;
        // $pro->productName = $productName;
        // $pro->productPrice = $productPrice;
        // $pro->productImage = $productImage;
        // $pro->productDetails = $productDetails;
        // $pro->categoriesID = $categoriesID;
        // $->save();





