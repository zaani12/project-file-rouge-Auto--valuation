@extends('layouts.layout')
@section('content')
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <h1>Mon Autoévaluation</h1>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Form on the left (col-md-6) -->
                    <div class="col-md-5">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Sélectionnez votre niveau</h3>
                            </div>
                            <form>
                                
                                <div class="card-body">
                                    
                                    <div class="" data-toggle="buttons">
                                        <label class="active btn bg-olive">
                                            <input type="radio" name="options" id="option_b1" autocomplete="off" checked> Imiter
                                        </label>
                                        <label class="btn bg-olive">
                                            <input type="radio" name="options" id="option_b2" autocomplete="off"> Adapté
                                        </label>
                                        <label class="btn bg-olive">
                                            <input type="radio" name="options" id="option_b3" autocomplete="off"> Transposé
                                        </label>
                                    </div>
                                    <form id="linkForm">
                                        <div class="form-group">
                                            <label for="link">Add Link:</label>
                                            <input type="text" class="form-control" id="link" name="link" placeholder="Enter a valid link" required>
                                            <div class="invalid-feedback">Please enter a valid link.</div>
                                        </div> 
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Table on the right (col-md-6) -->
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body p-0">
                                <table class="table table-striped projects">
                                    {{-- <table class="table table-striped projects"> --}}
                                        <thead>
                                        <tr>

                                        <th style="width: 20%">
                                            compétence
                                        </th>
                                        <th style="width: 30%">
                                            Description 
                                    
                                        </th>
                                        <th style="width: 8%" class="text-center">
                                            Niveau
                                        </th>
                                        <th style="width: 20%" class="text-center">
                                            Action
                                        </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        <td >
                                        <a >
                                        maquetter une application
                                        </a>
                                        <br/>
                                        </td>
                                        <td>
                                            <a> creation des maquette en utilisent figma ou html,css </a>

                                        </td>
                                        <td class="project-state">
                                        <a href="{{ route('nouveau_add') }}" class="badge badge-success">Mon nouveau</a>
                                        </td>
                                        <td class="project-actions text-right">
                                            <a class="btn  btn-sm" href="">
                                                <i class="fas fa-eye"></i>

                                                </i>
                                                
                                                </a>
                                        <a class="btn  btn-sm" href="#">
                                            <i class="fas fa-pencil-alt" style="color: orange;"></i>
                                        </i>
                                        
                                        </a>
                                        <a class="btn btn-sm" href="#">
                                            <i class="fas fa-trash" style="color: red;"></i>
                                            </i>
                                            </a>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <a>
                                            maquetter une application
                                            </a>
                                            <br/>
                                            </td>
                                            <td>
                                                <a> creation des maquette en utilisent figma ou html,css </a>
    
                                            </td>
                                            <td class="project-state">
                                            <span class="badge badge-success">Transposé</span>
                                            </td>
                                            <td class="project-actions text-right">
                                                <a class="btn  btn-sm" href="#">
                                                    <i class="fas fa-eye"></i>
    
                                                    </i>
                                                    
                                                    </a>
                                            <a class="btn  btn-sm" href="#">
                                                <i class="fas fa-pencil-alt" style="color: orange;"></i>
                                            </i>
                                            
                                            </a>
                                            <a class="btn btn-sm" href="#">
                                                <i class="fas fa-trash" style="color: red;"></i>
                                                </i>
                                                </a>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <a>
                                                maquetter une application
                                                </a>
                                                <br/>
                                                </td>
                                                <td>
                                                    <a> creation des maquette en utilisent figma ou html,css </a>
        
                                                </td>
                                                <td class="project-state">
                                                <span class="badge badge-success">Adapté</span>
                                                </td>
                                                <td class="project-actions text-right">
                                                    <a class="btn  btn-sm" href="#">
                                                        <i class="fas fa-eye"></i>
        
                                                        </i>
                                                        
                                                        </a>
                                                <a class="btn  btn-sm" href="#">
                                                    <i class="fas fa-pencil-alt" style="color: orange;"></i>
                                                </i>
                                                
                                                </a>
                                                <a class="btn btn-sm" href="#">
                                                    <i class="fas fa-trash" style="color: red;"></i>
                                                    </i>
                                                    </a>
                                                </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    <a>
                                                    maquetter une application
                                                    </a>
                                                    <br/>
                                                    </td>
                                                    <td>
                                                        <a> creation des maquette en utilisent figma ou html,css </a>
            
                                                    </td>
                                                    <td class="project-state">
                                                    <span class="badge badge-success">Adapté</span>
                                                    </td>
                                                    <td class="project-actions text-right">
                                                        <a class="btn  btn-sm" href="#">
                                                            <i class="fas fa-eye"></i>
            
                                                            </i>
                                                            
                                                            </a>
                                                    <a class="btn  btn-sm" href="#">
                                                        <i class="fas fa-pencil-alt" style="color: orange;"></i>
                                                    </i>
                                                    
                                                    </a>
                                                    <a class="btn btn-sm" href="#">
                                                        <i class="fas fa-trash" style="color: red;"></i>
                                                        </i>
                                                        </a>
                                                    </td>
                                                    </tr>
                                       
                                        </tbody>
                                        </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection