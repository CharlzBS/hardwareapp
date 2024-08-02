<?php

namespace App\Http\Controllers\POS;

use App\Models\Sales;
use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;


class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sales::paginate(5);
        return view('sales.index', [
            'sales' => $sales
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $salesRefNumber = 'SAL-'. now()->format('YmdHis') . '-' . Str::upper(Str::random(6));
        $customers = Customer::all();
        $products = Product::all();
        return view('sales.create', compact('customers', 'products','salesRefNumber'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            //'sale_date' => 'sale_date|date',
            'customer_id' => 'required|integer'
            // 'product_cost' => 'required|integer',
            // 'product_price' => 'required|integer',
            // 'product_stock_alert' => 'required|integer',
            // 'product_unit' => 'required|string',
            // 'product_tax_type' => 'required|string',
            // 'product_code' => 'nullable',
            // 'product_barcode_symbology' => 'nullable',
            // 'product_note' => 'nullable'
        ]);

       $customer = customer::find($request->customer_id);

       Sales::create([
                'sale_date' => '2024-08-02 08:37:59', //$request->sale_date,
                'reference' => $request->reference,
                'customer_id' => $request->customer_id,
                'customer_name' => $customer->first_name .' '.$customer->last_name,
                'tax_percentage' => $request->tax_percentage,
                'tax_amount' => $request->tax_amount,
                'discount_percentage' => $request->discount_percentage,
                'discount_amount' => $request->discount_amount,
                'shipping_amount' => $request->shipping_amount,
                'total_amount' => $request->total_amount,
                'paid_amount' => $request->paid_amount,
                'due_amount' => $request->due_amount,
                'status' => $request->status,
                'payment_status' => $request->payment_status,
                'payment_method' => $request->payment_method,
                'note' => $request->note
        ]);

        return redirect('/sales')->with('status','Sales created Successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Sales $sale)
    {
        return view('sales.show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sales $sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sales $sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sales $sales)
    {
        //
    }
}
