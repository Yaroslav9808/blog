@extends('layouts.site')
@section('content') 

<body>
        
      @if($article)
            <div> 
                <h2>{{$article->title}}</h2>
                 <p>{!!$article->content!!}</p> 
               
            </div>     
           @endif
                 

 
</body>
@endsection

