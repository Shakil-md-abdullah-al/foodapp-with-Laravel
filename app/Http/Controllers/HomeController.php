<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Chef;
use App\Models\Contact;
use App\Models\CustomOrder;
use App\Models\Event;
use App\Models\Join;
use App\Models\MenuCart;
use App\Models\MenuCartOrder;
use App\Models\Package;
use App\Models\PkgCart;
use App\Models\PkgOrder;
use App\Models\Platter;
use App\Models\Review;
use App\Models\User;
//use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use PDF;
Use DB;
use App\Models\Special;


class HomeController extends Controller
{
    public function index()
    {
        $product=Product::with('productRating')->orderBy('created_at', 'desc')->get();
//        dd($product);
        $Rice=Product::where('category','rice')->get();
//        dd($Rice);
        $vegetable=Product::where('category','vagetable')->get();
        $meat=Product::where('category','meat')->get();
        $softDrinks=Product::where('category','soft drinks')->get();
        $lacchi=Product::where('category','lacchi')->get();
        $fish=Product::where('category','fish')->get();

        return view('user.home', [
          'products' => Product::orderBy('created_at', 'desc')->take(12)->get(),
          'packages' => Package::take(3)->get(),
          'platters' => Platter::orderBy('created_at', 'desc')->take(10)->get(),
            'review'=>Review::all(),
            'Rice'=>$Rice,
            'vegetable'=>$vegetable,
            'meat'=>$meat,
            'softDrinks'=>$softDrinks,
            'lacchi'=>$lacchi,
            'fish'=>$fish,
            'special' => Special::orderBy('created_at', 'desc')->take(1)->get(),
      ]);
    }

    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype=='1')
        {
            return view('admin.home',[
                'products'=>Product::orderBy('created_at', 'desc')->get()
            ]);
        }elseif($usertype=='2')
        {
            $Rice=Product::where('category','rice')->get();
//        dd($Rice);
            $vegetable=Product::where('category','vagetable')->get();
            $meat=Product::where('category','meat')->get();
            $softDrinks=Product::where('category','soft drinks')->get();
            $lacchi=Product::where('category','lacchi')->get();
            $fish=Product::where('category','fish')->get();

            return view('user.home', [
                'products' => Product::orderBy('created_at', 'desc')->take(12)->get(),
                'packages' => Package::take(3)->get(),
                'Rice'=>$Rice,
                'vegetable'=>$vegetable,
                'meat'=>$meat,
                'softDrinks'=>$softDrinks,
                'lacchi'=>$lacchi,
                'fish'=>$fish,
                'platters' => Platter::orderBy('created_at', 'desc')->take(10)->get(),
                'special' => Special::orderBy('created_at', 'desc')->take(1)->get(),
            ]);
        }else
            {
                $Rice=Product::where('category','rice')->get();
//        dd($Rice);
            $vegetable=Product::where('category','vagetable')->get();
            $meat=Product::where('category','meat')->get();
            $softDrinks=Product::where('category','soft drinks')->get();
            $lacchi=Product::where('category','lacchi')->get();
            $fish=Product::where('category','fish')->get();
                return view('user.home', [
                    'products' => Product::orderBy('created_at', 'desc')->take(12)->get(),
                    'packages' => Package::take(3)->get(),
                    'Rice'=>$Rice,
                    'vegetable'=>$vegetable,
                    'meat'=>$meat,
                    'softDrinks'=>$softDrinks,
                    'lacchi'=>$lacchi,
                    'fish'=>$fish,
                    'platters' => Platter::orderBy('created_at', 'desc')->take(10)->get(),
                    'special' => Special::orderBy('created_at', 'desc')->take(1)->get(),
                ]);
        }
    }


