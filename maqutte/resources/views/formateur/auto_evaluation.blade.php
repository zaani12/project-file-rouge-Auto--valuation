@extends('layouts.layout')
@section('content')    
<div class="content-wrapper">

    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1>Liste des compétences</h1>
    </div>
    <div class="col-sm-6">
        <a href="{{ route('ajout') }}" class="btn btn-primary float-sm-right"> Ajouter compétence</a>
    </div>
    

    </div>
    </div>
    </section>
    
    <section class="content">
    
    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Autoévaluation</h3>
    <div class="card-tools">

    </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects">
 
                <thead>
                <tr>

                <th style="width: 20%">
                    compétence
                </th>
                <th style="width: 30%">
                    Description 
            
                </th>
                <th style="width: 20%" class="text-center">
                    Action
                </th>
                </tr>
                </thead>
                <tbody>
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

                <td class="project-actions text-center">
                    <a class="btn  btn-sm" href="{{ route('info') }}">
                        <i class="fas fa-eye"></i>

                        </i>
                        
                        </a>
                <a class="btn  btn-sm" href="{{ route('edit') }}">
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
                    <td class="project-actions text-center">
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
                        <td class="project-actions text-center">
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
                            <td class="project-actions text-center">
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
    
    </section>
    
    </div>
    @endsection