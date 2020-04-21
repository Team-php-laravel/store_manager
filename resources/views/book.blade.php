@extends('templates.app')

@section('title', 'Book')
@section('content')
<div id="content">
    <div class="book">
        <div id="title-book">
            <h2>Đặt Bàn</h2>
        </div>
        <div id="infomation-book">
            <div>
                <label>Tên</label>
                <input type="text" placeholder="First Name" name="fistname">
                <label>Họ</label>
                <input type="text" placeholder="Last Name" name="lastname">
            </div>
            <div id="email">
                <label>Email</label>
                <input type="text" placeholder="email@domail.com" name="email">
            </div>
            <div id="phonenumber">
                <label>Điện Thoại</label>
                <input type="text" placeholder="Phone Number" name="phonenumber">
            </div>
            <div id="address">
                <label>Địa Chỉ</label>
                <input type="text" placeholder="Address" name="address">
            </div>
            <div>
                <input type="submit" value="Đặt Bàn" name="book">
            </div>
        </div>
    </div>
</div>
@endsection
