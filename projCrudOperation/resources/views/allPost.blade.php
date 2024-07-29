<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
        <ul class="collapse navbar-collapse" id="navbarSupportedContent">
            <li class="nav-item">
                <a href="{{route('dashboard')}}">New posts</a>
            </li>
            
        </ul>
    </x-slot>
   <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($posts as $post)
                      <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        <td>
                            <a href="{{route('posts.edit',$post->id)}}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{route('posts.delete',$post->id)}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>   
        </div>
   </div>
   
</x-app-layout>
