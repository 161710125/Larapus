@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb primary">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Home</a> </li>
                    <li class="breadcrumb-item active" aria-current="page">Member</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">Data Member</div>
               <p><center><a class="btn btn-primary" href="{{ url('/admin/members/create') }}">Tambah</a></center></p>
               {!! $html->table(['class'=>'table-striped']) !!}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('scripts')
{!! $html->scripts() !!}
@endsection