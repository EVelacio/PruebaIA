@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Clinico
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($clinico, ['route' => ['clinicos.update', $clinico->id], 'method' => 'patch']) !!}

                        @include('clinicos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection