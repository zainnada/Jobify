<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <img src="https://assets.laracasts.com/images/primary-logo-symbol.svg"
                         alt="Your Company" class="size-8"/>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">

                        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                        <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>

                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <el-dropdown class="relative ml-3">
                        <button
                            class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Open user menu</span>
                        </button>
                        <a href="/profile" class="profile-link mt-2">
                            <img
                                src="https://assets.laracasts.com/images/mascot/larywink.svg"
                                alt="Profile" class="profile-image">
                        </a>

                        <style>
                            .profile-link {
                                display: inline-block;
                                border-radius: 0;
                                overflow: hidden;
                                transition: transform 0.2s ease, box-shadow 0.2s ease;
                            }

                            .profile-image {
                                width: 50px;
                                height: 50px;
                                border-radius: 0;
                                object-fit: contain;
                                transition: opacity 0.3s ease;
                            }

                            /* Feedback effect when hovering */
                            .profile-link:hover {
                                transform: scale(1.05);
                                box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                                cursor: pointer;
                            }

                            .profile-link:hover .profile-image {
                                opacity: 0.9;
                            }
                        </style>
                    </el-dropdown>


                    {{--                    <a href="/register" class="--}}
                    {{--              <?php--}}
                    {{--                            echo urlIs('/register') ? $active_page_class : $normal_page_class;--}}
                    {{--                            ?>">Register</a>--}}
                    {{--                    <a href="/login" class="--}}
                    {{--              <?php--}}
                    {{--                            echo urlIs('/login') ? $active_page_class : $normal_page_class;--}}
                    {{--                            ?>">Log In</a>--}}

                    {{--                </div>--}}


                </div>
            </div>
        </div>
    </div>
</nav>
