<!DOCTYPE html>

<head>
  <title></title>
  
  
  
      <link rel="stylesheet" type="text/css" href="{!! asset('css/login.css') !!}">

  
</head>

<body>

  <div class="vid-container">
  <img class="bgvid back" src="{{ ('img/gipsy_in_the_woods.jpg') }}">
  <div class="inner-container">
    <img class="bgvid inner" src="{{ ('img/gipsy_in_the_woods.jpg') }}">
    
    <div class="box">
      <h1>Login</h1>
      <input type="text" placeholder="Username"/>
      <input type="text" placeholder="Password"/>
      <button>Login</button>
      <p>Not a member? <span>Sign Up</span></p>
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script src="{{ asset('js/login.js') }}"></script>




</body>

</html>
