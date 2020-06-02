@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
             <img class="rounded-circle" src="https://instagram.fccu1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/13562022_1811999472419720_476848192_a.jpg?_nc_ht=instagram.fccu1-1.fna.fbcdn.net&_nc_ohc=kitXgI0dJScAX8FM6Q5&oh=02837214563b9d6bc25cb9b94288e377&oe=5ECFAA0A" alt="">
       </div>
       <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                 <a href="{{url('/p/create')}}" class="btn">Add new Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong class="pr-2">{{$user->posts->count()}}</strong>Posts</div>
                <div class="pr-5"><strong class="pr-2">295</strong>followers</div>
                <div class="pr-5"><strong class="pr-2">373</strong>following</div>
            </div>
            <div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
            <div class="pt-2">{{$user->profile->description}}</div>
            <div class="pt-1"><a href="{{$user->profile->url}}">{{$user->profile->url}}</a></div>
       </div>
   </div>
   <div class="row pt-5">

     @foreach ($user->posts as $post)
     <div class="col-4 pb-3">
      <a href="{{url('/p/'.$post->id)}}">
          <img class="w-100" src={{ URL::asset( 'storage/' . $post->image ) }} alt="">
      </a>

     </div>
     @endforeach

</div>
</div>
@endsection
