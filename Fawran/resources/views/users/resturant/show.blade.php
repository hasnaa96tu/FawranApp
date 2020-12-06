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
            <h6 class="card-category text-gray">Resturant</h6>
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
              meals
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " data-toggle="tab" href="#link8" role="tablist">
              profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  " data-toggle="tab" href="#link9" role="tablist">
            ratings and reviews
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
            <div class="row mt-5">
              <div class="col-md-4 mt-3">
                <div class="card card-product">
                  <div class="card-header card-header-image" data-header-animation="true">
                    <a href="#pablo">
                      <img class="img" src="/assets/img/card-m1.jpg">
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
                      <img class="img" src="/assets/img/card-m2.jpg">
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
                      <img class="img" src="/assets/img/card-m5.jpg">
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
                      <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                        <i class="material-icons">art_track</i>
                      </button>
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

        <div class="tab-pane " id="link9">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-timeline card-plain">
                <div class="card-body">
                  <ul class="timeline">
                    <li class="timeline-inverted">
                      <div class="timeline-badge danger">
                        <i class="material-icons">card_travel</i>
                      </div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <span class="badge badge-pill badge-danger">Some Title</span>
                        </div>
                        <div class="timeline-body">
                          <p>Wifey made the best Father's Day meal ever. So thankful so happy so blessed. Thank you for making my family We just had fun with the “future” theme !!! It was a fun night all together ... The always rude Kanye Show at 2am Sold Out Famous viewing @ Figueroa and 12th in downtown.</p>
                        </div>
                        <h6>
                          <i class="ti-time"></i> 11 hours ago via Twitter
                        </h6>
                      </div>
                    </li>
                    <li>
                      <div class="timeline-badge success">
                        <i class="material-icons">extension</i>
                      </div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <span class="badge badge-pill badge-success">Another One</span>
                        </div>
                        <div class="timeline-body">
                          <p>Thank God for the support of my wife and real friends. I also wanted to point out that it’s the first album to go number 1 off of streaming!!! I love you Ellen and also my number one design rule of anything I do from shoes to music to homes is that Kim has to like it....</p>
                        </div>
                      </div>
                    </li>
                    <li class="timeline-inverted">
                      <div class="timeline-badge info">
                        <i class="material-icons">fingerprint</i>
                      </div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <span class="badge badge-pill badge-info">Another Title</span>
                        </div>
                        <div class="timeline-body">
                          <p>Called I Miss the Old Kanye That’s all it was Kanye And I love you like Kanye loves Kanye Famous viewing @ Figueroa and 12th in downtown LA 11:10PM</p>
                          <p>What if Kanye made a song about Kanye Royère doesn't make a Polar bear bed but the Polar bear couch is my favorite piece of furniture we own It wasn’t any Kanyes Set on his goals Kanye</p>
                          <hr>
                        </div>
                        <div class="timeline-footer">
                          <div class="dropdown">
                            <button type="button" class="btn btn-round btn-info dropdown-toggle" data-toggle="dropdown">
                              <i class="material-icons">build</i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="timeline-badge warning">
                        <i class="material-icons">flight_land</i>
                      </div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <span class="badge badge-pill badge-warning">Another One</span>
                        </div>
                        <div class="timeline-body">
                          <p>Tune into Big Boy's 92.3 I'm about to play the first single from Cruel Winter also to Kim’s hair and makeup Lorraine jewelry and the whole style squad at Balmain and the Yeezy team. Thank you Anna for the invite thank you to the whole Vogue team</p>
                        </div>
                      </div>
                    </li>
                  </ul>
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
