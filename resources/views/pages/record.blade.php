<!-- การเรียกใช้งาน Tempate -->
@extends('layouts.app')
@section('title') ประวัติการจอง @endsection
@section('content')

<div class="container-fluid px-4">
        <div class="col-md-10 offset-1" style="font-size: 16px">
            <div class="card mt-4">
                <div class="card-header">
                    <h4>ประวัติการจอง</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ไอดี</th>
                                <th>ชื่อเรื่อง</th>
                                <th>ประเภทงาน</th>
                                <th>ช่องทางเผยแพร่</th>
                                <th>แก้ไข</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bkdata as $row)
                                <tr>
                                    <td>{{$row->bkid}}</td>
                                    <td>{{$row->title}}</td>
                                    <td>{{$row->wtype}}</td>
                                    <td>{{$row->channel}}</td>
                                    <td><a href="{{ url('edit/'.$row->bkid)}}" class="btn btn-success">แก้ไขข้อมูล</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


</div>

@endsection