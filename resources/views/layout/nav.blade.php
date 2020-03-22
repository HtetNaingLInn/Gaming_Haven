


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
           <h4 class="text-success">G-Haven</h4>
        </a>
        <button class="navbar-toggler btn btn-outline-success" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            
            <li class="nav nav-item">
              <a class="nav-link" href="{{url('/')}}">
                  <button class="btn btn-outline-success">Home</button>
                </a>
  
              </li>







            @auth
            <li class="nav nav-item">
              <a class="nav-link" href="{{url('admin/dashboard')}}">
                  <button class="btn btn-outline-success">Admin</button>
                </a>
  
              </li>
                
            @endauth
            
          </ul>
          
          <ul class="navbar-nav">
            <li class="nav-item">
             <a href="" class="nav-link"><button class="btn btn-outline-success"><i class="fa fa-cart-plus" aria-hidden="true"></i></button></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <button class="btn btn-outline-success">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;&nbsp;Account</button>
                </a>
                <div class="dropdown-menu bg-success" aria-labelledby="navbarDropdown">
                  @if (Auth::user())
                <a class="dropdown-item" href="{{url('logout')}}">
                  <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;  Logout
                </a>

                  @else
                <a class="dropdown-item" href="{{url('login')}}">
                  <i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;  Login
                </a>
                  
                  
                <a class="dropdown-item" href="{{url('register')}}">Register</a>
                  @endif
                  
                </div>
              </li>
          </ul>
          
        </div>
    </div>
      </nav>
