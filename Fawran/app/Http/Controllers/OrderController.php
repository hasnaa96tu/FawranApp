<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Supermarket;
use App\Pharmacy;
use App\Customer;
use App\Supermarket_order_detail;
use App\Pharmacy_order_detail;
class OrderController extends Controller
{
    //
    function __construct()
    {
         $this->middleware('permission:order-list|order-create|order-edit|order-delete', ['only' => ['index','show']]);
         $this->middleware('permission:order-create', ['only' => ['create','store']]);
         $this->middleware('permission:order-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:order-delete', ['only' => ['destroy']]);
    }
    /**
        * Display a listing of the resource.
        *
        * @return Response
        */
        public function index()
        {
            //
            $sup=Order::where('type_id',1)->get();
            $phar=Order::where('type_id',2)->get();
            return view('order.index')
            ->with('sup',$sup)
            ->with('phar',$phar)
            ;
        }
        public function index_super($id)
        {
            //

            $supp=Supermarket::where('user_id',$id)->first();
            $sup=Supermarket_order_detail::where('supermarket_id',$supp->id)->get();

            return view('order.indexSuper')
            ->with('sup',$sup)

            ;
        }
        public function index_phar($id)
        {
            //
             $p=Pharmacy::where('user_id',$id)->first();
            $phar=Pharmacy_order_detail::where('Pharmacy_id',$p->id)->get();
            return view('order.indexPhar')

            ->with('phar',$phar)
            ;
        }
        public function accept($id)
        {
            //
            $order=Order::findOrFail($id);
            $order->status=2;
            $order->update();
            return redirect('/order');

        }
        public function reject(Request $request,$id)
        {
            //
            $order=Order::findOrFail($id);
            $order->status=3;
          $order->rejection_note=$request->rn;
          $order->update();
            return redirect('/order');
        }
        public function search(Request $request)
        {
            //

            if(!empty($request->id) && !empty( $request->date)){

                   $order=Order::where('id',$request->id)->where('request_date',$request->date)->get();
                  return view('order.search')
                  ->with('order',$order);
            }
            elseif(!empty($request->id)){
              $order=Order::where('id',$request->id)->get();
             return view('order.search')
             ->with('order',$order);

           }elseif(!empty($request->date )){

             $order=Order::where('request_date',$request->date)->get();
            return view('order.search')
            ->with('order',$order);
          }else{


            $sup=Order::where('type_id',1)->get();
            $phar=Order::where('type_id',2)->get();
            return view('order.index')
            ->with('sup',$sup)
            ->with('phar',$phar)
            ;
          }



        }
        public function getCustomerOrders($id)
        {
            //
            $c=Customer::where('user_id',$id)->first();
            $sup=Order::where('type_id',1)->where('customer_id',$c->id)->get();
            $phar=Order::where('type_id',2)->where('customer_id',$c->id)->get();


            return view('order.index')
            ->with('sup',$sup)
            ->with('phar',$phar);
        }
    /**
        * Show the form for creating a new resource.
        *
        * @return Response
        */
    public function create()
    {
        //


    }

    /**
        * Store a newly created resource in storage.
        *
        * @return Response
        */
    public function store(Request $request)
    {
        //

    }

    /**
        * Display the specified resource.
        *
        * @param  int  $id
        * @return Response
        */
    public function show($id)
    {
        //

        $order=Order::find($id);
        if ($order->type_id == 1){
          $items=Supermarket_order_detail::where('order_id',$id)->get();
        }elseif($order->type_id == 2){
          $items=Pharmacy_order_detail::where('order_id',$id)->get();
        }

        return view('order.show')
        ->with('order',$order)
        ->with('items',$items)
        ;
    }

    /**
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return Response
        */
    public function edit($id)
    {
        //

    }

    /**
        * Update the specified resource in storage.
        *
        * @param  int  $id
        * @return Response
        */
    public function update(Request $request,$id)
    {
        //




    }

    /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return Response
        */
    public function destroy($id)
    {
        //


        $order=Order::findOrFail($id);

        $order->delete();

        return redirect('/order');
    }
}
