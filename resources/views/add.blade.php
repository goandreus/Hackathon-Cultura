@extends('layouts.app')
@section('title', 'Agregar')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="margin-top: 40px;">
                <div class="card">
                    <div class="card-header">
                        <b style="font-family: sans-serif;">Formulario</b>
                    </div>
                    <div class="card-body">
                        <div class="row contacts">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <form class="form-group" method="post" action="{{route('add')}}" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="form-group row">
                                        <label for="fName" class="col-4 col-form-label">Departamento:</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control {{ $errors->has('fName') ? ' is-invalid' : '' }}" name="fName" placeholder="Departamento" required>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lName" class="col-4 col-form-label">Provincia(<span class="text-danger">*</span>):</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control {{ $errors->has('lName') ? ' is-invalid' : '' }}" name="lName" placeholder="Provincia" required>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gender" class="col-4 col-form-label">Municipalidad:</label>
                                        <div class="col-8">
                                            <div class="_5k_5">
                                                <span class="_5k_4" datatype="selectors" id="u_0_19">
                                                    <span id="gender">
                                                        <select class="_5dba" aria-label="Gender" title="Gender" name="gender" style="padding: 5px;">
                                                            <option value="Males">San juan de miraflores</option>
                                                            <option value="Female">Lurin</option>
                                                            <option value="Female">San Borja</option>
                                                            <option value="Female">La Victoria</option>
                                                            <option value="Female">San Miguel</option>
                                                            <option value="Female">Los olivos</option>
                                                            <option value="Female">Miraflores</option>
                                                            <option value="Female">Surco</option>
                                                            <option value="Female">San Martin</option>
                                                        </select>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pNumber" class="col-4 col-form-label">Correo(<span class="text-danger">*</span>):</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control pNumber {{ $errors->has('pNumber') ? ' is-invalid' : '' }}" name="pNumber" placeholder="Correo" required>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pNumber2" class="col-4 col-form-label">Comision:</label>
                                        <div class="col-md-8">
                                            <input type="tel" class="form-control pNumber {{ $errors->has('pNumber2') ? ' is-invalid' : '' }}" name="pNumber2" placeholder="Comision">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pNumber3" class="col-4 col-form-label">Area Responsable:</label>
                                        <div class="col-md-8">
                                            <input type="tel" class="form-control pNumber {{ $errors->has('pNumber3') ? ' is-invalid' : '' }}" name="pNumber3" placeholder="Area Responsable">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pNumber4" class="col-4 col-form-label">Numero de Expediente:</label>
                                        <div class="col-md-8">
                                            <input type="tel" class="form-control pNumber {{ $errors->has('pNumber4') ? ' is-invalid' : '' }}" name="pNumber4" placeholder="Numero de Expediente">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label">Nombre del solicitante(<span class="text-danger">*</span>):</label>
                                        <div class="col-md-8">
                                            <input type="email" class="form-control email {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Nombre del solicitante" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email2" class="col-4 col-form-label"> Tipo de tramite:</label>
                                        <div class="col-md-8">
                                            <input type="email" class="form-control email {{ $errors->has('email2') ? ' is-invalid' : '' }}" name="email2" placeholder="Tipo de tramite">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email3" class="col-4 col-form-label">Uso:</label>
                                        <div class="col-md-8">
                                            <input type="email" class="form-control email {{ $errors->has('email3') ? ' is-invalid' : '' }}" name="email3" placeholder="Uso">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="job" class="col-4 col-form-label">Direcion(<span class="text-danger">*</span>):</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control {{ $errors->has('job') ? ' is-invalid' : '' }}" name="job" placeholder="Direccion" required>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="city" class="col-4 col-form-label">Revicion(<span class="text-danger">*</span>):</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" placeholder="Revicion" required>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="about" class="col-4 col-form-label">Dictamen(<span class="text-danger">*</span>):</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control {{ $errors->has('about') ? ' is-invalid' : '' }}" name="about" placeholder="Dictamen" required></textarea>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="submit" type="submit" class="stylishBtn" style="font-size: smaller; height: 30px">Enviar</button>
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
