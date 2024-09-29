@extends('components.main')
@section('content')
<section class="bg-orange-500 mt-24">
    <div class="flex flex-col items-center justify-center px-6 py-24 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-orange-300 rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <form class="space-y-4 md:space-y-6" action="#">
                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Your Id</label>
                        <input type="text" name="email" id="email" class="bg-orange-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="username" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-orange-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                    </div>
                    
                    <a type="submit" class="w-full block text-white bg-orange-500 hover:bg-orange-400 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-4 text-center" href="/home">Sign in</a>
                </form>
            </div>
        </div>
    </div>
  </section>
@endsection