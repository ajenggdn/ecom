@extends('layout.app')

@section('content')
    @php
        $isActive = false; // Assuming $isActive is initially false
    @endphp

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.addEventListener("scroll", function() {
                if (window.scrollY > 60) {
                    document.getElementById("header").classList.add("bg-white", "py-4", "shadow-md");
                    document.getElementById("header").classList.remove("bg-bone", "py-6");
                    @php $isActive = true; @endphp
                } else {
                    document.getElementById("header").classList.add("bg-bone", "py-6");
                    document.getElementById("header").classList.remove("bg-white", "py-4", "shadow-md");
                    @php $isActive = false; @endphp
                }
            });
            document.getElementById("itemAmount").innerHTML = itemAmount;
        });
    </script>

    <header id="header"
        class="{{ $isActive ? 'bg-white py-4 shadow-md' : 'bg-bone py-6' }} fixed w-full z-10 transition-all">
        <div class="container mx-auto flex items-center justify-between h-full">
            <a href="{{ url('/') }}">
                <div>
                    <img class="w-[40px]" src="{{ asset('img/logo.svg') }}" alt="">
                </div>
            </a>
            <div class="cursor-pointer flex relative" onclick="toggleMenu()">

                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                </svg>
                <div
                    class="bg-red-500 absolute -right-2 -bottom-2 text-[12px] w-[18px] h-[18px] text-white rounded-full flex justify-center items-center">

                </div>
            </div>
        </div>
    </header>

    <script>
        function toggleMenu() {
            <?php $isOpen = false; ?>
            var isOpen = <?php echo json_encode($isOpen); ?>;
            isOpen = !isOpen;
        }
    </script>

    <div>
        <section class="h-[800px] bg-hero bg-no-repeat bg-cover bg-center py-24">
            <div class="container mx-auto flex justify-around h-full">
                <div class="flex flex-col justify-center">
                    <div class="font-semibold flex items-center uppercase">
                        <div class="w-10 h-[2px] bg-red-500 mr-3"></div> New Trend
                    </div>
                    <h1 class="text-[70px] leading-[1.1] font-light mb-4">
                        AUNTUMN SALE STYLISH <br />
                        <span class="font-semibold">WOMEN</span>
                    </h1>
                    <a href="" class="self-start uppercase font-semibold border-b-2 border-primary">
                        DISCOVER ME
                    </a>
                </div>
                <div class="hidden lg:block">
                    <img src="{{ asset('img/woman_hero.png') }}" alt="" />
                </div>
            </div>
        </section>

        <section class="py-16">
            <div class="container mx-auto">
                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-[30px] max-w-sm mx-auto md:max-w-none md:mx-0">
                    <div>
                        <div class="border border-[#e4e4e4] h-[300px] mb-4 relative overflow-hidden group transition">
                            <div class="w-full h-full flex justify-cennter items-cemter">
                                <div class="w-[200px] mx-auto flex justify-center items-center">
                                    <img src={{ asset('img/tas1.jpeg') }}
                                        class="max-h-[160px] group-hover:scale-110 transition duration-300" />
                                </div>
                                <div
                                    class="absolute top-6 -right-11 group-hover:right-5 /40 p-2 flex flex-col items-center justify-center gap-y-2 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <button>
                                        <div class="flex justify-center items-center text-white w-12 h-12 bg-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                            </svg>
                                        </div>
                                    </button>
                                    <a href=""
                                        class="w-12 h-12 bg-white flex justify-center items-center text-primary drop-shadow-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                            <path
                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500 mb-1">Tas Wanita</div>
                            <Link to="/">
                            <h2 class="font-semibold mb-1">Tas Zalora</h2>
                            </Link>
                            <div class="font-semibold">Rp 5.000.000</div>
                        </div>
                    </div>
                    <div>
                        <div class="border border-[#e4e4e4] h-[300px] mb-4 relative overflow-hidden group transition">
                            <div class="w-full h-full flex justify-cennter items-cemter">
                                <div class="w-[200px] mx-auto flex justify-center items-center">
                                    <img src={{ asset('img/tas2.jpg') }}
                                        class="max-h-[160px] group-hover:scale-110 transition duration-300" />
                                </div>
                                <div
                                    class="absolute top-6 -right-11 group-hover:right-5 /40 p-2 flex flex-col items-center justify-center gap-y-2 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <button>
                                        <div class="flex justify-center items-center text-white w-12 h-12 bg-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                            </svg>
                                        </div>
                                    </button>
                                    <a href=""
                                        class="w-12 h-12 bg-white flex justify-center items-center text-primary drop-shadow-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                            <path
                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500 mb-1">Tas Wanita</div>
                            <Link to="/">
                            <h2 class="font-semibold mb-1">Tas Zalora</h2>
                            </Link>
                            <div class="font-semibold">Rp 5.000.000</div>
                        </div>
                    </div>

                    <div>
                        <div class="border border-[#e4e4e4] h-[300px] mb-4 relative overflow-hidden group transition">
                            <div class="w-full h-full flex justify-cennter items-cemter">
                                <div class="w-[200px] mx-auto flex justify-center items-center">
                                    <img src={{ asset('img/tas3.jpg') }}
                                        class="max-h-[160px] group-hover:scale-110 transition duration-300" />
                                </div>
                                <div
                                    class="absolute top-6 -right-11 group-hover:right-5 /40 p-2 flex flex-col items-center justify-center gap-y-2 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <button>
                                        <div class="flex justify-center items-center text-white w-12 h-12 bg-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                            </svg>
                                        </div>
                                    </button>
                                    <a href=""
                                        class="w-12 h-12 bg-white flex justify-center items-center text-primary drop-shadow-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                            <path
                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500 mb-1">Tas Wanita</div>
                            <Link to="/">
                            <h2 class="font-semibold mb-1">Tas Zalora</h2>
                            </Link>
                            <div class="font-semibold">Rp 5.000.000</div>
                        </div>
                    </div>

                    <div>
                        <div class="border border-[#e4e4e4] h-[300px] mb-4 relative overflow-hidden group transition">
                            <div class="w-full h-full flex justify-cennter items-cemter">
                                <div class="w-[200px] mx-auto flex justify-center items-center">
                                    <img src={{ asset('img/tas4.jpg') }}
                                        class="max-h-[160px] group-hover:scale-110 transition duration-300" />
                                </div>
                                <div
                                    class="absolute top-6 -right-11 group-hover:right-5 /40 p-2 flex flex-col items-center justify-center gap-y-2 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <button>
                                        <div class="flex justify-center items-center text-white w-12 h-12 bg-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                            </svg>
                                        </div>
                                    </button>
                                    <a href=""
                                        class="w-12 h-12 bg-white flex justify-center items-center text-primary drop-shadow-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                            <path
                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500 mb-1">Tas Wanita</div>
                            <Link to="/">
                            <h2 class="font-semibold mb-1">Tas Zalora</h2>
                            </Link>
                            <div class="font-semibold">Rp 5.000.000</div>
                        </div>
                    </div>

                    <div>
                        <div class="border border-[#e4e4e4] h-[300px] mb-4 relative overflow-hidden group transition">
                            <div class="w-full h-full flex justify-cennter items-cemter">
                                <div class="w-[200px] mx-auto flex justify-center items-center">
                                    <img src={{ asset('img/tas5.jpeg') }}
                                        class="max-h-[160px] group-hover:scale-110 transition duration-300" />
                                </div>
                                <div
                                    class="absolute top-6 -right-11 group-hover:right-5 /40 p-2 flex flex-col items-center justify-center gap-y-2 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <button>
                                        <div class="flex justify-center items-center text-white w-12 h-12 bg-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                            </svg>
                                        </div>
                                    </button>
                                    <a href=""
                                        class="w-12 h-12 bg-white flex justify-center items-center text-primary drop-shadow-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                            <path
                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500 mb-1">Tas Wanita</div>
                            <Link to="/">
                            <h2 class="font-semibold mb-1">Tas Zalora</h2>
                            </Link>
                            <div class="font-semibold">Rp 5.000.000</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
