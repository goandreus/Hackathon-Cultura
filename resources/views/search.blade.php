@extends('layouts.app')
@section('title', 'Search')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="cHeader">Contacts</h4>
                            </div>
                            <div class="col-md-7">
                                <form action="{{url('/search')}}" method="post" role="search" class="search">
                                    @csrf
                                    <div class="input-group">
                                        <input type="search" class="form-control" name="search" placeholder="Search Contacts..." style="border-radius: 2px;">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn" style="border-radius: 0px;">
                                                <span class="fa fa-search"></span>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        @if(session()->has('error'))
                            <div class="alert alert-danger alert-block" style="border-radius: 2px;">
                                <button type="button" name="button" class="close" data-dismiss="alert">x</button>
                                <strong>{{session()->get('error')}}</strong>
                            </div>
                        @elseif(session()->has('success'))
                            <div class="alert alert-success alert-block" style="border-radius: 2px;">
                                <button type="button" name="button" class="close" data-dismiss="alert">x</button>
                                <strong>{{session()->get('success')}}</strong>
                            </div>
                        @endif
                            @if(isset($details))
                                <p>The search results for <b>{{$query}}</b> are:</p>
                                @foreach($details as $contact)
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="{{asset($contact->image)}}" class="img-rounded" width="80" height="80">
                                            </div>
                                            <div class="col-md-7">
                                                <a href="{{url('/profile')}}/{{$contact->id}}">
                                                    <p class="lead">{{$contact->fName}} {{$contact->lName}}</p>
                                                </a>
                                                <i class="fa fa-mars"></i> {{$contact->gender}}
                                                <p>
                                                    <i class="fa fa-envelope"></i> {{$contact->email}}
                                                </p>
                                            </div>
                                            <div class="col-md-3 pull-right">

                                            </div>
                                        </div>
                                        <hr>
                                @endforeach
                            @else
                                <p class="text-dark" style="font-size: small; font-weight: bold">No contacts found!</p>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection