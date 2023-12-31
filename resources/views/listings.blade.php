@extends('layout')

@section('content')


{{-- <h1>{{$heading}}</h1> --}}
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@unless(count($listings) == 0)

@foreach ($listings as $listing)
<h2>
     <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
</h2>
<p>
   {{ $listing ['description']}}
</p>
@endforeach

@else
<p> No listings found </p>
@endunless
</div>
@endsection