@extends('layout.layout')

@section('content')
<div class="mx-auto w-full  m-5 max-w-sm text-center">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="/save">
        @csrf
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username" id="username">
          Username
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="username" type="text" placeholder="Username">
        @if ($errors->has('username'))
          <div class="bg-red-200 m-2  p-2">
            This field is required.
          </div>
        @endif
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
          Profession
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="profession" type="text" placeholder="Profession">
        @if ($errors->has('profession'))
          <div class="bg-red-200 m-2  p-2">
            This field is required.
          </div>
        @endif
      </div>
      <div>
        <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Technology</h3>
<ul
    class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white pl-3">
    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
        <div class="flex items-center ps-3 ">
            <input id="vue-checkbox" type="checkbox" value="Vue" name="skills[]"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Vue
                JS</label>
        </div>
    </li>
    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
        <div class="flex items-center ps-3">
            <input id="react-checkbox" type="checkbox" value="React" name="skills[]"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="react-checkbox"
                class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">React</label>
        </div>
    </li>
    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
        <div class="flex items-center ps-3">
            <input id="angular-checkbox" type="checkbox" value="Angular" name="skills[]"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="angular-checkbox"
                class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Angular</label>
        </div>
    </li>
    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
        <div class="flex items-center ps-3">
            <input id="laravel-checkbox" type="checkbox" value="Laravel" name="skills[]"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="laravel-checkbox"
                class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laravel</label>
        </div>
    </li>
     <!-- Existing items... -->
  
  <!-- Python -->
  <li class="w-full border-b border-gray-200 dark:border-gray-600">
    <div class="flex items-center ps-3">
        <input id="python-checkbox" type="checkbox" value="Python" name="skills[]"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
        <label for="python-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Python</label>
    </div>
</li>

<!-- Django -->
<li class="w-full border-b border-gray-200 dark:border-gray-600">
    <div class="flex items-center ps-3">
        <input id="django-checkbox" type="checkbox" value="Django" name="skills[]"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
        <label for="django-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Django</label>
    </div>
</li>

<!-- Node.js -->
<li class="w-full border-b border-gray-200 dark:border-gray-600">
    <div class="flex items-center ps-3">
        <input id="nodejs-checkbox" type="checkbox" value="Node.js" name="skills[]"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
        <label for="nodejs-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Node.js</label>
    </div>
</li>
<!-- Flutter -->
<li class="w-full border-b border-gray-200 dark:border-gray-600">
    <div class="flex items-center ps-3">
        <input id="django-checkbox" type="checkbox" value="Flutter" name="skills[]"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
        <label for="django-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Flutter</label>
    </div>
</li>

<!-- Dart -->
<li class="w-full border-b border-gray-200 dark:border-gray-600">
    <div class="flex items-center ps-3">
        <input id="nodejs-checkbox" type="checkbox" value="Dart" name="skills[]"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
        <label for="nodejs-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dart</label>
    </div>
</li>
<!-- Github -->
<li class="w-full border-b border-gray-200 dark:border-gray-600">
    <div class="flex items-center ps-3">
        <input id="django-checkbox" type="checkbox" value="Github" name="skills[]"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
        <label for="django-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Github</label>
    </div>
</li>

<!-- Git -->
<li class="w-full border-b border-gray-200 dark:border-gray-600">
    <div class="flex items-center ps-3">
        <input id="nodejs-checkbox" type="checkbox" value="Git" name="skills[]"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
        <label for="nodejs-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Git</label>
    </div>
</li>
<!-- Tailwind CSS -->
<li class="w-full border-b border-gray-200 dark:border-gray-600">
    <div class="flex items-center ps-3">
        <input id="django-checkbox" type="checkbox" value="Tailwind CSS" name="skills[]"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
        <label for="django-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tailwind CSS</label>
    </div>
</li>

<!-- Express js -->
<li class="w-full border-b border-gray-200 dark:border-gray-600">
    <div class="flex items-center ps-3">
        <input id="nodejs-checkbox" type="checkbox" value="Express JS" name="skills[]"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
        <label for="nodejs-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Express js</label>
    </div>
</li>


</ul>


      </div>
      <div class="flex items-center justify-between pt-3">
        <button  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
          Add
        </button>
      </div>
    </form>
  </div>
@endsection