<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Supermarket_order_detail;
use App\Pharmacy_order_detail;
class OrderController extends Controller
{
    //
    /**
        * Display a listing of the resource.
        *
        * @return Response
        */
        public function index()
        {
            //
            $sup=Order::where('type_id',2)->get();
            $phar=Order::where('type_id',3)->get();
            return view('order.index')
            ->with('sup',$sup)
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


            $sup=Order::where('type_id',2)->get();
            $phar=Order::where('type_id',3)->get();
            return view('order.index')
            ->with('sup',$sup)
            ->with('phar',$phar)
            ;
          }


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
        if ($order->type_id == 2){
          $items=Supermarket_order_detail::where('order_id',$id)->get();
        }elseif($order->type_id == 3){
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
