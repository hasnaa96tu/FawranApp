<div class="sidebar" data-color="rose" data-background-color="black" >
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo"><a href="" class="simple-text logo-mini">

    </a>
    <a href="" class="simple-text logo-normal ml-5">
      <img src='/assets/img/fawran2.PNG' style="width:100px">
    </a></div>
  <div class="sidebar-wrapper">

    <div class="user">


      <div class="user-info">
        <a data-toggle="collapse" href="#collapseExample" class="username ml-5">
          <span>
              @guest
              guest
            @else
            {{ Auth::user()->name }}
            <b class="caret"></b>
           @endguest

          </span>
        </a>
          @guest
            @else
            @if(Auth::user()->user_type_id == 6)
        <div class="collapse" id="collapseExample">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="/user/{{Auth::user()->id}}">
                <span class="sidebar-mini"> MP </span>
                <span class="sidebar-normal"> My Profile </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/users/pharmacy/edit/{{Auth::user()->id}}">
                <span class="sidebar-mini"> EP </span>
                <span class="sidebar-normal"> Edit Profile </span>
              </a>
            </li>
          </ul>
        </div>
          @elseif(Auth::user()->user_type_id == 5)
          <div class="collapse" id="collapseExample">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="/user/{{Auth::user()->id}}">
                  <span class="sidebar-mini"> MP </span>
                  <span class="sidebar-normal"> My Profile </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/users/supermarket/edit/{{Auth::user()->id}}">
                  <span class="sidebar-mini"> EP </span>
                  <span class="sidebar-normal"> Edit Profile </span>
                </a>
              </li>
            </ul>
          </div>
          @else
          <div class="collapse" id="collapseExample">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="/user/{{Auth::user()->id}}">
                  <span class="sidebar-mini"> MP </span>
                  <span class="sidebar-normal"> My Profile </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/user/{{Auth::user()->id}}/edit">
                  <span class="sidebar-mini"> EP </span>
                  <span class="sidebar-normal"> Edit Profile </span>
                </a>
              </li>
            </ul>
          </div>
          @endif
         @endguest
      </div>

    </div>

    <ul class="nav">
      @guest
      @else

      <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
          <i class="material-icons">dashboard</i>
          <p class="">
          dashboard
          </p>
        </a>
      </li>
      @can('supermarket-list')
      <li class="nav-item">
        <a class="nav-link" href="/users/supermarket">
          <i class="material-icons">fastfood</i>
          <p class="">
            supermarket
          </p>
        </a>
      </li>
      @endcan
      @can('pharmacy-list')
      <li class="nav-item">
        <a class="nav-link" href="/users/pharmacy">
          <i class="material-icons">local_pharmacy</i>
          <p class="">
            pharmacy
          </p>
        </a>
      </li>
      @endcan
      @can('company-list')
      <li class="nav-item">
        <a class="nav-link" href="/users/company">
          <i class="material-icons">local_pharmacy</i>
          <p class="">
            Companies
          </p>
        </a>
      </li>
      @endcan
      @can('drug-list')
      <li class="nav-item">
        <a class="nav-link" href="/users/drug">
          <i class="material-icons">local_pharmacy</i>
          <p class="">
            Drugs
          </p>
        </a>
      </li>
      @endcan
      @can('product-list')
      <li class="nav-item">
        <a class="nav-link" href="/users/product">
          <i class="material-icons">fastfood</i>
          <p class="">
            products
          </p>
        </a>
      </li>
      @endcan
      @can('user-list')
      <li class="nav-item">
        <a class="nav-link" href="/drivers">
          <i class="material-icons">directions_bike</i>
          <p class="">
          drivers
          </p>
        </a>
      </li>
      @endcan
      @guest
      @else
      @if( Auth::user()->user_type_id == 4 )
      <li class="nav-item">
        <a class="nav-link" href="/order/{{Auth::user()->id}}/customer">
          <i class="material-icons">receipt</i>
          <p class="">
          orders
          </p>
        </a>
      </li>
      @elseif(Auth::user()->user_type_id == 6)
      <li class="nav-item">
        <a class="nav-link" href="/order/{{Auth::user()->id}}/pharmacy">
          <i class="material-icons">receipt</i>
          <p class="">
          orders
          </p>
        </a>
      </li>
      @elseif(Auth::user()->user_type_id == 5)
      <li class="nav-item">
        <a class="nav-link" href="/order/{{Auth::user()->id}}/supermarket">
          <i class="material-icons">receipt</i>
          <p class="">
          orders
          </p>
        </a>
      </li>
      @else
      @can('order-list')
      <li class="nav-item">
        <a class="nav-link" href="/order">
          <i class="material-icons">receipt</i>
          <p class="">
          orders
          </p>
        </a>
      </li>
      @endcan
      @endif
      @endguest
      @can('offer-list')
      <li class="nav-item">
        <a class="nav-link" href="/promo">
          <i class="material-icons">local_atm</i>
          <p class="">
          promotions
          </p>
        </a>
      </li>
      @endcan
      @can('customer-list')
      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#22">
          <i class="material-icons">account_box</i>
          <p> users
  <b class="caret"></b>
          </p>
        </a>
      </li>
      @endcan
        <div class="collapse" id="22">
      <li class="nav-item ">
        @can('user-list')
        <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
          <i class="material-icons">face</i>
          <p> User
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="pagesExamples">
          <ul class="nav">
            <li class="nav-item ">
              <a class="nav-link" href="/user/create">
                <span class="sidebar-mini"> au </span>
                <span class="sidebar-normal"> add User</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/user">
                <span class="sidebar-mini"> alu </span>
                <span class="sidebar-normal">all Users </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/users/user/show">
                <span class="sidebar-mini"> su </span>
                <span class="sidebar-normal"> show User </span>
              </a>
            </li>


          </ul>
        </div>
        @endcan
      </li>
      <li class="nav-item ">
        @can('role-list')
        <a class="nav-link" data-toggle="collapse" href="#pagesExamples5">
          <i class="material-icons">face</i>
          <p> roles
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="pagesExamples5">
          <ul class="nav">
            <li class="nav-item ">
              <a class="nav-link" href="/roles/create">
                <span class="sidebar-mini"> ar </span>
                <span class="sidebar-normal"> add role</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/roles">
                <span class="sidebar-mini"> alr </span>
                <span class="sidebar-normal">all roles </span>
              </a>
            </li>



          </ul>
        </div>
        @endcan
      </li>
      <li class="nav-item ">
        @can('customer-list')
        <a class="nav-link" data-toggle="collapse" href="#pagesExamples2">
          <i class="material-icons">face</i>
          <p> Customer
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="pagesExamples2">
          <ul class="nav">
            <li class="nav-item ">
              <a class="nav-link" href="/customer/create">
                <span class="sidebar-mini"> ac </span>
                <span class="sidebar-normal"> add Customer</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/customer">
                <span class="sidebar-mini"> alc </span>
                <span class="sidebar-normal">all Customers </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/users/customer/show">
                <span class="sidebar-mini"> sc </span>
                <span class="sidebar-normal"> show Customer </span>
              </a>
            </li>


          </ul>
        </div>
        @endcan
      </li>

      <!-- <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#pagesExamples4">
          <i class="material-icons">face</i>
          <p> Pharmacy
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="pagesExamples4">
          <ul class="nav">
            <li class="nav-item ">
              <a class="nav-link" href="/users/pharmacy/create">
                <span class="sidebar-mini"> ap </span>
                <span class="sidebar-normal"> add Pharmacy </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/users/pharmacy">
                <span class="sidebar-mini"> alp </span>
                <span class="sidebar-normal">all Pharmacies  </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/users/pharmacy/show">
                <span class="sidebar-mini"> sp </span>
                <span class="sidebar-normal"> show Pharmacy  </span>
              </a>
            </li>


          </ul>
        </div>
      </li> -->
    </div>
    @endguest
    </ul>
  </div>
</div>
