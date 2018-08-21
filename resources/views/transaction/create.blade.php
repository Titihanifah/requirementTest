@extends('layouts.temp')
@section('content')

    <div>
        {!! Form::open(array('route' => 'transaction.store', 'enctype' => 'multipart/form-data')) !!}
            <h4>Tambah data</h4>
            <label>Deskripsi</label>
            <input type="text" name="description" class="form-control">
            <label>Date Paid</label>
            <input type="date" name="date_paid" class="form-control">
            <label>Category</label>
            <input type="text" name="category" class="form-control">
            <label>Name Transaction</label>
            <input type="text" name="name" class="form-control">
            <label>Nominal</label>
            <input type="text" name="nominal" class="form-control">
            <button type="submit">Simpan</button>
        {!! Form::close() !!}
    </div>
@endsection