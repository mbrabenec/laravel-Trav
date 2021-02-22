@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">

          
            

            <form action="{{ route ('register') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Name" value="{{old('name')}}"
                    class="bg-gray-100 @error('name') border-red-200 @enderror border-2 w-full p-4 rounded-lg" >
                    @error('name')
                    <div class="text-red-400 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" value="{{old('username')}}"
                    class="bg-gray-100 border-2 w-full p-4 @error('username') border-red-200 @enderror rounded-lg">
                    @error('username')
                    <div class="text-red-400 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your email" value="{{old('email')}}"
                    class="bg-gray-100 border-2 w-full p-4 @error('email') border-red-200 @enderror rounded-lg">
                    @error('email')
                    <div class="text-red-400 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose your password" value=""
                    class="bg-gray-100 border-2 w-full p-4 @error('password') border-red-200 @enderror rounded-lg">
                    @error('password')
                    <div class="text-red-400 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password confirmation</label>
                    <input type="password" name="password_confirmation" id="password" placeholder="Confirm password" value=""
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg">

                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white rounded-md font-medium w-full px-4 py-3">
                        Register
                    </button>
                </div>




            </form>
        </div>

    </div>

@endsection