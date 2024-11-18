<!-- ======= pages/home/portfolio ======= -->

@extends('home')

@section('tittle', 'Iwan_Fachryan')

@section('konten')
    <div class="h-screen w-screen bg-slate-950">
        <div class="mx-auto max-w-7xl pt-16 sm:pt-24">
            <div class="space-y-8 lg:space-y-0 lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="px-6 sm:text-center md:mx-auto md:max-w-2xl lg:col-span-6 lg:flex lg:items-center lg:text-left">
                    <div class="space-y-8">
                        <div class="space-y-4">
                            <div class="space-y-2">
                                <a href="/" 
                                    class="rounded-full uppercase bg-teal-950 px-3 py-0.5 text-lg font-semibold leading-5 text-white">
                                    portfolio
                                </a>
                                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl">
                                    <span name="fullname" id="fullname" class="sm:text-4xl text-transparent bg-clip-text bg-gradient-to-r from-teal-900 to-slate-400"> 
                                        Iwan Fachryan Maulana Faisal 
                                    </span> 
                                    <a href="/about" class=" inline-block rounded-lg bg-emerald-950 px-4 py-1.5 text-lg font-semibold leading-7 text-white shadow-sm  hover:bg-yellow-950 hover:ring-yellow-950">
                                        About Me
                                    <span aria-hidden="true" class="text-indigo-200 text-lg font-extrabold"> -> </span>
                                    </a>
                                </h1>
                            </div>

                            <p name="motto" id="motto" class="text-base text-gray-200 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl px-2">
                                Work is a Responsibility That Must be Taken Seriously
                            </p>
                            <div class="flex">
                                <p name="message" id="message" class="text-lg text-transparent bg-clip-text bg-gradient-to-r from-teal-900 to-slate-400 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl px-2">
                                    "So.., Bekerja Keraslah.."
                                </p>
                                <p class="text-base text-gray-200 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl px-2">
                                    🥱👊✌
                                </p>
                            </div>
                        </div>

                        <div class="border-t border-gray-700"></div>

                        <div class="flex shadow-md space-x-2 items-center text-white">
                            <div class="flex items-center space-x-2 hover:ring-4 rounded-md">
                                <a name="link-1" id="link-1" href="https://www.instagram.com/iwan_fachryan/?utm_source=qr&igsh=MWpqNzJrM2xxd3J1aQ%3D%3D" 
                                class="flex items-center px-3 py-3 bg-white rounded-md shadow-sm">
                                    <div class="p-3 bg-indigo-600 bg-opacity-75 rounded-full">
                                        <img name="img-1" id="img-1" src="{{asset('assets/img/instagram.jpeg')}}" class="w-10" alt="Instagram">
                                    </div>
            
                                    <div class="mx-5">
                                        <h3 name="nameSosmed-1" id="nameSosmed-1" class="text-base font-semibold text-gray-700">iwan_fachryan</h3>
                                        <p name="pendidikan-1" id="pendidikan-1" class="text-base text-gray-500">EEPIS'20, Electronics</p>
                                        <p name="mottoSosmed-1" id="mottoSosmed-1" class="text-xs text-gray-900">Keep Studying and Learn From History</p>
                                    </div>
                                </a>
                            </div>

                            <div class="h-10 border-l border-gray-700"></div>

                            <div class="flex items-center space-x-2 hover:ring-4 rounded-md">
                                <a name="link-2" id="link-2" href="https://www.linkedin.com/in/iwan-fachryan?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" 
                                class="flex items-center px-3 py-2 bg-white rounded-md shadow-sm">
                                    <div class="p-3 bg-orange-500 bg-opacity-75 rounded-full">
                                        <img name="img-2" id="img-2" src="{{asset('assets/img/linkedin.jpeg')}}" class="w-10" alt="Linkedin">
                                    </div>
            
                                    <div class="mx-5">
                                        <h3 name="nameSosmed-2" id="nameSosmed-2" class="text-base font-semibold text-gray-700">Iwan Fachryan Maulana Faisal</h3>
                                        <p name="pendidikan-2" id="pendidikan-2" class="text-base text-gray-500">PENS</p>
                                        <p name="mottoSosmed-2" id="mottoSosmed-2" class="text-xs text-gray-900">Always Learn</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center w-full col-span-6">
                    <div class="px-6 h-full lg:h-100% w-full max-w-2xl col-span-6 flex items-center mx-auto">
                        <div style="width: 100%; height: 100%;">
                            <div style="width: 100%; height: 100%;">
                                <iframe name="video" id="video" class="shadow-md" frameborder="0" allowfullscreen="1"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    width="100%" height="100%"
                                    src="{{asset('assets/video/IwanFachryan.mp4')}}"
                                    id="widget2">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
