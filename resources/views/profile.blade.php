@extends('layouts.app')
@foreach($contacts as $contact)
    @section('title', $contact->fName. ' '.$contact->lName)
@section('content')
    <div class="profile-card" style="margin-top: 40px; margin-bottom: -20px;">
        <br><br><br>
        <div class="image-container">
            <img src="{{ asset($contact->image) }}" width="100%">
            <div class="title" style="background-color: #1b1e21; padding: 10px; margin-left: -15px;">
                <h2>{{ $contact->fName }} {{ $contact->lName }}</h2>
            </div>
        </div>
        <div class="main-container">
            <p style="font-size: smaller;"><i class="fa fa-clock-o info"></i>
                {{date('D - F, j, Y', strtotime($contact->updated_at))}} at
                {{date('(h:i a)', strtotime($contact->updated_at))}}
            </p>
            <hr>
            <p>
                <div class="row">
                    <div class="col-md-1">
                        <i class="fa fa-mars info"></i>
                    </div>
                    <div class="col-md-10">
                        {{ $contact->gender }}
                    </div>
                    <div class="col-md-1">
                        <a href="" data-toggle="modal" tabindex="-1" data-target="#editInfo">
                            <i class="fa fa-edit"></i>
                        </a>

                        <div class="modal fade" id="editInfo" tabindex="-1" role="dialog" aria-labelledby="editInfoTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <b class="modal-title" id="editInformationTitle">Edit Contact Information</b>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form class="form-group contacts" method="post" action="{{ route('editInfo', ['id' => $contact->id]) }}" role="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                
                                            </div>
                                            <div class="form-group row">
                                                <label for="fName" class="col-4 col-form-label">First Name(<span class="text-danger">*</span>):</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control {{ $errors->has('fName') ? ' is-invalid' : '' }}" name="fName" placeholder="First Name" value="{{ $contact->fName }}" required>
                                                    @if ($errors->has('fName'))
                                                        <span class="invalid-feedback" role="alert">
                                                    <strong id="fNameValid">{{ $errors->first('fName') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lName" class="col-4 col-form-label">Last Name(<span class="text-danger">*</span>):</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control {{ $errors->has('lName') ? ' is-invalid' : '' }}" name="lName" placeholder="Last Name" value="{{ $contact->lName }}" required>
                                                    @if ($errors->has('lName'))
                                                        <span class="invalid-feedback" role="alert">
                                                    <strong id="lNameValid">{{ $errors->first('lName') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="gender" class="col-4 col-form-label">Gender:</label>
                                                <div class="col-8">
                                                    <div class="_5k_5">
                                                        <span class="_5k_4" datatype="selectors" id="u_0_19">
                                                            <span id="gender">
                                                                <select class="_5dba" aria-label="Gender" title="Gender" name="gender" style="padding: 5px;">
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="pNumber" class="col-4 col-form-label">Phone Number(<span class="text-danger">*</span>):</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control pNumber {{ $errors->has('pNumber') ? ' is-invalid' : '' }}" name="pNumber" value="{{ $contact->pNumber }}" placeholder="Phone Number" required>
                                                    @if ($errors->has('pNumber'))
                                                        <span class="invalid-feedback" role="alert">
                                                    <strong id="pNumberValid">{{ $errors->first('pNumber') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="pNumber2" class="col-4 col-form-label">Phone Number 2:</label>
                                                <div class="col-md-8">
                                                    <input type="tel" class="form-control pNumber {{ $errors->has('pNumber2') ? ' is-invalid' : '' }}" name="pNumber2" placeholder="Phone Number 2" value="
@if($contact->pNumber2 == null)
                                                    @else {{ $contact->pNumber2 }} @endif
                                                            ">
                                                    @if ($errors->has('pNumber2'))
                                                        <span class="invalid-feedback" role="alert">
                                                    <strong id="pNumber2Valid">{{ $errors->first('pNumber2') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="pNumber3" class="col-4 col-form-label">Phone Number 3:</label>
                                                <div class="col-md-8">
                                                    <input type="tel" class="form-control pNumber {{ $errors->has('pNumber3') ? ' is-invalid' : '' }}" name="pNumber3" placeholder="Phone Number 3" value="
                                                    @if($contact->pNumber3 == null)
                                                            @else
{{ $contact->pNumber3 }}
                                                            @endif
                                                            ">
                                                    @if ($errors->has('pNumber3'))
                                                        <span class="invalid-feedback" role="alert">
                                                    <strong id="pNumber3Valid">{{ $errors->first('pNumber3') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="pNumber4" class="col-4 col-form-label">Phone Number 4:</label>
                                                <div class="col-md-8">
                                                    <input type="tel" class="form-control pNumber {{ $errors->has('pNumber4') ? ' is-invalid' : '' }}" name="pNumber4" placeholder="Phone Number 4" value="
                                                    @if($contact->pNumber4 == null)
                                                    @else
                                                    {{ $contact->pNumber4 }}
                                                    @endif
                                                            ">
                                                    @if ($errors->has('pNumber4'))
                                                        <span class="invalid-feedback" role="alert">
                                                    <strong id="pNumber4Valid">{{ $errors->first('pNumber4') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-4 col-form-label">Email(<span class="text-danger">*</span>):</label>
                                                <div class="col-md-8">
                                                    <input type="email" class="form-control email {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ $contact->email }}" required>
                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                    <strong id="emailValid">{{ $errors->first('email') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email2" class="col-4 col-form-label">Email 2:</label>
                                                <div class="col-md-8">
                                                    <input type="email" class="form-control email {{ $errors->has('email2') ? ' is-invalid' : '' }}" name="email2" placeholder="Email 2" value="
    @if($contact->email2 == null)
                                                            @else
                                                            {{$contact->email2}}
                                                            @endif
">
                                                    @if ($errors->has('email2'))
                                                        <span class="invalid-feedback" role="alert">
                                                    <strong id="email2Valid">{{ $errors->first('email2') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email3" class="col-4 col-form-label">Email 3:</label>
                                                <div class="col-md-8">
                                                    <input type="email" class="form-control email {{ $errors->has('email3') ? ' is-invalid' : '' }}" name="email3" placeholder="Email 3" value="
    @if($contact->email3 == null)
                                                    @else
                                                    {{$contact->email3}}
                                                    @endif
                                                            ">
                                                    @if ($errors->has('email3'))
                                                        <span class="invalid-feedback" role="alert">
                                                    <strong id="email2Valid">{{ $errors->first('email3') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="job" class="col-4 col-form-label">Job(<span class="text-danger">*</span>):</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control {{ $errors->has('job') ? ' is-invalid' : '' }}" name="job" placeholder="Job" value="{{ $contact->job }}" required>
                                                    @if ($errors->has('job'))
                                                        <span class="invalid-feedback" role="alert">
                                                    <strong id="jobValid">{{ $errors->first('job') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="city" class="col-4 col-form-label">City(<span class="text-danger">*</span>):</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" placeholder="City or Country" value="{{ $contact->city }}" required>
                                                    @if ($errors->has('city'))
                                                        <span class="invalid-feedback" role="alert">
                                                    <strong id="cityValid">{{ $errors->first('city') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="about" class="col-4 col-form-label">About(<span class="text-danger">*</span>):</label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control {{ $errors->has('about') ? ' is-invalid' : '' }}" name="about" placeholder="About Contact" required>{{$contact->about}}</textarea>
                                                    @if ($errors->has('about'))
                                                        <span class="invalid-feedback" role="alert">
                                                    <strong id="aboutValid">{{ $errors->first('about') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-success">Update Information</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </p>
            <p><i class="fa fa-briefcase info"></i> {{ $contact->job }}</p>
            <p><i class="fa fa-home info"></i> {{$contact->city}}</p>
            <p>
                <div class="row">
                    <div class="col-md-1">
                        <i class="fa fa-envelope info"></i>
                    </div>
                    <div class="col-md-11">
                        {{ $contact->email }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <i class="fa fa-envelope info"></i>
                    </div>
                    <div class="col-md-11">
                        {{ $contact->email2 }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <i class="fa fa-envelope info"></i>
                    </div>
                    <div class="col-md-11">
                        {{ $contact->email3 }}
                    </div>
                </div>
            </p>
            <p><i class="fa fa-phone info"></i> {{$contact->pNumber}}
            </p>
            <p><i class="fa fa-phone info"></i> {{$contact->pNumber2}}
            </p>
            <p><i class="fa fa-phone info"></i> {{$contact->pNumber3}}
            </p>
            <p><i class="fa fa-phone info"></i> {{$contact->pNumber4}}
            </p>
            <p>
                <div class="row">
                    <div class="col-md-1">
                        <i class="fa fa-info info"></i>
                    </div>
                    <div class="col-md-11">
                        {{ $contact->about }}
                    </div>
                </div>
            </p>
        </div>
    </div>

@endsection
@endforeach