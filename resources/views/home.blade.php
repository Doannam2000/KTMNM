@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Đăng ký tiêm') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="home" method="post">
                        @csrf
                        <input class="form-control form-control-lg" name="userid" value="1" hidden type="text">
                        <p>Địa chỉ</p>
                        <input class="form-control form-control-lg" name="noitiem" type="text">
                        <p>Đối tượng ưu tiên</p>
                        <input class="form-control form-control-lg" name="doituonguutien" type="text">
                        <p>Ngày tiêm</p>
                        <input class="form-control form-control-lg" name="ngayhen" type="date">
                        <button type="submit" class="btn btn-primary mt-3">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection