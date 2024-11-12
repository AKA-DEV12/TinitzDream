@extends('template.template');

@section('container')
   
<section class="min-h-screen flex items-center justify-center bg-gray-900 p-6">
    <!-- Conteneur Principal -->
    <div class="max-w-6xl w-full bg-gray-600 backdrop-blur-lg rounded-2xl shadow-2xl p-8 lg:p-16">
            <!-- Titre de la Section -->
            <h1 class="text-4xl lg:text-5xl font-extrabold text-[#f84e01] text-center mb-10">Nous contacter</h1>
            <p class="text-gray-300 text-center text-lg mb-16">
                Tinitz est une firme spécialisée dans l'intégration de technologie intelligente. Notre passion pour les données et notre sens des délais nous permet de répondre au défi de croissance des moyennes et grandes entreprises en adoptant une vision centrée sur la performance et l'expérience client.
            </p>
      
            <!-- Informations de Contact et Carte Interactive -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Informations sur le Bureau -->
                <div class="space-y-8 text-gray-300">
                <h2 class="text-2xl font-bold text-[#f84e01]">NOTRE BUREAU</h2>
                <p>Abidjan Cocody</p>
                <p>Angré Caféier 5 Villa 128</p>
                <p>Tel.: <a href="tel:+2252722497193" class="text-[#f84e01] hover:underline">+(225) 27 22 49 71 93</a></p>
                <p>Cel.: <a href="tel:+2250768606091" class="text-[#f84e01] hover:underline">+(225) 07 68 60 60 91</a></p>
                <p>Email: <a href="mailto:services@tinitz.com" class="text-[#f84e01] hover:underline">services@tinitz.com</a></p>
                <button class="mt-4 px-6 py-2 bg-[#f84e01] text-gray-100 font-semibold rounded-lg shadow-lg hover:bg-yellow-600 transition duration-300">
                    <a href="https://maps.app.goo.gl/88urhnN1B2vNiAEt6" target="_blank">Obtenir l'itinéraire</a>
                </button>
            </div>
                
        <!-- Carte contenant la geolocalisation -->
            <div class="relative h-80 w-full rounded-xl overflow-hidden shadow-lg">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.0291839189144!2d-3.9904054258567454!3d5.412526035077493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1935367b95d71%3A0xd8731aa8f83069e4!2sTinitz!5e0!3m2!1sen!2sci!4v1730723955244!5m2!1sen!2sci" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="object-cover h-full w-full opacity-90 transform hover:scale-105 transition-transform duration-500"></iframe>
                <div class="absolute top-7 inset-0 bg-black/07 flex justify-center">
                    <h3 class="text-[#0090ff] text-lg font-bold">Tinitz Digital Agence Média, Abidjan</h3>
                </div>
            </div>
      </div>
  
      <!-- Sections clique -->
      <div class="mt-16 space-y-12 flex flex-col ">
       
            <div class="flex flex-wrap md:flex-nowrap justify-around items-center bg-white/10 backdrop-blur-md p-6 rounded-xl shadow-lg hover:bg-white/20 transition duration-300">
                <div>
                    <h2 class="text-2xl font-bold text-[#f84e01]">ENGAGEMENT CLIENT</h2>
                    <p class="text-gray-300 mt-2">Un projet en tête ? Contactez-nous pour en discuter.</p>
                </div>
                <div>
                    <button class="mt-4 px-6 py-2 bg-[#f84e01] text-gray-900 font-semibold rounded-lg shadow-lg hover:bg-yellow-600 transition duration-300">
                        <a href="{{route('soumettrePJ')}}">Soumettre un Projet</a>
                    </button>
                </div>
            </div>
       
  
        
            <div class="flex flex-wrap md:flex-nowrap justify-around items-center bg-white/10 backdrop-blur-md p-6 rounded-xl shadow-lg hover:bg-white/20 transition duration-300">
                <div>
                    <h2 class="text-2xl font-bold text-[#f84e01]">RELATIONS MÉDIAS</h2>
                    <p class="text-gray-300 mt-2">Besoin d'info sur Tinitz ? Notre équipe vous répondre.</p>
                </div>
                <div>
                    <button class="mt-4 px-6 py-2 bg-[#f84e01] text-gray-900 font-semibold rounded-lg shadow-lg hover:bg-yellow-600 transition duration-300">
                        <a href="{{route('contact-demande')}}">Faire une demande</a>
                    </button>
                </div>
            </div>
        
  
            <div class="flex flex-wrap md:flex-nowrap justify-around items-center bg-white/10 backdrop-blur-md p-6 rounded-xl shadow-lg hover:bg-white/20 transition duration-300">
                <div >
                    <h2 class="text-2xl font-bold text-[#f84e01]">CARRIÈRES</h2>
                    <p class="text-gray-300 mt-2">Envie de rejoindre l'équipe ? Postulez maintenant !</p>
                </div>
                <div>
                    <button class="mt-4 px-6 py-2 bg-[#f84e01] text-gray-900 font-semibold rounded-lg shadow-lg hover:bg-yellow-600 transition duration-300">
                        <a href="{{route('tbl')}}">Voir les opportunites</a> 
                    </button>
                </div>
            </div>
            
        </div>

    </div>
  </section>
@endsection