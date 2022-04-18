@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Nombre</label>
                    <input type="text" 
                    name="name" 
                    id="name" 
                    placeholder="Ingresa tu nombre" 
                    class="bg-gray-100 border-2 w-full p-3 rounded-lg @error('name')border-red-500 @enderror"
                    value="{{old('name')}}">

                    <!-- IfError -->
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input 
                    type="text" 
                    name="username" 
                    id="username" 
                    placeholder="Ingresa tu username" 
                    class="bg-gray-100 border-2 w-full p-3 rounded-lg @error('username')border-red-500 @enderror"
                    value="{{old('username')}}">

                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="name" class="sr-only">Email</label>
                    <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    placeholder="Ingresa tu email" 
                    class="bg-gray-100 border-2 w-full p-3 rounded-lg @error('email')border-red-500 @enderror"
                    value="{{old('email')}}">

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="name" class="sr-only">Password</label>
                    <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    placeholder="Ingresa tu password" 
                    class="bg-gray-100 border-2 w-full p-3 rounded-lg @error('password')border-red-500 @enderror">

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Confirma tu password</label>
                    <input 
                    type="password" 
                    name="password_confirmation" 
                    id="password_confirmation" 
                    placeholder="Confirma tu password" 
                    class="bg-gray-100 border-2 w-full p-3 rounded-lg @error('password')border-red-500 @enderror">
                </div>


                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Registrate</button>
                </div>
            </form>
        </div>
    </div>
@endsection