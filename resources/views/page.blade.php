@extends('layouts.site')
@section('content') 

 
<body>
    
        <div id="content_container">
           @foreach($articles as $article) <!-- для прохода по масиву-->
            <div id="header_lower"> 
                <h2>{{$article->title}}</h2>
                <div id="header_content_boxline"><div id="header_content_boxcontent">
                 <p>{{$article->content}}</p> 
                 <p><a class="btn btn-default" href="{{ route('articleShow',['id'=>$article->id]) }}" role="button"><h3>More details</h3></a></p>
                <form action="{{route('articleDelete',['article'=>$article->id]) }}" method="post">
                    
                   <!-- <input type="hidden" name = "_method" value="DELETE">-->
                    {{method_field('DELETE')}}
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-danger">Delete</button>
                    
                </form>
 </div>
                </div> 
          </div>
           @endforeach
                 
        </div>
        
        
        
<div id="bottom_bar_black"> <div id="main_container">
	<div id="header_lower">  <div id="header_content_lowerline">Contact
	    <div id="header_content_lowerboxcontent" >148 Blackways Street<br />
	      Hargary<br />
	      Lingvillage<br />
        HG43 9HA <BR />
        info@domainhappy.com<br />
        www.domainhappy.com<br />
        01982 698 621<BR /> 
        </div>
	</div> 
          </div>


</div> 
</div>
 <div id="copywriteblock"> Designed by <a href="http://www.pixelateddesign.co.uk/">www.pixelateddesign.co.uk </a></div>

</body>
@endsection
</html>
