@include('sections.header')
@include('sections.sidebar')

    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Dashboard</a> </div>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Search -->
            <div class="intro-x relative mr-3 sm:mr-6">
                <div class="search hidden sm:block">
                    <input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
                    <i data-feather="search" class="search__icon"></i>
                </div>
                <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon"></i> </a>
                <div class="search-result">
                    <div class="search-result__content">
                        <div class="search-result__content__title">Pages</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center">
                                <div class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="inbox"></i> </div>
                                <div class="ml-3">Mail Settings</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 bg-theme-17 text-theme-11 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="users"></i> </div>
                                <div class="ml-3">Users & Permissions</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 bg-theme-14 text-theme-10 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="credit-card"></i> </div>
                                <div class="ml-3">Transactions Report</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">Users</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                </div>
                                <div class="ml-3">Russell Crowe</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">russellcrowe@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                                </div>
                                <div class="ml-3">Brad Pitt</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">bradpitt@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                                </div>
                                <div class="ml-3">Angelina Jolie</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">angelinajolie@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                </div>
                                <div class="ml-3">Christian Bale</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">christianbale@left4code.com</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">Products</div>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-4.jpg">
                            </div>
                            <div class="ml-3">Apple MacBook Pro 13</div>
                            <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">PC &amp; Laptop</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-12.jpg">
                            </div>
                            <div class="ml-3">Apple MacBook Pro 13</div>
                            <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">PC &amp; Laptop</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-11.jpg">
                            </div>
                            <div class="ml-3">Nike Air Max 270</div>
                            <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Sport &amp; Outdoor</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-15.jpg">
                            </div>
                            <div class="ml-3">Sony Master Series A9G</div>
                            <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Electronic</div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END: Search -->
            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown relative mr-auto sm:mr-6">
                <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell" class="notification__icon"></i> </div>
                <div class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
                    <div class="notification-content__box dropdown-box__content box">
                        <div class="notification-content__title">Notifications</div>
                        <div class="cursor-pointer relative flex items-center ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">06:05 AM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Brad Pitt</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">03:20 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Angelina Jolie</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Christian Bale</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">John Travolta</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8 relative">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                    <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-10.jpg">
                </div>
                <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                    <div class="dropdown-box__content box bg-theme-38 text-white">
                        <div class="p-4 border-b border-theme-40">
                            <div class="font-medium">Russell Crowe</div>
                            <div class="text-xs text-theme-41">DevOps Engineer</div>
                        </div>
                        <div class="p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                        </div>
                        <div class="p-2 border-t border-theme-40">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
        <!-- END: Top Bar -->
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Chat
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <button class="button text-white bg-theme-1 shadow-md mr-2">Start New Chat</button>
                <div class="dropdown relative ml-auto sm:ml-0">
                    <button class="dropdown-toggle button px-2 box text-gray-700">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
                    </button>
                    <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                        <div class="dropdown-box__content box p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Create Group </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-y chat grid grid-cols-12 gap-5 mt-5">
            <!-- BEGIN: Chat Side Menu -->
            <div class="col-span-12 lg:col-span-4 xxl:col-span-3">
                <div class="intro-y pr-1">
                    <div class="box p-2">
                        <div class="chat__tabs nav-tabs justify-center flex"> <a data-toggle="tab" data-target="#chats" href="javascript:;" class="flex-1 py-2 rounded-md text-center active">Chats</a> <a data-toggle="tab" data-target="#friends" href="javascript:;" class="flex-1 py-2 rounded-md text-center">Friends</a> <a data-toggle="tab" data-target="#profile" href="javascript:;" class="flex-1 py-2 rounded-md text-center">Profile</a> </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-content__pane active" id="chats">
                        <div class="pr-1">
                            <div class="box px-5 pt-5 pb-5 lg:pb-0 mt-5">
                                <div class="relative text-gray-700">
                                    <input type="text" class="input input--lg w-full bg-gray-200 pr-10 placeholder-theme-13" placeholder="Search for messages or users...">
                                    <i class="w-4 h-4 hidden sm:absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                                </div>
                                <div class="overflow-x-auto scrollbar-hidden">
                                    <div class="flex mt-5">
                                        <a href="" class="w-10 mr-4 cursor-pointer">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full">
                                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                            </div>
                                            <div class="text-xs text-gray-600 truncate text-center mt-2">John Travolta</div>
                                        </a>
                                        <a href="" class="w-10 mr-4 cursor-pointer">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full">
                                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                            </div>
                                            <div class="text-xs text-gray-600 truncate text-center mt-2">Robert De Niro</div>
                                        </a>
                                        <a href="" class="w-10 mr-4 cursor-pointer">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full">
                                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-12.jpg">
                                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                            </div>
                                            <div class="text-xs text-gray-600 truncate text-center mt-2">Leonardo DiCaprio</div>
                                        </a>
                                        <a href="" class="w-10 mr-4 cursor-pointer">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full">
                                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                            </div>
                                            <div class="text-xs text-gray-600 truncate text-center mt-2">Sylvester Stallone</div>
                                        </a>
                                        <a href="" class="w-10 mr-4 cursor-pointer">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full">
                                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-11.jpg">
                                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                            </div>
                                            <div class="text-xs text-gray-600 truncate text-center mt-2">Angelina Jolie</div>
                                        </a>
                                        <a href="" class="w-10 mr-4 cursor-pointer">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full">
                                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-12.jpg">
                                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                            </div>
                                            <div class="text-xs text-gray-600 truncate text-center mt-2">Denzel Washington</div>
                                        </a>
                                        <a href="" class="w-10 mr-4 cursor-pointer">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full">
                                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                            </div>
                                            <div class="text-xs text-gray-600 truncate text-center mt-2">Morgan Freeman</div>
                                        </a>
                                        <a href="" class="w-10 mr-4 cursor-pointer">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full">
                                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                            </div>
                                            <div class="text-xs text-gray-600 truncate text-center mt-2">Angelina Jolie</div>
                                        </a>
                                        <a href="" class="w-10 mr-4 cursor-pointer">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full">
                                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                            </div>
                                            <div class="text-xs text-gray-600 truncate text-center mt-2">Edward Norton</div>
                                        </a>
                                        <a href="" class="w-10 mr-4 cursor-pointer">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full">
                                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                            </div>
                                            <div class="text-xs text-gray-600 truncate text-center mt-2">Leonardo DiCaprio</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chat__chat-list overflow-y-auto scrollbar-hidden pr-1 pt-1 mt-4">
                            <div class="intro-x cursor-pointer box relative flex items-center p-5 ">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium">John Travolta</a>
                                        <div class="text-xs text-gray-500 ml-auto">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                </div>
                            </div>
                            <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium">Robert De Niro</a>
                                        <div class="text-xs text-gray-500 ml-auto">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                            <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-12.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium">Leonardo DiCaprio</a>
                                        <div class="text-xs text-gray-500 ml-auto">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                </div>
                                <div class="w-5 h-5 flex items-center justify-center absolute top-0 right-0 text-xs text-white rounded-full bg-theme-1 font-medium -mt-1 -mr-1">6</div>
                            </div>
                            <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium">Sylvester Stallone</a>
                                        <div class="text-xs text-gray-500 ml-auto">06:05 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                </div>
                            </div>
                            <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-11.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium">Angelina Jolie</a>
                                        <div class="text-xs text-gray-500 ml-auto">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                                <div class="w-5 h-5 flex items-center justify-center absolute top-0 right-0 text-xs text-white rounded-full bg-theme-1 font-medium -mt-1 -mr-1">4</div>
                            </div>
                            <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-12.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium">Denzel Washington</a>
                                        <div class="text-xs text-gray-500 ml-auto">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                </div>
                                <div class="w-5 h-5 flex items-center justify-center absolute top-0 right-0 text-xs text-white rounded-full bg-theme-1 font-medium -mt-1 -mr-1">3</div>
                            </div>
                            <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium">Morgan Freeman</a>
                                        <div class="text-xs text-gray-500 ml-auto">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                </div>
                                <div class="w-5 h-5 flex items-center justify-center absolute top-0 right-0 text-xs text-white rounded-full bg-theme-1 font-medium -mt-1 -mr-1">5</div>
                            </div>
                            <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium">Angelina Jolie</a>
                                        <div class="text-xs text-gray-500 ml-auto">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                </div>
                                <div class="w-5 h-5 flex items-center justify-center absolute top-0 right-0 text-xs text-white rounded-full bg-theme-1 font-medium -mt-1 -mr-1">1</div>
                            </div>
                            <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium">Edward Norton</a>
                                        <div class="text-xs text-gray-500 ml-auto">06:05 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                </div>
                                <div class="w-5 h-5 flex items-center justify-center absolute top-0 right-0 text-xs text-white rounded-full bg-theme-1 font-medium -mt-1 -mr-1">7</div>
                            </div>
                            <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium">Leonardo DiCaprio</a>
                                        <div class="text-xs text-gray-500 ml-auto">06:05 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                                <div class="w-5 h-5 flex items-center justify-center absolute top-0 right-0 text-xs text-white rounded-full bg-theme-1 font-medium -mt-1 -mr-1">3</div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content__pane" id="friends">
                        <div class="pr-1">
                            <div class="box p-5 mt-5">
                                <div class="relative text-gray-700">
                                    <input type="text" class="input input--lg w-full bg-gray-200 pr-10 placeholder-theme-13" placeholder="Search for messages or users...">
                                    <i class="w-4 h-4 hidden sm:absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                                </div>
                                <button type="button" class="button w-full bg-theme-1 text-white mt-3">Invite Friends</button>
                            </div>
                        </div>
                        <div class="chat__user-list overflow-y-auto scrollbar-hidden pr-1 pt-1">
                            <div class="mt-4 text-gray-600">A</div>
                            <div class="cursor-pointer box relative flex items-center p-5 mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center"> <a href="" class="font-medium">John Travolta</a> </div>
                                    <div class="w-full truncate text-gray-600">Last seen 2 hours ago</div>
                                </div>
                                <div class="dropdown relative ml-auto">
                                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                                    <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                        <div class="dropdown-box__content box p-2">
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cursor-pointer box relative flex items-center p-5 mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center"> <a href="" class="font-medium">Robert De Niro</a> </div>
                                    <div class="w-full truncate text-gray-600">Last seen 2 hours ago</div>
                                </div>
                                <div class="dropdown relative ml-auto">
                                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                                    <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                        <div class="dropdown-box__content box p-2">
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 text-gray-600">B</div>
                            <div class="cursor-pointer box relative flex items-center p-5 mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-12.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center"> <a href="" class="font-medium">Leonardo DiCaprio</a> </div>
                                    <div class="w-full truncate text-gray-600">Last seen 2 hours ago</div>
                                </div>
                                <div class="dropdown relative ml-auto">
                                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                                    <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                        <div class="dropdown-box__content box p-2">
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cursor-pointer box relative flex items-center p-5 mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center"> <a href="" class="font-medium">Sylvester Stallone</a> </div>
                                    <div class="w-full truncate text-gray-600">Last seen 2 hours ago</div>
                                </div>
                                <div class="dropdown relative ml-auto">
                                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                                    <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                        <div class="dropdown-box__content box p-2">
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cursor-pointer box relative flex items-center p-5 mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-11.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center"> <a href="" class="font-medium">Angelina Jolie</a> </div>
                                    <div class="w-full truncate text-gray-600">Last seen 2 hours ago</div>
                                </div>
                                <div class="dropdown relative ml-auto">
                                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                                    <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                        <div class="dropdown-box__content box p-2">
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content__pane" id="profile">
                        <div class="pr-1">
                            <div class="box px-5 py-10 mt-5">
                                <div class="w-20 h-20 flex-none image-fit rounded-full overflow-hidden mx-auto">
                                    <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-4.jpg">
                                </div>
                                <div class="text-center mt-3">
                                    <div class="font-medium text-lg">John Travolta</div>
                                    <div class="text-gray-600 mt-1">Tailwind HTML Admin Template</div>
                                </div>
                            </div>
                            <div class="box p-5 mt-5">
                                <div class="flex items-center border-b pb-5">
                                    <div class="">
                                        <div class="text-gray-600">Country</div>
                                        <div>New York City, USA</div>
                                    </div>
                                    <i data-feather="globe" class="w-4 h-4 text-gray-600 ml-auto"></i>
                                </div>
                                <div class="flex items-center border-b py-5">
                                    <div class="">
                                        <div class="text-gray-600">Phone</div>
                                        <div>+32 19 23 62 24 34</div>
                                    </div>
                                    <i data-feather="mic" class="w-4 h-4 text-gray-600 ml-auto"></i>
                                </div>
                                <div class="flex items-center border-b py-5">
                                    <div class="">
                                        <div class="text-gray-600">Email</div>
                                        <div>john travolta</div>
                                    </div>
                                    <i data-feather="mail" class="w-4 h-4 text-gray-600 ml-auto"></i>
                                </div>
                                <div class="flex items-center pt-5">
                                    <div class="">
                                        <div class="text-gray-600">Joined Date</div>
                                        <div>19 August 2022</div>
                                    </div>
                                    <i data-feather="clock" class="w-4 h-4 text-gray-600 ml-auto"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Chat Side Menu -->
            <!-- BEGIN: Chat Content -->
            <div class="intro-y col-span-12 lg:col-span-8 xxl:col-span-9">
                <div class="chat__box box">
                    <!-- BEGIN: Chat Active -->
                    <div class="hidden h-full flex flex-col">
                        <div class="flex flex-col sm:flex-row border-b border-gray-200 px-5 py-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 flex-none image-fit relative">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                                </div>
                                <div class="ml-3 mr-auto">
                                    <div class="font-medium text-base">John Travolta</div>
                                    <div class="text-gray-600 text-xs sm:text-sm">Hey, I am using chat <span class="mx-1">•</span> Online</div>
                                </div>
                            </div>
                            <div class="flex items-center sm:ml-auto mt-5 sm:mt-0 border-t sm:border-0 border-gray-200 pt-3 sm:pt-0 -mx-5 sm:mx-0 px-5 sm:px-0">
                                <a href="javascript:;" class="w-5 h-5 text-gray-500"> <i data-feather="search" class="w-5 h-5"></i> </a>
                                <a href="javascript:;" class="w-5 h-5 text-gray-500 ml-5"> <i data-feather="user-plus" class="w-5 h-5"></i> </a>
                                <div class="dropdown relative ml-auto sm:ml-3">
                                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-500"> <i data-feather="more-vertical" class="w-5 h-5"></i> </a>
                                    <div class="dropdown-box mt-6 absolute w-40 top-0 right-0 z-20">
                                        <div class="dropdown-box__content box p-2">
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overflow-y-scroll px-5 pt-5 flex-1">
                            <div class="chat__box__text-box flex items-end float-left mb-4">
                                <div class="w-10 h-10 hidden sm:block flex-none image-fit relative mr-5">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                                </div>
                                <div class="bg-gray-200 px-4 py-3 text-gray-700 rounded-r-md rounded-t-md">
                                    Lorem ipsum sit amen dolor, lorem ipsum sit amen dolor
                                    <div class="mt-1 text-xs text-gray-600">2 mins ago</div>
                                </div>
                                <div class="hidden sm:block dropdown relative ml-3 my-auto">
                                    <a href="javascript:;" class="dropdown-toggle w-4 h-4 text-gray-500"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                                    <div class="dropdown-box mt-6 absolute w-40 top-0 right-0 z-20">
                                        <div class="dropdown-box__content box p-2">
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="corner-up-left" class="w-4 h-4 mr-2"></i> Reply </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear-both"></div>
                            <div class="chat__box__text-box flex items-end float-right mb-4">
                                <div class="hidden sm:block dropdown relative mr-3 my-auto">
                                    <a href="javascript:;" class="dropdown-toggle w-4 h-4 text-gray-500"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                                    <div class="dropdown-box mt-6 absolute w-40 top-0 right-0 z-20">
                                        <div class="dropdown-box__content box p-2">
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="corner-up-left" class="w-4 h-4 mr-2"></i> Reply </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-theme-1 px-4 py-3 text-white rounded-l-md rounded-t-md">
                                    Lorem ipsum sit amen dolor, lorem ipsum sit amen dolor
                                    <div class="mt-1 text-xs text-theme-25">1 mins ago</div>
                                </div>
                                <div class="w-10 h-10 hidden sm:block flex-none image-fit relative ml-5">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                </div>
                            </div>
                            <div class="clear-both"></div>
                            <div class="chat__box__text-box flex items-end float-right mb-4">
                                <div class="hidden sm:block dropdown relative mr-3 my-auto">
                                    <a href="javascript:;" class="dropdown-toggle w-4 h-4 text-gray-500"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                                    <div class="dropdown-box mt-6 absolute w-40 top-0 right-0 z-20">
                                        <div class="dropdown-box__content box p-2">
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="corner-up-left" class="w-4 h-4 mr-2"></i> Reply </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-theme-1 px-4 py-3 text-white rounded-l-md rounded-t-md">
                                    Lorem ipsum sit amen dolor, lorem ipsum sit amen dolor
                                    <div class="mt-1 text-xs text-theme-25">59 secs ago</div>
                                </div>
                                <div class="w-10 h-10 hidden sm:block flex-none image-fit relative ml-5">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                </div>
                            </div>
                            <div class="clear-both"></div>
                            <div class="text-gray-500 text-xs text-center mb-10 mt-5">12 June 2020</div>
                            <div class="chat__box__text-box flex items-end float-left mb-4">
                                <div class="w-10 h-10 hidden sm:block flex-none image-fit relative mr-5">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                                </div>
                                <div class="bg-gray-200 px-4 py-3 text-gray-700 rounded-r-md rounded-t-md">
                                    Lorem ipsum sit amen dolor, lorem ipsum sit amen dolor
                                    <div class="mt-1 text-xs text-gray-600">10 secs ago</div>
                                </div>
                                <div class="hidden sm:block dropdown relative ml-3 my-auto">
                                    <a href="javascript:;" class="dropdown-toggle w-4 h-4 text-gray-500"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                                    <div class="dropdown-box mt-6 absolute w-40 top-0 right-0 z-20">
                                        <div class="dropdown-box__content box p-2">
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="corner-up-left" class="w-4 h-4 mr-2"></i> Reply </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear-both"></div>
                            <div class="chat__box__text-box flex items-end float-right mb-4">
                                <div class="hidden sm:block dropdown relative mr-3 my-auto">
                                    <a href="javascript:;" class="dropdown-toggle w-4 h-4 text-gray-500"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                                    <div class="dropdown-box mt-6 absolute w-40 top-0 right-0 z-20">
                                        <div class="dropdown-box__content box p-2">
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="corner-up-left" class="w-4 h-4 mr-2"></i> Reply </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-theme-1 px-4 py-3 text-white rounded-l-md rounded-t-md">
                                    Lorem ipsum
                                    <div class="mt-1 text-xs text-theme-25">1 secs ago</div>
                                </div>
                                <div class="w-10 h-10 hidden sm:block flex-none image-fit relative ml-5">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                </div>
                            </div>
                            <div class="clear-both"></div>
                            <div class="chat__box__text-box flex items-end float-left mb-4">
                                <div class="w-10 h-10 hidden sm:block flex-none image-fit relative mr-5">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                                </div>
                                <div class="bg-gray-200 px-4 py-3 text-gray-700 rounded-r-md rounded-t-md">
                                    John Travolta is typing
                                    <span class="typing-dots ml-1"> <span>.</span> <span>.</span> <span>.</span> </span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 pb-10 sm:py-4 flex items-center border-t border-gray-200">
                            <textarea class="chat__box__input input w-full h-16 resize-none border-transparent px-5 py-3 focus:shadow-none" rows="1" placeholder="Type your message..."></textarea>
                            <div class="flex absolute sm:static left-0 bottom-0 ml-5 sm:ml-0 mb-5 sm:mb-0">
                                <div class="dropdown relative mr-3 sm:mr-5">
                                    <a href="javascript:;" class="dropdown-toggle w-4 h-4 sm:w-5 sm:h-5 block text-gray-500"> <i data-feather="smile" class="w-full h-full"></i> </a>
                                    <div class="chat-dropdown dropdown-box absolute w-40 top-0 left-0 sm:left-auto sm:right-0 z-20">
                                        <div class="dropdown-box__content">
                                            <div class="chat-dropdown__box box flex flex-col pb-3 -mt-2">
                                                <div class="px-3 pt-3">
                                                    <div class="relative text-gray-700">
                                                        <input type="text" class="input w-full bg-gray-200 pr-10 placeholder-theme-13" placeholder="Search emojis...">
                                                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                                                    </div>
                                                </div>
                                                <div class="chat-dropdown__box__tabs nav-tabs flex px-3 mt-5">
                                                    <a data-toggle="tab" data-target="#history" href="javascript:;" class="py-2 flex justify-center flex-1 rounded hover:bg-gray-200">
                                                        <svg class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path fill="currentColor" d="M504 255.531c.253 136.64-111.18 248.372-247.82 248.468-59.015.042-113.223-20.53-155.822-54.911-11.077-8.94-11.905-25.541-1.839-35.607l11.267-11.267c8.609-8.609 22.353-9.551 31.891-1.984C173.062 425.135 212.781 440 256 440c101.705 0 184-82.311 184-184 0-101.705-82.311-184-184-184-48.814 0-93.149 18.969-126.068 49.932l50.754 50.754c10.08 10.08 2.941 27.314-11.313 27.314H24c-8.837 0-16-7.163-16-16V38.627c0-14.254 17.234-21.393 27.314-11.314l49.372 49.372C129.209 34.136 189.552 8 256 8c136.81 0 247.747 110.78 248 247.531zm-180.912 78.784l9.823-12.63c8.138-10.463 6.253-25.542-4.21-33.679L288 256.349V152c0-13.255-10.745-24-24-24h-16c-13.255 0-24 10.745-24 24v135.651l65.409 50.874c10.463 8.137 25.541 6.253 33.679-4.21z"></path>
                                                        </svg>
                                                    </a>
                                                    <a data-toggle="tab" data-target="#smile" href="javascript:;" class="py-2 flex justify-center flex-1 rounded hover:bg-gray-200 active">
                                                        <svg class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                                            <path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm-80-216c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160 0c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm4 72.6c-20.8 25-51.5 39.4-84 39.4s-63.2-14.3-84-39.4c-8.5-10.2-23.7-11.5-33.8-3.1-10.2 8.5-11.5 23.6-3.1 33.8 30 36 74.1 56.6 120.9 56.6s90.9-20.6 120.9-56.6c8.5-10.2 7.1-25.3-3.1-33.8-10.1-8.4-25.3-7.1-33.8 3.1z"></path>
                                                        </svg>
                                                    </a>
                                                    <a data-toggle="tab" data-target="#cat" href="javascript:;" class="py-2 flex justify-center flex-1 rounded hover:bg-gray-200">
                                                        <svg class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path fill="currentColor" d="M290.59 192c-20.18 0-106.82 1.98-162.59 85.95V192c0-52.94-43.06-96-96-96-17.67 0-32 14.33-32 32s14.33 32 32 32c17.64 0 32 14.36 32 32v256c0 35.3 28.7 64 64 64h176c8.84 0 16-7.16 16-16v-16c0-17.67-14.33-32-32-32h-32l128-96v144c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V289.86c-10.29 2.67-20.89 4.54-32 4.54-61.81 0-113.52-44.05-125.41-102.4zM448 96h-64l-64-64v134.4c0 53.02 42.98 96 96 96s96-42.98 96-96V32l-64 64zm-72 80c-8.84 0-16-7.16-16-16s7.16-16 16-16 16 7.16 16 16-7.16 16-16 16zm80 0c-8.84 0-16-7.16-16-16s7.16-16 16-16 16 7.16 16 16-7.16 16-16 16z"></path>
                                                        </svg>
                                                    </a>
                                                    <a data-toggle="tab" data-target="#coffee" href="javascript:;" class="py-2 flex justify-center flex-1 rounded hover:bg-gray-200">
                                                        <svg class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                            <path fill="currentColor" d="M192 384h192c53 0 96-43 96-96h32c70.6 0 128-57.4 128-128S582.6 32 512 32H120c-13.3 0-24 10.7-24 24v232c0 53 43 96 96 96zM512 96c35.3 0 64 28.7 64 64s-28.7 64-64 64h-32V96h32zm47.7 384H48.3c-47.6 0-61-64-36-64h583.3c25 0 11.8 64-35.9 64z"></path>
                                                        </svg>
                                                    </a>
                                                    <a data-toggle="tab" data-target="#futbol" href="javascript:;" class="py-2 flex justify-center flex-1 rounded hover:bg-gray-200">
                                                        <svg class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zm-48 0l-.003-.282-26.064 22.741-62.679-58.5 16.454-84.355 34.303 3.072c-24.889-34.216-60.004-60.089-100.709-73.141l13.651 31.939L256 139l-74.953-41.525 13.651-31.939c-40.631 13.028-75.78 38.87-100.709 73.141l34.565-3.073 16.192 84.355-62.678 58.5-26.064-22.741-.003.282c0 43.015 13.497 83.952 38.472 117.991l7.704-33.897 85.138 10.447 36.301 77.826-29.902 17.786c40.202 13.122 84.29 13.148 124.572 0l-29.902-17.786 36.301-77.826 85.138-10.447 7.704 33.897C442.503 339.952 456 299.015 456 256zm-248.102 69.571l-29.894-91.312L256 177.732l77.996 56.527-29.622 91.312h-96.476z"></path>
                                                        </svg>
                                                    </a>
                                                    <a data-toggle="tab" data-target="#building" href="javascript:;" class="py-2 flex justify-center flex-1 rounded hover:bg-gray-200">
                                                        <svg class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                            <path fill="currentColor" d="M128 148v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12zm140 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm-128 96h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm128 0h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm-76 84v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm76 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm180 124v36H0v-36c0-6.6 5.4-12 12-12h19.5V24c0-13.3 10.7-24 24-24h337c13.3 0 24 10.7 24 24v440H436c6.6 0 12 5.4 12 12zM79.5 463H192v-67c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v67h112.5V49L80 48l-.5 415z"></path>
                                                        </svg>
                                                    </a>
                                                    <a data-toggle="tab" data-target="#lightbulb" href="javascript:;" class="py-2 flex justify-center flex-1 rounded hover:bg-gray-200">
                                                        <svg class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                                                            <path fill="currentColor" d="M176 80c-52.94 0-96 43.06-96 96 0 8.84 7.16 16 16 16s16-7.16 16-16c0-35.3 28.72-64 64-64 8.84 0 16-7.16 16-16s-7.16-16-16-16zM96.06 459.17c0 3.15.93 6.22 2.68 8.84l24.51 36.84c2.97 4.46 7.97 7.14 13.32 7.14h78.85c5.36 0 10.36-2.68 13.32-7.14l24.51-36.84c1.74-2.62 2.67-5.7 2.68-8.84l.05-43.18H96.02l.04 43.18zM176 0C73.72 0 0 82.97 0 176c0 44.37 16.45 84.85 43.56 115.78 16.64 18.99 42.74 58.8 52.42 92.16v.06h48v-.12c-.01-4.77-.72-9.51-2.15-14.07-5.59-17.81-22.82-64.77-62.17-109.67-20.54-23.43-31.52-53.15-31.61-84.14-.2-73.64 59.67-128 127.95-128 70.58 0 128 57.42 128 128 0 30.97-11.24 60.85-31.65 84.14-39.11 44.61-56.42 91.47-62.1 109.46a47.507 47.507 0 0 0-2.22 14.3v.1h48v-.05c9.68-33.37 35.78-73.18 52.42-92.16C335.55 260.85 352 220.37 352 176 352 78.8 273.2 0 176 0z"></path>
                                                        </svg>
                                                    </a>
                                                    <a data-toggle="tab" data-target="#music" href="javascript:;" class="py-2 flex justify-center flex-1 rounded hover:bg-gray-200">
                                                        <svg class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path fill="currentColor" d="M511.99 32.01c0-21.71-21.1-37.01-41.6-30.51L150.4 96c-13.3 4.2-22.4 16.5-22.4 30.5v261.42c-10.05-2.38-20.72-3.92-32-3.92-53.02 0-96 28.65-96 64s42.98 64 96 64 96-28.65 96-64V214.31l256-75.02v184.63c-10.05-2.38-20.72-3.92-32-3.92-53.02 0-96 28.65-96 64s42.98 64 96 64 96-28.65 96-64l-.01-351.99z"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="tab-content overflow-hidden mt-5">
                                                    <div class="h-full tab-content__pane" id="history">
                                                        <div class="font-medium px-3">Recent Emojis</div>
                                                        <div class="h-full pb-10 px-2 overflow-y-auto scrollbar-hidden mt-2">
                                                            <div class="grid grid-cols-8 text-2xl">
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😀</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😁</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😂</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="h-full tab-content__pane active" id="smile">
                                                        <div class="font-medium px-3">Smileys & People</div>
                                                        <div class="h-full pb-10 px-2 overflow-y-auto scrollbar-hidden mt-2">
                                                            <div class="grid grid-cols-8 text-2xl">
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😀</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😁</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😂</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😃</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😄</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😅</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😆</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😉</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😊</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😋</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😎</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😍</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😘</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😗</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😙</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😚</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☺️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙂</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤗</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤩</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤔</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤨</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😶</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙄</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😏</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😥</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😮</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😯</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😪</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😫</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😴</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😌</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😛</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😜</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😝</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤤</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😔</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙃</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😲</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☹️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙁</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😖</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😞</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😟</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😤</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😢</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😭</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😨</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😩</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤯</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😬</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😰</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😱</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😳</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤪</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😵</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😡</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😠</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤬</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😷</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤢</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤮</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😇</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤠</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤡</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤥</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤫</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤭</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😈</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👿</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👹</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👺</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💀</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☠️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👻</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👽</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👾</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤖</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💩</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😺</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😸</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😹</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😻</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😼</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😽</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙀</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😿</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">😾</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙈</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙉</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙊</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👶</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👴</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👵</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;⚕️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;⚕️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;🎓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;🎓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;🏫</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;🏫</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;⚖️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;⚖️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;🌾</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;🌾</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;🍳</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;🍳</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;🔧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;🔧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;🏭</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;🏭</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;💼</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;💼</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;🔬</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;🔬</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;💻</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;💻</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;🎤</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;🎤</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;🎨</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;🎨</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;✈️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;✈️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;🚀</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;🚀</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;🚒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;🚒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👮</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👮&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👮&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕵️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕵️&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕵️&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💂</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💂&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💂&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👷</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👷&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👷&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤴</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👸</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👳</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👳&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👳&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👲</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧔</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👱</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👱&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👱&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤵</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👰</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤰</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤱</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👼</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎅</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤶</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧙</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧙&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧙&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧚</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧚&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧚&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧛</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧛&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧛&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧜</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧜&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧜&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧝</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧝&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧝&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧞</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧞&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧞&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧟</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧟&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧟&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙍</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙍&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙍&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙎</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙎&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙎&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙅</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙅&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙅&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙆</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙆&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙆&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💁</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💁&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💁&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙋</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙋&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙋&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙇</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙇&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙇&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤦&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤦&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤷</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤷&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤷&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💆</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💆&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💆&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💇</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💇&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💇&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚶</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚶&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚶&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏃</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏃&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏃&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💃</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕺</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👯</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👯&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👯&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧖</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧖&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧖&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧗</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧗&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧗&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧘</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧘&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧘&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛀</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛌</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕴️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗣️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👤</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👥</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤺</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏇</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛷️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏂</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏌️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏌️&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏌️&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏄</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏄&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏄&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚣&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚣&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏊</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏊&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏊&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛹️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛹️&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛹️&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏋️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏋️&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏋️&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚴</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚴&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚴&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚵</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚵&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚵&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏎️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏍️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤸</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤸&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤸&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤼</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤼&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤼&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤽</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤽&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤽&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤾</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤾&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤾&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤹</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤹&zwj;♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤹&zwj;♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👫</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👬</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👭</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💏</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;❤️&zwj;💋&zwj;👨</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;❤️&zwj;💋&zwj;👨</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;❤️&zwj;💋&zwj;👩</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;❤️&zwj;👨</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;❤️&zwj;👨</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;❤️&zwj;👩</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👪</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;👩&zwj;👦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;👩&zwj;👧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;👩&zwj;👧&zwj;👦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;👩&zwj;👦&zwj;👦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;👩&zwj;👧&zwj;👧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;👨&zwj;👦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;👨&zwj;👧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;👨&zwj;👧&zwj;👦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;👨&zwj;👦&zwj;👦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;👨&zwj;👧&zwj;👧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;👩&zwj;👦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;👩&zwj;👧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;👩&zwj;👧&zwj;👦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;👩&zwj;👦&zwj;👦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;👩&zwj;👧&zwj;👧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;👦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;👦&zwj;👦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;👧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;👧&zwj;👦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👨&zwj;👧&zwj;👧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;👦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;👦&zwj;👦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;👧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;👧&zwj;👦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👩&zwj;👧&zwj;👧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤳</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💪</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👈</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👉</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☝️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👆</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🖕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👇</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">✌️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤞</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🖖</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤘</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤙</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🖐️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">✋</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👌</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👍</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👎</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">✊</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👊</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤛</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤜</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤚</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👋</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤟</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">✍️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👏</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙌</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤲</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🙏</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🤝</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💅</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👂</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👃</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👀</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👁️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👁️&zwj;🗨️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧠</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👅</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👄</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💋</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💘</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">❤️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💔</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💖</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💗</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💙</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💚</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💛</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧡</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💜</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🖤</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💝</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💞</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💟</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">❣️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💌</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💤</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💢</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💥</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💨</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💫</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💬</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗨️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗯️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💭</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕳️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕶️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👔</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👖</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧤</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧥</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👗</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👘</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👙</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👚</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👛</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👜</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👝</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛍️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👞</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👟</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👠</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👡</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👢</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">👒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎩</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧢</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛑️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📿</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💄</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💍</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💎</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="h-full tab-content__pane" id="cat">
                                                        <div class="font-medium px-3">Animals & Nature</div>
                                                        <div class="h-full pb-10 px-2 overflow-y-auto scrollbar-hidden mt-2">
                                                            <div class="grid grid-cols-8 text-2xl">
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐵</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦍</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐶</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐩</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐺</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦊</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐱</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐈</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦁</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐯</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐅</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐆</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐴</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐎</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦄</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦌</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐮</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐂</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐃</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐄</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐷</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐖</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐗</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐽</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐏</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐪</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐫</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐘</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦏</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐭</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐁</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐀</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐹</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐰</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐇</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐿️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦔</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦇</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐻</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐨</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐼</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐾</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦃</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐔</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐤</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐥</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕊️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦅</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦆</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦉</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐸</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐊</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐢</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦎</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐍</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐲</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐉</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦖</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐳</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐋</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐬</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐟</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐠</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐡</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦈</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐙</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐚</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦀</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐌</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦋</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐛</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐜</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐝</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🐞</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦗</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕷️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕸️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🦂</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌸</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💮</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏵️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌹</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥀</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌺</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌻</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌼</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌷</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌱</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌲</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌳</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌴</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌵</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌾</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌿</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☘️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍀</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍁</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍂</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍃</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="h-full tab-content__pane" id="coffee">
                                                        <div class="font-medium px-3">Food & Drink</div>
                                                        <div class="h-full pb-10 px-2 overflow-y-auto scrollbar-hidden mt-2">
                                                            <div class="grid grid-cols-8 text-2xl">
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍇</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍈</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍉</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍊</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍋</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍌</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍍</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍎</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍏</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥝</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍅</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥥</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍆</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥔</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌽</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌶️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍄</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥜</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌰</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍞</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥖</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥨</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥞</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🧀</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍖</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍗</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥩</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍔</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍟</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌭</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥪</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌮</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌯</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥙</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥚</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍳</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥘</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍲</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥗</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍿</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥫</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍱</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍘</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍙</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍚</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍛</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍜</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍝</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍠</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍢</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍤</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍥</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍡</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥟</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥠</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥡</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍨</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍩</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍪</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎂</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍰</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍫</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍬</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍭</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍮</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍯</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍼</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥛</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍵</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍶</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍾</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍷</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍸</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍹</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍺</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍻</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥂</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥃</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥤</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥢</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍽️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🍴</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥄</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔪</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏺</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="h-full tab-content__pane" id="futbol">
                                                        <div class="font-medium px-3">Activities</div>
                                                        <div class="h-full pb-10 px-2 overflow-y-auto scrollbar-hidden mt-2">
                                                            <div class="grid grid-cols-8 text-2xl">
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎃</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎄</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎆</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎇</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">✨</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎈</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎉</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎊</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎋</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎍</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎎</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎏</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎀</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎁</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎗️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎟️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎫</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎖️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏆</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏅</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥇</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥈</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥉</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⚽</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⚾</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏀</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏈</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏉</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎾</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎱</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎳</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏏</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏸</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥊</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥋</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥅</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎯</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛳</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛸️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎽</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎿</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛷</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥌</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎮</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕹️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎲</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♠️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♥️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♦️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♣️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🃏</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🀄</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎴</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="h-full tab-content__pane" id="building">
                                                        <div class="font-medium px-3">Travel & Places</div>
                                                        <div class="h-full pb-10 px-2 overflow-y-auto scrollbar-hidden mt-2">
                                                            <div class="grid grid-cols-8 text-2xl">
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌍</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌎</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌏</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗺️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗾</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏔️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛰️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌋</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗻</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏕️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏖️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏜️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏝️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏞️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏟️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏛️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏗️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏘️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏙️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏚️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏠</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏡</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏢</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏤</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏥</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏨</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏩</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏪</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏫</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏬</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏭</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏯</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏰</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗼</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗽</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛪</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕌</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕍</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛩️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕋</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛲</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛺</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌁</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌃</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌄</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌅</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌆</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌇</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌉</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♨️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌌</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎠</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎡</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎢</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💈</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎪</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎭</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🖼️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎨</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎰</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚂</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚃</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚄</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚅</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚆</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚇</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚈</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚉</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚊</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚝</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚞</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚋</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚌</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚍</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚎</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚔</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚖</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚗</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚘</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚙</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚚</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚛</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚜</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚲</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛴</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛵</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚏</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛣️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛤️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛽</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚨</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚥</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⚓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛵</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛶</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚤</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛳️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛴️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛥️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚢</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">✈️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛩️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛫</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛬</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💺</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚁</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚟</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚠</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚡</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛰️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚀</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛸</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛎️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚪</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛏️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛋️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚽</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚿</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛁</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⌛</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⏳</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⌚</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⏰</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⏱️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⏲️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕰️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕛</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕜</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕝</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕞</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕟</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕔</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕠</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕡</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕖</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕢</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕗</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕘</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕤</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕙</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕥</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕚</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌔</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌖</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌗</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌘</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌙</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌚</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌛</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌜</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌡️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌝</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌞</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⭐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌟</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌠</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☁️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛅</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛈️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌤️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌥️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌦️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌧️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌨️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌩️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌪️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌫️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌬️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌀</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌈</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌂</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☔</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛱️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⚡</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">❄️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☃️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛄</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☄️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔥</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🌊</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="h-full tab-content__pane" id="lightbulb">
                                                        <div class="font-medium px-3">Objects</div>
                                                        <div class="h-full pb-10 px-2 overflow-y-auto scrollbar-hidden mt-2">
                                                            <div class="grid grid-cols-8 text-2xl">
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔇</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔈</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔉</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔊</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📢</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📯</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔔</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎼</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎵</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎶</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎙️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎚️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎛️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎤</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📻</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎷</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎸</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎹</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎺</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎻</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🥁</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📱</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📲</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☎️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📞</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📟</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📠</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔋</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔌</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💻</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🖥️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🖨️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⌨️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🖱️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🖲️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💽</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💾</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💿</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📀</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎥</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎞️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📽️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎬</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📺</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📷</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📸</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📹</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📼</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔍</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔎</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔬</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔭</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📡</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕯️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💡</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏮</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📔</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📖</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📗</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📘</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📙</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📚</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📃</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📜</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📄</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📰</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗞️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔖</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏷️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💰</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💴</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💵</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💶</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💷</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💸</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💳</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💹</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💱</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💲</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">✉️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📨</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📩</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📤</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📥</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📫</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📪</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📬</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📭</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📮</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗳️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">✏️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">✒️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🖋️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🖊️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🖌️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🖍️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📝</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💼</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📁</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📂</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📅</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📆</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗒️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗓️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📇</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📈</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📉</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📊</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📋</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📌</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📍</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📎</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🖇️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📏</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">✂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗃️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗄️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗑️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔏</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗝️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔨</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛏️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⚒️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛠️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗡️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⚔️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔫</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏹</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛡️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔩</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⚙️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗜️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⚗️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⚖️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔗</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛓️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💉</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💊</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚬</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⚰️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⚱️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🗿</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛢️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔮</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛒</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="h-full tab-content__pane" id="music">
                                                        <div class="font-medium px-3">Symbols</div>
                                                        <div class="h-full pb-10 px-2 overflow-y-auto scrollbar-hidden mt-2">
                                                            <div class="grid grid-cols-8 text-2xl">
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🏧</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚮</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚰</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♿</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚹</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚺</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚻</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚼</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚾</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛂</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛃</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛄</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛅</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⚠️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚸</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛔</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚫</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚳</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚭</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚯</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚱</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🚷</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📵</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔞</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☢️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☣️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⬆️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">↗️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">➡️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">↘️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⬇️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">↙️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⬅️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">↖️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">↕️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">↔️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">↩️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">↪️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⤴️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⤵️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔃</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔄</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔙</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔚</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔛</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔜</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔝</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🛐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⚛️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕉️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">✡️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☸️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☯️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">✝️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☦️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☪️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☮️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🕎</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔯</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♈</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♉</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♊</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♋</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♌</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♍</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♎</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♏</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⛎</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔀</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔁</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔂</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">▶️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⏩</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⏭️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⏯️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">◀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⏪</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⏮️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔼</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⏫</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔽</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⏬</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⏸️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⏹️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⏺️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⏏️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🎦</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔅</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔆</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📶</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📳</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📴</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♀️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⚕️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">♻️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⚜️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔱</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">📛</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔰</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⭕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">✅</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">☑️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">✔️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">✖️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">❌</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">❎</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">➕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">➖</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">➗</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">➰</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">➿</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">〽️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">✳️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">✴️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">❇️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">‼️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⁉️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">❓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">❔</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">❕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">❗</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">〰️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">©️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">®️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">™️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">#️⃣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">*️⃣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">0️⃣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">1️⃣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">2️⃣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">3️⃣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">4️⃣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">5️⃣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">6️⃣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">7️⃣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">8️⃣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">9️⃣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔟</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💯</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔠</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔡</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔢</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔣</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔤</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🅰️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🆎</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🅱️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🆑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🆒</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🆓</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">ℹ️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🆔</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">Ⓜ️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🆕</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🆖</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🅾️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🆗</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🅿️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🆘</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🆙</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🆚</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🈁</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🈂️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🈷️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🈶</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🈯</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🉐</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🈹</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🈚</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🈲</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🉑</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🈸</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🈴</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🈳</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">㊗️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">㊙️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🈺</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🈵</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">▪️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">▫️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">◻️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">◼️</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">◽</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">◾</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⬛</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⬜</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔶</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔷</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔸</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔹</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔺</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔻</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">💠</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔘</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔲</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔳</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⚪</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">⚫</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔴</button>
                                                                <button class="rounded focus:outline-none hover:bg-gray-200">🔵</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-4 h-4 sm:w-5 sm:h-5 relative text-gray-500 mr-3 sm:mr-5">
                                    <i data-feather="paperclip" class="w-full h-full"></i>
                                    <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                </div>
                            </div>
                            <a href="javascript:;" class="w-8 h-8 sm:w-10 sm:h-10 block bg-theme-1 text-white rounded-full flex-none flex items-center justify-center mr-5"> <i data-feather="send" class="w-4 h-4"></i> </a>
                        </div>
                    </div>
                    <!-- END: Chat Active -->
                    <!-- BEGIN: Chat Default -->
                    <div class="h-full flex items-center">
                        <div class="mx-auto text-center">
                            <div class="w-16 h-16 flex-none image-fit rounded-full overflow-hidden mx-auto">
                                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-4.jpg">
                            </div>
                            <div class="mt-3">
                                <div class="font-medium">Hey, John Travolta!</div>
                                <div class="text-gray-600 mt-1">Please select a chat to start messaging.</div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Chat Default -->
                </div>
            </div>
            <!-- END: Chat Content -->
        </div>
    </div>
    <!-- END: Content -->
</div>
@include('sections.footer')
