@extends('layouts.master')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card ">
          <div class="card-header ">
            <h4 class="card-title">pharmacy profile

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
                availability
                </a>
              </li>

            </ul>
            <div class="tab-content tab-space">
              <div class="tab-pane active" id="link1">
                 location -blahblah-
                <br />
                <br /> Email -blah@blah.com-
                <br />
                <br />
              </div>
              <div class="tab-pane" id="link2">
                  drugs number 21
                <br />
                <br /> opening time 10 am   closing time 12 am
                  <br />
                    <br /> first day monday  second day sunday
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="#pablo">
              <img class="img" src="../../assets/img/card-p2.jpg" />
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">pharmacy</h6>
            <h4 class="card-title">Alec Thompson</h4>
            <p class="card-description">
            093-087-9653

            </p>
  <p class="card-category"><i class="material-icons">place</i> Barcelona, Spain</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-4 mt-3">
        <div class="card card-product">
          <div class="card-header card-header-image" data-header-animation="true">
            <a href="#pablo">
              <img class="img" src="/assets/img/card-m7.jpg">
            </a>
          </div>
          <div class="card-body">
            <div class="card-actions text-center">
              <button type="button" class="btn btn-danger btn-link fix-broken-card">
                <i class="material-icons">build</i> Fix Header!
              </button>
              <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                <i class="material-icons">art_track</i>
              </button>
              <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                <i class="material-icons">edit</i>
              </button>
              <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                <i class="material-icons">close</i>
              </button>
            </div>
            <h4 class="card-title">
              <a href="#pablo">Cozy 5 Stars Apartment</a>
            </h4>
            <div class="card-description">
              The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.
            </div>
          </div>
          <div class="card-footer">
            <div class="price">
              <h4>closing time</h4>
            </div>
            <div class="stats">
              <p class="card-category"><i class="material-icons">place</i> Barcelona, Spain</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-3">
        <div class="card card-product">
          <div class="card-header card-header-image" data-header-animation="true">
            <a href="#pablo">
              <img class="img" src="/assets/img/card-m7.jpg">
            </a>
          </div>
          <div class="card-body">
            <div class="card-actions text-center">
              <button type="button" class="btn btn-danger btn-link fix-broken-card">
                <i class="material-icons">build</i> Fix Header!
              </button>
              <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                <i class="material-icons">art_track</i>
              </button>
              <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                <i class="material-icons">edit</i>
              </button>
              <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                <i class="material-icons">close</i>
              </button>
            </div>
            <h4 class="card-title">
              <a href="#pablo">Cozy 5 Stars Apartment</a>
            </h4>
            <div class="card-description">
              The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.
            </div>
          </div>
          <div class="card-footer">
            <div class="price">
              <h4>closing time</h4>
            </div>
            <div class="stats">
              <p class="card-category"><i class="material-icons">place</i> Barcelona, Spain</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-3">
        <div class="card card-product">
          <div class="card-header card-header-image" data-header-animation="true">
            <a href="#pablo">
              <img class="img" src="/assets/img/card-m7.jpg">
            </a>
          </div>
          <div class="card-body">
            <div class="card-actions text-center">
              <button type="button" class="btn btn-danger btn-link fix-broken-card">
                <i class="material-icons">build</i> Fix Header!
              </button>
              <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                <i class="material-icons">art_track</i>
              </button>
              <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                <i class="material-icons">edit</i>
              </button>
              <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                <i class="material-icons">close</i>
              </button>
            </div>
            <h4 class="card-title">
              <a href="#pablo">Cozy 5 Stars Apartment</a>
            </h4>
            <div class="card-description">
              The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.
            </div>
          </div>
          <div class="card-footer">
            <div class="price">
              <h4>closing time</h4>
            </div>
            <div class="stats">
              <p class="card-category"><i class="material-icons">place</i> Barcelona, Spain</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-3">
        <div class="card card-product">
          <div class="card-header card-header-image" data-header-animation="true">
            <a href="#pablo">
              <img class="img" src="/assets/img/card-m7.jpg">
            </a>
          </div>
          <div class="card-body">
            <div class="card-actions text-center">
              <button type="button" class="btn btn-danger btn-link fix-broken-card">
                <i class="material-icons">build</i> Fix Header!
              </button>
              <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                <i class="material-icons">art_track</i>
              </button>
              <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                <i class="material-icons">edit</i>
              </button>
              <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                <i class="material-icons">close</i>
              </button>
            </div>
            <h4 class="card-title">
              <a href="#pablo">Cozy 5 Stars Apartment</a>
            </h4>
            <div class="card-description">
              The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.
            </div>
          </div>
          <div class="card-footer">
            <div class="price">
              <h4>closing time</h4>
            </div>
            <div class="stats">
              <p class="card-category"><i class="material-icons">place</i> Barcelona, Spain</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-3">
        <div class="card card-product">
          <div class="card-header card-header-image" data-header-animation="true">
            <a href="#pablo">
              <img class="img" src="/assets/img/card-m7.jpg">
            </a>
          </div>
          <div class="card-body">
            <div class="card-actions text-center">
              <button type="button" class="btn btn-danger btn-link fix-broken-card">
                <i class="material-icons">build</i> Fix Header!
              </button>
              <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                <i class="material-icons">art_track</i>
              </button>
              <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                <i class="material-icons">edit</i>
              </button>
              <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                <i class="material-icons">close</i>
              </button>
            </div>
            <h4 class="card-title">
              <a href="#pablo">Cozy 5 Stars Apartment</a>
            </h4>
            <div class="card-description">
              The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.
            </div>
          </div>
          <div class="card-footer">
            <div class="price">
              <h4>closing time</h4>
            </div>
            <div class="stats">
              <p class="card-category"><i class="material-icons">place</i> Barcelona, Spain</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-3">
        <div class="card card-product">
          <div class="card-header card-header-image" data-header-animation="true">
            <a href="#pablo">
              <img class="img" src="/assets/img/card-m7.jpg">
            </a>
          </div>
          <div class="card-body">
            <div class="card-actions text-center">
              <button type="button" class="btn btn-danger btn-link fix-broken-card">
                <i class="material-icons">build</i> Fix Header!
              </button>
              <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                <i class="material-icons">art_track</i>
              </button>
              <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                <i class="material-icons">edit</i>
              </button>
              <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                <i class="material-icons">close</i>
              </button>
            </div>
            <h4 class="card-title">
              <a href="#pablo">Cozy 5 Stars Apartment</a>
            </h4>
            <div class="card-description">
              The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.
            </div>
          </div>
          <div class="card-footer">
            <div class="price">
              <h4>closing time</h4>
            </div>
            <div class="stats">
              <p class="card-category"><i class="material-icons">place</i> Barcelona, Spain</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
