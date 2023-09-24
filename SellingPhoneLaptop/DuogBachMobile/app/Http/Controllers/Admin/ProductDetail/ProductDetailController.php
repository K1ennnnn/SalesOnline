<?php

namespace App\Http\Controllers\Admin\ProductDetail;

use App\Http\Controllers\Controller;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Admin.product.detail.product-detail');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.product.detail.product-detail-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return view('Admin.product.detail.product-detail-create');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductDetail $productDetail)
    {
        //
        return view('Admin.product.detail.product-detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductDetail $productDetail)
    {
        //
        return view('Admin.product.detail.product-detail-edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductDetail $productDetail)
    {
        //
        return view('Admin.product.detail.product-detail-edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductDetail $productDetail)
    {
        //
    }
}
