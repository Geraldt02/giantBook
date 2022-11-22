@extends('template')

@section('content')
    <div class="bg-secondary text-light fs-3 ps-4">
        {{$categories->name}} Category
    </div>

    <div class="container-sm d-flex flex-column flex-wrap gap-4 justify-content-center align-items-center ">
        <div class="row row-cols-3 gap-5 mt-5 mb-5">
            @foreach ($detail as $b)
            <div class="card shadow-sm p-3 bg-white rounded" style="width: 18rem;">
                <div class="card-body">
                    <img src="{{asset($b->book->image)}}" class="" id="img" width="100%", height="300px" alt="default">
                    <h3 class="card-title mt-2 pt-3"><b>{{$b->book->title}}</b></h3>
                    <h5>by</h5>
                    <h5 class="card-title"><b>{{$b->book->author}}</b></h5>
                    <a href="/bookDetail/{{$b->book->id}}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        @endforeach
         </div>

    </div>

@endsection
