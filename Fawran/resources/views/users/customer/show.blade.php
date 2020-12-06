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
                 facebook -blahblah-
                <br />
                <br /> Email -blah@blah.com-
                <br />
                <br />
              </div>
              <div class="tab-pane" id="link2">
                    home address :efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                <br />
                <br /> Dele address :Dramatically maintain clicks-and-mortar solutions without functional solutions.
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="#pablo">
              <img class="img" src="../../assets/img/faces/marc.jpg" />
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">Customer</h6>
            <h4 class="card-title">Alec Thompson</h4>
            <p class="card-description">
            093-087-9653
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
