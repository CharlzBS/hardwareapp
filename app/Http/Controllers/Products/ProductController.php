<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);
        return view('products.index', [
            'products' => $products
        ]);
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|unique:products|max:255',
            'product_quantity' => 'required|integer',
            'category_id' => 'required|integer',
            'product_cost' => 'required|integer',
            'product_price' => 'required|integer',
            'product_stock_alert' => 'required|integer',
            'product_unit' => 'required|string',
            'product_tax_type' => 'required|string',
            'product_code' => 'nullable',
            'product_barcode_symbology' => 'nullable',
            'product_note' => 'nullable'
        ]);

       Product::create([
            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'product_code' => $request->product_code,
            'product_barcode_symbology' => $request->product_barcode_symbology,
            'product_quantity' => $request->product_quantity,
            'product_cost' => $request->product_cost,
            'product_price' => $request->product_price,
            'product_unit' => $request->product_unit,
            'product_stock_alert' => $request->product_stock_alert,
            'product_tax_type' => $request->product_tax_type,
            'product_note' => $request->product_note
        ]);

        return redirect('/product')->with('status','Product created Successfully');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required|string|max:255', Rule::unique("products")->ignore($product->id),
            'product_quantity' => 'required|integer',
            'category_id' => 'required|integer',
            'product_cost' => 'required|integer',
            'product_price' => 'required|integer',
            'product_stock_alert' => 'required|integer',
            'product_unit' => 'required|string',
            'product_tax_type' => 'required|string',
            'product_code' => 'nullable',
            'product_barcode_symbology' => 'nullable',
            'product_note' => 'nullable'
        ]);

        $product->update([
            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'product_code' => $request->product_code,
            'product_barcode_symbology' => $request->product_barcode_symbology,
            'product_quantity' => $request->product_quantity,
            'product_cost' => $request->product_cost,
            'product_price' => $request->product_price,
            'product_unit' => $request->product_unit,
            'product_stock_alert' => $request->product_stock_alert,
            'product_tax_type' => $request->product_tax_type,
            'product_note' => $request->product_note
        ]);

        return redirect('/product')->with('status','product updated Successfully');
    }

    public function destroy(): View
    {
        return view('products.index');
    }

     /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
}
