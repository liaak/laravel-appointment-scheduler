@extends('layouts.app')
@section('content')
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold mb-6 uppercase text-center" style="color:#FCD5CE; text-shadow: -1px -1px 0 #816B77, -1px 1px 0 #816B77, 1px 1px 0 #816B77, 1px -1px 0 #816B77;">About me</h2>
        <div class="rounded-lg shadow-md p-6 border-2" style="background-color: #FCD5CE; border-color: #816B77;">
            <div class="flex flex-col md:flex-row gap-6">
                <div class="md:w-1/3 flex-shrink-0">
                    <img src="{{asset('images/aboutme.png')}}" alt="About me" class="w-full rounded-lg shadow">
                </div>
                <div class="md:w-2/3">
                    <p class="mb-4 text-justify" style="color:#816B77;">
                        Welcome on my webpage!
                    </p>
                    <p class="mb-4 text-justify" style="color:#816B77;">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                    <p class="mb-4 text-justify" style="color:#816B77;">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                    <p class="mb-4 text-justify" style="color:#816B77;">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
