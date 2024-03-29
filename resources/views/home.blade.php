@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    @if(Auth::user())
                     <h3> Hi, {{ Auth::user()->name }}</h3>
                        @else
                    <h3>Please, register</h3>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
