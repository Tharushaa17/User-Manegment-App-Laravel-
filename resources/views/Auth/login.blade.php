@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">

            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div>
            @endif


           <form action="{{ route('login') }}" method="post">
                @csrf
                
                <div class="mb-4">
                    <lable for="email" class="sr-only">Email</lable>
                    <input type="text" name="email" id="email" placeholder="Enter Your email" 
                    class="bg-grat-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
              
                <div class="mb-4">
                    <lable for="password" class="sr-only">Password</lable>
                    <input type="password" name="password" id="password" placeholder="Enter Your Password" 
                    class="bg-grat-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded
                    font-medium w-full">Login</button> 
                </div>
           </form>
        </div>

@endsection