<html>
    <head>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"rel="stylesheet">
    </head>


    <body class="row m-3 justify-content-center ">
        @foreach ($products as $oneProduct )
        <div class="mx-auto w-full  m-5 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
         
            <div class="flex flex-col items-center pb-10 m-10">
                <img class="w-24 h-20s mb-3 rounded-full shadow-lg" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Bonnie image"/>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{$oneProduct['username']}}</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">{{$oneProduct['profession']}}</span>
                <div class="flex mt-4 md:mt-6">
                    <a href="/user/{{$oneProduct['username']}}/{{$oneProduct['profession']}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add friend</a>
                    <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 ms-3">Message</a>
                </div>
            </div>
        </div>
        @endforeach
    </body>
</html>