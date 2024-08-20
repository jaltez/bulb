<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mockup</title>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="drawer">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- Top menu -->
            <div class="navbar bg-base-100">
                <div class="flex-none lg:hidden">
                    <label for="my-drawer" class="btn btn-square btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block w-6 h-6 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>
                </div>
                <div class="flex-1">
                    <label for="my-drawer" class="btn btn-ghost drawer-button">
                        Sidebar
                    </label>
                    <a class="btn btn-ghost normal-case text-xl">Chat App</a>
                </div>
                <div class="flex-none">
                    <button class="btn btn-ghost">
                        Settings
                    </button>
                </div>
            </div>

            <!-- Chat content -->
            <div class="flex-grow p-4 overflow-y-auto">
                <div class="chat chat-start">
                    <div class="chat-bubble">Hello! How can I help you today?</div>
                </div>
                <div class="chat chat-end">
                    <div class="chat-bubble">I have a question about the new feature.</div>
                </div>

                <div class="chat chat-start">
                    <div class="chat-bubble">
                        <div class="flex w-52 flex-col gap-4 py-4">
                            <div class="skeleton h-4 w-3/4"></div>
                            <div class="skeleton h-4 w-full"></div>
                            <div class="skeleton h-4 w-1/3"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Input box -->
            <div class="p-4 bg-base-200">
                <div class="form-control">
                    <div class="input-group">
                        <input type="text" placeholder="Type your message..."
                            class="input input-bordered flex-grow" />
                        <button class="btn btn-square">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="drawer-side">
            <label for="my-drawer" class="drawer-overlay"></label>
            <ul class="menu p-4 w-80 h-full bg-base-200 text-base-content">
                <li><a>Chat 1</a></li>
                <li><a>Chat 2</a></li>
                <li><a>Chat 3</a></li>
            </ul>
        </div>
    </div>
</body>

</html>
