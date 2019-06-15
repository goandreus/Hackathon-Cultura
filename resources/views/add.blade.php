@extends('layouts.app')
@section('title', 'Add Contact')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="margin-top: 40px;">
                <div class="card">
                    <div class="card-header">
                        <b style="font-family: sans-serif;">Add Contacts</b>
                    </div>
                    <div class="card-body">
                        <div class="row contacts">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <form class="form-group" method="post" action="{{route('add')}}" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="form-group row">
                                        <label for="fName" class="col-4 col-form-label">First Name(<span class="text-danger">*</span>):</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control {{ $errors->has('fName') ? ' is-invalid' : '' }}" name="fName" placeholder="First Name" required>
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
                                            <input type="text" class="form-control {{ $errors->has('lName') ? ' is-invalid' : '' }}" name="lName" placeholder="Last Name" required>
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
                                            <input type="text" class="form-control pNumber {{ $errors->has('pNumber') ? ' is-invalid' : '' }}" name="pNumber" placeholder="Phone Number" required>
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
                                            <input type="tel" class="form-control pNumber {{ $errors->has('pNumber2') ? ' is-invalid' : '' }}" name="pNumber2" placeholder="Phone Number 2">
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
                                            <input type="tel" class="form-control pNumber {{ $errors->has('pNumber3') ? ' is-invalid' : '' }}" name="pNumber3" placeholder="Phone Number 3">
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
                                            <input type="tel" class="form-control pNumber {{ $errors->has('pNumber4') ? ' is-invalid' : '' }}" name="pNumber4" placeholder="Phone Number 4">
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
                                            <input type="email" class="form-control email {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" required>
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
                                            <input type="email" class="form-control email {{ $errors->has('email2') ? ' is-invalid' : '' }}" name="email2" placeholder="Email 2">
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
                                            <input type="email" class="form-control email {{ $errors->has('email3') ? ' is-invalid' : '' }}" name="email3" placeholder="Email 3">
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
                                            <input type="text" class="form-control {{ $errors->has('job') ? ' is-invalid' : '' }}" name="job" placeholder="Job" required>
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
                                            <input type="text" class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" placeholder="City or Country" required>
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
                                            <textarea class="form-control {{ $errors->has('about') ? ' is-invalid' : '' }}" name="about" placeholder="About Contact" required></textarea>
                                            @if ($errors->has('about'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong id="aboutValid">{{ $errors->first('about') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="submit" type="submit" class="stylishBtn" style="font-size: smaller; height: 30px">Add Contact</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
