@extends('layouts.layout')
@section('content')  
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Détail de compétence</h1>
                </div>

            </div>
        </div>
    </div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                            <div class="col-sm-12">
                                <label for="nom">Nom:</label>
                                <p>Maquetter une application mobile</p>
                            </div>

                            {{-- <!-- Projects Title -->
                            <div class="col-sm-12">
                                <label for="description">Titre du Module:</label>
                                    <p>Module 1</p>
                            </div> --}}

                            <!-- Description Field -->
                            <div class="col-sm-12">
                                <label for="description">Description:</label>
                                <p>Cette compétence vous permettra de concevoir des maquettes d'applications mobiles, aidant ainsi à visualiser et à planifier l'interface utilisateur</p>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection