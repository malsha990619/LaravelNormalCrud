<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
        <ul class="collapse navbar-collapse" id="navbarSupportedContent">
            <li class="nav-item">
                <a href="{{route('dashboard')}}">New posts</a>
            </li>
            <li class="nav-item">
                <a href="{{route('posts.all')}}">All posts</a>
            </li>
        </ul>
    </x-slot>
    <div class="min-h-screen fljustify-center">
        <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-md">
            
            <form method="POST" action="{{route('posts.store')}}">
                @csrf
                <div class="mt-4 mb-6">
                    <label for="exampleInputEmail1" class="block mb-2 font-medium text-gray-700">Post Title</label>
                    
                    <input type="text" class="w-full p-2 border border-gray-300 rounded-md form-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email"  name="title" required>
                </div>
                
                <div class="mt-4 mb-6">
                    <label for="exampleInputEmail1" class="block mb-2 font-medium text-gray-700">Post description</label>
                    
                    <input type="text" class="w-full p-2 border border-gray-300 rounded-md form-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Post description" name="description" required>
                </div>
              
                
                <button type="submit" class="px-4 py-2 font-bold text-black bg-black rounded bg-primary hover:bg-primary-dark">Post</button>

                
            </form>
        </div>
    </div>
   
</x-app-layout>
