@extends('layouts.master')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card ">
          <div class="card-header ">
            <h4 class="card-title">customer profile

            </h4>
          </div>
          <div class="card-body ">
            <ul class="nav nav-pills nav-pills-rose" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist">
                  info
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                addresses
                </a>
              </li>

            </ul>
            <div class="tab-content tab-space">
              <div class="tab-pane active" id="link1">

                <br />
                <br /> Email -{{$cus->user->email}}-
                <br />
                <br />
              </div>
              <div class="tab-pane" id="link2">

                <br />
                <br />{{$cus->location}}
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="#pablo">
              <img class="img" src="../../assets/img/{{$cus->image}}" />
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">{{$cus->user->user_type->name}}</h6>
            <h4 class="card-title">{{$cus->fullname}}</h4>
            <p class="card-description">
          {{$cus->phone_number}}
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
