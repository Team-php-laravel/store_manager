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
                <input type="text" placeholder="First Name">
                <label>Họ</label>
                <input type="text" placeholder="Last Name">
            </div>
            <div>
                <label>Email</label>
                <input type="text" placeholder="email@domail.com">
            </div>
            <div>
                <label>Điện Thoại</label>
                <input type="text" placeholder="Phone Number">
            </div>
            <div>
                <label>Địa Chỉ</label>
                <input type="text" placeholder="Address">
            </div>
            <div>
                <input type="submit" value="Đặt Bàn">
            </div>
        </div>
    </div>
</div>
@endsection
