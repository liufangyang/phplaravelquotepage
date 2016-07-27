@extends('layouts.master')

@section('title')

Quote page

@endSection

@section('styles')

<link rel = "stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome.min.css"> 

@endSection
 
@section('content')
@if(count($errors) > 0)
<section class="info-box fail">
    @foreach($errors->all() as $error)
    {{$error}}
    @endforeach
    </section>
@endif
@if(Session::has('success'))
<section class="info-box success">
    {{Session::get('success')}}
</section>
@endif

<section class = "quotes">
    <h1>Latest quotes</h1>
    
    @for($i = 0 ; $i< count($quotes); $i++)
     <artical class="quote" >
        <div class="delete"><a href="#">x</a></div>
        {{$quotes[$i]->quote}}
        <div class="info">create by <a href ="#">{{$quotes[$i]->author->name}}</a> on {{$quotes[$i]->created_at}}</div>
    </artical>
    @endFor
    <div class="pagnition">  pagnition</div>
    
</section>
<section class = "edit-quote">
    <h1>Add a quote</h1>
    <form method="post" action="{{route('create')}}">
    <div class="input-group">
        <label for="author">Your name</label>
        <input type="text" name="author" id="auther" placeholder="your name"/>
    </div>
    <div class="input-group">
        <label for="quote">Your quote</label>
 <textarea name="quote" id="quote" row="5" placeholder="type your quote here"></textarea>
 </div>
    <button type="submit" class ="btn">submit</button>
    <input type="hidden" name="_token" value="{{Session::token()}}"/>
    </form>
</section>
@endSection