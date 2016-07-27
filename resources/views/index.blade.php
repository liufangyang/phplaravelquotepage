@extends('layouts.master')

@section('title')

Quote page

@endSection

@section('styles')

<link rel = "stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome.min.css"> 

@endSection
 
@section('content')

<section class = "quotes">
    <h1>Latest quotes</h1>
    <artical class="quote">
        <div class="delete"><a href="#">x</a></div>
        quote text
        <div class="info">create by <a href ="#">jimmy</a> on ...</div>
    </artical>
    pagnition
</section>
<section class = "edit-quote">
    <h1>Add a quote</h1>
    <form>
    <div class="input-group">
        <label for="author">Your name</label>
        <input type="text" name="author" id="auther" placeholder="your name"/>
    </div>
    <div class="input-group">
        <label for="quote">Your quote</label>
 <textarea name="quote" id="quote" row="5" placeholder="type your quote here"></textarea>
 </div>
    <button type="submit">submit</button>
    <input type="hidden" name="_token" value="{{Session::token()}}"/>
    </form>
</section>
@endSection