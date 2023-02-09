@extends('layouts.app')
@section('content')

<div class="bg-gray-900 px-28 ">
    <div class="bg-gray-800  rounded-3xl p-8 flex flex-col space-y-8">
        <!-- Welcome Back -->
        <div class="flex flex-row">
            <span class=" uppercase underline text-2xl tracking-wide font-extrabold">Welcome </span>
            <span class=" tracking-wide font-extrabold text-2xl text-purple-600 ml-2"> Back:</span>
        </div>
        <!-- User Name and Button -->
        <div class="flex justify-between px-20">
            <div class="flex flex-row">
                <span class="text-4xl font-bold " >User name</span>
                <img src="/imgs/avatar.png" alt="avatar" class="rounded-full w-12  ml-5">
            </div>
            <a href="#" class="bg-purple-500 rounded-lg py-3 px-3 h-12 font-semibold" >Settings</a>
        </div>

        <div class="bg-gray-900 rounded-3xl mx-20">
            <nav class="container mx-auto flex items-center justify-between border-b-4 border-gray-800 px-4 py-6 flex-col lg:flex-row ">
                <div class="flex flex-col items-center lg:flex-row">
                    <ul class="flex ml-0 lg:ml-4 space-x-8 ">
                        <li class="mt-6 lg:mt-2"> <a href="{{route( 'profile.index') }}" class="hover:text-gray-400">Overview</a></li> 
                        <li class="mt-6 lg:mt-2"> <a href="{{route( 'profile.favorites') }}" class="hover:text-gray-400">Favorites</a></li> 
                        <li class="mt-6 lg:mt-2"> <a href="{{route( 'profile.wishlist') }}" class="hover:text-gray-400">Wishlist</a></li> 
                        <li class="mt-6 lg:mt-2"> <a href="{{route( 'profile.comments') }}" class="hover:text-gray-400">Comments</a></li>   
                        <li class="mt-6 lg:mt-2"> <a href="{{route( 'profile.lists') }}" class="hover:text-gray-400">Collections</a></li>                       
                    </ul>
                </div>
            </nav>
            @yield('content2')
        </div>
    </div>

</div>

@endsection