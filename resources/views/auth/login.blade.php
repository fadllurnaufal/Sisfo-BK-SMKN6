@extends('layouts.main')
@section('content')

<div class="flex w-screen h-screen bg-white">
    <div class="relative w-1/2 h-screen bg-tosca-300" id="image">
        <div class="absolute py-40 px-28">
            <img src="../Self-Love.png" alt="">
        </div>
    </div>
    <div class="w-1/2 h-full">
        <form action="../admin/features/dashboard/base">
            <div class="header-wrapper">
                <div class="mx-auto text-center sm" id="wrapper">
                    <header class="font-sans text-5xl antialiased font-bold text text-tosca-300 mt-28">
                        Log In
                    </header>
                    <div class="mt-12 text-sm font-thin tracking-widest text-gray-400 text">
                        Hello friends! Iam a counseling guidance<br>
                        You can trust everything, Let’s get in touch!
                    </div>
                    <div class="mt-14">
                        <input type="email" name="email" id="email" class="w-1/2 h-12 p-6 text-xs font-light tracking-wide text-gray-400 transition duration-500 bg-gray-100 border-none rounded-full focus:outline-none focus:ring focus:ring-tosca-300 focus:border-tosca-300 placeholder:text-gray-400 hover:bg-gray-200" placeholder="EMAIL">
                    </div>
                    <div class="mt-6">
                        <input type="password" name="password" id="password" class="w-1/2 h-12 p-6 text-xs font-light tracking-wide text-gray-400 transition duration-500 bg-gray-100 border-none rounded-full focus:outline-none focus:ring focus:ring-tosca-300 focus:border-tosca-300 placeholder:text-gray-400 hover:bg-gray-200" placeholder="PASSWORD">
                    </div>
                    <div class="mt-14 ">
                        <button class="w-1/2 h-12 p-6 py-2 font-sans font-semibold tracking-wide text-white duration-500 bg-orange-100 rounded-full hover:bg-orange-200">
                            Let's Start!
                        </button>
                    </div>
                    <div class="flex mt-12 place-content-center">
                        <div class="w-12 h-12 mx-4 rounded-full bg-peach-100">
                            <a href="#">
                                <img class="px-2.5 py-2.5" src="https://img.icons8.com/ios-glyphs/480/000000/whatsapp.png"/>
                            </a>
                        </div>
                        <div class="w-12 h-12 mx-4 rounded-full bg-cream-100">
                            <a href="#">
                                <img class="px-2.5 py-2.5" src="https://img.icons8.com/ios-glyphs/480/000000/new-post.png"/>
                            </a>
                        </div>
                        <div class="w-12 h-12 mx-4 rounded-full bg-tosca-100">
                            <a href="#">
                                <img class="px-2.5 py-2.5" src="https://img.icons8.com/ios-glyphs/480/000000/instagram-new.png"/>
                            </a>
                        </div>
                    </div>
                    <div class="mt-6 text-xs font-light tracking-wider text-gray-500">
                        Have any question? Let’s get in talk
                    </div>
                    <div class="mt-8 text-sm font-light tracking-wide text-gray-600">
                        Don’t have an account? <a href="/auth/registration" class="duration-200 text-cyan-300 font-reguler hover:text-cyan-500">Sign Up</a> 
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection