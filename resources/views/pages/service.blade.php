<!-- การเรียกใช้งาน Tempate -->
@extends('layouts.main_template')
@section('title') ติดต่อเรา @endsection
@section('content')

<div class="jumbotron">
    <div class="container pt-5">
        <h2 class="display-3 head-title">ติดต่อเรา</h2>
    </div>
</div>

<div class="container mt-5 ">
    <div class="row">
        <div class="col-md-4 text-center">
            <div class="card">
                <div class="card-header">
                    <h4>อานัส</h4>
                </div>
                <div class="card-body">
                    <img src="{{ asset('assets/images/cat.jpg') }}" alt="" style="width: 48%"><br><br>
                    <h4 style="text-align: left">ชื่อ     : อานัส อีแต</h4>
                    <h4 style="text-align: left">รหัสนิสิต : 632021136</h4>

                </div>
            </div>
        </div>

        <div class="col-md-4 text-center">
            <div class="card">
                <div class="card-header">
                    <h4>อีลฮัม</h4>
                </div>
                <div class="card-body">
                    <img src="{{ asset('assets/images/krap.jpg') }}" alt="" style="width: 40%"><br><br>
                    <h4 style="text-align: left">ชื่อ     : อีลฮัม ยามะแอ</h4>
                    <h4 style="text-align: left">รหัสนิสิต : 632021138</h4>

                </div>
            </div>
        </div>

        <div class="col-md-4 text-center">
            <div class="card">
                <div class="card-header">
                    <h4>ทัน</h4>
                </div>
                <div class="card-body">
                    <img src="{{ asset('assets/images/cat1.jpg') }}" alt="" style="width: 36%"><br><br>
                    <h4 style="text-align: left">ชื่อ     : ธัญเทพ ศรีจันทร์</h4>
                    <h4 style="text-align: left">รหัสนิสิต : 632021169</h4>

                </div>
            </div> 

    </div>
</div>
@endsection