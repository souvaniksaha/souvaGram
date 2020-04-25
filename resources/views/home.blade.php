@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
             <img class="rounded-circle" src="https://instagram.fccu1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/13562022_1811999472419720_476848192_a.jpg?_nc_ht=instagram.fccu1-1.fna.fbcdn.net&_nc_ohc=kitXgI0dJScAX8FM6Q5&oh=02837214563b9d6bc25cb9b94288e377&oe=5ECFAA0A" alt="">
       </div>
       <div class="col-9">
            <div>
                <h1>{{Auth::user()->username}}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong class="pr-2">143</strong>Posts</div>
                <div class="pr-5"><strong class="pr-2">295</strong>followers</div>
                <div class="pr-5"><strong class="pr-2">373</strong>following</div>
            </div>
            <div class="pt-3 font-weight-bold">Souva</div>
            <div class="pt-2">i am working as a software enginner for last 1 year. I hold a degree in Msc.Computer Science</div>
            <div class="pt-1"><a href="https://www.linkedin.com/in/souvanik-saha-7172a810a/">www.souvanik.com</a></div>
       </div>
   </div>
   <div class="row pt-5">
    <div class="col-4">
       <img class="w-100" src="https://instagram.fccu1-1.fna.fbcdn.net/v/t51.2885-15/e35/93412068_523389278342508_9133098139496098277_n.jpg?_nc_ht=instagram.fccu1-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=w-210FfFc60AX8Ue6J-&oh=b9527882f219ce63e1d4234417fdb2de&oe=5ECC88AA" alt="">
    </div>
    <div class="col-4">
        <img  class="w-100" src="https://instagram.fccu1-1.fna.fbcdn.net/v/t51.2885-15/e35/29716957_182739079020234_4600219550963728384_n.jpg?_nc_ht=instagram.fccu1-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=-l9zGLjs9_IAX_tsUkh&oh=3121c8a7b91d3ec920371931659fc365&oe=5ECDCFB9" alt="">
     </div>
     <div class="col-4">
        <img  class="w-100" src="https://instagram.fccu1-1.fna.fbcdn.net/v/t51.2885-15/e35/29716957_182739079020234_4600219550963728384_n.jpg?_nc_ht=instagram.fccu1-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=-l9zGLjs9_IAX_tsUkh&oh=3121c8a7b91d3ec920371931659fc365&oe=5ECDCFB9" alt="">
     </div>
</div>
</div>
@endsection
