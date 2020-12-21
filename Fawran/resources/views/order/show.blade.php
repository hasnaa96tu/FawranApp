
@extends('layouts.master')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header card-header-icon card-header-rose">
              <div class="card-icon">
                <i class="material-icons">assignment</i>
              </div>
              <h4 class="card-title ">order details</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      no.
                    </th>
                    <th>
                      Name
                    </th>
                    <th>
                      value
                    </th>

                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        order type
                      </td>
                      <td>
                        {{$order->type->name}}
                      </td>

                    </tr>
                    <tr>
                      <td>
                        2
                      </td>
                      <td>
                        request date
                      </td>
                      <td>
                        {{$order->request_date}}
                      </td>

                    </tr>
                    <tr>
                      <td>
                        3
                      </td>
                      <td>
                        delivery date
                      </td>
                      <td>
                        {{$order->delivery_date}}
                      </td>

                    </tr>
                    <tr>
                      <td>
                        4
                      </td>
                      <td>
                        status
                      </td>
                      <td>
                        @if($order->status == 1 )
                        pending
                        @elseif($order->status == 2)
                        active
                        @endif
                      </td>

                    </tr>
                    <tr>
                      <td>
                        5
                      </td>
                      <td>
                        distance
                      </td>
                      <td>
                        {{$order->distance}} km
                      </td>

                    </tr>
                    <tr>
                      <td>
                        6
                      </td>
                      <td>
                      cost
                      </td>
                      <td>
                      {{$order->cost}} SYP
                      </td>

                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header card-header-icon card-header-rose">
              <div class="card-icon">
                <i class="material-icons">assignment</i>
              </div>
              <h4 class="card-title ">items</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      no.
                    </th>
                    <th>
                    item
                    </th>
                    <th>
                      number
                    </th>
                    <th>
                      cost
                    </th>
                  </thead>
                  <tbody>

            @foreach($items as $i)

                    <tr>

                      <td>
                    {{$loop->iteration}}
                      </td>
                      <td>
                        @if($i->order->type_id == 2)
                      {{$i->product->name}}
                      @elseif($i->order->type_id == 3)
                      {{$i->drug->name}}
                      @endif
                      </td>
                      <td>
                    {{$i->quantity}}
                      </td>
                      <td>
                    {{$i->total_price}}SYP
                      </td>
                    </tr>

                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
  @endsection
