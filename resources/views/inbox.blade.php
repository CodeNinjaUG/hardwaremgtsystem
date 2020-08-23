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
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                </div>
                                <div class="ml-3">Tom Hanks</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">tomhanks@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-3.jpg">
                                </div>
                                <div class="ml-3">Johnny Depp</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">johnnydepp@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                                </div>
                                <div class="ml-3">Kate Winslet</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">katewinslet@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                                </div>
                                <div class="ml-3">Morgan Freeman</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">morganfreeman@left4code.com</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">Products</div>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-5.jpg">
                            </div>
                            <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                            <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Smartphone &amp; Tablet</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-10.jpg">
                            </div>
                            <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                            <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Smartphone &amp; Tablet</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-6.jpg">
                            </div>
                            <div class="ml-3">Nikon Z6</div>
                            <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Photography</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-3.jpg">
                            </div>
                            <div class="ml-3">Oppo Find X2 Pro</div>
                            <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Smartphone &amp; Tablet</div>
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
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Tom Hanks</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-3.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Kate Winslet</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Morgan Freeman</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8 relative">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                    <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-7.jpg">
                </div>
                <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                    <div class="dropdown-box__content box bg-theme-38 text-white">
                        <div class="p-4 border-b border-theme-40">
                            <div class="font-medium">Tom Hanks</div>
                            <div class="text-xs text-theme-41">Software Engineer</div>
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
        <div class="grid grid-cols-12 gap-6 mt-8">
            <div class="col-span-12 lg:col-span-3 xxl:col-span-2">
                <h2 class="intro-y text-lg font-medium mr-auto mt-2">
                    Inbox
                </h2>
                <!-- BEGIN: Inbox Menu -->
                <div class="intro-y box bg-theme-1 p-5 mt-6">
                    <button type="button" class="button button--lg flex items-center justify-center text-gray-700 w-full bg-white mt-2"> <i class="w-4 h-4 mr-2" data-feather="edit-3"></i> Compose </button>
                    <div class="border-t border-theme-3 mt-6 pt-6 text-white">
                        <a href="" class="flex items-center px-3 py-2 rounded-md bg-theme-22 font-medium"> <i class="w-4 h-4 mr-2" data-feather="mail"></i> Inbox </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md"> <i class="w-4 h-4 mr-2" data-feather="star"></i> Marked </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md"> <i class="w-4 h-4 mr-2" data-feather="inbox"></i> Draft </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md"> <i class="w-4 h-4 mr-2" data-feather="send"></i> Sent </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md"> <i class="w-4 h-4 mr-2" data-feather="trash"></i> Trash </a>
                    </div>
                    <div class="border-t border-theme-3 mt-5 pt-5 text-white">
                        <a href="" class="flex items-center px-3 py-2 truncate">
                            <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                            Custom Work
                        </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate">
                            <div class="w-2 h-2 bg-theme-9 rounded-full mr-3"></div>
                            Important Meetings
                        </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate">
                            <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                            Work
                        </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate">
                            <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                            Design
                        </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate">
                            <div class="w-2 h-2 bg-theme-6 rounded-full mr-3"></div>
                            Next Week
                        </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate"> <i class="w-4 h-4 mr-2" data-feather="plus"></i> Add New Label </a>
                    </div>
                </div>
                <!-- END: Inbox Menu -->
            </div>
            <div class="col-span-12 lg:col-span-9 xxl:col-span-10">
                <!-- BEGIN: Inbox Filter -->
                <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
                    <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-gray-700" data-feather="search"></i>
                        <input type="text" class="input w-full sm:w-64 box px-10 text-gray-700 placeholder-theme-13" placeholder="Search mail">
                        <div class="inbox-filter dropdown absolute inset-y-0 mr-3 right-0 flex items-center">
                            <i class="dropdown-toggle w-4 h-4 cursor-pointer text-gray-700" data-feather="chevron-down"></i>
                            <div class="inbox-filter__dropdown-box dropdown-box mt-10 absolute top-0 left-0 z-20">
                                <div class="dropdown-box__content box p-5">
                                    <div class="grid grid-cols-12 gap-4 row-gap-3">
                                        <div class="col-span-6">
                                            <div class="text-xs">From</div>
                                            <input type="text" class="input w-full border mt-2 flex-1" placeholder="example@gmail.com">
                                        </div>
                                        <div class="col-span-6">
                                            <div class="text-xs">To</div>
                                            <input type="text" class="input w-full border mt-2 flex-1" placeholder="example@gmail.com">
                                        </div>
                                        <div class="col-span-6">
                                            <div class="text-xs">Subject</div>
                                            <input type="text" class="input w-full border mt-2 flex-1" placeholder="Important Meeting">
                                        </div>
                                        <div class="col-span-6">
                                            <div class="text-xs">Has the Words</div>
                                            <input type="text" class="input w-full border mt-2 flex-1" placeholder="Job, Work, Documentation">
                                        </div>
                                        <div class="col-span-6">
                                            <div class="text-xs">Doesn't Have</div>
                                            <input type="text" class="input w-full border mt-2 flex-1" placeholder="Job, Work, Documentation">
                                        </div>
                                        <div class="col-span-6">
                                            <div class="text-xs">Size</div>
                                            <select class="input w-full border mt-2 flex-1">
                                                <option>10</option>
                                                <option>25</option>
                                                <option>35</option>
                                                <option>50</option>
                                            </select>
                                        </div>
                                        <div class="col-span-12 flex items-center mt-3">
                                            <button class="button w-32 justify-center block bg-gray-200 text-gray-600 ml-auto">Create Filter</button>
                                            <button class="button w-32 justify-center block bg-theme-1 text-white ml-2">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-auto flex">
                        <button class="button text-white bg-theme-1 shadow-md mr-2">Start a Video Call</button>
                        <div class="dropdown relative">
                            <button class="dropdown-toggle button px-2 box text-gray-700">
                                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
                            </button>
                            <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Contacts </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Inbox Filter -->
                <!-- BEGIN: Inbox Content -->
                <div class="intro-y inbox box mt-5">
                    <div class="p-5 flex flex-col-reverse sm:flex-row text-gray-600 border-b border-gray-200">
                        <div class="flex items-center mt-3 sm:mt-0 border-t sm:border-0 border-gray-200 pt-5 sm:pt-0 mt-5 sm:mt-0 -mx-5 sm:mx-0 px-5 sm:px-0">
                            <input class="input border border-gray-500" type="checkbox">
                            <div class="dropdown relative ml-1">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="chevron-down" class="w-5 h-5"></i> </a>
                                <div class="dropdown-box mt-6 absolute w-32 top-0 left-0 z-20">
                                    <div class="dropdown-box__content box p-2"> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">All</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">None</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Read</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Unread</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Starred</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Unstarred</a> </div>
                                </div>
                            </div>
                            <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="refresh-cw"></i> </a>
                            <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="more-horizontal"></i> </a>
                        </div>
                        <div class="flex items-center sm:ml-auto">
                            <div>1 - 50 of 5,238</div>
                            <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                            <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                            <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="settings"></i> </a>
                        </div>
                    </div>
                    <div class="overflow-x-auto sm:overflow-x-visible">
                        <div class="intro-y">
                            <div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" >
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-8.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Kevin Spacey</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">There are many variations of passages of Lorem Ips</span> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">01:10 PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" >
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-10.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Russell Crowe</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Contrary to popular belief, Lo</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20 </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">01:10 PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" >
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Russell Crowe</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Contrary to popular belief, Lo</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20 </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">01:10 PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" >
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Leonardo DiCaprio</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">There are many variations of passages of Lorem Ips</span> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">01:10 PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" >
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Kate Winslet</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">There are many variations of passages of Lorem Ips</span> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">01:10 PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" >
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-3.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Leonardo DiCaprio</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Lorem Ipsum is simply dummy te</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500 </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">05:09 AM</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" >
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-11.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Edward Norton</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">There are many variations of passages of Lorem Ips</span> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">03:20 PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" >
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-10.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Kevin Spacey</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Lorem Ipsum is simply dummy te</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500 </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">05:09 AM</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" >
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-3.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Denzel Washington</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Lorem Ipsum is simply dummy te</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500 </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">01:10 PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" >
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Robert De Niro</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Lorem Ipsum is simply dummy te</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500 </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">01:10 PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="inbox__item inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" checked>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Brad Pitt</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Contrary to popular belief, Lo</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20 </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">01:10 PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" >
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-11.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Hugh Jackman</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Contrary to popular belief, Lo</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20 </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">03:20 PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" >
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Arnold Schwarzenegger</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Lorem Ipsum is simply dummy te</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500 </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">01:10 PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" >
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-10.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Sylvester Stallone</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Lorem Ipsum is simply dummy te</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500 </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">01:10 PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" >
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Al Pacino</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Contrary to popular belief, Lo</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20 </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">01:10 PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" >
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Robert De Niro</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Contrary to popular belief, Lo</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20 </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">01:10 PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="inbox__item inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" checked>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Angelina Jolie</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">There are many variations of passages of Lorem Ips</span> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">01:10 PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" >
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Morgan Freeman</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Contrary to popular belief, Lo</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20 </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">06:05 AM</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="inbox__item inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" checked>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Tom Cruise</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Contrary to popular belief, Lo</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20 </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">03:20 PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="inbox__item inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" checked>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="star"></i> </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">Morgan Freeman</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">It is a long established fact </span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">01:10 PM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-5 flex flex-col sm:flex-row items-center text-center sm:text-left text-gray-600">
                        <div>4.41 GB (25%) of 17 GB used Manage</div>
                        <div class="sm:ml-auto mt-2 sm:mt-0">Last account activity: 36 minutes ago</div>
                    </div>
                </div>
                <!-- END: Inbox Content -->
            </div>
        </div>
    </div>
    <!-- END: Content -->
</div>
@include('sections.footer')
