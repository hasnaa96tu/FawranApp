@extends('layouts.master')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-12">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="#pablo">
              <img class="img" src="../../assets/img/card-r3.jpg" />
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">supermarket</h6>
            <h4 class="card-title">Alec Thompson</h4>
            <p class="card-description">
            093-087-9653

            </p>
  <p class="card-category"><i class="material-icons">place</i> Barcelona, Spain</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12 ml-auto mr-auto">
      <div class="page-categories ">

        <br />
        <ul class="nav nav-pills nav-pills-rose nav-pills-icons justify-content-left" role="tablist">
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#link7" role="tablist">
            categories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " data-toggle="tab" href="#link8" role="tablist">
              profile
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link  " data-toggle="tab" href="#link6" role="tablist">
            configuration
            </a>
          </li>
        </ul>
        <div class="tab-content tab-space tab-subcategories">
          <div class="tab-pane" id="link7">
              <a href="/supermarket/create">   <button class="btn btn-rose ">add category<div class="ripple-container"></div></button></a>
            <div class="row mt-5">
              <div class="col-md-4 mt-3">
                <div class="card card-product">
                  <div class="card-header card-header-image" data-header-animation="true">
                    <a href="/supermarket/category/show">
                      <img class="img" src="/assets/img/card-m1.jpg">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="card-actions text-center">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                    <a href="/supermarket/category/show">  <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                        <i class="material-icons">art_track</i>
                      </button></a>
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
                      <img class="img" src="/assets/img/card-m2.jpg">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="card-actions text-center">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                    <a href="/supermarket/category/show">  <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                        <i class="material-icons">art_track</i>
                      </button></a>
                      <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                        <i class="material-icons">close</i>
                      </button>
                    </div>
                    <h4 class="card-title">
                      <a href="#pablo">Office Studio</a>
                    </h4>
                    <div class="card-description">
                      The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the night life in London, UK.
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>closing time</h4>
                    </div>
                    <div class="stats">
                      <p class="card-category"><i class="material-icons">place</i> London, UK</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-3">
                <div class="card card-product">
                  <div class="card-header card-header-image" data-header-animation="true">
                    <a href="#pablo">
                      <img class="img" src="/assets/img/card-m3.jpg">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="card-actions text-center">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                    <a href="/supermarket/category/show">  <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                        <i class="material-icons">art_track</i>
                      </button></a>
                      <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                        <i class="material-icons">close</i>
                      </button>
                    </div>
                    <h4 class="card-title">
                      <a href="#pablo">Beautiful Castle</a>
                    </h4>
                    <div class="card-description">
                      The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Milan.
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>closing time</h4>
                    </div>
                    <div class="stats">
                      <p class="card-category"><i class="material-icons">place</i> Milan, Italy</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-3">
                <div class="card card-product">
                  <div class="card-header card-header-image" data-header-animation="true">
                    <a href="#pablo">
                      <img class="img" src="/assets/img/card-m4.jpg">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="card-actions text-center">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                    <a href="/supermarket/category/show">  <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                        <i class="material-icons">art_track</i>
                      </button></a>
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
                      <img class="img" src="/assets/img/card-m5.jpg">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="card-actions text-center">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <a href="/supermarket/category/show">  <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                        <i class="material-icons">art_track</i>
                      </button></a>
                      <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                        <i class="material-icons">close</i>
                      </button>
                    </div>
                    <h4 class="card-title">
                      <a href="#pablo">Office Studio</a>
                    </h4>
                    <div class="card-description">
                      The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the night life in London, UK.
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>closing time</h4>
                    </div>
                    <div class="stats">
                      <p class="card-category"><i class="material-icons">place</i> London, UK</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-3">
                <div class="card card-product">
                  <div class="card-header card-header-image" data-header-animation="true">
                    <a href="#pablo">
                      <img class="img" src="/assets/img/card-m6.jpg">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="card-actions text-center">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <a href="/supermarket/category/show">  <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                        <i class="material-icons">art_track</i>
                      </button></a>
                      <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" class="btn btn-danger btn-link" rel="tooltip" data
                      -placement="bottom" title="Remove">
                        <i class="material-icons">close</i>
                      </button>
                    </div>
                    <h4 class="card-title">
                      <a href="#pablo">Beautiful Castle</a>
                    </h4>
                    <div class="card-description">
                      The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Milan.
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>closing time</h4>
                    </div>
                    <div class="stats">
                      <p class="card-category"><i class="material-icons">place</i> Milan, Italy</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>
          <div class="tab-pane active" id="link8">

              <div class="row">
                <div class="col-md-12">
                              <div class="card">
                                <div class="card-header card-header-icon card-header-rose">
                                  <div class="card-icon">
                                    <i class="material-icons">perm_identity</i>
                                  </div>
                                  <h4 class="card-title">Edit Profile -
                                    <small class="category">Complete your profile</small>
                                  </h4>
                                </div>
                                <div class="card-body">
                                  <form>
                                    <div class="row">
                                      <div class="col-md-5">
                                        <div class="form-group bmd-form-group">
                                          <label class="bmd-label-floating">Company (disabled)</label>
                                          <input type="text" class="form-control" disabled="">
                                        </div>
                                      </div>
                                      <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                          <label class="bmd-label-floating">Username</label>
                                          <input type="text" class="form-control">
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                          <label class="bmd-label-floating">Email address</label>
                                          <input type="email" class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                          <label class="bmd-label-floating">Fist Name</label>
                                          <input type="text" class="form-control">
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                          <label class="bmd-label-floating">Last Name</label>
                                          <input type="text" class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                          <label class="bmd-label-floating">Adress</label>
                                          <input type="text" class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                          <label class="bmd-label-floating">City</label>
                                          <input type="text" class="form-control">
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                          <label class="bmd-label-floating">Country</label>
                                          <input type="text" class="form-control">
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                          <label class="bmd-label-floating">Postal Code</label>
                                          <input type="text" class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label>About Me</label>
                                          <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                                            <textarea class="form-control" rows="5"></textarea>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <button type="submit" class="btn btn-rose pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                  </form>
                                </div>
                              </div>
                            </div>
          </div>

        </div>


          <div class="tab-pane " id="link6">
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
                            day
                          </th>
                          <th>
                            time
                          </th>

                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              1
                            </td>
                            <td>
                            sunday
                            </td>
                            <td>
                            from 8:00am to 10pm
                            </td>

                          </tr>
                          <tr>
                            <td>
                              2
                            </td>
                            <td>
                            monday
                            </td>
                            <td>
                              from 8:00am to 10pm
                            </td>

                          </tr>
                          <tr>
                            <td>
                              3
                            </td>
                            <td>
                              tuesday
                            </td>
                            <td>
                              from 8:00am to 10pm
                            </td>

                          </tr>
                          <tr>
                            <td>
                              4
                            </td>
                            <td>
                              wednesday
                            </td>
                            <td>
                            from 8:00am to 10pm
                            </td>

                          </tr>
                          <tr>
                            <td>
                              5
                            </td>
                            <td>
                            thursday
                            </td>
                            <td>
                            from 8:00am to 10pm
                            </td>

                          </tr>
                          <tr>
                            <td>
                              6
                            </td>
                            <td>
                            friday
                            </td>
                            <td>
                            from 8:00am to 10pm
                            </td>

                          </tr>
                          <tr>
                            <td>
                              7
                            </td>
                            <td>
                            saturday
                            </td>
                            <td>
                            from 8:00am to 10pm
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
                    <h4 class="card-title "></h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class=" text-primary">
                          <th>

                          </th>
                          <th>

                          </th>
                          <th>

                          </th>

                        </thead>
                        <tbody>


                          <tr>

                            <td>
                            1
                            </td>
                            <td>
                            max delivery time
                            </td>
                            <td>
                          1 hour
                            </td>
                          </tr>
                          <tr>

                            <td>
                            2
                            </td>
                            <td>
                          min delivery time
                            </td>
                            <td>
                            30 minutes
                            </td>
                          </tr>
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
</div>
@endsection
