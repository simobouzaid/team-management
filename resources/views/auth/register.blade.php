@extends('layouts.app')
@section('title', 'register')
@section('content')
    <div class="min-h-screen bg-gray-100 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Create your account</h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Or
                <a href="{{url('/login')}}" class="font-medium text-blue-600 hover:text-blue-500">
                    sign in to your existing account
                </a>
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-6 shadow rounded-lg sm:px-10">
                <form class="mb-0 space-y-6" action="{{url('/create_user')}}" method="POST">
                    @csrf

          
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <div class="mt-1">
                            <input id="name" name="name" type="text" autocomplete="name" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                placeholder="John Doe">
                        </div>
                    </div>


                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                placeholder="you@example.com">
                        </div>
                    </div>


                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" autocomplete="new-password" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                placeholder="••••••••">
                        </div>
                    </div>


                    <div>
                        <button type="submit" name="login"
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection