@extends('template')

@section('content')
    <div class="bg-secondary text-light fs-3 ps-4">
        Book List
    </div>

    <div class="container-sm d-flex flex-column flex-wrap gap-3 justify-content-center align-items-center mb-4">
        <div class="row row-cols-3 gap-5 mt-5 mb-4">
            @foreach ($bookData as $b)
                <div class="card shadow-sm p-3 bg-white rounded" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{asset($b->image)}}" class="" id="img" width="100%", height="300px" alt="default">
                        <h3 class="card-title mt-2 pt-3"><b>{{$b->title}}</b></h3>
                        <h5>by</h5>
                        <h5 class="card-title"><b>{{$b->author}}</b></h5>
                        <a href="/bookDetail/{{$b->id}}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>

        {{$bookData->links()}}

    </div>


@endsection
