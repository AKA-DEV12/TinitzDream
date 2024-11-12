@extends('template.template')

@section('container')

<section class="relative bg-gray-100 min-h-screen flex items-center justify-center py-16 px-4">

    <!-- Contenu Principal -->
    <div class="PP relative z-10 max-w-5xl bg-white/30 backdrop-blur-lg rounded-2xl shadow-xl p-8 lg:p-16 text-center">
        <div class="float-left flex gap-4 items-center">
            <a href="{{route('allR')}}" class="text-4xl  text-blue-500 transition-none focus:opacity-45"> < </a>
            <a href="/" class="text-4xl transition-none focus:opacity-45">
                <svg class="w-5 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
            </a>
        </div>                

        <h1 class="text-4xl font-bold text-blue-800 mb-4">Etude de cas</h1>
        
        <!-- Section Vidéo  -->
        <div class="mb-8">
            @yield('img')
        </div>
        
        <!-- Texte Principal -->
        <p class="text-gray-800 mb-4">
            @yield('Detail')
        </p>
        <!-- Points d'Éléments -->
        <div class="porte grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 items-center justify-center">
            
                @yield('imgDetail1')
           
                @yield('imgDetail2')
            
                @yield('imgDetail3')
           
                @yield('imgDetail4')
       
            
        </div>
    </div>
</section>
<section class="effect flex flex-wrap justify-between items-center w-full h-screen md:h-screen p-10 mb-64">
    <div class="w-full md:w-2/5 mb-6 md:mb-0">
        
            <div>
                @yield('descriptionH1')
            </div>
    </div>

    <div class="w-full md:w-3/5 relative h-auto">
            @yield('RightImg')
    </div>

</div>
<div class="float-left flex gap-4 items-center">
    <a href="{{route('allR')}}" class="text-4xl  text-blue-500 transition-none focus:opacity-45"> < </a>
    <a href="/" class="text-4xl transition-none focus:opacity-45">
        <svg class="w-5 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
    </a>
</div>       
</section>

@endsection