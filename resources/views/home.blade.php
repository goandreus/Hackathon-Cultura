@extends('layouts.app')
@section('title', 'My Contacts')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="margin-top: 40px;">
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
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="cHeader">Contacts</h4>
                        </div>
                        <div class="col-md-6">
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
                        <div class="col-md-1">
                            <a href="{{url('/add')}}" class="btn btn-success">Add</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        @foreach($contacts as $contact)
                            <div class="row">
                                <div class="col-md-7">
                                    <a href="{{ url('/profile/') }}/{{$contact->id}}" target="_blank">
                                        <b class="text-primary">{{ $contact->fName }} {{ $contact->lName }}</b>
                                    </a>
                                    <p class="text-info"><i class="fa fa-phone"></i> {{ $contact->pNumber }}</p>
                                    <p style="line-height: 5px"><i class="fa fa-envelope"></i> {{ $contact->email }}</p>
                                    <p style="line-height: 5px"><i class="fa fa-envelope"></i> {{ $contact->email2 }}</p>
                                    <p style="line-height: 5px"><i class="fa fa-envelope"></i> {{ $contact->email3 }}</p>
                                    <p style="line-height: 5px"><i class="fa fa-envelope"></i> {{ $contact->gender }}</p>
                                    <p style="line-height: 5px"><i class="fa fa-envelope"></i> {{ $contact->pNumber2 }}</p>
                                    <p style="line-height: 5px"><i class="fa fa-envelope"></i> {{ $contact->pNumber3 }}</p>
                                    <p style="line-height: 5px"><i class="fa fa-envelope"></i> {{ $contact->pNumber4 }}</p>
                                    <p style="line-height: 5px"><i class="fa fa-envelope"></i> {{ $contact->job }}</p>
                                    <p style="line-height: 5px"><i class="fa fa-envelope"></i> {{ $contact->city }}</p>
                                    <p style="line-height: 5px"><i class="fa fa-envelope"></i> {{ $contact->about }}</p>
                                </div>
                                
                                <div class="col-md-2">
                                    <p style="font-size: smaller; color: #bbb;">
                                        <span style="font-weight: bold; cursor: pointer;">
                                            Date:
                                        </span>
                                            {{date('D - F, j, Y', strtotime($contact->updated_at))}} at
                                            {{date('(h:i a)', strtotime($contact->updated_at))}}
                                    </p>
                                </div>
                                <div class="col-md-1">
                                    <a href="{{route('deleteContact', ['id' => $contact->id])}}" class="text-danger">
                                        <i class="fa fa-remove"></i>
                                    </a>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                            {{ $contacts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
