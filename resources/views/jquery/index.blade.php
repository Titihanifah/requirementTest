@extends('layouts.temp')
@section('title','JQuery')
@section('content')
    <div style="background-color: #C1C1C1; margin: 50px;">
        <section style="padding: 50px">
            <button class="btn btn-primary" id="button-add">Tambah</button>
            <div class="container" style="background-color: thistle; margin: 20px; padding: 20px">
            </div>
        </section>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            var sumBox = 0; // inisiasi jumlah kotak awal

            // ketika button tambah di klik
            $("#button-add").click(function(e){
                e.preventDefault();
                sumBox++; // menambah jumlah kotak +1
                // penambahan div (kotak kecil)
                $(".container").append('<div height="auto" style="margin: 10px; padding: 10px; background-color:  #2e6da4">Kotak Kecil<br><br><a class="btn btn-sm btn-danger float-right" style="margin: 10px" id="delete">Hapus</a><br><br></div>')
            });

            // ketika button hapus diklik
            $(".container").on("click","#delete", function (e) {
                e.preventDefault();
                // menghilangkan kotak kecil
                $(this).parent('div').remove();

                sumBox--; // mengurangi jumlah kotak ketika button hapus di klik
            });
        });

    </script>
@endsection