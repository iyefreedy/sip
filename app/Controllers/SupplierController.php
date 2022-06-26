<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SupplierModel;

class SupplierController extends BaseController
{
    public function index()
    {
        $supplierModel = new SupplierModel();

        return view(
            'supplier/index',
            [
                'suppliers' => $supplierModel->findAll()
            ]
        );
    }

    public function create()
    {
        return view('supplier/create');
    }

    public function insert()
    {
        if (!$this->validate(
            [
                'name' => 'required',
                'address' => 'required'
            ]
        )) {
            return redirect()->back()->with('errors', $this->validator->getErrors());
        }

        $supplierModel = new SupplierModel();
        if (!$supplierModel->save($this->request->getPost())) {
            return redirect()->back()->with('error', 'Failed to save data');
        }

        return redirect()->to('supplier')->with('message', 'Success to save data');
    }

    public function delete($id)
    {
        $supplierModel = new SupplierModel();
        if (!$supplierModel->delete($id)) {
            return redirect()->back()->with('error', 'Failed to delete supplier');
        }

        return redirect()->back()->with('message', 'Sucess delete supplier');
    }
}
