@extends('layout.main')

@section('isi')
    
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="small-box bg-light" style="width: 200px auto">
            <div class="inner">
                
                    <h4 style="font-weight: bold">Profile</h4>
                    <hr>
                    <center>
                    <img src="dist/img/jomss.jpg" alt="foto joms" style="width:570px"> <br><br> 
                    </center>
                    
                    <h5 style="font-weight: bold">Biodata {{ $rfull_name }}</h5>
                    Nama Pagglan : {{ $rname }} <br>
                    NIM : {{ $rnim }} <br>
                    Absen : {{ $rabsen }} <br><br>
                    {{ $rbio }}<br><hr> <br>

                    <h5 style="font-weight: bold">Biodata {{ $sfull_name }}</h5>
                    Nama Panggilan : {{ $sname }} <br>
                    NIM : {{ $snim }} <br>
                    Absen : {{ $sabsen }} <br><br>
                    {{ $sbio }}<br><hr><br>

                    <h5 style="font-weight: bold">Biodata {{ $zfull_name }}</h5>
                    Nama Panggilan : {{ $zname }} <br>
                    NIM : {{ $znim }} <br>
                    Absen : {{ $zabsen }} <br><br>
                    {{ $zbio }}<br>

                    
                    
                    
                
                <br>
            </div>
            </div>

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
@endsection