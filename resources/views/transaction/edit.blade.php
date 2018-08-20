@extends('layouts.temp')
@section('content')

    <div>
        {!!  Form::model($transaction, array('route' => array('transaction.update', $transaction->id), 'method' => 'PUT', 'encrypte' => 'multipart/form-data')) !!}
        <div>
            {{Form::text('description', null, array('class' => 'form-control'))}}
        </div>
        <div>
            {{Form::date('date_paid', null, array('class' => 'form-control'))}}
        </div>
        <div>
            {{Form::text('category', null, array('class' => 'form-control'))}}
        </div>
        <div>
            {{Form::text('name', null, array('class' => 'form-control'))}}
        </div>
        <div>
            {{Form::text('nominal', null, array('class' => 'form-control'))}}
        </div>
        <button type="submit">Edit</button>
        {!! Form::close() !!}
    </div>

@endsection