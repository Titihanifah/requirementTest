@extends('layouts.admin')
@section('title','Master Data')
@section('content')

    <div>
        {!! Form::open(array('route' => 'transaction.store', 'enctype' => 'multipart/form-data')) !!}
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label>Deskripsi</label>
                </div>
                <div class="col-md-7">
                    <textarea type="text" name="description" class="form-control m-input"></textarea>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label>Date Paid</label>
                </div>
                <div class="col-md-7">
                    <input type="date" name="date_paid" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label>Category</label>
                </div>
                <div class="col-md-7">
                    <select name="category" class="form-control">
                        <option value="income">Income</option>
                        <option value="expense">Expense</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label>Name Transaction</label>
                </div>
                <div class="col-md-7">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label>Nominal</label>
                </div>
                <div class="col-md-7">
                    <input type="text" name="nominal" class="form-control">
                </div>
            </div>
        </div>
        <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Simpan </button>

        {!! Form::close() !!}
    </div>


    <link rel="stylesheet" href="{{ url('css/sweetalert.css') }}" type="text/css">
    <script type="text/javascript" src="{{ url('js/sweetalert.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready( function () {

            @if(\Illuminate\Support\Facades\Session::has('message'))
                swal({
                    title: 'Success',
                    text: '{{ \Illuminate\Support\Facades\Session::get('message') }}',
                    type: 'success'
                });
            @endif

            // message error
            @if ($errors->any())
                var htmlText = '';

                @foreach ($errors->all() as $error)
                    htmlText += '{{ $error }}\n';
                @endforeach
                swal({
                    title : 'Failed',
                    text : htmlText,
                    type : 'error'
                });
            @endif
        });
    </script>
@endsection