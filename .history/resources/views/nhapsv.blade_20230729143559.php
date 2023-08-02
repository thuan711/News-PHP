<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/b
ootstrap.min.css">
<div class="col-6 m-auto">
    <form method="post" class="p-3 border border-primary">
        @csrf
        <div class="form-group row">
            <label class="col-3">Mã SV</label>
            <div class="col-9">
                <input value="{{old('masv')}}" type="text" class="form-control" name="masv">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3">Họ tên</label>
            <div class="col-9">
                <input value="{{old('hoten')}}" type="text" class="form-control" name="hoten">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3">Tuổi</label>
            <div class="col-9">
                <input value="{{old('tuoi')}}" type="text" class="form-control" name="tuoi">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3">Ngày sinh</label>
            <div class="col-9">
                <input value="{{old('ngaysinh')}}" type="text" class="form-control" name="ngaysinh">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3">CMND</label>
            <div class="col-9">
                <input value="{{old('cmnd')}}" type="text" class="form-control" name="cmnd">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3">Email</label>
            <div class="col-9">
                <input value="{{old('email')}}" type="text" class="form-control" name="email">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-25">Xử lý</button>
            </div>
        </div>
    </form>
</div>