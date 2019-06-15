@extends('layouts.app')
@section('title', 'HELP AD-HOC')
@section('content')

    <div class="title m-b-md">
        {!!QrCode::size(300)->generate("www.nigmacode.com") !!}
    </div>

@endsection
