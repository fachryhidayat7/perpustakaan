{{-- Navigation --}}
<nav class="navbar-fixed" >
  <nav class="grey lighten-5" style=" 
  height: 100px;
  line-height: 100px;">
    <div class="nav-wrapper">
    <a href="{{route('homepage')}}" class="brand-logo">
      <img src="{{asset ('img/logo.png')}}" style="margin-left:40px; margin-top:-100px;  height:300px; width:300px;" alt=""></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down ">
        <li><a href="{{route ('login')  }}" ><span class="black-text">Login</span></a></li>
        <li><a href="{{route ('register')  }}"><span class="black-text">Register</span></a></li>
      </ul>
    </div>
  </nav>
</nav>

  <ul class="sidenav" id="mobile-demo">
  <li><a href=" {{route ('login')  }}">Login</a></li>
    <li><a href="{{route ('register')  }}">Register</a></li>
  </ul>