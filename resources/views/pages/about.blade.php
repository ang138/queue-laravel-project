<!-- การเรียกใช้งาน Tempate -->
@extends('layouts.main_template')
@section('title') เกี่ยวกับเรา @endsection
@section('content')

<div class="jumbotron">
    <div class="container pt-5">
        <h2 class="display-3 head-title">เกี่ยวกับเรา</h2>
    </div>
</div>

<div class="container mt-5 ">
    <div class="row">
        <div class="col-md-6 text-center">
            <div class="card">
                <div class="card-header">
                    <h4>การจองคิว</h4>
                </div>
                <div class="card-body">
                    <img src="{{ asset('assets/images/bk1.jpg') }}" alt="" style="width: 40%"><br><br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi enim magnam, ex provident
                        doloribus reprehenderit doloremque tenetur pariatur temporibus quisquam excepturi. Totam iusto
                        aliquam nostrum praesentium soluta laudantium quibusdam. Accusamus!</p>

                </div>
            </div>
        </div>

        <div class="col-md-6 text-center">
            <div class="card">
                <div class="card-header">
                    <h4>รายละเอียด</h4>
                </div>
                <div class="card-body">
                    <img src="{{ asset('assets/images/dt.jpg') }}" alt="" style="width: 52%"><br><br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi enim magnam, ex provident
                        doloribus reprehenderit doloremque tenetur pariatur temporibus quisquam excepturi. Totam iusto
                        aliquam nostrum praesentium soluta laudantium quibusdam. Accusamus!</p>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection