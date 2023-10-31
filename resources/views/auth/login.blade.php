@extends('auth.layouts')

@section('content')
@include('components.navbar1')

<div class="flex justify-center mt-5">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <form method="post" action="{{ route('authenticate') }}">
                @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email Address
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password">
                @if ($errors->has('password'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div class="mb-6">
                <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="Login">
            </div>
            </form>
        </div>
    </div>
</div>


@endsection