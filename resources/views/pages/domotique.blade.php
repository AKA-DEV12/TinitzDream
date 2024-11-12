@extends('template.template')

@section('container')
    <section class="effect flex flex-wrap justify-between items-center w-full h-screen md:h-screen p-10 mb-64">
            <div class="w-full md:w-2/5 mb-6 md:mb-0">
                <div class="#">
                    <h1 class="text-4xl font-medium tracking-tight text-gray-900">Donnez vie<span> à votre maison</h1>
                    <p class="mt-6 text-lg text-gray-600">Vous avez envie d'un havre de paix, d'un lieu accueillant qui vous réconforte, vous réveille, vous protège également et vous avertisse en cas de problème ?</p>

                    <div class="mt-8 flex flex-wrap gap-x-6 gap-y-4 rounded-lg p-4">
                    
                        <a class="inline-flex justify-center rounded-lg border py-[calc(theme(spacing.2)-1px)] px-[calc(theme(spacing.3)-1px)] text-sm outline-2 outline-offset-2 transition-colors border-gray-300 text-gray-700 hover:border-gray-400 active:bg-gray-100 active:text-gray-700/80" variant="outline" color="gray" href="#"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true" class="h-6 w-6 flex-none"><circle cx="12" cy="12" r="11.5" stroke="#D4D4D4"></circle><path d="M9.5 14.382V9.618a.5.5 0 0 1 .724-.447l4.764 2.382a.5.5 0 0 1 0 .894l-4.764 2.382a.5.5 0 0 1-.724-.447Z" fill="#A3A3A3" stroke="#A3A3A3"></path></svg>
                            <span class="ml-2.5">Voir un Exemple</span></a></div></div>
                </div>
            </div>

            <div class="w-full md:w-3/5 ">
                <img src="/assets/domotique (3).jpg" alt="" class="w-full h-full object-cover rounded-t-3xl rounded-bl-3xl" srcset="">
            </div>
        </div>
    </section>

    <!---------- le corp de notre page domotique partie 1 animation et photo-------------------->
    <section class="bg-slate-300 mt-[100px] xl:mt-[150px] relative z-20 p-10">
        <div class="text-center my-20">
            <h2 class="font-serif text-blue-500 text-4xl subpixel-antialiased">
                Entrez dans l'univers de la maison connectée et intelligente
            </h2>
            <p class="text-center ">
                Optimisez votre espace de vie avec des technologies intuitives qui répondent à vos besoins et vous offrent un confort ultime.            </p>    
        </div>
       
        
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 justify-items-center">
            <!-- Premier élément de la grille -->
            <div class="effect domotique_grid bg-slate-100 shadow-2xl p-6 max-w-xs rounded-tr-3xl rounded-bl-3xl">
                <img class="mb-4 h-72 w-full object-cover rounded-tr-3xl rounded-bl-3xl" src="/assets/domotique (4).jpg" alt="">
                
            </div>
    
            <!-- Deuxième élément de la grille -->
            <div class="effect domotique_grid bg-slate-100 shadow-2xl p-6 max-w-xs rounded-tl-3xl rounded-br-3xl">
                <img class="mb-4 h-72 w-full object-cover rounded-tr-3xl" src="/assets/domotique (3).jpg" alt="">
                
            </div>
    
            <!-- Troisième élément de la grille -->
            <div class="effect domotique_grid bg-slate-100 shadow-2xl p-6 max-w-xs rounded-tl-3xl rounded-br-3xl">
                <img class="mb-4 h-72 w-full object-cover rounded-tl-3xl rounded-br-3xl" src="/assets/domotique (2).jpg" alt="">
                
            </div>
    
            <!-- Quatrième élément de la grille -->
            <div class="effect domotique_grid bg-slate-100 shadow-2xl p-6 max-w-xs rounded-tl-3xl rounded-br-3xl">
                <img class="mb-4 h-72 w-full object-cover rounded-tr-3xl rounded-bl-3xl" src="/assets/slideDom1.png" alt="">
                
            </div>

            
            <!-- Cinquieme élément de la grille -->
            <div class="effect domotique_grid bg-slate-100 shadow-2xl p-6 max-w-xs rounded-tr-3xl rounded-bl-3xl">
                <img class="mb-4 h-72 w-full object-cover rounded-tl-3xl rounded-br-3xl" src="/assets/slideDom3.jpg" alt="">     
            </div>
    
            <!-- Sixieme élément de la grille -->
            <div class="effect domotique_grid bg-slate-100 shadow-2xl p-6 max-w-xs rounded-tl-3xl rounded-br-3xl">
                <img class="mb-4 h-72 w-full object-cover rounded-tr-3xl rounded-bl-3xl" src="/assets/slideDom4.jpg" alt="">
                
            </div>
        </div>
    </section>
    
        <!-- Seconde Partie -------->

        <section class="bg-gradient-to-r from-blue-100 to-slate-200 py-16 px-6">
            <div class="max-w-6xl mx-auto text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-700 mb-4">Faites passer votre maison à l'intelligence</h2>
                <p class="text-lg text-gray-600">
                    Nous vous proposons toute une gamme d’ampoules, prises, serrure électronique, capteurs, caméra de surveillance, sonnette vidéo et interrupteurs à carte pour donner vie à votre hôtel ou domicile.
                </p>
            </div>
        
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Carte 1 -->
                <div class="p-6 bg-white shadow-lg rounded-xl transform transition duration-300 hover:scale-105">
                    <img src="/assets/slideDom1.png" alt="Ampoule Intelligente" class="w-full h-40 object-cover rounded-t-lg">
                    <h3 class="mt-4 text-xl font-semibold text-blue-600">Ampoules Intelligentes</h3>
                    <p class="text-gray-500 mt-2">
                        Changez de couleur selon l'ambiance et économisez de l'énergie.
                    </p>
                </div>
        
                <!-- Carte 2 -->
                <div class="p-6 bg-white shadow-lg rounded-xl transform transition duration-300 hover:scale-105">
                    <img src="/assets/prise.jpg" alt="Prise Intelligente" class="w-full h-40 object-cover rounded-t-lg">
                    <h3 class="mt-4 text-xl font-semibold text-blue-600">Prises Intelligentes</h3>
                    <p class="text-gray-500 mt-2">
                        Contrôlez vos appareils pour une meilleure gestion énergétique.
                    </p>
                </div>
        
                <!-- Carte 3 -->
                <div class="p-6 bg-white shadow-lg rounded-xl transform transition duration-300 hover:scale-105">
                    <img src="/assets/serrure.jpg" alt="Serrure Électronique" class="w-full h-40 object-cover rounded-t-lg">
                    <h3 class="mt-4 text-xl font-semibold text-blue-600">Serrures Électroniques</h3>
                    <p class="text-gray-500 mt-2">
                        Sécurisez vos espaces avec des serrures intelligentes modernes.
                    </p>
                </div>
                <!-- Ajoute d'autres cartes similaires pour couvrir tous les produits -->
            </div>
        </section>



            <section class="relative bg-gray-100 min-h-screen flex items-center justify-center py-16 px-4">

                
                <!-- Contenu Principal -->
                <div class="PP relative z-10 max-w-5xl bg-white/30 backdrop-blur-lg rounded-2xl shadow-xl p-8 lg:p-16 text-center">
                    <h1 class="text-4xl font-bold text-blue-800 mb-4">Faites vivre à vos clients une autre expérience du logement</h1>
                    <p class="text-gray-700 text-lg mb-8">
                        Tinitz crée un réseau centralisé de gestion, de sécurité et de confort de votre habitation.
                    </p>
                    
                    <!-- Section Vidéo  -->
                    <div class="mb-8">
                        <video class="w-full rounded-xl shadow-lg" autoplay muted loop playsinline>
                            <source src="/assets/domV.mp4" type="video/mp4">
                        </video>
                    </div>
                    
                    <!-- Texte Principal -->
                    <p class="text-gray-800 mb-4">
                        Grâce à une maison connectée, vous pouvez faire des économies d'énergie avec la programmation, mais aussi le contrôle à distance de tous les appareils de consommation. Vous pouvez ainsi réduire fortement votre facture avec de faibles investissements.
                    </p>
                    <p class="text-gray-800 mb-6">
                        L'apport de la domotique, des objets connectés et des applications Internet ouvre de nombreuses possibilités d'économie.
                    </p>
            
                    <!-- Points d'Éléments -->
                    <div class="porte grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="backImg bg-white/20 p-4 rounded-lg backdrop-blur-md shadow-lg">
                            <h3 class="text-lg font-semibold text-blue-700">Vidéo Surveillance</h3>
                            <p class=" text-gray-600 mt-2">Accédez à la vidéo surveillance où que vous soyez.</p>
                        </div>
                        <div class="backImg bg-white/20 p-4 rounded-lg backdrop-blur-md shadow-lg">
                            <h3 class="text-lg font-semibold text-blue-700">Contrôle de l'Éclairage</h3>
                            <p class="text-gray-600 mt-2">Commandez l'éclairage depuis n'importe où.</p>
                        </div>
                        <div class="backImg bg-white/20 p-4 rounded-lg backdrop-blur-md shadow-lg">
                            <h3 class="text-lg font-semibold text-blue-700">Commande des Appareils</h3>
                            <p class="text-gray-600 mt-2">Gérez tous vos appareils électriques simplement.</p>
                        </div>
                        <div class="backImg bg-white/20 p-4 rounded-lg backdrop-blur-md shadow-lg">
                            <h3 class="text-lg font-semibold text-blue-700">Parfum d'Ambiance</h3>
                            <p class="text-gray-600 mt-2">Diffusez des parfums selon votre humeur.</p>
                        </div>
                        <div class="backImg bg-white/20 p-4 rounded-lg backdrop-blur-md shadow-lg">
                            <h3 class="text-lg font-semibold text-blue-700">Contrôle des Portes</h3>
                            <p class="text-gray-600 mt-2">Gérez l'ouverture et la fermeture à distance.</p>
                        </div>
                        <div class="backImg bg-white/20 p-4 rounded-lg backdrop-blur-md shadow-lg">
                            <h3 class="text-lg font-semibold text-blue-700">Services Interactifs</h3>
                            <p class="text-gray-600 mt-2">Envoyez des demandes à l'accueil ou à la conciergerie.</p>
                        </div>
                    </div>
                </div>
            </section>
            

            <section class="relative bg-gray-900 min-h-screen flex items-center justify-center py-16 px-4">
                <!-- Conteneur Principal avec Ombre et Effet de Flottement -->
                <div class="relative max-w-7xl w-full bg-white/5 backdrop-blur-lg rounded-3xl shadow-2xl overflow-hidden p-8 lg:p-16">
                    <div class="text-center lg:text-left flex-1 space-y-6">
                        <h1 class="text-3xl md:text-5xl font-extrabold text-yellow-400">Sécurisez votre famille et vos biens !</h1>
                        <p class="text-gray-300 text-lg">
                          Caméra de surveillance HD intelligente avec détection de mouvement et alerte e-mail 24h/24.
                        </p>
                        <p class="text-gray-400">
                          Lorsque le mouvement est détecté, un e-mail instantané sera envoyé automatiquement. La caméra enregistre 24h/24 pour votre sécurité, même à distance.
                        </p>
                        <!-- Bouton d'Action -->
                        <button class="mt-4 px-8 py-3 bg-yellow-500 text-gray-900 font-bold rounded-full shadow-lg hover:bg-yellow-600 transform hover:scale-105 transition duration-300">
                          <a href="{{route('soumettrePJ')}}">Découvrir</a>
                        </button>
                    </div>
                  <div class="relative flex flex-col lg:flex-row items-center gap-12 lg:gap-16 mt-14">
                    <!-- Première Photo Inclineé -->
                    <div class="relative w-full lg:w-1/2 transform rotate-6 overflow-hidden rounded-xl shadow-lg hover:rotate-0 transition-transform duration-500">
                      <img src="/assets/securityFamilly_.jpg" alt="Sécurité maison" class="object-cover w-full h-80 md:h-full" />
                    </div>
                    
                    <!-- Contenu Textuel au Centre -->
                  
              
                    <!-- Deuxième Photo Inclineé -->
                    <div class="relative w-full lg:w-1/2 transform -rotate-6 overflow-hidden rounded-xl shadow-lg hover:rotate-0 transition-transform duration-500">
                      <img src="/assets/securityFamilly_.png" alt="Caméra de surveillance" class="object-cover w-full h-80 md:h-full" />
                    </div>
                  </div>
                </div>
              </section>


    <!---------- le corp de notre page domotique -------------------->
    <section class="relative bg-gradient-to-r bg-[#eff0f2] min-h-screen flex items-center justify-center py-4 px-4">
        <!-- Conteneur Principal -->
        <div class="relative z-10 max-w-2xl bg-white/10 backdrop-blur-md rounded-2xl shadow-2xl overflow-hidden">      
          <!-- Contenu avec Effet de Carte -->
          <div class="relative p-4 md:p-7 text-center bg-gradient-to-r from-blue-900 via-purple-900 to-black text-white space-y-6">
            <h1 class="text-3xl md:text-3xl font-extrabold tracking-wide">Notre équipe est disponible et réactive pour vous accompagner au quotidien</h1>
            <h3 class="text-lg md:text-xl font-semibold text-yellow-400">Nous vous accompagnons dans votre besoin de recherche de sécurité, de confort, d'autonomie, d'innovation.</h3>
            <p class="text-base md:text-lg text-gray-200">
                Besoin d'information ? Une demande de devis ? 
            </p>
        
            <button class="mt-8 px-8 py-3 bg-yellow-500 text-gray-900 font-bold rounded-full shadow-lg hover:bg-yellow-600 transition-transform transform hover:scale-105">
              <a href="{{route('contact-demande')}}">Contactez Tinitz</a>
            </button>
          </div>
        </div>
      </section>
     <!------------- Test de Contacte ---------->
     
  
@endsection