//    All Products
    public function allProdducts()
    {

        return view('user.products.all-products',
        [
            'products'=>Product::orderBy('created_at', 'desc')->get()
        ]);
    }
    public function productDetails($id)
    {
//        return view('user.products.product-details',
//        [
//            'product'=>Product::find($id)
//        ]);
        $product = Product::findOrFail($id);

        // Fetch related products from the same category, excluding the current product
        $relatedProducts = Product::where('category', $product->category)
            ->where('id', '!=', $product->id)
            ->limit(5) // Limit the number of related products
            ->get();

        return view('user.products.product-details', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
        ]);
    }

    public function addCart(Request $request, $id)
    {
        if (Auth::id()) {
            $userId = Auth::user(); // Get the authenticated user's ID
//            dd($userId);
            $products = Product::find($id);
            $platter = Platter::find($id);
//            dd($platter);
            Cart::saveCart($request, $id, $userId, $products,$platter);
            return back()->with('message', 'Product added to cart successfully.');

        } else {
            return redirect()->route('login')->with('message', 'Please log in to add products to cart.');
        }
    }

//    public function addCart(Request $request, $id)
//    {
//        $now = time(); // Get the current UNIX timestamp
//        $currentHour = date('H', $now); // Extract the current hour (24-hour format)
//        $currentMinute = date('i', $now); // Extract the current minute
//
//        // Check if it's within the allowed ordering time (between 10:00 AM and 9:00 PM)
//        if (($currentHour >= 10 && $currentMinute >= 0) && ($currentHour <= 20 && $currentMinute <= 59)) {
//            if (Auth::id()) {
//                $userId = Auth::user(); // Get the authenticated user's ID
////            dd($userId);
//                $products = Product::find($id);
//                $platter = Platter::find($id);
////            dd($platter);
//                Cart::saveCart($request, $id, $userId, $products,$platter);
//                return back()->with('message', 'Product added to cart successfully.');
//
//            } else {
//                return redirect()->route('login')->with('message', 'Please log in to add products to cart.');
//            }
//        } else {
//            return back()->with('message', 'You can only make orders between 10:00 AM and 9:00 PM.');
//        }
//    }


    public function showCart()
    {
        $userId = Auth::id(); // Get the authenticated user's ID
        $cartItems = Cart::where('user_id', $userId)->get(); // Retrieve cart items for the user

        return view('user.products.show_cart', [
            'cart' => $cartItems
        ]);
    }

    public function delCart($id)
    {
//        dd($id);
        $product = Cart::find($id);
        if($product->image){
            if(file_exists($product->image)){
                unlink($product->image);
            }
        }
        $product->delete();
        return back();
    }
    public function cashOrder()
    {

            $userId = Auth::id(); // Get the authenticated user's ID
//            dd($userId);

        $data = Cart::where('user_id','=',$userId)->get();
//        dd($data);


        foreach ($data as $data)
        {
            $order = new Order();
            $order->name =$data->name;
            $order->email =$data->email;
            $order->phone =$data->phone;
            $order->address =$data->address;
            $order->user_id =$data->user_id;

            $order->product_title =$data->product_title;
            $order->quantity =$data->quantity;
            $order->price =$data->price;
            $order->image =$data->image;
            $order->product_id =$data->product_id;

            $order->payment_status ='COD';
            $order->delivery_status ='Processing';

            $order->save();
            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }
        return back()->with('message',"We have Revived Your Order. We Will Contact you soon");
    }

    public function showOrder()
    {
        if (Auth::id()){
            $user = Auth::user();
            $userid = $user->id;

            $orders = Order::where('user_id','=',$userid)->get();
            return view('user.order.show_order',compact('orders'));
        }else
            return $this->redirect('login');
    }
    public function cancelOrder($id)
    {
        $product = Order::find($id);
        if($product->image){
            if(file_exists($product->image)){
                unlink($product->image);
            }
        }
        $product->delete();
        return back();
    }

