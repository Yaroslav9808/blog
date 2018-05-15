
<head>
<meta http-equiv="Content-Type" content="content/html; charset=UTF-8" />
<title>Heartlys - Place Your Company Name Here</title>
   <style type="text/css" media="all">
        @import url("/css/stylesheet.css");
    </style>
</head>
<div id="top_bar_black"> <div id="logo_container"> <div id="logo_image"> </div>  <div id="nav_block">
        <div class="nav_button">Home</div>
        <div class="nav_button"> Contact</div>
		<div class="nav_button"> About</div>
		<div class="nav_button"> Links</div>
		<div class="nav_button"> Services </div>
	  </div>
</div> </div>
        <div id="content_container">
       	  <div id="header">  Hellow World! <div id="header_content_tagline">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut   </div>     
          
</div>
    @if(count($errors) > 0)  
            <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $errors)
                <li>{{$errors}}</li>
                @endforeach
                </ul>
            </div>
    @endif
            
    @yield('content')