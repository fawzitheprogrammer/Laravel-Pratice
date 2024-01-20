@extends('layout.layout')

@section('content')
<div class="mx-auto w-full  m-5 max-w-sm text-center">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="/save">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username" id="username">
                Username
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="username" type="text" placeholder="Username">
            @if($errors->has('username'))
                <div class="bg-red-200 m-2  p-2">
                    This field is required.
                </div>
            @endif
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Profession
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                name="profession" type="text" placeholder="Profession">
            @if($errors->has('profession'))
                <div class="bg-red-200 m-2  p-2">
                    This field is required.
                </div>
            @endif
        </div>
        <div>
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Technology</h3>
            <ul
                class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white pl-3">
                @for($i=0;$i<count($listOfSkill);$i++)
                    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                        <div class="flex items-center ps-3 ">
                            <input id="vue-checkbox" type="checkbox" value="{{ $listOfSkill[$i] }}" name="skills[]"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="vue-checkbox"
                                class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $listOfSkill[$i] }}</label>
                        </div>
                    </li>

                @endfor


            </ul>


        </div>
        <div class="flex items-center justify-between pt-3">
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Add
            </button>
        </div>
    </form>
</div>
@endsection