@extends('layouts.app')

@section('content')

<section class="conteiner d-flex text-center align-items-center justify-content-center flex-column p-5">
    <strong>Title:</strong> {{ $proj->title }} <br />
    <strong>Description:</strong> {{ $proj->description }} <br />
    <strong>Image</strong><img src="{{asset( 'storage/' . $proj->image)}}" width="120px" height="120px" alt=""> <br />
</section>
@endsection