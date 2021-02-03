@extends('layouts.layout')





@section('content')
    <div class ="container">
        <div class="row">
            <div class="d-flex flex-wrap mt-5 justify-content-around ">
                @foreach ($posts as $post )
                <div class="card mb-5" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $post->author }}</h6>
                {{-- <p class="card-text">{{ $booking["more_details"] }}</p> --}}
                 <a href="{{ route("posts.show",$post->id) }}" class="card-link">Details</a> 
                
                
                
                
                </div>
                </div>
                @endforeach
                
  

            
        </div>
    </div>

@endsection