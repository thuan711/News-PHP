@extends('layout')
@section('tieude')
Đăng ký
@endsection
@section('noidungchinh')

		<div class="container">
			<div class="row">
				<div class=" pt-5 text-center">
					<div class="breadcrumb-text">
						<h1>ĐĂNG KÝ</h1>
					</div>
				</div>
			</div>
		</div>
	
    <div class="container d-flex justify-content-center align-items-center" style="height: 150vh;">
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form class="mt-5 p-5 ml-5" style="width:60%" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-outline mb-4">
                <label class="form-label" for="ho" :value="__('ho')" >Họ </label>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="ho" :value="old('ho')" required autofocus autocomplete="name" class="form-control" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-outline mb-4">
                <label class="form-label" for="ten" :value="__('ten')" >Tên</label>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="ten" :value="old('ten')" required autofocus autocomplete="name" class="form-control" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-outline mb-4">
                <label class="form-label" for="name" :value="__('Name')" >Nghề nghiệp</label>
                <select id="occupation" class="block mt-1 w-full" name="occupation" :value="old('occupation')" required>
                    <option value="">Chọn nghề nghiệp</option>
                    <option value="developer">Nhà phát triển</option>
                    <option value="designer">Nhà thiết kế</option>
                    <option value="marketer">Nhà tiếp thị</option>
                    <option value="teacher">Giáo viên</option>
                    <!-- Thêm các tùy chọn nghề nghiệp khác -->
                </select>

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-outline mb-4">
                <label class="form-label" for="name" :value="__('Name')" >Giới tính</label> <br>
                <input id="name" type="radio" name="name" :value="old('name')" checked autofocus autocomplete="name" class="form-control" style="width: 25px; height:20px;"/> Nam
                <input id="name" type="radio" name="name" :value="old('name')"  autofocus autocomplete="name" class="form-control" style="width: 25px; height:20px; padding:5px;"/> Nữ
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
        </div>
    </div>
        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="email" :value="__('Email')">Email</label>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" class="form-control" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="password" :value="__('Password')" >Mật khẩu</label>
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" class="form-control" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="password" :value="__('Password')" >Nhập lại mật khẩu</label>
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" class="form-control" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Bạn đã có tài khoản?') }}
            </a> <br>

            <x-primary-button class=" mt-2 btn btn-primary btn-block">
                {{ __('Đăng ký') }}
            </x-primary-button>
        </div>

        <!-- Register buttons -->
        <div class="text-center pb-5">
            
            <p>or sign in with:</p>
            <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
            </button>
        </div>
        </form>
    </div>


    
@endsection