@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            @if(session('status'))
            <div class="text-white align-middle bg-red-400 p-4 rounded-lg width-full mb-6 text-center">
                {{session('status')}}
            </div>
            @endif

            <form action="{{ route ('login') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" value="{{old('email')}}"
                    class="bg-gray-100 border-2 w-full p-4 @error('email') border-red-200 @enderror rounded-lg">
                    @error('email')
                    <div class="text-red-400 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" value=""
                    class="bg-gray-100 border-2 w-full p-4 @error('password') border-red-200 @enderror rounded-lg">
                    @error('password')
                    <div class="text-red-400 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                
                    </div>

                </div>
                
                <div>
                    <button type="submit" class="bg-blue-500 text-white rounded-md font-medium w-full px-4 py-3">
                        Login
                    </button>
                </div>




            </form>
        </div>

    </div>

@endsection