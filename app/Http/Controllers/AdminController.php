<?php

namespace App\Http\Controllers;

use App\Models\inclusions;
use App\Models\itinery;
use App\Models\Addon;
use App\Models\addoninclusion;
use App\Models\Cart;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Toursproduct;
use Carbon\Carbon;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use Session;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use DB;
use Auth;

use Srmklive\PayPal\Services\ExpressCheckout;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



class AdminController extends Controller
{
    public function tours()
    {
        return view('admin.tours');
    }

    public function uploaduaetours(Request $request)
    {
        //dd($request);
        // submit ok




        $data = new Toursproduct; //Toursproduct

        $image = $request->file;

        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->file->move('uaetoursimage', $imagename);
        // use intervension image framework.

        $data->from_city = $request->from_city;
        $data->type = $request->type_tour;
        $data->image = $imagename;
        $data->title = $request->title;
        $data->slug = $request->slug;
        $data->days = $request->days;
        $data->price = $request->price;
        $data->desc = $request->desc;
        $data->ldesc = $request->ldesc;
        $data->status = $request->status;
        $data->date = $request->date;
        $data->save(); //this is also saving into the Tours tabele yeah
        $id = $data->id;
        foreach ($request->inclusion as $key => $inclusion) {
            $data1 = new inclusions;
            $data1->uaeproduct_id = $id;
            $data1->inclusion = $inclusion;
            $data1->save(); // this is sving all the above ti inclusion DB
        }
        if ($request->input('persons-select')) {
            foreach ($request->input('persons-select') as $key => $inclusion) {
                $data1 = new addoninclusion;
                $data1->product_id = $id;
                $data1->addon_id = $inclusion;
                $data1->save(); // this is sving all the above ti inclusion DB
            }
        }
        if ($request->input('insurance-select')) {
            foreach ($request->input('insurance-select') as $key => $inclusion) {
                $data1 = new addoninclusion;
                $data1->product_id = $id;
                $data1->addon_id = $inclusion;
                $data1->save(); // this is sving all the above ti inclusion DB
            }
        }
        if ($request->input('seat-select')) {
            foreach ($request->input('seat-select') as $key => $inclusion) {
                $data1 = new addoninclusion;
                $data1->product_id = $id;
                $data1->addon_id = $inclusion;
                $data1->save(); // this is sving all the above ti inclusion DB
            }
        }
        if ($request->input('addon-select1')) {
            foreach ($request->input('addon-select1') as $key => $inclusion) {
                $data1 = new addoninclusion;
                $data1->product_id = $id;
                $data1->addon_id = $inclusion;
                $data1->save(); // this is sving all the above ti inclusion DB
            }
        }
        if ($request->input('addon-select2')) {
            foreach ($request->input('addon-select2') as $key => $inclusion) {
                $data1 = new addoninclusion;
                $data1->product_id = $id;
                $data1->addon_id = $inclusion;
                $data1->save(); // this is sving all the above ti inclusion DB
            }
        }



        foreach ($request->meetuptime as $key => $itinery) {
            $data2 = new itinery;
            $data2->uaeproduct_id = $id;
            $data2->meetuptime = $request->$itinery;
            $data2->meetupday = $request->meetupday[$key];
            $data2->tourday = $request->tourday[$key];
            $data2->itinerydesc = $request->itinerydesc[$key];
            $data2->save();
        } //i dont get the error typo?
        return redirect()->back()->with('message', 'Tour Added Succesfully '); // so i need to foreach now where i want to show ? yeah
    }

    public function indiatour()
    {
        return view('admin.uaetours');
    }

    public function tourproducts()

    {
        $data = Toursproduct::latest()->get();
        return view('admin.tourproducts', compact('data'));
    }

