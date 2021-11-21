<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Toursproduct;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class HomeController extends Controller
{
    public function redirect()
    {
        $users = User::paginate(5);
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.home', compact('users'));
        } else {
            // return view('user.home');

            $uaetourdata = Toursproduct::where('type', \Request::session()->get('whoami'))->get();
            return view('user.home', compact('uaetourdata'));
        }
    }

    // public function users()
    // {
    //     $user = User::all();
    //     return
    // }


    public function index(Request $request)
    {
        if (Auth::id()) {
            return redirect('admin');
        } else {
            $uaetourdata = Toursproduct::where('type', \Request::session()->get('whoami'))->paginate(6);
            return view('user.home', compact('uaetourdata'));
        };
    }

    public function uaevisa()
    {
        $data = product::paginate(6);
        return view('user.uaevisa', compact('data'));
    }

    public function allfixedtours()
    {
        if (isset($_GET['tours'])) {
            $data = Toursproduct::where('from_city', $_GET['tours'])->paginate(9);
            return view('user.allfixedtours', compact('data'));
        } else {
            $data = Toursproduct::where('type', \Request::session()->get('whoami'))->paginate(9);
            return view('user.allfixedtours', compact('data'));
        }
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function tours($id)
    {
        $data = Toursproduct::where('type', \Request::session()->get('whoami'))->find($id);
        return view('user.tours', compact('data'));
    }

    //Cart Page

    public function cartpage($id)
    {
        // if (Auth::id()) {
        //     return redirect()->back();
        // } else {
        //     return redirect('login');
        // }
        $data = Product::find($id);
        return view('user.cartpage', compact('data'));
    }

    public function visacheckout($id)
    {


        $data = Product::find($id);
        return view('user.visacheckout', compact('data'));
    }
    public function cartView()
    {
        return view('user.cartView');
    }

    public function remove(Request $request)
    {

        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Package removed successfully');
        }
    }
    public function cancel()
    {
        dd('Sorry you payment is canceled');
    }

    public function success(Request $request)
    {
        session()->forget('cart');
        $msg = 'Your booking has been received. You will be contacted over the same. Thank you!';
        return redirect('/allfixedtours')->with('success', $msg);

        dd('Something is wrong.');
    }
}
