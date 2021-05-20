<div class="container-fluid shadow">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <nav class="navbar-brand1">
          <a href="{{route('landing')}}" style="color: #000000">
            <img src="{{asset('assets/images/logodanta.png')}}" alt ="Logo" width=79px height=79px >
            BarbeQueue
          </a>
        </nav>
      </div>
      
      <div class="col-md-4" style="display:flex; padding-top:21px; justify-content:flex-end">
        <a href="{{ url('logout') }}" class="btn tombolnav">Logout</a>
      </div>
    </div>
  </div>
</div>
