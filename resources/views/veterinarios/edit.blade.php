@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Veterinario
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($veterinario, ['route' => ['veterinarios.update', $veterinario->id], 'method' => 'patch']) !!}

                        @include('veterinarios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection