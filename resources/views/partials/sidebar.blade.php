<!-- ======= partials/sidebar ======= -->

<div class="sidebar z-10 shadow-md bg-teal-950" id="mySidebar">
    <a href="" class="close-btn active:text-black hover:text-slate-300" onclick="closeNav()">&times;</a>
    <nav class=" mt-10">
      <a href="/" class="flex py-3 px-6 active:text-black hover:text-slate-300 hover:bg-slate-950 items-center">
        <svg class="w-6" data-slot="icon" fill="none" stroke-width="2" stroke="currentColor" 
        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" 
          d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
        </svg>
        
        <span class="font-medium mx-10">Home</span>
      </a>
      <a href="/about" class="flex py-3 px-6 active:text-black hover:text-slate-300 hover:bg-slate-950 items-center">
        <svg class="w-6" data-slot="icon" fill="none" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" 
        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z"></path>
        </svg>
        
        <span class="font-medium mx-10">About Me</span>
      </a>
      <a href="/contact" class="flex py-3 px-6 active:text-black hover:text-slate-300 hover:bg-slate-950 items-center">
        <svg class="w-6" data-slot="icon" fill="none" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" 
        aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"></path>
        </svg>
        
        <span class="font-medium mx-10">Contact Me</span>
      </a>
      <a href="/login" class="flex py-3 px-6 mt-72 active:text-black hover:text-slate-300 hover:bg-slate-950 items-center">
        <svg class="w-6" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"></path>
          </svg>
        
        <span class="font-medium mx-10">Login</span>
      </a>
    </nav>
  </div>

  <div class="open-btn py-1 px-4 active:text-black hover:text-slate-300" onclick="openNav()">&#9776;</div>