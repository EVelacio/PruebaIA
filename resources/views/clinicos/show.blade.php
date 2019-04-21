@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Clinico
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('clinicos.show_fields')
                    <a href="{!! route('clinicos.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
