@extends('template.template')

@section('container')

   
<!---------------------- --------------------------------->  
<div class="container mx-auto p-8 ">
  <h1 class="text-center text-3xl font-bold mt-28 text-[#f84e01]">Un projet en tête ?</h1>
    
    <p class="py-2 text-center text-gray-900">
      Parce que nous sommes des réalisateurs de projets et que nous avons plus qu’une corde à notre arc, découvrez toutes les possibilités que nous vous offrons pour vous démarquer. 
    </p>
    <h2 class="text-2xl font-bold mb-4">Contactez-nous</h2>
    
    <div class="mb-4">
        <button 
            class="mr-2 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none" 
            onclick="showForm('projet-digital')"
        >
            Projet Digital
        </button>
        <button 
            class="mr-2 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none" 
            onclick="showForm('maison-connectee')"
        >
            Maison Connectée
        </button>
        <button 
            class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none" 
            onclick="showForm('gps-tracking')"
        >
            GPS Tracking
        </button>
    </div>

    <!-- formulaires de projet digital-->
    <div id="projet-digital" class="hidden">
      <h1 class="text-3xl font-meduim">Faire une demande</h1>
      <p class="py-2 text-center text-gray-900">
          Parce que nous sommes des réalisateurs de projets et que nous avons plus qu’une corde à notre arc, découvrez toutes les possibilités que nous vous offrons pour vous démarquer.
      </p>
          <div class="bg-white/100 backdrop-blur-md p-8 rounded-xl shadow-xl hover:shadow-2xl transition duration-300">
              
              <div class="w-full">
                  <img class="w-14 mx-auto my-5" src="/tinitz-logo-150x74.png" alt="">
              </div>
              <form action="#" method="post" enctype='multipart/form-data'>
                  <div>
  
                      <label for="Nom" class="block text-sm font-meduim
                      text-gray-700">Nom</label>
                 
                      <div class="mt-1">
                          <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                          focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                           autocomplete="nom" id="Nom" name="nom-demandeur" type="text">
                      </div>
                  </div>
                   <!-- Formulaire partie telephone et email -->
                  <div>
                      <label for="Email" class="block text-sm font-meduim
                      text-gray-700">Telephone</label>
                 
                      <div class="mt-1">
                          <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                          focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                           autocomplete="email-demandeur" id="Email" name="email-demandeur" type="number" required="required">
                      </div>
                  </div>
                  <div>
                    <label for="Email" class="block text-sm font-meduim
                    text-gray-700">Email</label>
               
                    <div class="mt-1">
                        <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                        focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                         autocomplete="email-demandeur" id="Email" name="email-demandeur" type="email" required="required">
                    </div>
                </div>


                   <!-- Formulaire partie Motif -->
                  <div>
                      <label for="Objet" class="block text-sm font-meduim
                      text-gray-700">Motif(s) de votre demande</label>
                 
                      <div class="mt-1">
                          <input class=" border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                          focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                            id="Motif" value="site_internet" name="site_internet" type="checkbox"> Création de site internet
                      </div>
                  </div>
                  <div>  
                    <div class="mt-1">
                        <input class=" border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                        focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                          id="Motif" value="Referencement" name="Referencement" type="checkbox"> Référencement
                    </div>
                </div>
                <div>
    
             
                  <div class="mt-1">
                      <input class=" border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                      focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                        id="Motif" value="apk_mobile" name="apk_mobile" type="checkbox"> Application mobile
                  </div>
              </div>
              <div>
  
           
                <div class="mt-1">
                    <input class=" border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                    focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                      id="Motif" value="Refonte_site" name="Refonte_site" type="checkbox"> Refonte de site internet
                </div>
            </div>
            <div>
         
              <div class="mt-1">
                  <input class=" border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                  focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                    id="Motif" value="Reseaux sociaux" name="Reseaux_sociaux" type="checkbox"> Réseaux sociaux
              </div>
          </div>
          <div>
       
            <div class="mt-1">
                <input class=" border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                 id="Motif" value="Logo_charte" name="Logo_charte" type="checkbox"> Logo et charte graphique
            </div>
        </div> <br>

       
          <div class="mt-1">
            <label for="Cahier_Charge" class="block text-sm font-meduim
                      text-gray-700">Avez-vous un cahier de charge ?</label>
              <input class=" border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
              focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
               id="Cahier_Charge" value="Oui" name="Cahier_Charge" type="radio">  Oui
                  &nbsp;
               <input class=" border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
              focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
               id="Cahier_Charge" value="Non" name="Cahier_Charge" type="radio"> Non
          </div>
          
   

      <div  id="oui" class="mt-1">
        
            <label for="Cahier_Charge" class="block text-sm font-meduim
                      text-gray-700">Cahier de charge:</label>
              <input class=" border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
              focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
              id="Cahier_Charge" type="file"> 

      
      </div> <br>

                   <!-- Formulaire partie Message -->
                  <div>
                      <label for="description" class="block text-sm font-meduim
                      text-gray-700">Description</label>
                 
                      <div class="mt-1">
                         <textarea class="w-full border border-indigo-600 px-3 py-2 rounded-lg shadow-sm" name="description_projet" id="description" cols="30" rows="10"></textarea>
                      </div>
                  </div>
                  <div class="mt-5 text-indigo-600">
                      <button class="border-2 border-indigo-700 text-indigo-600 hover:bg-indigo-600 py-2 px-5 hover:text-white rounded-lg w-full" type="submit">
                        <a href="#">Soumettre</a>
                      </button>
                  </div>
              </form>
          </div>
    </div>

    <!---------------------------- Partie Maison Connecteeeeeeeeeeeeeeeeee---------->

  <div id="maison-connectee" class="hidden">
             <h1 class="text-3xl font-meduim">Connecter ma maison</h1>
      <p class="py-2 text-center text-gray-900 ">
          Parce que nous sommes des réalisateurs de projets et que nous avons plus qu’une corde à notre arc, découvrez toutes les possibilités que nous vous offrons pour vous démarquer.
      </p>
          <div class="bg-white/100 backdrop-blur-md p-8 rounded-xl shadow-xl hover:shadow-2xl transition duration-300">
              
              <div class="w-full">
                  <img class="w-14 mx-auto my-5" src="/tinitz-logo-150x74.png" alt="">
              </div>
              <form action="#" method="post" enctype='multipart/form-data'>
                  <div>
  
                      <label for="Nom" class="block text-sm font-meduim
                      text-gray-700">Nom</label>
                 
                      <div class="mt-1">
                          <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                          focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                           autocomplete="nom" id="Nom" name="nom-demandeur" type="text">
                    </div>
              </div>
                   <!-- Formulaire partie telephone et email -->
                  <div>
                      <label for="Email" class="block text-sm font-meduim
                      text-gray-700">Telephone</label>
                 
                      <div class="mt-1">
                          <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                          focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                           autocomplete="email-demandeur" id="Email" name="email-demandeur" type="number" required="required">
                      </div>
                  </div>
                  <div>
                    <label for="Email" class="block text-sm font-meduim
                    text-gray-700">Email</label>
               
                    <div class="mt-1">
                        <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                        focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                         autocomplete="email-demandeur" id="Email" name="email-demandeur" type="email" required="required">
                    </div>
                </div> <br>


                   <!-- Formulaire Info pour la maison connecteeeeeeeeeeeeeeeeeee -->
                  <div>
                      
                      <div class="mt-1">
                        <label for="Connexion" class="block text-sm font-meduim
                      text-gray-700">Avez-vous une connexion internet ?</label>
    
                          <input class=" border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                          focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                           id="Connexion" value="Oui" name="connexion" type="radio">  Oui
                              &nbsp;
                           <input class=" border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                          focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                           id="Connexion" value="Non" name="connexion" type="radio"> Non
                      </div>
                  </div>          

                  <div class="mt-1">
                    <label for="nombre_piece" class="block text-sm font-meduim
                              text-gray-700">Nombre de pièces:</label>
                      <input class=" border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                      focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                      id="nombre_piece"  name="nbr_piece" type="number"> 
                          &nbsp;
                     
                    <label for="nombre_prise" class="block text-sm font-meduim
                              text-gray-700">Nombre de prise:</label>
                      <input class=" border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                      focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                      id="nombre_prise"  name="nbr_prise" type="number"> 
                      &nbsp;

                      <label for="nombre_ampoule" class="block text-sm font-meduim
                              text-gray-700">Nombre d'ampoule:</label>
                      <input class=" border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                      focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                      id="nombre_ampoule"  name="nbr_ampoule" type="number"> 
                      &nbsp;

                      <label for="nombre_tele" class="block text-sm font-meduim
                              text-gray-700">Nombre télévision:</label>
                      <input class=" border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                      focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                      id="nombre_tele"  name="nbr_tele" type="number"> 
                      
                  </div> <br>

                   <!-- Formulaire partie Message -->
                  <div>
                      <label for="description" class="block text-sm font-meduim
                      text-gray-700">Decrivez votre besoin</label>
                 
                      <div class="mt-1">
                         <textarea class="w-full border border-indigo-600 px-3 py-2 rounded-lg shadow-sm" name="description_maison" id="description" cols="30" rows="10"></textarea>
                      </div>
                  </div>
                  <div class="mt-5 text-indigo-600">
                      <button class="border-2 border-indigo-700 text-indigo-600 hover:bg-indigo-600 py-2 px-5 hover:text-white rounded-lg w-full" type="submit">
                        <a href="#">Soumettre</a>
                      </button>
                  </div>
              </form>
          </div>
    </div>
  </div>
                          <!--------------------------- partie tracking ------------------------>

  <div id="gps-tracking" class="hidden">
        <h1 class="text-3xl font-meduim">GPS Tracking </h1>
 <p class="py-2 text-center text-gray-900 ">
     Parce que nous sommes des réalisateurs de projets et que nous avons plus qu’une corde à notre arc, découvrez toutes les possibilités que nous vous offrons pour vous démarquer.
 </p>
     <div class="bg-white/100 backdrop-blur-md p-8 rounded-xl shadow-xl hover:shadow-2xl transition duration-300">
         
         <div class="w-full">
             <img class="w-14 mx-auto my-5" src="/tinitz-logo-150x74.png" alt="">
         </div>
         <form action="#" method="post" enctype='multipart/form-data'>
             <div>

                 <label for="Nom" class="block text-sm font-meduim
                 text-gray-700">Nom</label>
            
                 <div class="mt-1">
                     <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                     focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                      autocomplete="nom" id="Nom" name="nom-demandeur" type="text">
                 </div>
             </div>
              <!-- Formulaire partie telephone et email -->
             <div>
                 <label for="Email" class="block text-sm font-meduim
                 text-gray-700">Telephone</label>
            
                 <div class="mt-1">
                     <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                     focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                      autocomplete="email-demandeur" id="Email" name="email-demandeur" type="number" required="required">
                 </div>
             </div>
            <div>
               <label for="Email" class="block text-sm font-meduim
               text-gray-700">Email</label>
          
               <div class="mt-1">
                   <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                   focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                    autocomplete="email-demandeur" id="Email" name="email-demandeur" type="email" required="required">
               </div>
            </div> <br>


              <!-- Formulaire Info pour vehicule-->
             <div>
                 
                 <div class="mt-1">
                   <label for="nombre_vehicul" class="block text-sm font-meduim
                 text-gray-700">Nombre de véhicule:</label>

                      <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                 id="nombre_vehicul"  name="nbr_vehicul" type="number"> 
                 </div>
             </div>          

            

              <!-- Formulaire partie description pour GPS TRACKING -->
             <div>
                 <label for="description" class="block text-sm font-meduim
                 text-gray-700">Decrivez votre besoin</label>
            
                 <div class="mt-1">
                    <textarea class="w-full border border-indigo-600 px-3 py-2 rounded-lg shadow-sm" name="description_vehicul" id="description" cols="30" rows="10"></textarea>
                 </div>
             </div>
             <div class="mt-5 text-indigo-600">
                 <button class="border-2 border-indigo-700 text-indigo-600 hover:bg-indigo-600 py-2 px-5 hover:text-white rounded-lg w-full" type="submit">
                   <a href="#">Soumettre</a>
                 </button>
             </div>

            </div>
         </form>
     </div>
</div>
</div>

@endsection



