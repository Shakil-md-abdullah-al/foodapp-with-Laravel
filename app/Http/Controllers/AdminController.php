<?php

namespace App\Http\Controllers;
use App\Models\Category;

use App\Models\Contact;
use App\Models\CustomOrder;
use App\Models\Event;
use App\Models\Join;
use App\Models\MenuCartOrder;
use App\Models\Order;
use App\Models\PkgOrder;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class AdminController extends Controller
{

//    Category Section Control
   public function viewCategory()
   {
       return view('admin.category.category',
       [
           'cat'=>Category::all()
       ]);
   }

   public function stoteCategory(Request $request)
   {
       try {
           Category::saveCategory($request);

           return back()->with('message', 'Added Successfully');
       } catch (\Exception $e) {
           return back()->with('message', 'Failed to add. Please try again.');
       }
   }

   public function deleteCategory($id)
   {
       $category = Category::find($id);
       $category->delete();
       return back()->with('message', 'Delete Successfully');;
   }

   public function editCategory($id)
   {
       return view('admin.category.edit-category',[
           'category'=>Category::find($id)
       ]);
   }
   public function categoryUpdate(Request $request, string $id)
   {
       try {
           Category::updateCat($request,$id);

           return redirect('viewcategory')->with('message', 'Updated Successfully');
       } catch (\Exception $e) {
           return redirect('viewcategory')->with('message', 'Failed to Update. Please try again.');
       }
   }

   public function order()
   {
       return view('admin.order.show',[
           'orders'=>Order::orderBy('created_at', 'desc')->get()
       ]);
   }

   public function deliver($id)
   {
       $order = Order::find($id);

       $order->delivery_status='Delivered';
       $order->payment_status='Paid';
       $order->save();

       return back();
   }

   public function printPdf($id)
   {
       $data = Order::find($id);
       $pdf= PDF::loadView('admin.order.pdf',compact('data'));

       return $pdf->download('order_details.pdf');
   }

    public function menuOrder()
    {
        return view('admin.order.platter',[
            'orders'=>MenuCartOrder::orderBy('created_at', 'desc')->get()
        ]);
    }
    public function deliverPlatter($id)
    {
        $order = MenuCartOrder::find($id);

        $order->delivery_status='Delivered';
        $order->payment_status='Paid';
        $order->save();

        return back();
    }
    public function printPlatterPdf($id)
    {
        $data = MenuCartOrder::find($id);
        $pdf= PDF::loadView('admin.order.platterpdf',compact('data'));

        return $pdf->download('plater_order_details.pdf');
    }


    public function pkgOrder()
    {
        return view('admin.order.package',[
            'orders'=>PkgOrder::orderBy('created_at', 'desc')->get()
        ]);
    }
    public function deliverPackage($id)
    {
        $order = PkgOrder::find($id);

        $order->delivery_status='Delivered';
        $order->payment_status='Paid';
        $order->save();

        return back();
    }
    public function printPkPdf($id)
    {
        $data = PkgOrder::find($id);
        $pdf= PDF::loadView('admin.order.packagepdf',compact('data'));

        return $pdf->download('package_order_details.pdf');
    }


    public function showContact()
    {
        $data = Contact::orderBy('created_at', 'desc')->get();
        return view('admin.users.view-query', compact('data'));

    }
    public function deliverQuery($id)
    {
        $query = Contact::find($id);

        $query->status='Acton Taken';
        $query->save();

        return back();
    }

    public function eventShow()
    {
        $data = Event::orderBy('created_at', 'desc')->get();
        return view('admin.event.new-event', compact('data'));

    }

    public function deliverEvent($id)
    {
        $order = Event::find($id);

        $order->status='Accepted';
        $order->save();

        return back();
    }

    public function customShow()
    {
        $data = CustomOrder::orderBy('created_at', 'desc')->get();
        return view('admin.order.custom', compact('data'));

    }

    public function joinRequest()
    {
        $data = Join::orderBy('created_at', 'desc')->get();
        return view('admin.users.request', compact('data'));

    }
}