//    public function menuCart(Request $request, $id)
//    {
//        if (Auth::check()) {
//            // User is authenticated
//            $userId = Auth::user();
//            $platter = Platter::find($id);
//
//            if ($platter) {
//                // Call the saveMenuCart function to add the item to the cart
//                MenuCart::saveMenuCart($request, $id, $userId, $platter);
//
//                return back()->with('message', 'Product added to cart successfully.');
//            } else {
//                return back()->with('error', 'Product not found.'); // Handle the case where the product is not found
//            }
//        } else {
//            // User is not authenticated, redirect to the login page
//            return redirect()->route('login')->with('message', 'Please log in to add products to the cart.');
//        }
//
//    }

    public function menuCart(Request $request, $id)
    {
        $now = time(); // Get the current UNIX timestamp
        $currentHour = date('H', $now); // Extract the current hour (24-hour format)
        $currentMinute = date('i', $now); // Extract the current minute

        // Check if it's within the allowed ordering time (between 10:00 AM and 9:00 PM)
        if (($currentHour >= 10 && $currentMinute >= 0) && ($currentHour <= 20 && $currentMinute <= 59)) {
            if (Auth::check()) {
                // User is authenticated
                $userId = Auth::user();
                $platter = Platter::find($id);

                if ($platter) {
                    // Call the saveMenuCart function to add the item to the cart
                    MenuCart::saveMenuCart($request, $id, $userId, $platter);

                    return back()->with('message', 'Product added to cart successfully.');
                } else {
                    return back()->with('error', 'Product not found.'); // Handle the case where the product is not found
                }
            } else {
                // User is not authenticated, redirect to the login page
                return redirect()->route('login')->with('message', 'Please log in to add products to the cart.');
            }
        } else {
            return back()->with('message', 'You can only make orders between 10:00 AM and 9:00 PM.');
        }
    }


    public function showMenuCart()
    {
        $userId = Auth::id(); // Get the authenticated user's ID
        $cartItems = MenuCart::where('user_id', $userId)->get(); // Retrieve cart items for the user

        return view('user.products.show_menu_cart', [
            'cart' => $cartItems
        ]);
    }

    public function delMenuCart($id)
    {
//        dd($id);
        $product = MenuCart::find($id);
        $product->delete();
        return back();
    }

    public function cashOrderPlatter()
    {

        $userId = Auth::id(); // Get the authenticated user's ID
//            dd($userId);

        $data = MenuCart::where('user_id','=',$userId)->get();
//        dd($data);


        foreach ($data as $data)
        {
            $order = new MenuCartOrder();
            $order->name =$data->name;
            $order->email =$data->email;
            $order->phone =$data->phone;
            $order->address =$data->address;
            $order->user_id =$data->user_id;

            $order->p_name =$data->name;
            $order->quantity =$data->quantity;
            $order->price =$data->price;
            $order->product_id =$data->p_id;

            $order->payment_status ='COD';
            $order->delivery_status ='Processing';

            $order->save();
            $cart_id = $data->id;
            $cart = MenuCart::find($cart_id);
            $cart->delete();
        }
        return back()->with('message',"We have Revived Your Order. We Will Contact you soon");
    }

    public function showMenuOrder()
    {
        if (Auth::id()){
            $user = Auth::user();
            $userid = $user->id;

            $orders = MenuCartOrder::where('user_id','=',$userid)->get();
            return view('user.order.menu-order',compact('orders'));
        }else
            return $this->redirect('login');
    }

    public function cancelMenuOrder($id)
    {
        $product = MenuCartOrder::find($id);
        $product->delete();
        return back();
    }


    public function packageCart(Request $request, $id)
    {
        if (Auth::check()) {
            // User is authenticated
            $userId = Auth::user();
            $package = Package::find($id);

            if ($package) {
                // Call the saveMenuCart function to add the item to the cart
                PkgCart::savePackageCart($request, $id, $userId, $package);

                return back()->with('message', 'Product added to cart successfully.');
            } else {
                return back()->with('error', 'Product not found.'); // Handle the case where the product is not found
            }
        } else {
            // User is not authenticated, redirect to the login page
            return redirect()->route('login')->with('message', 'Please log in to add products to the cart.');
        }

    }

    public function showPkgCart()
    {
        $userId = Auth::id(); // Get the authenticated user's ID
        $cartItems = PkgCart::where('user_id', $userId)->get(); // Retrieve cart items for the user

        return view('user.products.show_pkg_cartt', [
            'cart' => $cartItems
        ]);
    }

    public function delPkgCart($id)
    {
//        dd($id);
        $product = PkgCart::find($id);
        $product->delete();
        return back();
    }

    public function cashOrderPlackage()
    {

        $userId = Auth::id(); // Get the authenticated user's ID
//            dd($userId);

        $data = PkgCart::where('user_id','=',$userId)->get();
//        dd($data);


        foreach ($data as $data)
        {
            $order = new PkgOrder();
            $order->name =$data->name;
            $order->email =$data->email;
            $order->phone =$data->phone;
            $order->address =$data->address;
            $order->user_id =$data->user_id;

            $order->p_name =$data->p_name;
            $order->quantity =$data->quantity;
            $order->price =$data->price;
            $order->product_id =$data->p_id;

            $order->payment_status ='COD';
            $order->delivery_status ='Processing';

            $order->save();
            $cart_id = $data->id;
            $cart = PkgCart::find($cart_id);
            $cart->delete();
        }
        return back()->with('message',"We have Revived Your Order. We Will Contact you soon");
    }

    public function showPackageOrder()
    {
        if (Auth::id()){
            $user = Auth::user();
            $userid = $user->id;

            $orders = PkgOrder::where('user_id','=',$userid)->get();
            return view('user.order.package-order',compact('orders'));
        }else
            return $this->redirect('login');
    }

    public function cancelPkgOrder($id)
    {
        $product = PkgOrder::find($id);
        $product->delete();
        return back();
    }


    public function pakagesView()
    {

    }

    public function join()
    {
        return view('user.join.view-join');
    }

    public function joinStr(Request $request)
    {
        Join::saveJoin($request);

        return back()->with('message', 'Recuest Sent Successfully. We will contact you soon');
    }





    public function contactUs(Request $request)
    {
        if (Auth::check()) {
            try {
//                dd($request);
                Contact::saveMessage($request); // Assuming you have a static method saveMessage in your Contact model

                return back()->with('message', 'Added Successfully');
            } catch (\Exception $e) {
                return back()->with('message', 'Failed to add. Please try again.');
            }
        } else {
            return redirect()->route('login'); // Redirect to the login route
        }
    }

    public function contact()
    {
        return view('user.pages.contact');
    }


    public function review(Request $request, $id)
    {
        if (Auth::id()) {
            $userId = Auth::user(); // Get the authenticated user's ID
//            dd($userId);
            // Implement the add to cart logic here using the $userId
            $products = Product::find($id);
            $platter = Platter::find($id);
//            dd($platter);
            Review::saveReview($request, $id, $userId);
            return back()->with('message', 'Review added successfully.');
        } else {
            return redirect()->route('login')->with('message', 'Please log in to add products to cart.');
        }
    }

    public function book()
    {
        if (Auth::id()) {
            $userId = Auth::user();
            return view('user.event.book');
        }
        else
            return redirect('login');
    }

    public function eventStore(Request $request)
    {
        if (Auth::check()) {
            $userId = Auth::id(); // Get the authenticated user's ID

            // Make sure the saveEvent method is correctly defined in the Event model
            Event::saveEvent($request, $userId);

            return back()->with('message', 'Event added to cart successfully.');
        } else {
            return redirect()->route('login')->with('message', 'Please log in First.');
        }
    }
    public function myeventShow()
    {
        $data = Event::orderBy('created_at', 'desc')->get();
        return view('user.event.new-event', compact('data'));

    }



    public function customStore(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user(); // Get the authenticated user object

            CustomOrder::saveCustom($request, $user);

            return back()->with('message', 'Custom order added successfully.');
        } else {
            return redirect()->route('login')->with('message', 'Please log in first.');
        }
    }
    public function myCustomOrder()
    {
        $data = CustomOrder::orderBy('created_at', 'desc')->get();
        return view('user.order.custom-order', compact('data'));
    }


    public function cheff()
    {
        $chef= Chef::all();
//        dd($chef);
        return view('user.chef.chef',[
            'chefs'=>$chef
        ]);
    }



}
