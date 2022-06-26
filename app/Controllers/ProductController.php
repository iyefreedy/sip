<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;
use App\Models\ProductModel;
use App\Models\SupplierModel;

class ProductController extends BaseController
{
    public function index()
    {
        //
        $productModel = new ProductModel();

        return view('product/index', [
            'products' => $productModel->supplier()->findAll()
        ]);
    }

    public function create()
    {
        $supplierModel = new SupplierModel();
        return view('product/create', [
            'suppliers' => $supplierModel->findAll()
        ]);
    }

    public function insert()
    {
        if (!$this->validate(
            [
                'name' => 'required',
                'selling_price' => 'required',
                'buying_price' => 'required',
                'supplier_id' => 'required'
            ]
        )) {
            return redirect()->back()->with('errors', $this->validator->getErrors());
        }

        $productModel = new ProductModel();

        if (!$productModel->save($this->request->getPost())) {
            return redirect()->back()->with('error', 'Failed to save data');
        }

        return redirect()->to('product')->with('message', 'Success to save data');
    }

    public function order()
    {
        $productModel = new ProductModel();

        return view('product/order', [
            'products' => $productModel->findAll()
        ]);
    }

    public function insertOrder()
    {

        if (!$this->validate(
            [
                'product_id' => 'required',
                'quantity' => 'required',
                'price' => 'required'
            ]
        )) {

            return redirect()->back()->with('errors', $this->validator->getErrors());
        }

        $orderModel = new OrderModel();
        $productModel = new ProductModel();
        $data = $this->request->getPost();
        $productId = $data['product_id'];

        if (!$orderModel->save($data) && !$productModel->save(
            [
                'id' => $productId,
                'quantity' => $data['quantity']
            ]
        )) {
            return redirect()->back()->with('error', 'Failed to insert order');
        }

        return redirect()->to('product')->with('message', 'Success to order');
    }
}
