@extends('layout')
@section('tieude')
Đăng ký
@endsection
@section('noidungchinh')
<div>
		<div class="container">
			<div class="row">
				<div class=" pt-5 text-center">
					<div class="breadcrumb-text">
						<h1>ĐĂNG KÝ</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form class="mt-5 p-5 ml-5" style="width:60%" method="POST" action="{{ route('register') }}">
    @csrf
        <div class="form-outline mb-4">
            <label class="form-label" for="name" :value="__('Name')" >Họ và tên</label>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-control" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
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
            </a>

            <x-primary-button class=" mt-2 btn btn-primary btn-block">
                {{ __('Đăng ký') }}
            </x-primary-button>
        </div>

        <!-- Register buttons -->
        <div class="text-center">
            
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