    public function deleteuaeproduct($id)
    {
        $data = Toursproduct::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Tour Deleted Successfully');
    }
    // now will u be able to show the data? im not very sure i want to try now . ok check how to show relation data u w
    public function viewproducts()
    {
        $data = Product::all();
        return view('admin.viewproducts', compact('data'));
    }
    public function deleteproduct($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'The Visa Posting Was Deleted Successfully');
    }
    //update the view
    public function updateproduct($id)
    {
        $data = Product::find($id);
        return view('admin.updateuaevisa', compact('data'));
    }
    //update the UAE VIsa product itself
    public function updatevisaproduct(Request $request, $id)
    {
        $data = Product::find($id);
        $image = $request->file;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->file->move('productimage', $imagename);

            $data->image = $imagename;
        }


        $data->vdays = $request->vdays;
        $data->price = $request->price;
        $data->desc = $request->desc;

        $id = $data->id;
        foreach ($request->inclusion as $key => $inclusion) {
            $data1 = new inclusions;
            $data1->uaeproduct_id = $id;
            $data1->inclusion = $inclusion;
            $data1->save(); // this is sving all the above ti inclusion DB
        }
        if ($request->input('persons-select')) {
            foreach ($request->input('persons-select') as $key => $inclusion) {
                $data1 = new addoninclusion;
                $data1->product_id = $id;
                $data1->addon_id = $inclusion;
                $data1->save(); // this is sving all the above ti inclusion DB
            }
        }
        if ($request->input('insurance-select')) {
            foreach ($request->input('insurance-select') as $key => $inclusion) {
                $data1 = new addoninclusion;
                $data1->product_id = $id;
                $data1->addon_id = $inclusion;
                $data1->save(); // this is sving all the above ti inclusion DB
            }
        }
        if ($request->input('seat-select')) {
            foreach ($request->input('seat-select') as $key => $inclusion) {
                $data1 = new addoninclusion;
                $data1->product_id = $id;
                $data1->addon_id = $inclusion;
                $data1->save(); // this is sving all the above ti inclusion DB
            }
        }
        if ($request->input('addon-select1')) {
            foreach ($request->input('addon-select1') as $key => $inclusion) {
                $data1 = new addoninclusion;
                $data1->product_id = $id;
                $data1->addon_id = $inclusion;
                $data1->save(); // this is sving all the above ti inclusion DB
            }
        }
        if ($request->input('addon-select2')) {
            foreach ($request->input('addon-select2') as $key => $inclusion) {
                $data1 = new addoninclusion;
                $data1->product_id = $id;
                $data1->addon_id = $inclusion;
                $data1->save(); // this is sving all the above ti inclusion DB
            }
        }

        $data->save();

        return redirect()->back()->with('message', 'Visa Updated Successfully');
    }
    public function addusers()
    {
        return view('admin.adduser');
    }

    public function viewusers()
    {
        $users = User::paginate(10);
        return view('admin.viewalluser', compact('users'));
    }

    // UPDATE UAE TOURS VIEW
    public function updateuaetours($id)
    {
        $data = Toursproduct::find($id);
        return view('admin.updateuaetours', compact('data'));
    }

    public function updateToursproduct(Request $request, $id)
    {
        $data = Toursproduct::find($id);

        $image = $request->file;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->file->move('uaetoursimage', $imagename);

            $data->image = $imagename;
        }
        $data->type = $request->type_tour;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->desc = $request->desc;
        $data->status = $request->status;
        $data->date = $request->date;

        $data->save();

        return redirect()->back()->with('message', 'Tour Updated Succesfully ');
    }

    public function cart(Request $request)
    {
        $seat_price = 400;
        $insurance_price = 100;
        $addon1_price = 100;
        $addon2_price = 100;





        $price = Toursproduct::findOrFail($request->tour_id)->price;
        if ($request->persons_select != null) {
            $price = $price * $request->persons_select;
        }
        if ($request->seat_select != null) {
            $price = $price + ($seat_price * $request->seat_select);
        }
        if ($request->insurance_select != null) {
            $price = $price + ($insurance_price * $request->insurance_select);
        }

        if ($request->addon1_price != null) {
            $price = $price + ($addon1_price * $request->addon1_price);
        }
        if ($request->addon_select2 != null) {
            $price = $price + ($addon2_price * $request->addon2_price);
        }
        // please the value is not coming to the secong page (the book page)

        $name = Toursproduct::findOrFail($request->tour_id)->title;
        $image = Toursproduct::findOrFail($request->tour_id)->image;

        $data = new cart;
        $data->tour_id = $request->tour_id;
        $data->user_ip = $request->ip();
        $data->name = $name;
        $data->image = $image;
        $data->persons_select = $request->persons_select;
        $data->insurance_select = $request->insurance_select;
        $data->addon_select1 = $request->addon_select1;
        $data->addon_select2 = $request->addon_select2;
        $data->price = $price;
        $data->created_at = Carbon::now();
        //$data->save();


        $cart = session()->get('cart', []);

        if (isset($cart[$request->tour_id])) {
            //$cart[$id]['quantity']++;
            $msg = 'Product added to cart successfully!';
        } else {
            $cart[$request->tour_id] = [
                "tour_id" => $request->tour_id,
                "user_ip" => $request->ip(),
                "name" => $name,
                "image" => $image,
                "persons_select" => $request->persons_select,
                "insurance_select" => $request->insurance_select,
                "addon_select1" => $request->addon_select1,
                "addon_select2" => $request->addon_select2,
                "price" => $price,

            ];
            $msg = 'Product already added to cart';
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', $msg);

        //redirect to back page
        //return back();
    }


    public function submitBook(Request $request)
    {

        $seat_price = 400;
        $insurance_price = 100;
        $addon1_price = 100;
        $addon2_price = 100;
        $price = Toursproduct::findOrFail($request->tour_id)->price;
        if ($request->persons_select != null) {
            $price = $price * $request->persons_select;
        }
        if ($request->seat_select != null) {
            $price = $price + ($seat_price * $request->seat_select);
        }
        if ($request->insurance_select != null) {
            $price = $price + ($insurance_price * $request->insurance_select);
        }

        if ($request->addon1_price != null) {
            $price = $price + ($addon1_price * $request->addon1_price);
        }
        if ($request->addon_select2 != null) {
            $price = $price + ($addon2_price * $request->addon2_price);
        } // check ok
        $name = Toursproduct::findOrFail($request->tour_id)->title;
        $image = Toursproduct::findOrFail($request->tour_id)->image;

        $data = new cart;
        $data->tour_id = $request->tour_id;
        $data->user_ip = $request->ip();
        $data->name = $name;
        $data->image = $image;
        $data->persons_select = $request->persons_select;
        $data->insurance_select = $request->insurance_select;
        $data->addon_select1 = $request->addon_select1;
        $data->addon_select2 = $request->addon_select2;
        $data->price = $price;
        //$data->created_at = Carbon::now();
        // $data->save();

        $cart = session()->get('cart', []);

        if (isset($cart[$request->tour_id])) {
            //$cart[$id]['quantity']++;
            $msg = 'Package added to cart successfully!';
        } else {
            $cart[$request->tour_id] = [
                "tour_id" => $request->tour_id,
                "user_ip" => $request->ip(),
                "name" => $name,
                "image" => $image,
                "persons_select" => $request->persons_select,
                "insurance_select" => $request->insurance_select,
                "addon_select1" => $request->addon_select1,
                "addon_select2" => $request->addon_select2,
                "price" => $price,

            ];
            $msg = 'package already added to cart';
        }

        session()->put('cart', $cart);

        return redirect('/chekout')->with('success', $msg);

        // redirect to checkout page here u will redirect to the checkout page
        // this redirect use to redirect to any page in web.php..ok but..

    }


    public function chekout()
    {
        if (session('cart')) {

            $data = Cart::where('user_ip', $_SERVER['REMOTE_ADDR'])->get();
            return view('user.chekout', compact('data'));
        } else {



            $msg = 'Kindly Make a booking before checkout. Thank you!';
            return redirect('/allfixedtours')->with('success', $msg);
        }
    }

    public function chekoutPost(Request $request)
    {

        $data = [];

        $option = $request->input('checkout_type');

        $paymentOption = $request->input('payment-group');
        if ($option == 'package') {
            if ($paymentOption == 'cheque' || $paymentOption == "bank") {
                foreach (session('cart') as $id => $details) {
                    $data = new cart;
                    $data->tour_id = $details['price'];
                    $data->user_id = Auth::user()->id;
                    $data->user_ip = $request->ip();
                    $data->name = $details['name'];
                    $data->image = $details['image'];
                    $data->persons_select = $details['persons_select'];
                    $data->insurance_select = $details['insurance_select'];
                    $data->addon_select1 = $details['addon_select1'];
                    $data->addon_select2 = $details['addon_select2'];
                    $data->price = $details['price'];
                    $data->created_at = Carbon::now();
                    $data->payment_option = $paymentOption;
                    $data->type = 'tour';
                    $data->checkout_type = $option;
                    $data->save();
                }

                session()->forget('cart');
                $msg = 'Your booking has been received. You will be contacted over the same. Thank you!';
                return redirect('/allfixedtours')->with('success', $msg);
            }
        } else {
            if ($paymentOption == 'cheque' || $paymentOption == "bank") {
                $seat_price = 400;
                $insurance_price = 100;
                $addon1_price = 100;
                $addon2_price = 100;


                $price = Product::findOrFail($request->package_id)->price;
                if ($request->persons_select != null) {
                    $price = $price * $request->persons_select;
                }
                if ($request->seat_select != null) {
                    $price = $price + ($seat_price * $request->seat_select);
                }
                if ($request->insurance_select != null) {
                    $price = $price + ($insurance_price * $request->insurance_select);
                }

                if ($request->addon1_price != null) {
                    $price = $price + ($addon1_price * $request->addon1_price);
                }
                if ($request->addon_select2 != null) {
                    $price = $price + ($addon2_price * $request->addon2_price);
                } // check ok
                $name = Product::findOrFail($request->package_id)->desc;
                $image = Product::findOrFail($request->package_id)->image;

                $data = new cart;
                $data->tour_id = $request->package_id;
                $data->user_id = Auth::user()->id;
                $data->user_ip = $request->ip();
                $data->name = $name;
                $data->image = $image;
                $data->persons_select = $request->persons_select;
                $data->insurance_select = $request->insurance_select;
                $data->addon_select1 = $request->addon_select1;
                $data->addon_select2 = $request->addon_select2;
                $data->price = $price;
                $data->type = 'visa';
                $data->payment_option = 'cheque';
                $data->checkout_type = $option;
                $data->save();
                $msg = 'Your purchase has been received. You will be contacted over the same. Thank you!';
                return redirect('/allfixedtours')->with('success', $msg);
            } else {
                return 123;
            }
        }
    }
    public function stripePost(Request $request)
    {

        $info = $request->all();
        $u_data = $info;

        try {

            $price = 0;
            foreach (session('cart') as $id => $details) {
                $price += $details['price'] * 1;
            }


            $data['total'] = $price;
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $customer = Customer::create(array(
                'email' => $info['email'],
                'source' => $request->stripeToken
            ));
            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => $data['total'],
                'currency' => 'usd'
            ));

            foreach (session('cart') as $id => $details) {
                $data = new cart;
                $data->tour_id = $details['price'];
                $data->user_id = '0';
                $data->user_ip = $request->ip();
                $data->name = $details['name'];
                $data->image = $details['image'];
                $data->persons_select = $details['persons_select'];
                $data->insurance_select = $details['insurance_select'];
                $data->addon_select1 = $details['addon_select1'];
                $data->addon_select2 = $details['addon_select2'];
                $data->price = $details['price'];
                $data->created_at = Carbon::now();
                $data->payment_option = 'stripe';
                $data->type = 'tour';
                $data->checkout_type = 'stripe';
                $data->status = 1;
                $data->u_data = json_encode($u_data);
                $data->save();
            }


            $msg = 'Your purchase has been received. You will be contacted over the same. Thank you!';
            session()->forget('cart');
            return redirect('/allfixedtours')->with('success', $msg);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function stripePostVisa(Request $request)
    {

        $info = $request->all();
        $u_data = $info;


        $seat_price = 400;
        $insurance_price = 100;
        $addon1_price = 100;
        $addon2_price = 100;


        $price = Product::findOrFail($request->package_id)->price;
        if ($request->persons_select != null) {
            $price = $price * $request->persons_select;
        }
        if ($request->seat_select != null) {
            $price = $price + ($seat_price * $request->seat_select);
        }
        if ($request->insurance_select != null) {
            $price = $price + ($insurance_price * $request->insurance_select);
        }

        if ($request->addon1_price != null) {
            $price = $price + ($addon1_price * $request->addon1_price);
        }
        if ($request->addon_select2 != null) {
            $price = $price + ($addon2_price * $request->addon2_price);
        } // check ok
        $name = Product::findOrFail($request->package_id)->desc;
        $image = Product::findOrFail($request->package_id)->image;

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $customer = Customer::create(array(
            'email' => $info['email'],
            'source' => $request->stripeToken
        ));
        $charge = Charge::create(array(
            'customer' => $customer->id,
            'amount' => $price,
            'currency' => 'usd'
        ));

        $data = new cart;
        $data->tour_id = $request->package_id;
        $data->user_id = '0';
        $data->user_ip = $request->ip();
        $data->name = $name;
        $data->image = $image;
        $data->persons_select = $request->persons_select;
        $data->insurance_select = $request->insurance_select;
        $data->addon_select1 = $request->addon_select1;
        $data->addon_select2 = $request->addon_select2;
        $data->price = $price;
        $data->type = 'visa';
        $data->payment_option = 'stripe';
        $data->checkout_type = 'stripe';
        $data->status = 1;
        $data->u_data = json_encode($u_data);
        $data->save();

        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true); // Passing `true` enables exceptions

        $msg = 'Your purchase has been received. You will be contacted over the same. Thank you!';
        return redirect('/allfixedtours')->with('success', $msg);
    }

    public function orders()
    {
        return view('admin.orders');
    }
    public function ordersView(Request $request)
    {
        $data = DB::table('carts')->where('id', $request->id)->first();
        return $data;
    }


    public function landing()
    {
        return view('landing');
    }

    public function addCountry(Request $request)
    {
        setcookie("whoami", $request->country, time() + 60 * 60 * 24);


        session()->put('whoami', $request->country);
        if ($request->country == 'indian') {
            session()->put('currency', 'INR');
        } else {
            session()->put('currency', 'AED');
        }
    }

    public function ajaxloadProduct(Request $request)
    {

        $data = Cart::find($request->id);
        $orders = Cart::find($request->id);

        $orderCart = json_decode($data->u_data, true);

        if ($orderCart['type'] == 'tour') {
            $type = 'Tour';
        } else {
            $type = 'Visa';
        }



        echo
        '
       <div class="form-group">
           <label><span class="label-danger">Customer Name</span></label>
           <input type="text" class="form-control" value="' . $orderCart['f-name'] . ' ' . $orderCart['l-name'] . '">
       </div>
       <div class="form-group">
           <label><span class="label-danger">Customer Email</span></label>
           <input type="text" class="form-control" value="' . $orderCart['email'] . '">
       </div>
       <div class="form-group">
           <label><span class="label-danger">Number</span></label>
           <input type="text" class="form-control" value="' . $orderCart['phone_number'] . '">
       </div>
       <div class="form-group">
           <label><span class="label-danger">Address</span></label>
           <input type="text" class="form-control" value="' . $orderCart['address'] . '">
       </div>
       <div class="form-group">
           <label><span class="label-danger">Type</span></label>
           <input type="text" class="form-control" value="' . $type . '">
       </div>
       <div class="form-group">
           <label><span class="label-danger">Order Name</span></label>
           <input type="text" class="form-control" value="' . $orders->name . '">
       </div>
        <div class="form-group">
            <label><span class="label-danger">Price</span></label>
            <input type="text" class="form-control" value="' . $orders->price . '">
        </div>
         <div class="form-group">
             <label><span class="label-danger">Created At</span></label>
             <input type="text" class="form-control" value="' . $orders->created_at . '">
         </div>







       ';


        //return $data;
        //return 12233;
    }

    public function addons(Request $request)
    {
        return view('admin.addon');
    }
    public function addontype(Request $request)
    {
        $data = $request->all();
        DB::table('addon_type')->insert(
            ['name' => $data['addon_type']]
        );


        return redirect()->back()->with('success', 'Addon Type Added Successfully');
    }
    public function addonsPost(Request $request)
    {
        $data = $request->all();

        $addon = new Addon();
        $addon->title = $data['title'];
        $addon->value = $data['value'];
        $addon->type = $data['select01'];
        $addon->save();

        return redirect()->back()->with('success', 'Addon Added Successfully');
    }

    // public function search(Request $request)
    // {
    //     $search = $request->search;
    //     $data = User::where('email', 'Like', '%'
    //         . $search . '%')->get();

    //     return view('admin.viewalluser', compact('data'));
    // }
}
