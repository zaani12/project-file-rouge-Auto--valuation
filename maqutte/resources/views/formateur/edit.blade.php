@extends('layouts.layout')
@section('content')
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <h1>Edite Compétence</h1>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Form on the left (col-md-6) -->
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"> Edite Compétence</h3>
                            </div>
                            <form>
                                <div class="card-body">

                                            <label >Nom de compétence</label>
                                            <input type="text" class="form-control" placeholder="Nom de compétence" required>
                                            <div class="invalid-feedback">Please enter a valid link.</div>
                                            <label >Description</label> 
                                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                        

                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

 
                    
                </div>
            </div>
        </section>
    </div>
</div>
@endsection