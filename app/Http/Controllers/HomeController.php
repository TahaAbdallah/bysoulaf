<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Client;
use App\Models\Message;
use App\Models\HomeLayout;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => [
    //         'login'
    //     ]]);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }


    public function index()
    {
        $clients = Client::latest()->get();
        $products = Product::latest()->get();
        return view('index')
            ->with('clients', $clients)
            ->with('products', $products);
    }

    public function furniture()
    {
        $products = Product::latest()->get();
        return view('furniture')
            ->with('products', $products);
    }

    public function portfolio()
    {
        $clients = Client::latest()->get();
        return view('portfolio')->with('clients', $clients);
    }

    public function about()
    {
        return view('about');
    }

    public function history()
    {
        return view('history');
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        return view('admin.login');
    }


    // #################### ADMIN

    public function dashboard()
    {
        $admins = User::latest()->get();
        return view('admin.dashboard')->with('admins', $admins);
    }

    public function addAdmin()
    {
        return view('admin.addAdmin');
    }

    public function saveAdmin(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $admins = User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        $admins->save();

        return redirect()->back();
    }

    public function destroyAdmin($id)
    {
        $admins = User::find($id);
        $admins->delete();

        return redirect()->back();
    }


    public function addProduct()
    {
        return view('admin.addProduct');
    }

    public function viewProducts()
    {
        $products = Product::latest()->get();
        return view('admin.viewProducts')->with('products', $products);
    }

    public function saveProduct(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|image',
        ]);

        $image = $request->image;
        $newimg = time() . $image->getClientOriginalName();
        $image->move('uploads/products/', $newimg);

        $products = Product::create([
            'name' => $request->name,
            'image' => 'uploads/products/' . $newimg,
        ]);

        $products->save();

        return redirect()->route('viewProducts');
    }

    public function destroyProduct($id)
    {
        $products = Product::find($id);
        $products->delete();

        return redirect()->back();
    }

    public function addClient()
    {
        return view('admin.addClient');
    }

    public function viewClients()
    {
        $clients = Client::latest()->get();
        return view('admin.viewClients')->with('clients', $clients);
    }

    public function saveClient(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|image',
        ]);

        $image = $request->image;
        $newimg = time() . $image->getClientOriginalName();
        $image->move('uploads/clients/', $newimg);

        $clients = Client::create([
            'name' => $request->name,
            'image' => 'uploads/clients/' . $newimg,
        ]);

        $clients->save();

        return redirect()->route('viewClients');
    }

    public function destroyClient($id)
    {
        $clients = Client::find($id);
        $clients->delete();

        return redirect()->back();
    }


    public function viewMessages()
    {
        $messages = Message::latest()->get();
        return view('admin.viewMessages')->with('messages', $messages);
    }

    public function saveMessage(Request $request)
    {
        $this->validate($request, [
            'client_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|max:8',
            'message' => 'required',
        ]);

        $messages = Message::create([
            'client_name' => $request->client_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        $messages->save();

        return redirect()->back();
    }

    public function destroyMessage($id)
    {
        $messages = Message::find($id);
        $messages->delete();

        return redirect()->back();
    }

    // public function viewHomeLayout()
    // {
    //     return view('admin.viewHomeLayout');
    // }

    // public function saveHomeLayout(Request $request)
    // {
    //     $this->validate($request, [
    //         'row1_title1' => 'required',
    //         'row1_title2' => 'required',
    //         'row1_description' => 'required',
    //         'row2_title1' => 'required',
    //         'row2_title2' => 'required',
    //         'row2_description' => 'required',
    //         'row2_image' => 'required|image',
    //     ]);

    //     $row2_image = $request->row2_image;
    //     $newimg = time() . $row2_image->getClientOriginalName();
    //     $row2_image->move('uploads/home/', $newimg);

    //     $homeLayout = HomeLayout::create([
    //         'row1_title1' => $request->row1_title1,
    //         'row1_title2' => $request->row1_title2,
    //         'row1_description' => $request->row1_description,
    //         'row2_title1' => $request->row2_title1,
    //         'row2_title2' => $request->row2_title2,
    //         'row2_image' => 'uploads/clients/' . $newimg,
    //     ]);

    //     $homeLayout->save();

    //     return redirect()->back();
    // }

    // public function furnitureLayout()
    // {
    //     return view('admin.furnitureLayout');
    // }

    // public function aboutLayout()
    // {
    //     return view('admin.aboutLayout');
    // }

    // public function historyLayout()
    // {
    //     return view('admin.historyLayout');
    // }

    // public function contactLayout()
    // {
    //     return view('admin.contactLayout');
    // }
}
