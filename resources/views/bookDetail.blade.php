@extends('template')

@section('content')
    <div class="bg-secondary text-light fs-3 ps-4">
        Book Detail
    </div>

    <div class="d-flex justify-content-center pt-3">
        <img src="{{asset($b->image)}}"  id="img" width="25%", height="50%" alt="default">
    </div>


    <h3 class="card-title mt-2 pt-3 ps-4">Title : <b>{{$b->title}}</b></h3>
    <h3 class="card-title mt-2 pt-3 ps-4">Author : <b>{{$b->author}}</b></h3>
    <h3 class="card-title mt-2 pt-3 ps-4">Publisher : <b>{{$b->publisher->name}}</b></h3>
    <h3 class="card-title mt-2 pt-3 ps-4">Year : <b>{{$b->year}}</b></h3>
    <h3 class="card-title mt-2 pt-3 ps-4">Synopsis :</h3>
    <h5 class="card-title mt-2 pt-3 ps-4 pb-4"><b>{{$b->synopsis}}</b></h5>

@endsection
