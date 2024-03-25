<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body>

<div class="flex flex-col w-full h-screen" style="background-image: url('/img/home_backdrop.webp'); background-size: cover; background-position: center;">
    <nav x-data="{ open: false }" class="navbar shadow-xl backdrop-blur-sm font-inter my-1 fixed z-50">
        <!-- Primary Navigation Menu -->
        <div class="navbar-start">
          <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
              <li><a>Item 1</a></li>
              <li>
                <a>Parent</a>
                <ul class="p-2">
                  <li><a>Submenu 1</a></li>
                  <li><a>Submenu 2</a></li>
                </ul>
              </li>
              <li><a>Item 3</a></li>
            </ul>
          </div>
            <a href="{{ route('dashboard') }}">
                <h1 class="text-white btn btn-ghost text-center text-3xl ml-[20%]">Sirena</h1>
            </a>

        </div>
        <div class="navbar-center  hidden lg:flex">
          <ul class="menu menu-horizontal px-1 font-inter text-lg">
            <li class=" text-white hover:text-gray-300 "><a>Item 1</a></li>
            <li class=" text-white hover:text-gray-300 "><a>Item 2</a></li>
            <li class=" text-white hover:text-gray-300 "><a>Item 3</a></li>
          </ul>
        </div>
        <div class="navbar-end">
            <!-- Settings Dropdown kalo udh jelas gua benerin -->
            {{-- @auth
            @if (isset(Auth()))
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <a href="{{ route('profile.edit') }}" class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                            Profile
                        </a>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                    class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                    >
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            @endif
           
            @endauth 
            @else --}}
            <button>
                <a href="{{ route('login') }}" class="font-inter text-lg text-white hover:text-gray-300 flex-none md:px-12 px-8 ">Login</a>
            </button>
        </div>  
    </nav>
    {{-- Navbar sampe sini --}}

    
    <div class="flex h-full mt-[5.5rem]">

        <div class="flex h-full w-[10%] flex-col">
            <div class="flex justify-center w-full h-[30%]">
                <div class="w-[1px] border"></div>
            </div>
            <div class="colums-3 w-full h-[40%] mx-auto">
                <div class="w-full h-1/3 items-center justify-center flex"> 
                    <image class="" src="/img/instagram.webp" alt=""></image>
                </div>
                <div class="w-full h-1/3 items-center justify-center flex"> 
                    <image class="" src="/img/image.webp" alt=""></image>
                </div>
                <div class="w-full h-1/3 items-center justify-center flex"> 
                    <image class="" src="/img/youtube.webp" alt=""></image>
                </div>
            </div>
            <div class="flex justify-center w-full h-[30%]">
                <div class="w-[1px] border"></div>
            </div>
        </div>

        <div class="flex items-center justify-center h-full w-[90%] -translate-y-5">
            <div class="flex flex-col my-auto">
                <p class="text-[6rem] font-inter font-bold text-white">Sirena Motret</p>
                <p class="text-[2rem] font-inter font-medium -mt-8 text-white">Photographer</p>
                <div class="w-full mt-4 flex">
                    <button class=" mr-2 w-1/2 h-12 border-2 rounded-full text-white hover:bg-white hover:text-black font-inter font-medium bg-white bg-opacity-20">order photo</button>
                    <button class=" ml-2 w-1/2 h-12 border-2  rounded-full text-white hover:bg-white hover:text-black font-inter font-medium bg-white bg-opacity-20">explore</button>
                </div>
            </div>
        </div>
        
    </div>
 
</div>

</body>
</html>