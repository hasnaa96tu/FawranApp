@extends('layouts.master')
@section('search')
<form class="navbar-form" action ="{{ url('/search/orders/results')}}" method = "get" enctype="multipart/form-data">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<div class="form-group bmd-form-group is-filled mr-5">

                                <input type="text" class="form-control datetimepicker" value="" name="date" placeholder="search by date">
                                <span class="material-input"></span>
                                <span class="material-input"></span>
                              </div>
  <div class="input-group no-border mr-5">
    <input type="text" value="" name='id' class="form-control" placeholder="Search by order number ">
    <button type="submit" class="btn btn-white btn-round btn-just-icon">
      <i class="material-icons">search</i>
      <div class="ripple-container"></div>
    </button>
  </div>
</form>
@endsection
@section('content')


  <div class="content">
    <div class="container-fluid">


      <h3> search results</h3>
      <br>
      <div class="row">
          <div class="col-md-12 ml-auto mr-auto">
        <div class="page-categories ">

          <br />


              <div class="row">
          @if($order == null)
                @foreach($order as $s)
                @if($s->status == 1)
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">autorenew</i>
                    </div>

                    <p class="card-category">order date: {{$s->request_date}}</p>
                    <h3 class="card-title">{{$s->location}} </h3>
                      <p class="card-category"> distance {{$s->distance}}km</p>
                      <br>
                      <a href="/order/{{$s->id}}"><button class="btn btn-sm ">more details<div class="ripple-container"></div></button></a>

                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>price {{$s->cost}}SYP</h4>
                    </div>

                    <div class="btn-group">
                      <button type="button" class="btn btn-sm " data-toggle="modal" data-target="#rejectModal">reject</button>
                      <a href="/order/{{$s->id}}/accept"><button type="button" class="btn btn-sm ">confirm</button></a>

                    </div>

                  </div>
                </div>
              </div>
              @elseif($s->status == 2)
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">check_circle</i>
                </div>
                <p class="card-category">order date: {{$s->request_date}}</p>
                <h3 class="card-title">{{$s->location}} </h3>
                  <p class="card-category"> distance {{$s->distance}}km</p>
                  <br>
                  <a href="/order/{{$s->id}}"><button class="btn btn-sm ">more details<div class="ripple-container"></div></button></a>

              </div>
              <div class="card-footer">
                <div class="price">
                  <h4>price {{$s->cost}}SYP</h4>
                </div>


            </div>
          </div>
        </div>

          @endif
          <!-- reject modal -->
          <div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-notice">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="myModalLabel">why do you want to reject this order?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">close</i>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="instruction">
                    <form class="form-horizontal" action ="{{route('order.reject',$s->id)}}" method = "post" enctype="multipart/form-data">
                              <input type="hidden" name="_method" value="PUT">
                           <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <div class="row">



                             <div class="col-12">
                               <div class="form-group has-default">
                                 <input type="text" class="form-control" name="rn">
                               </div>
                             </div>
                    </div>
                  </div>


                </div>
                <div class="modal-footer justify-content-center">
                  <button type="submit" class="btn btn-rose btn-round" >save!</button>
                </div>
              </form>
              </div>
            </div>
          </div>
          <!-- end notice modal -->
          @endforeach
            </div>

          </div>


      </div>

</div>
@else

  <div class="alert alert-danger col-10">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
          </button>
          <span>
            <b> sorry </b> no results found</span>
        </div>

        @endif
  </div>
  </div>


@endsection
  @section('script')
  <!-- Chartist JS -->

  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      md.initDashboardPageCharts();
    });
  </script>

  <script>
    $(document).ready(function() {
      //init DateTimePickers
      md.initFormExtendedDatetimepickers();
    });
  </script>
  @endsection
