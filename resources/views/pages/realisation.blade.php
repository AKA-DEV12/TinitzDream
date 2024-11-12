@extends('template.template')

@section('container')
<section >
  <div>
    <div class=" relative bg-gradient-to-r from-[#f84e01] via-gray-300 to-[#003466] min-h-screen items-center justify-center py-16 px-4 bg-cover bg-center object-cover flex flex-col text-center">
        <h1 class="text-4xl font-bold">Nos succès à travers des projets uniques</h1>
        <p class=" text-xl">
            Découvrez comment nous avons transformé des idées en succès grâce à des projets uniques et adaptés à chaque défi.
        </p>
      </div>
  </div>
    <!----------------------------------------- partie Onglet ---------------------------->
 
<div>
 
    <div class="container mx-auto p-6">
        <h2 class="text-3xl text-center font-bold text-gray-900 mb-6">Nos réalisations par catégorie</h2>

        <div x-data="{ openTab: 1 }">
            <!-- Menu d'onglets -->
            <center>
           
                <div class="flex flex-col space-x-4 mb-6 bg-slate-400 p-4 rounded-lg justify-center md:inline md:justify-center md:items-center">
                    <button 
                        @click="openTab = 1"
                        :class="openTab === 1 ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-700'"
                        class="py-2 px-4 rounded-md transition duration-300 mb-2">
                    <svg class="w-5 h-auto inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
                    voir Tous
                    </button>
                    <button 
                        @click="openTab = 2"
                        :class="openTab === 2 ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-700'"
                        class="py-2 px-4 rounded-md transition duration-300 mb-2"
                    >
                        Application Web
                    </button>
                    <button 
                        @click="openTab = 3"
                        :class="openTab === 3 ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-700'"
                        class="py-2 px-4 rounded-md transition duration-300 mb-2"
                    >
                    Application Mobile
                    </button>
                    <button 
                        @click="openTab = 4"
                        :class="openTab === 4 ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-700'"
                        class="py-2 px-4 rounded-md transition duration-300 mb-2"
                    >
                        Creation Graphique 
                    </button>
                    <button 
                        @click="openTab = 5"
                        :class="openTab === 5 ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-700'"
                        class="py-2 px-4 rounded-md transition duration-300 mb-2"
                    >
                        Videos
                    </button>
                </div>
            </center>
           

            <div x-show="openTab === 1" x-transition class="tab-content">
                <!--  contenue de onglet 1 --->
                <section class="py-16 bg-gray-50" id="projets">
                    <div class="text-center my-20">
                        <h2 class="font-serif text-blue-500 text-4xl subpixel-antialiased">
                            De la conception à la mise en œuvre, chaque réalisation témoigne de notre passion pour l'innovation et de notre maîtrise technique.
                        </h2>  
                    </div>
                    <div class="container mx-auto px-6 text-center">
                        <!-- Project Gallery -->
                        <div>
                            <div x-transition:enter="transition transform ease-out duration-500" x-transition:enter-start="scale-95 opacity-0" x-transition:enter-end="scale-100 opacity-100">
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                                    <!-- Project 1 -->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/kitweb/pressecotedivoire.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('presse-ci')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>
                                            <!-- Project 2 -->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/creationsgraphiques/adamtp.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('adam-tpi')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>

                                    </div>

                                           <!-- Project 3 -->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                            <img src="https://tinitz.com/img/siteweb/dhaxlekitgraphiq.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                            <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                                <h3 class="text-lg font-semibold  "> <a href="{{route('dhaxle')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                            </div>
                                    </div>

                                           <!-- Project 4-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                            <img src="https://tinitz.com/img/kitweb/letempsinfos.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                            <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                                <h3 class="text-lg font-semibold  "> <a href="{{route('letempsinfos')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                            </div>
                                    </div>

                                     <!-- Project 5-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/VideoCentrecommercial.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('adam-tpi')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 6-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/logos/DhaxleLogo.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('dhaxle')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 7-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/kitweb/VideoWorolux.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('worolux')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 8-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/creationsgraphiques/gotaxiLogo.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('go-taxi')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 9-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/creationsgraphiques/gamalielLogo.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('gamaliel')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 10-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/creationsgraphiques/istcjf.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('istcjf')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 11-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/kitweb/BoutiquePressecotedivoire.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('presse-ci')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 12-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/pharma.jpeg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('Pharmaconsults')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 13-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/creationsgraphiques/gamaliel1.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('gamaliel')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 14-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/creationsgraphiques/phaniavLogo.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('phania-v')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 15-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/kitweb/Ladoucefrance.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('la-douce-france')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 16-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/kitweb/Worolux.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('worolux')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 17-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/creationsgraphiques/solbeni.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('sol-beni')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 18-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/creationsgraphiques/AbidjanstarLogo.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('abidjanstars')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                      <!-- Project 19-->
                                      <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/creationsgraphiques/doucefrance.jpeg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('la-douce-france')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                      <!-- Project 20-->
                                      <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/kitweb/istcjf.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('istcjf')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                      <!-- Project 21-->
                                      <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/kitweb/spotistcjf.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('istcjf')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                      <!-- Project 22-->
                                      <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/applimobiles/AppsMobileFoodChapChap.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('food-chapchap')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                      <!-- Project 23-->
                                      <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/applimobiles/AppsMobileWorolux.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('worolux')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                      <!-- Project 24-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://erp.tinitz.com//images/projets/presseci_4.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('presse-ci')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                      <!-- Project 25-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://erp.tinitz.com//images/projets/Capture%20d%E2%80%99e%CC%81cran%202021-06-01%20a%CC%80%2011.23.10.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('Pharmaconsults')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                      <!-- Project 26-->
                                      <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://erp.tinitz.com//images/projets/dhaxle_1.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('dhaxle')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>      
                  
            </div>
            <!-- Contenu des onglets -->
            <div x-show="openTab === 2" x-transition class="tab-content">
                <!--  contenue de onglet 1 --->
                <section class="py-16 bg-gray-50" id="projets">
                    <div class="text-center my-20">
                        <h2 class="font-serif text-blue-500 text-4xl subpixel-antialiased">
                            Application Web Réalisée
                        </h2>  
                    </div>
                
                    <div class="container mx-auto px-6 text-center">
                        <!-- Project Gallery -->
                        <div>
                            <div  x-transition:enter="transition transform ease-out duration-500" x-transition:enter-start="scale-95 opacity-0" x-transition:enter-end="scale-100 opacity-100">
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/kitweb/pressecotedivoire.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('presse-ci')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>
                                            <!-- Project 2 -->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/kitweb/istcjf.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('istcjf')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>

                                    </div>

                                           <!-- Project 3 -->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                            <img src="https://tinitz.com/img/siteweb/dhaxlekitgraphiq.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                            <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                                <h3 class="text-lg font-semibold  "> <a href="{{route('dhaxle')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                            </div>
                                    </div>

                                           <!-- Project 4-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                            <img src="https://tinitz.com/img/kitweb/letempsinfos.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                            <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                                <h3 class="text-lg font-semibold  "> <a href="{{route('letempsinfos')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                            </div>
                                    </div>

                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://erp.tinitz.com//images/projets/Capture%20d%E2%80%99e%CC%81cran%202021-06-01%20a%CC%80%2011.23.10.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('Pharmaconsults')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                      <!-- Project 26-->
                                      <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://erp.tinitz.com//images/projets/dhaxle_1.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('dhaxle')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 6-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/kitweb/Worolux.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('worolux')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 11-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/kitweb/BoutiquePressecotedivoire.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('presse-ci')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>


                                    <!-- Project 15-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/kitweb/Ladoucefrance.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('la-douce-france')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 18-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/creationsgraphiques/AbidjanstarLogo.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('abidjanstars')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                     

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div x-show="openTab === 3" x-transition class="tab-content">
                <section class="py-16 bg-gray-50" id="projets">
                    <div class="text-center my-20">
                        <h2 class="font-serif text-blue-500 text-4xl subpixel-antialiased">
                            Application Mobile Réalisée
                        </h2>  
                    </div>
                
                    <div class="container mx-auto px-6 text-center">
                        <!-- Project Gallery -->
                        <div>
                            <div x-transition:enter="transition transform ease-out duration-500" x-transition:enter-start="scale-95 opacity-0" x-transition:enter-end="scale-100 opacity-100">
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                                    <!-- Project 22-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/applimobiles/AppsMobileFoodChapChap.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('food-chapchap')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                      <!-- Project 23-->
                                      <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/applimobiles/AppsMobileWorolux.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('worolux')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div x-show="openTab === 4" x-transition class="tab-content">
                <section class="py-16 bg-gray-50" id="projets">
                    <div class="text-center my-20">
                        <h2 class="font-serif text-blue-500 text-4xl subpixel-antialiased">
                            Des créations graphiques innovantes qui captivent et marquent les esprits.
                        </h2>  
                    </div>
                
                    <div class="container mx-auto px-6 text-center">
                        <!-- Project Gallery -->
                        <div>
                            <div  x-transition:enter="transition transform ease-out duration-500" x-transition:enter-start="scale-95 opacity-0" x-transition:enter-end="scale-100 opacity-100">
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                                    <!-- Project 2 -->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/creationsgraphiques/adamtp.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('adam-tpi')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>

                                    </div>
                
                                    <!-- Project 6-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/logos/DhaxleLogo.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('dhaxle')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                      <!-- Project 8-->
                                      <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/creationsgraphiques/gotaxiLogo.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('go-taxi')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 9-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/creationsgraphiques/gamalielLogo.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('gamaliel')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 10-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/creationsgraphiques/istcjf.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('istcjf')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>
                                    
                                    <!-- Project 13-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/creationsgraphiques/gamaliel1.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="#" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 14-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/creationsgraphiques/phaniavLogo.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('phania-v')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                     <!-- Project 17-->
                                     <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/creationsgraphiques/solbeni.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('sol-beni')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 18-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/creationsgraphiques/AbidjanstarLogo.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('abidjanstars')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                      <!-- Project 19-->
                                      <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/creationsgraphiques/doucefrance.jpeg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('la-douce-france')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>   
            </div>

            <div x-show="openTab === 5" x-transition class="tab-content">    
                <section class="py-16 bg-gray-50" id="projets">
                    <div class="text-center my-20">
                        <h2 class="font-serif text-blue-500 text-4xl subpixel-antialiased">
                            Nos réalisations en vidéo                        </h2>  
                    </div>
                
                    <div class="container mx-auto px-6 text-center">
                        <!-- Project Gallery -->
                        <div>
                            <div x-transition:enter="transition transform ease-out duration-500" x-transition:enter-start="scale-95 opacity-0" x-transition:enter-end="scale-100 opacity-100">
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                                    <!-- Project 5-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/VideoCentrecommercial.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('adam-tpi')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    <!-- Project 7-->
                                    <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/kitweb/VideoWorolux.png" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('worolux')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>
                                     <!-- Project 21-->
                                     <div class="effect group relative overflow-hidden rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-500">
                                        <img src="https://tinitz.com/img/kitweb/spotistcjf.jpg" alt="Projet Design 1" class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
                                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-30 group-hover:bg-opacity-10 transition-opacity duration-900">
                                            <h3 class="text-lg font-semibold  "> <a href="{{route('istcjf')}}" class=" flex gap-2 items-center justify-center text-white hover:bg-slate-50 rounded-lg hover:text-blue-700 px-2 "> <svg class="w-5 h-auto " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg> détail</a> </h3>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
      
</div>   
</section>
@endsection