@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg ">

            @auth
                <form action="{{ route('posts') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="body" class="sr-only"></label>
                        <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                            @error('body') border-red-500 @enderror placeholder="post something :)"></textarea>

                        @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror

                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-3 rounded font-medium">
                            Post
                        </button>
                    </div>
                </form>
            @endauth

            <div class="text-2xl mb-4 p-2 rounded-md">Posts</div>

            @if (count($posts))

                @foreach ($posts as $post)

                    <div class="text-md mb-3 bg-gray-100 p-2 rounded-md">
                        <a href="#" class="font-bold">{{ $post->user->username}}</a><span class="text-gray-600 ml-4 text-sm">{{ $post->user->created_at->diffForHumans()}}</span>

                        <p class="my-3">{{ $post->body }}</p>
                    </div>

                @endforeach

               {{ $posts->links() }}

            @else

                <div>No posts to display</div>

            @endif



        </div>


    </div>

@endsection
