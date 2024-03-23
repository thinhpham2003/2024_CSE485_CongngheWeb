@extends('admin.main')
@section('content')
    <div class="card card-primary">
        <!-- form start -->
        <form action="{{ route('departments.store') }}" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label>Tên đơn vị</label>
                    <input type="text" name="name"  value="{{old('name')}}" class="form-control" placeholder="Nhập tên phòng ban">
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input type="text" name="address"  value="{{old('address')}}" class="form-control" placeholder="Nhập địa chỉ">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Nhập email">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="tel" name="phone" value="{{old('phone')}}" class="form-control" placeholder="Nhập sđt">
                </div>

                <div class="form-group">
                    <label>Logo</label>
                    <input type="file" name="file" class="form-control" id = "upload">
                    <div id = "image_show">

                    </div>
                    <input type="hidden" name = "thumb" id="thumb">
                </div>
                <div class="form-group">
                    <label for="menu">Website</label>
                    <input type="text" name="website" value="{{old('website')}}" class="form-control">
                </div>
                <div class="form-group">
                    <label >Mô tả chung</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tạo phòng ban</button>
            </div>
            @csrf
        </form>

    </div>
@endsection

