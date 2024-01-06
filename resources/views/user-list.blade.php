@extends('layout.layout')

@section('content')

<div class="mx-auto w-full  m-5 max-w-sm text-center">
    @if (session('success'))
    <p class="text-green-500">
    {{session('success')}}
    </p>
    @elseif (session('failure'))
    <p class="text-red-500">
        {{session('failure')}}
        </p>
    @endif
   </p>
</div>
<div class="mx-auto w-full  m-5 max-w-sm text-center">
    <a href="/register" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add New User</a>
</div>
@foreach ($products as $user )
<div class="mx-auto w-full  m-5 max-w-xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="flex flex-col items-center pb-10 m-10 object-cover">
        <img class="w-24 h-24 object-cover object-center mb-3 rounded-full shadow-lg" src="{{$user['profile_pic']}}" alt="Bonnie image"/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{$user['username']}}</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{$user['profession']}}</span>
       
        <div class="m-2 px-2 overflow-clip pb-4 flex flex-wrap">
            @foreach ($user['skills'] as $skill)
                <span class="px-3 py-1 m-1 bg-blue-100 rounded " >{{$skill}}</span>
            @endforeach
        </div>
        
        <div class="flex mt-4 md:mt-6">
            <a href="/user/{{$user['id']}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add friend</a>
            <a href="/delete/{{$user['id']}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red border border-red-300 bg-red-600 rounded-lg hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-red-600 dark:border-red-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 ms-3">Delete</a>
        </div>
    </div>
</div>
@endforeach
@endsection