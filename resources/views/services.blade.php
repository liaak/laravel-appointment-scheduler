@extends('layouts.app')
@section('content')
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold mb-6 uppercase text-center" style="color: #FCD5CE; text-shadow: -1px -1px 0 #816B77, 1px -1px 0 #816B77, -1px 1px 0 #816B77, 1px 1px 0 #816B77;">Services</h2>
        <div class="rounded-lg shadow-md p-6 border-2 space-y-12" style="background-color: #FCD5CE; border-color: #816B77;">
            {{-- 1st, slides from left, img+text with title --}}
            <div class="flex flex-col md:flex-row gap-6 items-start animate-slide-left" data-animate>
                {{-- img1 --}}
                <div class="md:w-1/3 flex-shrink-0">
                    <img src="{{asset('images/service1.png')}}" alt="service1" class="w-full rounded-lg shadow">
                </div>
                {{-- text1 --}}
                <div class="md:w-2/3">
                    <h3 class="text-2xl font-bold mb-3 uppercase" style="color: #816B77;">Service 1</h3>
                    <p class="mb-3 text-justify" style="color: #816B77;">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                </div>
            </div>
            {{-- 2nd, slides from right, img+text with title --}}
            <div class="flex flex-col md:flex-row gap-6 items-start animate-slide-right" data-animate>
                {{-- img2 --}}
                <div class="md:w-1/3 flex-shrink-0">
                    <img src="{{asset('images/service2.png')}}" alt="service2" class="w-full rounded-lg shadow">
                </div>
                {{-- text2 --}}
                <div class="md:w-2/3">
                    <h3 class="text-2xl font-bold mb-3 uppercase" style="color: #816B77;">Service 2</h3>
                    <p class="mb-3 text-justify" style="color: #816B77;">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Initial state (elements hidden) */
        .animate-slide-left,
        .animate-slide-right {
            opacity: 0;
        }

        .animate-slide-left {
            transform: translateX(-100px);
        }
        .animate-slide-right {
            transform: translateX(100px);
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-100px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(100px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Active state */
        .animate-slide-left.active {
            animation: slideInLeft 1s ease-out forwards;
        }
        .animate-slide-right.active {
            animation: slideInRight 1s ease-out forwards;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('[data-animate]');

            const observer = new IntersectionObserver((entries)=>{
                entries.forEach(entry=>{
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                })
            }, {
                threshold: 0.2, //20% is visible
                rootMargin: '0px 0px -50px 0px' //to trigger just a bit earlier
            })
            animateElements.forEach(element => {
                observer.observe(element);
            });
        });

    </script>
@endsection





