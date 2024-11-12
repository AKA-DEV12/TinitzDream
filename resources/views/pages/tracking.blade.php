@extends('template.template')

@section('container')

<section class="relative bg-gradient-to-r from-[#f84e01] via-gray-300 to-purple-900 min-h-screen flex items-center justify-center py-16 px-4 bg-cover bg-center object-cover">
    <div class="h-full flex flex-col items-center justify-center mx-auto space-y-6 max-w-3xl text-center">
        <!-- Titre principal -->
        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold tracking-widest text-amber-600">
            Gestion de flotte par satellite
        </h1>
        <!-- Sous-titre -->
        <h3 class="text-lg md:text-2xl lg:text-3xl text-yellow-50">
            Tracking GPS Voiture & Moto 24h/24 sans frais mensuel
        </h3>
        <!-- Paragraphe descriptif -->
        <p class="text-sm md:text-base lg:text-lg text-yellow-50 m-4">
            La solution télématique pour la gestion des collaborateurs terrain, la géolocalisation des véhicules avec tracking GPS et rapports d’activité. Sécurité adaptée aux véhicules personnels, petites flottes et grandes flottes.
            Anti-braquage par commande d'immobilisation à distance.
        </p>
        <!-- Bouton -->
        <button class="py-2 px-8 md:py-3 md:px-12 bg-indigo-950 text-teal-50 rounded-3xl hover:bg-indigo-800 transition">
            <a href="{{route('soumettrePJ')}}">Décrire Mon Besoin</a>
        </button>
    </div>
</section>

    <section class=" h-full w-full bg-cover bg-center object-cover">
        <div>
            <h1 class="text-[2.5rem] font-semibold text-amber-600 text-center py-[30px]">Un principe simple, des résultats concret</h1>
        </div>
        <div class="relative flex max-w-6xl mb-[30px] h-80 w-full overflow-hidden shadow-lg shadow-black backdrop-blur-lg rounded-2xl mx-auto bg-cover bg-center bg-no-repeat">
            <!-- Image principale de fond -->
            <img src="/assets/satellite-2771128_1920.jpg" class="object-cover w-full h-full rounded-2xl" alt="Image de fond">
        
            <!-- Contenu avec wrapping -->
            <div class="absolute top-0 inset-0 bg-black/30 flex flex-wrap md:flex-nowrap justify-center p-6">
                <!-- Liste d'éléments -->
                <ul class="w-full md:w-3/5 text-white text-justify space-y-2">
                    <li>Installation du boîtier GSM et GPS dans les véhicules en moins de 45mn</li>
                    <li>Transmission automatique des informations sur les déplacements de vos véhicules</li>
                    <li>Traitement des données sur les serveurs Cloud Tinitz</li>
                    <li>Accès internet sécurisé avec visualisation en temps réel de l’activité terrain et édition de rapports</li>
                    <li>Formation au sein de votre entreprise pour la prise en main</li>
                </ul>
                <!-- Image de suivi -->
                <div class="w-full md:w-2/5 flex justify-center items-center mt-4 md:mt-0">
                    <img src="/assets/schema-tracking.png" class="object-contain max-h-full rounded-lg" alt="Schéma de suivi">
                </div>
            </div>
        </div>
        
        <div class="w-full flex justify-center items-center mt-4 md:mt-0">
            <img src="/assets/schema-tracking.png" class="object-contain max-h-full rounded-lg" alt="Schéma de suivi">
        </div>
    </section>


    <section class="relative min-h-screen bg-gradient-to-r from-slate-50 via-slate-200  to-indigo-900 text-white py-16 px-6">
        <!-- Animation de fond -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent animate-pulse opacity-60"></div>
    
        <!-- Contenu principal -->
        <div class="relative max-w-6xl mx-auto text-center space-y-8">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-wider mb-6">Déterminez la position exacte de votre chauffeur, votre coursier, votre équipe terrain</h1>
            <p class="text-lg md:text-xl font-semibold text-yellow-400">= Plus de mensonges = Plus de performances = Plus d'économies</p>
    
            <!-- Système complet -->
            <div class="mt-10 space-y-6">
                <h2 class="text-2xl md:text-3xl font-bold">Un système complet avec rapports et suivi</h2>
                <ul class="space-y-3 text-left max-w-3xl mx-auto">
                    <li class="flex items-start"><span class="text-yellow-300 mr-2">•</span>Accès sécurisé depuis vos ordinateurs, tablettes et smartphones</li>
                    <li class="flex items-start"><span class="text-yellow-300 mr-2">•</span>Application mobile et Web intuitive et ergonomique, compatible à vos terminaux habituels (Android - iOS)</li>
                    <li class="flex items-start"><span class="text-yellow-300 mr-2">•</span>Création d’alertes et réception de rapports périodiques par email</li>
                    <li class="flex items-start"><span class="text-yellow-300 mr-2">•</span>Actualisation des positions sur la carte toutes les 5 à 20 secondes</li>
                    <li class="flex items-start"><span class="text-yellow-300 mr-2">•</span>Affichage des positions et trajets par période de temps</li>
                    <li class="flex items-start"><span class="text-yellow-300 mr-2">•</span>Vue du trajet et des différentes positions du véhicule</li>
                </ul>
            </div>
    
            <!-- Fonctions avec cartes -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
                <!-- Carte de fonction -->
                <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition duration-300">
                    <h3 class="text-xl font-semibold mb-3">Tracking GPS</h3>
                    <p>Localisez en temps réel vos engins (Motos - Voitures), suivez la vitesse, le kilométrage, etc. via votre téléphone ou ordinateur.</p>
                </div>
    
                <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition duration-300">
                    <h3 class="text-xl font-semibold mb-3">Rejouer les Trajets</h3>
                    <p>Visualisez les déplacements effectués par vos engins (Motos - Voitures) en un clic à une période.</p>
                </div>
    
                <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition duration-300">
                    <h3 class="text-xl font-semibold mb-3">Immobilisation à distance</h3>
                    <p>En cas de vol, ou de sortie de zone autorisée, immobilisez votre véhicule en moins d’une minute par un simple clic ou un SMS.</p>
                </div>
    
                <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition duration-300">
                    <h3 class="text-xl font-semibold mb-3">Périmètres de surveillance</h3>
                    <p>Recevez des alertes en temps réel lorsque vos véhicules entrent ou sortent d’une zone prédéfinie.</p>
                </div>
    
                <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition duration-300">
                    <h3 class="text-xl font-semibold mb-3">Alertes</h3>
                    <p>Définissez et paramétrez vous-mêmes vos alertes en temps réel selon vos événements les plus importants.</p>
                </div>
    
                <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition duration-300">
                    <h3 class="text-xl font-semibold mb-3">Rapports périodiques</h3>
                    <p>Exploitez l’activité de vos véhicules en téléchargeant des rapports périodiques compatibles avec vos ERP.</p>
                </div>
            </div>
    
            <!-- Call to Action -->
            <div class="mt-12">
                <a href="{{route('contact-demande')}}">
                    <button class="bg-yellow-500 text-gray-900 px-8 py-3 rounded-full font-bold hover:bg-yellow-600 transition duration-200">Demandez un RDV</button>
                </a>
            </div>
        </div>
    </section>
    

@endsection