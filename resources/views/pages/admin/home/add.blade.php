<!-- ======= pages/admin/home/add ======= -->

@extends('pages.admin.partials.master')

@section('title', 'admin - Add Feature Home')

@section('konten')
    
    <div class="bg-slate-950 py-20">
        <div class="container mx-auto px-4">
            <section class="bg-white dark:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                    <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add Feature - Home</h2>
                    <form action="#">
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="sm:col-span-2">
                                <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                                <input type="text" name="fullname" id="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Full Name" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="motto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Motto</label>
                                <input type="text" name="motto" id="motto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Motto" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Message</label>
                                <input type="text" name="message" id="message" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Message" required="">
                            </div>
                            <div class="w-full">
                                <label for="link-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link-1</label>
                                <input type="text" name="link-1" id="link-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Link-1" required="">
                            </div>
                            <div class="w-full">
                                <label for="link-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link-2</label>
                                <input type="text" name="link-2" id="link-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Link-2" required="">
                            </div>
                            <div class="w-full">
                                <label for="img-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Img-1</label>
                                <input type="file" name="img-1" id="img-1" class="w-full overflow-clip rounded-md border border-neutral-300 bg-neutral-50/50 text-sm text-neutral-600 file:mr-4 file:cursor-pointer file:border-none file:bg-neutral-50 file:px-4 file:py-2 file:font-medium file:text-neutral-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:text-neutral-300 dark:file:bg-neutral-900 dark:file:text-white dark:focus-visible:outline-white" 
                                placeholder="Img-1" required="">
                            </div>
                            <div class="w-full">
                                <label for="img-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Img-2</label>
                                <input type="file" name="img-2" id="img-2" class="w-full overflow-clip rounded-md border border-neutral-300 bg-neutral-50/50 text-sm text-neutral-600 file:mr-4 file:cursor-pointer file:border-none file:bg-neutral-50 file:px-4 file:py-2 file:font-medium file:text-neutral-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:text-neutral-300 dark:file:bg-neutral-900 dark:file:text-white dark:focus-visible:outline-white" 
                                placeholder="Img-2" required="">
                            </div>
                            <div class="w-full">
                                <label for="nameSosmed-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name Sosmed-1</label>
                                <input type="text" name="nameSosmed-1" id="nameSosmed-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Name Sosmed-1" required="">
                            </div>
                            <div class="w-full">
                                <label for="nameSosmed-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name Sosmed-2</label>
                                <input type="text" name="nameSosmed-2" id="nameSosmed-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Name Sosmed-2" required="">
                            </div>
                            <div class="w-full">
                                <label for="pendidikan-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pendidikan-1</label>
                                <input type="text" name="pendidikan-1" id="pendidikan-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Pendidikan-1" required="">
                            </div>
                            <div class="w-full">
                                <label for="pendidikan-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pendidikan-2</label>
                                <input type="text" name="pendidikan-2" id="pendidikan-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Pendidikan-2" required="">
                            </div>
                            <div class="w-full">
                                <label for="mottoSosmed-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Motto Sosmed-1</label>
                                <input type="text" name="mottoSosmed-1" id="mottoSosmed-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Motto Sosmed-1" required="">
                            </div>
                            <div class="w-full">
                                <label for="mottoSosmed-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Motto Sosmed-2</label>
                                <input type="text" name="mottoSosmed-2" id="mottoSosmed-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Motto Sosmed-2" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="video" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Video</label>
                                <input type="file" name="video" id="video" class="w-full overflow-clip rounded-md border border-neutral-300 bg-neutral-50/50 text-sm text-neutral-600 file:mr-4 file:cursor-pointer file:border-none file:bg-neutral-50 file:px-4 file:py-2 file:font-medium file:text-neutral-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:text-neutral-300 dark:file:bg-neutral-900 dark:file:text-white dark:focus-visible:outline-white" 
                                placeholder="Video" required="">
                            </div>
                        </div>
                        <button type="submit"
                            class="mt-5 border transition-colors focus:ring-2 p-0.5 disabled:cursor-not-allowed border-transparent bg-sky-600 hover:bg-sky-700 active:bg-sky-800 text-white disabled:bg-gray-300 disabled:text-gray-700 rounded-lg ">
                                <span
                                    class="flex items-center justify-center gap-1 font-medium py-1 px-2.5 text-base false">
                                    Add Feature
                                </span>
                        </button>
                        <button type="submit"
                            class="mt-5 border transition-colors focus:ring-2 p-0.5 disabled:cursor-not-allowed border-transparent bg-sky-600 hover:bg-sky-700 active:bg-sky-800 text-white disabled:bg-gray-300 disabled:text-gray-700 rounded-lg ">   
                                <a href="/admin" class="flex items-center justify-center gap-1 font-medium py-1 px-2.5 text-base false">
                                    Back
                                </a>
                        </button>
                    </form>
                </div>
              </section>
        </div>
    </div>
@endsection