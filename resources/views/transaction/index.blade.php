@extends('layouts.temp')
@section('content')

    <table>
        <tr>
            <td>No</td>
            <td>Deskripsi</td>
            <td>Date Paid</td>
            <td>Kategori</td>
            <td>Nama Transaksi</td>
            <td>Nominal</td>
            <td>Aksi</td>
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
                    <a href="{{ url('transaction') }}/{{ $key->id }}/edit">Edit</a>
                    <a href="{{ url('transaction/destroy') }}/{{ $key->id }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection