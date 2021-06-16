
@extends('layouts.admin')

@section('content')
<style>
.container-fluid .page-header-content{
    background-image:url("{{asset('/images/cover3.jpg')}}");
    padding: 100px;
}

</style>
<div class="page-header">
    <div class="container-fluid">
        <div class="page-header-content">
            <br><br>
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="tool"></i></div>
                <span>Ajouter un Ressortissants</span>
            </h1>
            <br>
        </div>
    </div>
</div>

<div class="container-fluid mt-n10">


    <!--Card Primary-->

    <div class="card mb-4">
        <div class="card-header">Ajouter un Ressortissant</div>
        <div class="card-body">
            <div class="datatable table-responsive">
                <div class="mt-3 card">
                    <div class="card-body">
                        <form method="POST" action="{{ url('/ressortissants/store') }}" enctype="multipart/form-data">
                            @csrf
                            @include('admin.ressortissants.form')
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection