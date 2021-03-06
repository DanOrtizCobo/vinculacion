@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Religión
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($religion, ['route' => ['religions.update', $religion->id], 'method' => 'patch']) !!}

                        @include('religions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection