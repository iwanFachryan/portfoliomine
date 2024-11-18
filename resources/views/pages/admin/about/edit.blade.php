<!-- ======= pages/admin/about/edit ======= -->

@extends('pages.admin.partials.master')

@section('title', 'admin - Edit Feature About Me')

@section('konten')
    
    <div class="bg-slate-950 py-20">
        <div class="container mx-auto px-4">
            <section class="bg-white dark:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                    <form action="#">
                        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Feature - About Me</h2>
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="w-full">
                                <label for="titleProject-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title Project-1</label>
                                <input type="text" name="titleProject-1" id="titleProject-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Title Project-1" required="">
                            </div>
                            <div class="w-full">
                                <label for="img" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Img</label>
                                <input type="file" name="img" id="img" class="w-full overflow-clip rounded-md border border-neutral-300 bg-neutral-50/50 text-sm text-neutral-600 file:mr-4 file:cursor-pointer file:border-none file:bg-neutral-50 file:px-4 file:py-2 file:font-medium file:text-neutral-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:text-neutral-300 dark:file:bg-neutral-900 dark:file:text-white dark:focus-visible:outline-white" 
                                placeholder="Img" required="">
                            </div>
                            <div class="w-full">
                                <label for="LinkdetailProject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Detail Project</label>
                                <input type="text" name="LinkdetailProject" id="LinkdetailProject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Link Detail Project" required="">
                            </div>
                            <div class="w-full">
                                <label for="projectName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Name</label>
                                <input type="text" name="projectName" id="projectName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Project Name" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="projectExplain-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Explain-1</label>
                                <textarea name="projectExplain-1" id="projectExplain-1" cols="30" rows="7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Project Explain-1" required=""></textarea>
                            </div>
                        </div>
                        <h2 class="mt-2 mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Feature - Detail Projects</h2>
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="w-full">
                                <label for="titlePage-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title Page-1</label>
                                <input type="text" name="titlePage-1" id="titlePage-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Title Page-1" required="">
                            </div>
                            <div class="w-full">
                                <label for="video-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Video-1</label>
                                <input type="file" name="video-1" id="video-1" class="w-full overflow-clip rounded-md border border-neutral-300 bg-neutral-50/50 text-sm text-neutral-600 file:mr-4 file:cursor-pointer file:border-none file:bg-neutral-50 file:px-4 file:py-2 file:font-medium file:text-neutral-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:text-neutral-300 dark:file:bg-neutral-900 dark:file:text-white dark:focus-visible:outline-white" 
                                placeholder="Video-1" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="titleProject-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title Project-2</label>
                                <input type="text" name="titleProject-2" id="titleProject-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Title Project-2" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="projectExplain-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Explain-2</label>
                                <textarea name="projectExplain-2" id="projectExplain-2" cols="30" rows="7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Project Explain-2" required=""></textarea>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="projectDescribe" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Describe</label>
                                <textarea name="projectDescribe" id="projectDescribe" cols="30" rows="7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Project Describe" required=""></textarea>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="projectFeature" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Feature</label>
                                <textarea name="projectFeature" id="projectFeature" cols="30" rows="7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Project Feature" required=""></textarea>
                            </div>
                        </div>
                        <h2 class="mt-2 mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Feature - My Certificates</h2>
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="w-full">
                                <label for="titlePage-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title Page-2</label>
                                <input type="text" name="titlePage-2" id="titlePage-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Title Page-2" required="">
                            </div>
                            <div class="w-full">
                                <label for="video-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Video-2</label>
                                <input type="file" name="video-2" id="video-2" class="w-full overflow-clip rounded-md border border-neutral-300 bg-neutral-50/50 text-sm text-neutral-600 file:mr-4 file:cursor-pointer file:border-none file:bg-neutral-50 file:px-4 file:py-2 file:font-medium file:text-neutral-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:text-neutral-300 dark:file:bg-neutral-900 dark:file:text-white dark:focus-visible:outline-white" 
                                placeholder="Video-2" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="certificateName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Certificate Name</label>
                                <input type="text" name="certificateName" id="certificateName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Certificate Name" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="certificateExplain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Certificate Explain</label>
                                <textarea name="certificateExplain" id="certificateExplain" cols="30" rows="7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Certificate Explain" required=""></textarea>
                            </div>
                        </div>
                        <h2 class="mt-2 mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Feature - My Papers</h2>
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="w-full">
                                <label for="titlePage-3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title Page-3</label>
                                <input type="text" name="titlePage-3" id="titlePage-3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Title Page-3" required="">
                            </div>
                            <div class="w-full">
                                <label for="video-3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Video-3</label>
                                <input type="file" name="video-3" id="video-3" class="w-full overflow-clip rounded-md border border-neutral-300 bg-neutral-50/50 text-sm text-neutral-600 file:mr-4 file:cursor-pointer file:border-none file:bg-neutral-50 file:px-4 file:py-2 file:font-medium file:text-neutral-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:text-neutral-300 dark:file:bg-neutral-900 dark:file:text-white dark:focus-visible:outline-white" 
                                placeholder="Video-3" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="paperName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paper Name</label>
                                <input type="text" name="paperName" id="paperName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Paper Name" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="paperExplain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paper Explain</label>
                                <textarea name="paperExplain" id="paperExplain" cols="30" rows="7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Paper Explain" required=""></textarea>
                            </div>
                        </div>
                        <button type="submit"
                            class="mt-5 border transition-colors focus:ring-2 p-0.5 disabled:cursor-not-allowed border-transparent bg-sky-600 hover:bg-sky-700 active:bg-sky-800 text-white disabled:bg-gray-300 disabled:text-gray-700 rounded-lg ">
                                <span
                                    class="flex items-center justify-center gap-1 font-medium py-1 px-2.5 text-base false">
                                    Edit Feature
                                </span>
                        </button>
                        <button type="submit"
                            class="mt-5 border transition-colors focus:ring-2 p-0.5 disabled:cursor-not-allowed border-transparent bg-sky-600 hover:bg-sky-700 active:bg-sky-800 text-white disabled:bg-gray-300 disabled:text-gray-700 rounded-lg ">   
                                <a href="/admin/about" class="flex items-center justify-center gap-1 font-medium py-1 px-2.5 text-base false">
                                    Back
                                </a>
                        </button>
                    </form>
                </div>
              </section>
        </div>
    </div>
@endsection