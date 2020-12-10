@extends('layouts.master')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card ">
          <div class="card-header ">
            <h4 class="card-title">user profile

            </h4>
          </div>
          <div class="card-body ">
            <ul class="nav nav-pills nav-pills-rose" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist">
                  info
                </a>
              </li>

            </ul>
            <div class="tab-content tab-space">
              <div class="tab-pane active" id="link1">

                <br />
                <br /> Email -{{$user->email}}-
                <br />
                <br />
              </div>


            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="#pablo">

            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">{{$user->user_type->name}}</h6>
            <h4 class="card-title">{{$user->name}}</h4>
            <p class="card-description">

            </p>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
