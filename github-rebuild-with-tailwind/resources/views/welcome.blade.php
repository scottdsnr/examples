<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="text-sm text-gray-900 ">
    <nav class="flex justify-between items-center py-4 px-8 text-white bg-gray-900">
        <div class="flex items-center space-x-4">
            <a href="#" class="text-white hover:text-gray-400">
                <svg class="w-8 fill-current " viewBox="0 0 16 16" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                </svg>
            </a>
            <div class="relative">
                <input type="text" class="rounded bg-gray-700 placeholder-white w-72 px-3 py-1"
                       placeholder="Search or jump to...">
                <div class="absolute top-0 right-0 flex items-center h-full">
                    <div class="border border-gray-600 rounded text-xs text-gray-400 px-2 mr-2">/</div>
                </div>
            </div>
            <ul class="flex items-center font-semibold space-x-4">
                <li><a href="#" class="hover:text-gray-400">Pull Requests</a></li>
                <li><a href="#" class="hover:text-gray-400">Issues</a></li>
                <li><a href="#" class="hover:text-gray-400">Marketplace</a></li>
                <li><a href="#" class="hover:text-gray-400">Explore</a></li>
            </ul>
        </div>
        <div class="flex item-center space-x-4 text-white">
            <a href="#" class="relative hover:text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class=" w-5" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                </svg>
                <span class="bg-blue-600 rounded-full w-2 h-2 absolute top-0 right-0"></span>
            </a>
            <a href="#" class="flex items-center hover:text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </a>
            <a href="#" class="flex items-center hover:text-gray-400">
                <img src="https://avatars.githubusercontent.com/u/58791337?s=60&amp;v=4" alt="@scottdsnr"
                     class="w-5 h-5 rounded-full bg-white">
            </a>
        </div>
    </nav>
    {{--Repo Stats start--}}
    <div class="flex items-center justify-between px-8 py-4 bg-gray-100">
        <div class="flex">
            <svg class="w-4 fill-current text-gray-600" viewBox="0 0 16 16" aria-hidden="true">
                <path fill-rule="evenodd"
                      d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path>
            </svg>
            <div class="flex items-center text-xl ml-2 space-x-1">
                <a href="#" class="text-blue-600 hover:underline">DSNR</a>
                <span>/</span>
                <a href="#" class="text-blue-600 hover:underline font-semibold">dashboard</a>
            </div>
        </div>
        <div class="flex space-x-2">
            <div class="flex text-xs">
                <button
                    class="border flex border-gray-300 bg-gray-100 hover:bg-gray-200 rounded font-semibold items-center rounded-r-none px-3 py-1 space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    <span>Watch</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <a href="#"
                   class="border border-gray-300 border-l-0 font-bold hover:text-blue-600  rounded rounded-l-none bg-white px-3 py-1">2</a>
            </div>
            <div class="flex text-xs">
                <button
                    class="border flex border-gray-300 bg-gray-100 hover:bg-gray-200 rounded font-semibold items-center rounded-r-none px-3 py-1 space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                    </svg>
                    <span>Star</span>
                </button>
                <a href="#"
                   class="border border-gray-300 border-l-0 font-bold hover:text-blue-600  rounded rounded-l-none bg-white px-3 py-1">10</a>
            </div>
            <div class="flex text-xs">
                <button
                    class="border flex border-gray-300 bg-gray-100 hover:bg-gray-200 rounded font-semibold items-center rounded-r-none px-3 py-1 space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                    </svg>
                    <span>Fork</span>
                </button>
                <a href="#"
                   class="border border-gray-300 border-l-0 font-bold hover:text-blue-600  rounded rounded-l-none bg-white px-3 py-1">0</a>
            </div>
        </div>

    </div>
    {{-- Repo Stats end --}}
    {{-- Repo Nav Start --}}
    <nav class="bg-gray-100 pt-1">
        <ul class="border-b border-gray-300 flex items-center px-8 mt-4">
            <li class="font-semibold">
                <a href="#" class="flex items-center border-b-2 border-red-400 px-4 pb-3">
                    <svg aria-hidden="true" viewBox="0 0 16 16" class="h-4 w-4 ">
                        <path fill-rule="evenodd"
                              d="M4.72 3.22a.75.75 0 011.06 1.06L2.06 8l3.72 3.72a.75.75 0 11-1.06 1.06L.47 8.53a.75.75 0 010-1.06l4.25-4.25zm6.56 0a.75.75 0 10-1.06 1.06L13.94 8l-3.72 3.72a.75.75 0 101.06 1.06l4.25-4.25a.75.75 0 000-1.06l-4.25-4.25z"></path>
                    </svg>
                    <span class="ml-2">Code</span>
                </a>
            </li>
            <li class="font-normal text-gray-900">
                <a href="#"
                   class="flex items-center border-b-2 border-transparent hover:border-gray-400 text-gray-900 transition ease-in-out duration-200 px-4 pb-3">
                    <svg aria-hidden="true" viewBox="0 0 16 16" class="h-4 w-4 text-gray-400 fill-current">
                        <path fill-rule="evenodd"
                              d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8zm9 3a1 1 0 11-2 0 1 1 0 012 0zm-.25-6.25a.75.75 0 00-1.5 0v3.5a.75.75 0 001.5 0v-3.5z"></path>
                    </svg>
                    <span class="ml-2">Issues</span>
                </a>
            </li>
            <li class="font-normal">
                <a href="#"
                   class="flex items-center border-b-2 border-transparent hover:border-gray-400 transition ease-in-out duration-200 px-4 pb-3">
                    <svg aria-hidden="true" viewBox="0 0 16 16" class="h-4 w-4 text-gray-400 fill-current">
                        <path fill-rule="evenodd"
                              d="M7.177 3.073L9.573.677A.25.25 0 0110 .854v4.792a.25.25 0 01-.427.177L7.177 3.427a.25.25 0 010-.354zM3.75 2.5a.75.75 0 100 1.5.75.75 0 000-1.5zm-2.25.75a2.25 2.25 0 113 2.122v5.256a2.251 2.251 0 11-1.5 0V5.372A2.25 2.25 0 011.5 3.25zM11 2.5h-1V4h1a1 1 0 011 1v5.628a2.251 2.251 0 101.5 0V5A2.5 2.5 0 0011 2.5zm1 10.25a.75.75 0 111.5 0 .75.75 0 01-1.5 0zM3.75 12a.75.75 0 100 1.5.75.75 0 000-1.5z"></path>
                    </svg>
                    <span class="ml-2">Pull Requests</span>
                </a>
            </li>
            <li class="font-normal">
                <a href="#"
                   class="flex items-center border-b-2 border-transparent hover:border-gray-400 transition ease-in-out duration-200 px-4 pb-3">
                    <svg aria-hidden="true" viewBox="0 0 16 16" class="h-4 w-4 text-gray-400 fill-current">
                        <path fill-rule="evenodd"
                              d="M1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0zM8 0a8 8 0 100 16A8 8 0 008 0zM6.379 5.227A.25.25 0 006 5.442v5.117a.25.25 0 00.379.214l4.264-2.559a.25.25 0 000-.428L6.379 5.227z"></path>
                    </svg>
                    <span class="ml-2">Actions</span>
                </a>
            </li>
            <li class="font-normal">
                <a href="#"
                   class="flex items-center border-b-2 border-transparent hover:border-gray-400 transition ease-in-out duration-200 px-4 pb-3">
                    <svg aria-hidden="true" viewBox="0 0 16 16" class="h-4 w-4 text-gray-400 fill-current">
                        <path fill-rule="evenodd"
                              d="M1.75 0A1.75 1.75 0 000 1.75v12.5C0 15.216.784 16 1.75 16h12.5A1.75 1.75 0 0016 14.25V1.75A1.75 1.75 0 0014.25 0H1.75zM1.5 1.75a.25.25 0 01.25-.25h12.5a.25.25 0 01.25.25v12.5a.25.25 0 01-.25.25H1.75a.25.25 0 01-.25-.25V1.75zM11.75 3a.75.75 0 00-.75.75v7.5a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75zm-8.25.75a.75.75 0 011.5 0v5.5a.75.75 0 01-1.5 0v-5.5zM8 3a.75.75 0 00-.75.75v3.5a.75.75 0 001.5 0v-3.5A.75.75 0 008 3z"></path>
                    </svg>
                    <span class="ml-2">Projects</span>
                    <div class="text-xs rounded-xl bg-gray-300 px-2  ml-1">1</div>
                </a>
            </li>
            <li class="font-normal">
                <a href="#"
                   class="flex items-center border-b-2 border-transparent hover:border-gray-400 transition ease-in-out duration-200 px-4 pb-3">
                    <svg aria-hidden="true" viewBox="0 0 16 16" class="h-4 w-4 text-gray-400 fill-current">
                        <path fill-rule="evenodd"
                              d="M7.467.133a1.75 1.75 0 011.066 0l5.25 1.68A1.75 1.75 0 0115 3.48V7c0 1.566-.32 3.182-1.303 4.682-.983 1.498-2.585 2.813-5.032 3.855a1.7 1.7 0 01-1.33 0c-2.447-1.042-4.049-2.357-5.032-3.855C1.32 10.182 1 8.566 1 7V3.48a1.75 1.75 0 011.217-1.667l5.25-1.68zm.61 1.429a.25.25 0 00-.153 0l-5.25 1.68a.25.25 0 00-.174.238V7c0 1.358.275 2.666 1.057 3.86.784 1.194 2.121 2.34 4.366 3.297a.2.2 0 00.154 0c2.245-.956 3.582-2.104 4.366-3.298C13.225 9.666 13.5 8.36 13.5 7V3.48a.25.25 0 00-.174-.237l-5.25-1.68zM9 10.5a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.75a.75.75 0 10-1.5 0v3a.75.75 0 001.5 0v-3z"></path>
                    </svg>
                    <span class="ml-2">Security</span>
                </a>
            </li>
            <li class="font-normal">
                <a href="#"
                   class="flex items-center border-b-2 border-transparent hover:border-gray-400 transition ease-in-out duration-200 px-4 pb-3">
                    <svg aria-hidden="true" viewBox="0 0 16 16" class="h-4 w-4 text-gray-400 fill-current">
                        <path fill-rule="evenodd"
                              d="M1.5 1.75a.75.75 0 00-1.5 0v12.5c0 .414.336.75.75.75h14.5a.75.75 0 000-1.5H1.5V1.75zm14.28 2.53a.75.75 0 00-1.06-1.06L10 7.94 7.53 5.47a.75.75 0 00-1.06 0L3.22 8.72a.75.75 0 001.06 1.06L7 7.06l2.47 2.47a.75.75 0 001.06 0l5.25-5.25z"></path>
                    </svg>
                    <span class="ml-2">Insights</span>
                </a>
            </li>
            <li class="font-normal">
                <a href="#"
                   class="flex items-center border-b-2 border-transparent hover:border-gray-400 transition ease-in-out duration-200 px-4 pb-3">
                    <svg aria-hidden="true" viewBox="0 0 16 16" class="h-4 w-4 text-gray-400 fill-current">
                        <path fill-rule="evenodd"
                              d="M7.429 1.525a6.593 6.593 0 011.142 0c.036.003.108.036.137.146l.289 1.105c.147.56.55.967.997 1.189.174.086.341.183.501.29.417.278.97.423 1.53.27l1.102-.303c.11-.03.175.016.195.046.219.31.41.641.573.989.014.031.022.11-.059.19l-.815.806c-.411.406-.562.957-.53 1.456a4.588 4.588 0 010 .582c-.032.499.119 1.05.53 1.456l.815.806c.08.08.073.159.059.19a6.494 6.494 0 01-.573.99c-.02.029-.086.074-.195.045l-1.103-.303c-.559-.153-1.112-.008-1.529.27-.16.107-.327.204-.5.29-.449.222-.851.628-.998 1.189l-.289 1.105c-.029.11-.101.143-.137.146a6.613 6.613 0 01-1.142 0c-.036-.003-.108-.037-.137-.146l-.289-1.105c-.147-.56-.55-.967-.997-1.189a4.502 4.502 0 01-.501-.29c-.417-.278-.97-.423-1.53-.27l-1.102.303c-.11.03-.175-.016-.195-.046a6.492 6.492 0 01-.573-.989c-.014-.031-.022-.11.059-.19l.815-.806c.411-.406.562-.957.53-1.456a4.587 4.587 0 010-.582c.032-.499-.119-1.05-.53-1.456l-.815-.806c-.08-.08-.073-.159-.059-.19a6.44 6.44 0 01.573-.99c.02-.029.086-.075.195-.045l1.103.303c.559.153 1.112.008 1.529-.27.16-.107.327-.204.5-.29.449-.222.851-.628.998-1.189l.289-1.105c.029-.11.101-.143.137-.146zM8 0c-.236 0-.47.01-.701.03-.743.065-1.29.615-1.458 1.261l-.29 1.106c-.017.066-.078.158-.211.224a5.994 5.994 0 00-.668.386c-.123.082-.233.09-.3.071L3.27 2.776c-.644-.177-1.392.02-1.82.63a7.977 7.977 0 00-.704 1.217c-.315.675-.111 1.422.363 1.891l.815.806c.05.048.098.147.088.294a6.084 6.084 0 000 .772c.01.147-.038.246-.088.294l-.815.806c-.474.469-.678 1.216-.363 1.891.2.428.436.835.704 1.218.428.609 1.176.806 1.82.63l1.103-.303c.066-.019.176-.011.299.071.213.143.436.272.668.386.133.066.194.158.212.224l.289 1.106c.169.646.715 1.196 1.458 1.26a8.094 8.094 0 001.402 0c.743-.064 1.29-.614 1.458-1.26l.29-1.106c.017-.066.078-.158.211-.224a5.98 5.98 0 00.668-.386c.123-.082.233-.09.3-.071l1.102.302c.644.177 1.392-.02 1.82-.63.268-.382.505-.789.704-1.217.315-.675.111-1.422-.364-1.891l-.814-.806c-.05-.048-.098-.147-.088-.294a6.1 6.1 0 000-.772c-.01-.147.039-.246.088-.294l.814-.806c.475-.469.679-1.216.364-1.891a7.992 7.992 0 00-.704-1.218c-.428-.609-1.176-.806-1.82-.63l-1.103.303c-.066.019-.176.011-.299-.071a5.991 5.991 0 00-.668-.386c-.133-.066-.194-.158-.212-.224L10.16 1.29C9.99.645 9.444.095 8.701.031A8.094 8.094 0 008 0zm1.5 8a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM11 8a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="ml-2">Setttings</span>
                </a>
            </li>

        </ul>
    </nav>
    {{--  Repo Nav end  --}}
    <div class="container mx-auto my-8 px-20 w-3/4 flex">
        <main class="w-3/4 mr-8 ">
            <div class="flex items-center justify-between ">
                <div class="flex items-center space-x-2">
                    <button
                        class="border flex border-gray-300 bg-gray-100 hover:bg-gray-200 rounded-md font-semibold items-center  px-3 py-1 space-x-1">
                        <svg aria-hidden="true" viewBox="0 0 16 16" class="h-4 w-4 fill-current text-gray-500">
                            <path fill-rule="evenodd"
                                  d="M11.75 2.5a.75.75 0 100 1.5.75.75 0 000-1.5zm-2.25.75a2.25 2.25 0 113 2.122V6A2.5 2.5 0 0110 8.5H6a1 1 0 00-1 1v1.128a2.251 2.251 0 11-1.5 0V5.372a2.25 2.25 0 111.5 0v1.836A2.492 2.492 0 016 7h4a1 1 0 001-1v-.628A2.25 2.25 0 019.5 3.25zM4.25 12a.75.75 0 100 1.5.75.75 0 000-1.5zM3.5 3.25a.75.75 0 111.5 0 .75.75 0 01-1.5 0z"></path>
                        </svg>
                        <span>develop</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <a href="#" class="flex items-center space-x-2 px-3 py-1 group text-gray-700">
                        <svg aria-hidden="true" viewBox="0 0 16 16"
                             class="h-4 w-4 fill-current group-hover:text-blue-400  ">
                            <path fill-rule="evenodd"
                                  d="M11.75 2.5a.75.75 0 100 1.5.75.75 0 000-1.5zm-2.25.75a2.25 2.25 0 113 2.122V6A2.5 2.5 0 0110 8.5H6a1 1 0 00-1 1v1.128a2.251 2.251 0 11-1.5 0V5.372a2.25 2.25 0 111.5 0v1.836A2.492 2.492 0 016 7h4a1 1 0 001-1v-.628A2.25 2.25 0 019.5 3.25zM4.25 12a.75.75 0 100 1.5.75.75 0 000-1.5zM3.5 3.25a.75.75 0 111.5 0 .75.75 0 01-1.5 0z"></path>
                        </svg>
                        <span class="text-gray-900 group-hover:text-blue-400">
                                <span class="font-semibold">2</span>
                                <span>branches</span>
                            </span>
                    </a>
                    <a href="#" class="flex items-center space-x-2  py-1 group text-gray-700">
                        <svg aria-hidden="true" viewBox="0 0 16 16"
                             class="h-4 w-4 fill-current group-hover:text-blue-400">
                            <path fill-rule="evenodd"
                                  d="M2.5 7.775V2.75a.25.25 0 01.25-.25h5.025a.25.25 0 01.177.073l6.25 6.25a.25.25 0 010 .354l-5.025 5.025a.25.25 0 01-.354 0l-6.25-6.25a.25.25 0 01-.073-.177zm-1.5 0V2.75C1 1.784 1.784 1 2.75 1h5.025c.464 0 .91.184 1.238.513l6.25 6.25a1.75 1.75 0 010 2.474l-5.026 5.026a1.75 1.75 0 01-2.474 0l-6.25-6.25A1.75 1.75 0 011 7.775zM6 5a1 1 0 100 2 1 1 0 000-2z"></path>
                        </svg>
                        <span class="text-gray-900 group-hover:text-blue-400">
                                <span class="font-semibold">0</span>
                                <span>tags</span>
                            </span>
                    </a>
                </div>
                <div class="flex items-center space-x-2">
                    <button
                        class="border flex border-gray-300 bg-gray-100 hover:bg-gray-200 rounded-md font-semibold items-center px-3 py-1 space-x-1">
                        <span>Go to File</span>
                    </button>
                    <button
                        class="border flex border-gray-300 bg-gray-100 hover:bg-gray-200 rounded-md font-semibold items-center  px-3 py-1 space-x-1">
                        <span>Add File</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <button
                        class="border flex border-green-600 bg-btn-green hover:bg-btn-green-dark rounded-md font-semibold items-center  px-3 py-1 space-x-2 text-white">
                        <svg class="h-4 w-4 fill-current" viewBox="0 0 16 16" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M7.47 10.78a.75.75 0 001.06 0l3.75-3.75a.75.75 0 00-1.06-1.06L8.75 8.44V1.75a.75.75 0 00-1.5 0v6.69L4.78 5.97a.75.75 0 00-1.06 1.06l3.75 3.75zM3.75 13a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5z">
                            </path>
                        </svg>
                        <span>Code</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div
                class="commits-container bg-blue-50 rounded-md rounded-b-none border border-blue-200 border-b-0 flex items-center justify-between px-4 py-4 mt-5">
                <div class="flex items-center space-x-2">
                    <a href="#">
                        <img src="https://avatars.githubusercontent.com/u/58791337?s=60&amp;v=4" alt="@scottdsnr"
                             class="w-5 h-5 rounded-full bg-white">
                    </a>
                    <a href="#" class="font-semibold hover:underline">scottdsnr</a>
                    <a href="#" class="hover:text-blue-400">Merge branch 'feature/Users' into develop</a>
                </div>
                <div class="flex items-end space-x-3">
                    <a href="#" class="hover:text-blue-400 font-mono text-xs">
                        1f89d61
                    </a>
                    <a href="#" class=" hover:underline hover:text-blue-400">on 8 Feb</a>
                    <a href="#" class="hover:text-blue-400 flex space-x-1">
                            <span>
                                <svg aria-hidden="true" viewBox="0 0 16 16" class="fill-current  w-4 h-4">
                                    <path fill-rule="evenodd"
                                          d="M1.643 3.143L.427 1.927A.25.25 0 000 2.104V5.75c0 .138.112.25.25.25h3.646a.25.25 0 00.177-.427L2.715 4.215a6.5 6.5 0 11-1.18 4.458.75.75 0 10-1.493.154 8.001 8.001 0 101.6-5.684zM7.75 4a.75.75 0 01.75.75v2.992l2.028.812a.75.75 0 01-.557 1.392l-2.5-1A.75.75 0 017 8.25v-3.5A.75.75 0 017.75 4z"></path>
                                </svg>
                            </span>
                        <span>
                               <span class="font-semibold">9</span> commits
                            </span>
                    </a>
                </div>
            </div>{{--end commits container--}}
            <div
                class="file-explorer rounded-md rounded-t-none border border-gray-300 text-gray-700 divide-y divide-gray-200">
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="Directory" aria-hidden="true" viewBox="0 0 16 16"
                             class="h-4 w-4 fill-current text-blue-400">
                            <path fill-rule="evenodd"
                                  d="M1.75 1A1.75 1.75 0 000 2.75v10.5C0 14.216.784 15 1.75 15h12.5A1.75 1.75 0 0016 13.25v-8.5A1.75 1.75 0 0014.25 3h-6.5a.25.25 0 01-.2-.1l-.9-1.2c-.33-.44-.85-.7-1.4-.7h-3.5z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">.idea</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">started user
                            management</a></div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="Directory" aria-hidden="true" viewBox="0 0 16 16"
                             class="h-4 w-4 fill-current text-blue-400">
                            <path fill-rule="evenodd"
                                  d="M1.75 1A1.75 1.75 0 000 2.75v10.5C0 14.216.784 15 1.75 15h12.5A1.75 1.75 0 0016 13.25v-8.5A1.75 1.75 0 0014.25 3h-6.5a.25.25 0 01-.2-.1l-.9-1.2c-.33-.44-.85-.7-1.4-.7h-3.5z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">app</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">fixed default profile
                            image to show users initials</a></div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="Directory" aria-hidden="true" viewBox="0 0 16 16"
                             class="h-4 w-4 fill-current text-blue-400">
                            <path fill-rule="evenodd"
                                  d="M1.75 1A1.75 1.75 0 000 2.75v10.5C0 14.216.784 15 1.75 15h12.5A1.75 1.75 0 0016 13.25v-8.5A1.75 1.75 0 0014.25 3h-6.5a.25.25 0 01-.2-.1l-.9-1.2c-.33-.44-.85-.7-1.4-.7h-3.5z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">bootstrap</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">framwork install</a>
                    </div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="Directory" aria-hidden="true" viewBox="0 0 16 16"
                             class="h-4 w-4 fill-current text-blue-400">
                            <path fill-rule="evenodd"
                                  d="M1.75 1A1.75 1.75 0 000 2.75v10.5C0 14.216.784 15 1.75 15h12.5A1.75 1.75 0 0016 13.25v-8.5A1.75 1.75 0 0014.25 3h-6.5a.25.25 0 01-.2-.1l-.9-1.2c-.33-.44-.85-.7-1.4-.7h-3.5z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">config</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">fixed default profile
                            image to show users initials</a></div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>

                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="Directory" aria-hidden="true" viewBox="0 0 16 16"
                             class="h-4 w-4 fill-current text-blue-400">
                            <path fill-rule="evenodd"
                                  d="M1.75 1A1.75 1.75 0 000 2.75v10.5C0 14.216.784 15 1.75 15h12.5A1.75 1.75 0 0016 13.25v-8.5A1.75 1.75 0 0014.25 3h-6.5a.25.25 0 01-.2-.1l-.9-1.2c-.33-.44-.85-.7-1.4-.7h-3.5z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">database</a></div>
                    <div class="w-6/12">
                        <a href="#" class="hover:underline hover:text-blue-400">
                            added first name and last name to login and team creation...
                        </a></div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="Directory" aria-hidden="true" viewBox="0 0 16 16"
                             class="h-4 w-4 fill-current text-blue-400">
                            <path fill-rule="evenodd"
                                  d="M1.75 1A1.75 1.75 0 000 2.75v10.5C0 14.216.784 15 1.75 15h12.5A1.75 1.75 0 0016 13.25v-8.5A1.75 1.75 0 0014.25 3h-6.5a.25.25 0 01-.2-.1l-.9-1.2c-.33-.44-.85-.7-1.4-.7h-3.5z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">public</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">started user
                            management</a></div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="Directory" aria-hidden="true" viewBox="0 0 16 16"
                             class="h-4 w-4 fill-current text-blue-400">
                            <path fill-rule="evenodd"
                                  d="M1.75 1A1.75 1.75 0 000 2.75v10.5C0 14.216.784 15 1.75 15h12.5A1.75 1.75 0 0016 13.25v-8.5A1.75 1.75 0 0014.25 3h-6.5a.25.25 0 01-.2-.1l-.9-1.2c-.33-.44-.85-.7-1.4-.7h-3.5z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">resources</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">changed all refs to
                            teams to workspace in nav menu</a></div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="Directory" aria-hidden="true" viewBox="0 0 16 16"
                             class="h-4 w-4 fill-current text-blue-400">
                            <path fill-rule="evenodd"
                                  d="M1.75 1A1.75 1.75 0 000 2.75v10.5C0 14.216.784 15 1.75 15h12.5A1.75 1.75 0 0016 13.25v-8.5A1.75 1.75 0 0014.25 3h-6.5a.25.25 0 01-.2-.1l-.9-1.2c-.33-.44-.85-.7-1.4-.7h-3.5z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">routes</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">started user
                            management</a></div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="Directory" aria-hidden="true" viewBox="0 0 16 16"
                             class="h-4 w-4 fill-current text-blue-400">
                            <path fill-rule="evenodd"
                                  d="M1.75 1A1.75 1.75 0 000 2.75v10.5C0 14.216.784 15 1.75 15h12.5A1.75 1.75 0 0016 13.25v-8.5A1.75 1.75 0 0014.25 3h-6.5a.25.25 0 01-.2-.1l-.9-1.2c-.33-.44-.85-.7-1.4-.7h-3.5z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">storage</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">framework install</a>
                    </div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="Directory" aria-hidden="true" viewBox="0 0 16 16"
                             class="h-4 w-4 fill-current text-blue-400">
                            <path fill-rule="evenodd"
                                  d="M1.75 1A1.75 1.75 0 000 2.75v10.5C0 14.216.784 15 1.75 15h12.5A1.75 1.75 0 0016 13.25v-8.5A1.75 1.75 0 0014.25 3h-6.5a.25.25 0 01-.2-.1l-.9-1.2c-.33-.44-.85-.7-1.4-.7h-3.5z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">storage</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">framework install</a>
                    </div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="File" aria-hidden="true" viewBox="0 0 16 16"
                             class="w-4 h-4 fill-current text-gray-400">
                            <path fill-rule="evenodd"
                                  d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">.editorconfig</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">framework install</a>
                    </div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="File" aria-hidden="true" viewBox="0 0 16 16"
                             class="w-4 h-4 fill-current text-gray-400">
                            <path fill-rule="evenodd"
                                  d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">.env.example</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">framework install</a>
                    </div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="File" aria-hidden="true" viewBox="0 0 16 16"
                             class="w-4 h-4 fill-current text-gray-400">
                            <path fill-rule="evenodd"
                                  d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">.gitattributes</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">framework install</a>
                    </div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="File" aria-hidden="true" viewBox="0 0 16 16"
                             class="w-4 h-4 fill-current text-gray-400">
                            <path fill-rule="evenodd"
                                  d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">.gitignore</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">framework install</a>
                    </div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="File" aria-hidden="true" viewBox="0 0 16 16"
                             class="w-4 h-4 fill-current text-gray-400">
                            <path fill-rule="evenodd"
                                  d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">.styleci.ymle</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">framework install</a>
                    </div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="File" aria-hidden="true" viewBox="0 0 16 16"
                             class="w-4 h-4 fill-current text-gray-400">
                            <path fill-rule="evenodd"
                                  d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">README.md</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">framework install</a>
                    </div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="File" aria-hidden="true" viewBox="0 0 16 16"
                             class="w-4 h-4 fill-current text-gray-400">
                            <path fill-rule="evenodd"
                                  d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">artisan</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">framework install</a>
                    </div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="File" aria-hidden="true" viewBox="0 0 16 16"
                             class="w-4 h-4 fill-current text-gray-400">
                            <path fill-rule="evenodd"
                                  d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">composer.json</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">framework install</a>
                    </div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="File" aria-hidden="true" viewBox="0 0 16 16"
                             class="w-4 h-4 fill-current text-gray-400">
                            <path fill-rule="evenodd"
                                  d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">composer.lock</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">framework install</a>
                    </div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="File" aria-hidden="true" viewBox="0 0 16 16"
                             class="w-4 h-4 fill-current text-gray-400">
                            <path fill-rule="evenodd"
                                  d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">package-lock.json</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">framework install</a>
                    </div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="File" aria-hidden="true" viewBox="0 0 16 16"
                             class="w-4 h-4 fill-current text-gray-400">
                            <path fill-rule="evenodd"
                                  d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">package.json</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">framework install</a>
                    </div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="File" aria-hidden="true" viewBox="0 0 16 16"
                             class="w-4 h-4 fill-current text-gray-400">
                            <path fill-rule="evenodd"
                                  d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">phpunit.xml</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">framework install</a>
                    </div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="File" aria-hidden="true" viewBox="0 0 16 16"
                             class="w-4 h-4 fill-current text-gray-400">
                            <path fill-rule="evenodd"
                                  d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">server.php</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">framework install</a>
                    </div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="File" aria-hidden="true" viewBox="0 0 16 16"
                             class="w-4 h-4 fill-current text-gray-400">
                            <path fill-rule="evenodd"
                                  d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">tailwind.condig.js</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">framework install</a>
                    </div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
                <div class="flex justify-between px-4 py-2 hover:bg-gray-100">
                    <div class="w-4/12 flex items-center space-x-4">
                        <svg aria-label="File" aria-hidden="true" viewBox="0 0 16 16"
                             class="w-4 h-4 fill-current text-gray-400">
                            <path fill-rule="evenodd"
                                  d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path>
                        </svg>
                        <a href="#" class="hover:underline hover:text-blue-400">webpack.mix.js</a></div>
                    <div class="w-6/12"><a href="#" class="hover:underline hover:text-blue-400">framework install</a>
                    </div>
                    <div class="w-2/12 text-right">4 months ago</div>
                </div>
            </div> {{--end commits container--}}

            <div class="readme-container rounded-md border border-gray-300 px-4 py-4 mt-4">
                <h4 class="font-semibold">README.md</h4>
                <div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio eligendi error ex fugit in
                    incidunt ipsam libero magni modi nihil non nostrum, nulla quasi quia quibusdam quidem repudiandae
                    sunt vitae. A aspernatur assumenda, at doloribus ducimus eius enim id ipsam modi nam nobis omnis
                    quo, quos ratione repudiandae sed tempore, tenetur vel. Dicta, dolor eos est eum explicabo odit quo
                    rerum. Alias amet aspernatur autem consectetur cumque distinctio dolor earum harum hic id impedit
                    iusto laborum minus modi molestias necessitatibus neque numquam odit, officiis quisquam quod sint
                    ullam vel velit voluptatum. Aliquid distinctio doloremque ea eaque velit? Accusantium amet autem
                    cumque dolorem, doloremque ducimus ea eius error, est excepturi fugiat id laborum maxime nemo
                    possimus praesentium tempora voluptate voluptatem! Alias beatae consequatur earum enim eum ex fugit
                    ipsa laboriosam libero molestiae, mollitia natus, obcaecati odit omnis perspiciatis porro qui,
                    temporibus voluptates. Quasi qui repellat repellendus! Alias aspernatur beatae commodi consectetur
                    cumque deserunt ea eligendi hic laboriosam maiores maxime minima molestiae nulla porro praesentium
                    provident, quia ratione saepe sapiente sequi ullam veritatis voluptatibus? Architecto deserunt iure
                    laboriosam modi neque nesciunt nobis odit perferendis praesentium quia quibusdam, quo, reprehenderit
                    suscipit. Aliquam commodi dolorem dolorum enim, est nihil pariatur quo ut velit voluptatum.
                </div>
            </div> {{--end commits container--}}
        </main>
        <aside class="w-1/4">
            <div class="about">
                <h4 class="text-base font-semibold">About</h4>
                <p class="text-base mt-4">Dashboard for CRM and project management for DSNR Team Members</p>
                <div class="flex items-center space-x-2 mt-4">
                    <svg aria-hidden="true" viewBox="0 0 16 16" class="fill-current text-gray-900 h-4 w-4">
                        <path fill-rule="evenodd"
                              d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                    </svg>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">dsnr.co.uk</a>
                </div>
                <div class="tags flex items-center text-xs font-semibold flex-wrap mt-2">
                    <a href="#" class="bg-blue-50 hover:bg-blue-100 text-blue-600 rounded-full px-2 py-1 mt-2 mr-2">
                        laravel
                    </a>
                    <a href="#" class="bg-blue-50 hover:bg-blue-100 text-blue-600 rounded-full px-2 py-1 mt-2 mr-2">
                        dashboard
                    </a>
                    <a href="#" class="bg-blue-50 hover:bg-blue-100 text-blue-600 rounded-full px-2 py-1 mt-2 mr-2">
                        admin-dashboard
                    </a>
                    <a href="#" class="bg-blue-50 hover:bg-blue-100 text-blue-600 rounded-full px-2 py-1 mt-2 mr-2">
                        crm
                    </a>
                    <a href="#" class="bg-blue-50 hover:bg-blue-100 text-blue-600 rounded-full px-2 py-1 mt-2 mr-2">
                        tailwind
                    </a>
                </div>
                <a href="#" class="flex items-center space-x-2 mt-6 group">
                    <svg aria-hidden="true" viewBox="0 0 16 16" class="w-4 fill-current text-gray-500 group-hover:text-blue-600">
                        <path fill-rule="evenodd" d="M0 1.75A.75.75 0 01.75 1h4.253c1.227 0 2.317.59 3 1.501A3.744 3.744 0 0111.006 1h4.245a.75.75 0 01.75.75v10.5a.75.75 0 01-.75.75h-4.507a2.25 2.25 0 00-1.591.659l-.622.621a.75.75 0 01-1.06 0l-.622-.621A2.25 2.25 0 005.258 13H.75a.75.75 0 01-.75-.75V1.75zm8.755 3a2.25 2.25 0 012.25-2.25H14.5v9h-3.757c-.71 0-1.4.201-1.992.572l.004-7.322zm-1.504 7.324l.004-5.073-.002-2.253A2.25 2.25 0 005.003 2.5H1.5v9h3.757a3.75 3.75 0 011.994.574z"></path>
                    </svg>
                    <span class="group-hover:text-blue-600 ">ReadMe</span>
                </a>
            </div> {{--end about --}}
            <div class="releases border-t border-gray-200 mt-6 pt-6">
                <h4 class="text-base font-semibold">Releases</h4>
                <p class="text-xs mt-4">No releases published</p>
                <a href="#" class="text-blue-600 text-xs hover:underline">Create a release</a>
            </div> {{--end releases --}}
            <div class="packages border-t border-gray-200 mt-6 pt-6">
                <h4 class="text-base font-semibold">Packages</h4>
                <p class="text-xs mt-4">No packages published</p>
                <a href="#" class="text-blue-600 text-xs hover:underline">Publish your first package</a>
            </div> {{--end packages --}}
            <div class="languages border-t border-gray-200 mt-6 pt-6">
                <h4 class="text-base font-semibold">Languages</h4>
                    <div class="mt-4 flex">
                        <div class="w-3/5 h-2 rounded-md rounded-r-none bg-blue-800"></div>
                        <div class="w-2/5 h-2 rounded-md rounded-l-none bg-red-600 ml-0.5"></div>
                    </div>
                <ul class="mt-2 flex space-x-8 items-center text-xs">
                    <li class="flex items-center">
                        <span class="h-2 w-2 rounded-full bg-blue-800"></span>
                        <span class="ml-4">
                            <span class="font-semibold">PHP</span>
                            <span>60&percnt; </span>
                        </span>
                    </li>
                    <li class="flex items-center">
                        <span class="h-2 w-2 rounded-full bg-red-600"></span>
                        <span class="ml-4">
                            <span class="font-semibold">Blade</span>
                            <span>40&percnt;</span>
                        </span>
                    </li>
                </ul>
            </div> {{--end languages --}}
        </aside>
    </div>
    <footer class="container w-2/3 mx-auto text-xs border-t border-gray-300 py-10 flex items-center justify-between">
        <ul class="flex items-center space-x-12">
            <li>&copy; 2021 GitHub, Inc.</li>
            <li><a href="#" class="text-blue-500 hover:underline">Terms</a></li>
            <li><a href="#" class="text-blue-500 hover:underline">Privacy</a></li>
            <li><a href="#" class="text-blue-500 hover:underline">Security</a></li>
            <li><a href="#" class="text-blue-500 hover:underline">Status</a></li>
            <li><a href="#" class="text-blue-500 hover:underline">Docs</a></li>
        </ul>
        <div class="mx-12">
            <a href="#">
                <svg class="h-6 w-6 text-gray-300 fill-current " viewBox="0 0 16 16" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                </svg>
            </a>
        </div>
        <ul class="flex items-center space-x-12">
            <li><a href="#" class="text-blue-500 hover:underline">Contact GitHub</a></li>
            <li><a href="#" class="text-blue-500 hover:underline">Pricing</a></li>
            <li><a href="#" class="text-blue-500 hover:underline">API</a></li>
            <li><a href="#" class="text-blue-500 hover:underline">Training</a></li>
            <li><a href="#" class="text-blue-500 hover:underline">Blog</a></li>
            <li><a href="#" class="text-blue-500 hover:underline">About</a></li>
        </ul>
    </footer>
</div>
</body>
</html>
