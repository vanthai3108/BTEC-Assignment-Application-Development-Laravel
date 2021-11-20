@extends('layouts.app')

@section('title')
<title>BT School | Home</title>    
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center mb-4">
        <div id="carouselExampleIndicators" class="carousel slide col-12"  data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="height:60vmin">
                    <img class="d-block w-100" style="height:60vmin" src="https://www.tacthub.in/user-panel/img/subject_thumb/data-science-course-840x450.jpg" alt="First slide">
                </div>
                <div class="carousel-item" style="height:60vmin">
                    <img class="d-block w-100" style="height:60vmin" src="https://miro.medium.com/max/1024/1*p4JfpbZRxDu4GdI0KuRUyQ.jpeg" alt="Second slide">
                </div>
                <div class="carousel-item" style="height:60vmin">
                    <img class="d-block w-100" style="height:60vmin" src="https://www.whizlabs.com/blog/wp-content/uploads/2019/01/best-digital-marketing-courses.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="list-group">
                @foreach ($data['categories'] as $category)
                    <a class="list-group-item list-group-item-action {{ $category->id == $data['now_category'] ? "active": ""}}" href="{{ route('home', 'category='.$category->id)}}" role="tab">{{ $category->name }}</a>
                @endforeach
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content row">
                @foreach($data['courses'] as $course)
                    <div class="col-4 mb-4">
                        <div class="row">
                            <div class="card col-11 pt-3">
                                <img class="card-img-top" style="height: 20vmin" src="{{config('app.url')}}/../{{  $course->image }}" alt="Card image cap">
                                <div class="pt-2 text-center">
                                    <h5 class="card-title mb-1">{{ $course->name }}</h5>
                                    <p class="card-text mb-1">{{ $course->description}}</p>
                                    @if ($course->users->contains(Auth::user()->id))
                                        <a href="{{ route('home')}}" class="btn btn-primary mb-2 btn-block">View course</a>
                                    @else
                                        <a href="{{ route('home.joinCourse', 'course='.$course->id)}}" class="btn btn-primary mb-2 btn-block">Join course</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div> 
                @endforeach
            </div>
            <div>
                <ul class="pagination pagination-sm m-0 justify-content-center">
                    {{$data['courses']->links('vendor.pagination.custom-category', ['category' => $data['now_category']])}}
                </ul>
            </div>
        </div>
        
      </div>
</div>
@endsection
