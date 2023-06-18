@extends('dashboard/template')
 
@section('page-content')
<div class="card m-5 shadow">
    <div class="row">
        <div class="col-md-10 col-sm-7">
            <div class="card-body fs-5 mid-gray">
                Receituário
            </div>
        </div>
        <div class="col-md-2 col-sm-5">
        </div>
    </div>
</div>
<div class="card mx-5 p-2 shadow overflow-auto custom-card">
    <img class="" src="{{ asset('public/img/construcao.png') }}" alt="">
</div>
@endsection