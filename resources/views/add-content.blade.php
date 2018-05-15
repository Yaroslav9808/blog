@extends('layouts.site')
@section('content') 

<div class="jumbotron">
    <div class="container">
        <h1>{{$message}}</h1>
    <p>{{$header}}</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button"></a></p>
    </div>
</div>

<form method="post" action="{{route('articleStore')}}">
    <fieldset class="contact-inner">
        
       <div class = "form-group">
        <label for="title">Заголовок</label>
       <input type="text" class="form-controll" id="title" name="title"
        </div>
           
           <div class = "form-group">
        <label for="alias">Псевдонім</label>
       <input type="text" class="form-controll" id="alias" name="alias"
        </div>

   <div class = "form-group">
        <label for="exampleInputFile">Текст</label>
       <textarea class="form-controll" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </fieldset>
    {{ csrf_field() }}

</form>
  

@endsection