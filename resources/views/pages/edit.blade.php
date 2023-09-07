@extends('layouts.app')
@section('title') กรอกรายละเอียด @endsection
@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2" style="font-size: 16px">
            <div class="card">
                <div class="card-header">
                    <h4>แก้ไขรายละเอียด</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('booking.data') }}" method="post" autocomplete="off">
                       
                        @csrf
                        <div class="form-group">
                            <label for="">ชื่อ</label>
                            <input type="text" class="form-control" value="{{$data->name}}" name="name" readonly required>
                        </div><br>

                        <div class="form-group">
                            <label for="">อีเมล์</label>
                            <input type="text" class="form-control" value="{{$data->email}}" name="email" readonly required>
                        </div><br>

                        <div class="form-group">
                            <label for="">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" name="tel" id="tel" required>
                        </div><br>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">เลือกประเภทงาน</label>
                            <select class="form-select" name="wtype" required>
                                <option value="">--- เลือกประเภทงาน ---</option>
                                <option value="สื่อข่าวสาร">สื่อข่าวสาร</option>
                                <option value="สื่อการศึกษา">สื่อการศึกษา</option>
                                <option value="สื่อบันเทิง">สื่อบันเทิง</option>
                                <option value="สื่อบุคคล">สื่อบุคคล</option>
                                <option value="สื่อกิจกรรมต่าง ๆ">สื่อกิจกรรมต่าง ๆ</option>
                            </select>
                        </div><br>

                        <div class="form-group">
                            <label for="">ชื่อเรื่อง</label>
                            <input type="text" class="form-control" name="title" required>
                        </div><br>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">รายละเอียด</label>
                            <textarea class="form-control" name="details" rows="4"></textarea>
                        </div><br>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">ช่องทางเผยแพร่</label><br><br>
                            <div class="form-check offset-1">
                                <label class="form-check-label" for="defaultCheck1">Website official</label>
                                <input class="form-check-input" type="checkbox" name="channel" value="Website official">
                            </div>
                        </div><br>

                        <div class="form-group">
                            <div class="form-check offset-1">
                                <label class="form-check-label" for="defaultCheck1">Facebook official</label>
                                <input class="form-check-input" type="checkbox" name="channel" value="Facebook official">
                            </div>
                        </div><br>

                        <div class="form-group">
                            <div class="form-check offset-1">
                                <label class="form-check-label" for="defaultCheck1">Line official</label>
                                <input class="form-check-input" type="checkbox" name="channel" value="Line official">
                            </div>
                        </div><br>

                        <div class="form-group">
                            <div class="form-check offset-1">
                                <label class="form-check-label" for="defaultCheck1">Tiktok official</label>
                                <input class="form-check-input" type="checkbox" name="channel" value="Tiktok official">
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label for="">วันที่เผยแพร่</label>
                            <input type="date" class="form-control" name="date" required>
                        </div><br>

                        <div class="form-group">
                            <label for="file">ตัวอย่าง/ไฟล์</label>
                            <input type="file" class="form-control" name="expfile" required>
                        </div><br>


                        <button class="btn btn-primary" type="submit" name="submit">ยืนยัน</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

@endsection