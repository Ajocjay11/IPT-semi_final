@extends('layouts.app')

@section('content')

    <div class="container mt-4 w-50 border ">
        <h1 class="text-center">Create new Venue</h1>

        {!! Form::open(['url' => ['store-venue'], 'method' => 'post']) !!}
            <div class="form-group">
                {{ Form::label('name','Name') }}
                {{ Form::text('name',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('address','Address') }}
                {{ Form::text('address',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('capacity','Capacity') }}
                {{ Form::text('capacity',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group">
                {{ Form::label('price','Price') }}
                {{ Form::text('price',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group shadow-none">
                {!! Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
            </div>
        {!! Form::close() !!}

    </div>

@endsection
