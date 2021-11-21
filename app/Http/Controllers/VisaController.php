<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class VisaController extends Controller
{
    public function product()
    {
        return view('admin.product');
    }

    public function uploadproduct(Request $request)

    {
        $data = new product;

        $image = $request->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->file->move('productimage', $imagename);

        $data->image = $imagename;

        $data->vdays = $request->vdays;
        $data->price = $request->price;
        $data->desc = $request->desc;

        $data->save();

        return redirect()->back()->with('message', 'Visa Posted Successfully');
    }
}
