<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
        <span class="hidden xl:block text-white text-lg ml-3"> Hardware<span class="font-medium">System</span> </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="/home" class="side-menu  {{ Request::is('home*') ? 'side-menu--active' : '' }} ">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>

        <li>
            <a href="/inbox" class="side-menu  {{ Request::is('inbox*') ? 'side-menu--active' : '' }} ">
                <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                <div class="side-menu__title"> Inbox </div>
            </a>
        </li>
        <li>
            <a href="/filemanager" class="side-menu {{ Request::is('filemanager*') ? 'side-menu--active' : '' }} ">
                <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                <div class="side-menu__title"> File Manager </div>
            </a>
        </li>
        <li>
            <a href="/pointofsale" class="side-menu {{ Request::is('pointofsale*') ? ' side-menu--active' : '' }} ">
                <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                <div class="side-menu__title"> Point of Sale </div>
            </a>
        </li>
        <li>
            <a href="/chat" class="side-menu {{ Request::is('chat*') ? 'side-menu--active' : '' }} ">
                <div class="side-menu__icon"> <i data-feather="message-square"></i> </div>
                <div class="side-menu__title"> Chat </div>
            </a>
        </li>
        <li>
            <a href="/post" class="side-menu  {{ Request::is('post*') ? 'side-menu--active' : '' }} ">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Post </div>
            </a>
        </li>
        <li class="side-nav__devider my-6"></li>
        <li>
            <a href="/crud" class="side-menu {{ Request::is('crud*') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                <div class="side-menu__title"> Products</div>
            </a>
        </li>
        <li>
            <a href="/users" class="side-menu {{ Request::is('users*') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                <div class="side-menu__title"> Users </div>
            </a>

        </li>
        <li>
            <a href="/profile" class="side-menu {{ Request::is('profile*') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="trello"></i> </div>
                <div class="side-menu__title"> Profile </div>
            </a>
        </li
    </ul>
</nav>
