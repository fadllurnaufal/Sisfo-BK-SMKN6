@extends('layouts.main')
@section('container')

<div class="w-screen h-screen bg-white flex">
    <div class="bg-tosca-300 w-1/2 h-screen relative" id="image">
        <div class="py-40 px-28 absolute">
            <img src="../Self-Love.png" alt="">
        </div>
    </div>
    <div class="w-1/2 h-full">
        <form action="../admin/dashboard/layouts/main">
            <div class="header-wrapper">
                <div class="sm text-center mx-auto" id="wrapper">
                    <header class="text text-tosca-300 text-5xl antialiased font-sans font-bold mt-28">
                        Log In
                    </header>
                    <div class="text text-gray-400 mt-12 font-thin tracking-widest text-sm">
                        Hello friends! Iam a counseling guidance<br>
                        You can trust everything, Let’s get in touch!
                    </div>
                    <div class="mt-14">
                        <input type="email" name="email" id="email" class="w-1/2 h-12 p-6 bg-gray-100 rounded-full tracking-wide text-xs text-gray-400 focus:outline-none focus:ring focus:ring-tosca-300 focus:border-tosca-300 transition duration-500 " placeholder="EMAIL">
                    </div>
                    <div class="mt-6">
                        <input type="password" name="password" id="password" class="w-1/2 h-12 p-6 bg-gray-100 rounded-full tracking-wide text-xs text-gray-400 focus:outline-none focus:ring focus:ring-tosca-300 focus:border-tosca-300 transition duration-500" placeholder="PASSWORD">
                    </div>
                    <div class="mt-14 ">
                        <button class="w-1/2 h-12 p-6 bg-gray-100 rounded-full tracking-wide py-2 text-white bg-orange-100 font-sans font-semibold hover:bg-orange-200 duration-300">
                            Let's Start!
                        </button>
                    </div>
                    <div class="flex place-content-center mt-12">
                        <div class="w-12 h-12 bg-peach-100 mx-4 rounded-full">
                            <a href="#">
                                <img class="px-2.5 py-2.5" src="https://img.icons8.com/ios-glyphs/480/000000/whatsapp.png"/>
                            </a>
                        </div>
                        <div class="w-12 h-12 bg-cream-100 mx-4 rounded-full">
                            <a href="#">
                                <img class="px-2.5 py-2.5" src="https://img.icons8.com/ios-glyphs/480/000000/new-post.png"/>
                            </a>
                        </div>
                        <div class="w-12 h-12 bg-tosca-100 mx-4 rounded-full">
                            <a href="#">
                                <img class="px-2.5 py-2.5" src="https://img.icons8.com/ios-glyphs/480/000000/instagram-new.png"/>
                            </a>
                        </div>
                    </div>
                    <div class="mt-6 text-gray-500 font-light tracking-wider text-xs">
                        Have any question? Let’s get in talk
                    </div>
                    <div class="mt-8 text-gray-600 font-light tracking-wide text-sm">
                        Don’t have an account? <a href="/auth/registration" class="text-cyan-300 font-reguler hover:text-cyan-500 duration-200">Sign Up</a> 
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection