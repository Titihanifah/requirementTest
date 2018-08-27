@extends('layouts.admin')
@section('title','Master Data')
@section('content')

    <div class="container">
        <a href="{{ url('/transaction/create') }}" class="btn btn-primary">Tambah</a>
         <br>
        <div class="row form-group" style="margin: 10px">
            <form action="{{ url()->current() }}" style="margin: 10px">
                <div class="col-md-4">
                    <input type="date" name="date_from" class="form-control">
                </div>
                <div class="col-md-1"> to
                </div>
                <div class="col-md-4">
                    <input type="date" name="date_to" class="form-control">
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary">
                        Date
                    </button>
                </div>
            </form>
            <br>

            <form action="{{ url()->current() }}" style="margin: 10px">

                <div class="col-md-6">
                    <select name="category" class="form-control">
                        <option value="income">Income</option>
                        <option value="expense">Expense</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">
                        Category
                    </button>
                </div>
            </form>
            <form action="{{ url()->current() }}" style="margin: 10px">

                <div class="col-md-5">
                    <input type="text" name="keyword" class="form-control" placeholder="Search...">
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary">
                        Search
                    </button>
                </div>
            </form>


        </div>
        <br>

        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Deskripsi</th>
                <th>Date Paid</th>
                <th>Kategori</th>
                <th>Nama Transaksi</th>
                <th>Nominal</th>
                <th>Aksi</th>
            </tr>
            @foreach($transaction as $key)
                <tr>
                    <td>{{ $key->id }}</td>
                    <td>{{ $key->description }}</td>
                    <td>{{ $key->date_paid }}</td>
                    <td>{{ $key->category }}</td>
                    <td>{{ $key->name }}</td>
                    <td>{{ $key->nominal }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('transaction') }}/{{ $key->id }}/edit"><i class="fa fa-edit"></i> Edit</a>
                        <a class="btn btn-danger" href="{{ url('transaction/destroy') }}/{{ $key->id }}"><i class="fa fa-trash-o"></i> Hapus </a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $transaction->links() }}
{{--        <nav>{{ $transaction->appends(Request::except('page'))->links() }}</nav>--}}
    </div>

    {{--Script Javascript--}}
    <link rel="stylesheet" href="{{ url('css/sweetalert.css') }}" type="text/css">
    {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>--}}
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
            {{--@if ($errors->any())--}}
                {{--var htmlText = '';--}}

                {{--@foreach ($errors->all() as $error)--}}
                    {{--htmlText += '{{ $error }}\n';--}}
                {{--@endforeach--}}
                {{--swal({--}}
                    {{--title : 'Failed',--}}
                    {{--text : htmlText,--}}
                    {{--type : 'error'--}}
                {{--});--}}
            {{--@endif--}}

//            $('#s-form').submit(function(e)
//            {
//                e.preventDefault();
//                $.ajax({
//                    url: $(this).attr('action'),
//                    data:{
//                        search: $('#search').val()
//                    },
//                    success: function(data){
//                        $('#result').html(data);
//                    }
//                });
//            });
//
//            $(document).ajaxComplete(function() {
//                $('.pagination li a').click(function(e) {
//                    e.preventDefault();
//                    var url = $(this).attr('href');
//                    $.ajax({
//                        url: url,
//                        success: function(data) {
//                            $('#result').html(data);
//                        }
//                    });
//                });
//            });

        });


    </script>

@endsection