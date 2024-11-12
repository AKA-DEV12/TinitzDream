@extends('template.template')

@section('container')
 <section class="relative min-h-screen bg-gradient-to-r from-slate-700 via-red-500 to-orange-400 flex flex-col items-center justify-center py-20 px-4 bg-cover object-cover bg-center">
    <h1 class="text-3xl font-meduim">Faire une demande</h1>
    <p class="py-2 text-center text-gray-300 ">
        Parce que nous sommes des réalisateurs de projets et que nous avons plus qu’une corde à notre arc, découvrez toutes les possibilités que nous vous offrons pour vous démarquer.
    </p>
        <div class="bg-white/100 backdrop-blur-md p-8 rounded-xl shadow-xl hover:shadow-2xl transition duration-300">
            
            <div class="w-full">
                <img class="w-14 mx-auto my-5" src="/tinitz-logo-150x74.png" alt="">
            </div>
            <form action="{{route('traitement')}}" method="post">
                <!-- Formulaire partie Nom -->
                <div>

                    <label for="Nom" class="block text-sm font-meduim
                    text-gray-700">Nom</label>
               
                    <div class="mt-1">
                        <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                        focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                         autocomplete="nom" id="Nom" name="nom" type="text">
                    </div>
                </div>
                 <!-- Formulaire partie Email -->
                <div>
                    <label for="Email" class="block text-sm font-meduim
                    text-gray-700">Email</label>
               
                    <div class="mt-1">
                        <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                        focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                         autocomplete="email-demandeur" id="Email" name="email" type="email">
                    </div>
                </div>
                 <!-- Formulaire partie Objet -->
                <div>
                    <label for="Objet" class="block text-sm font-meduim
                    text-gray-700">Objet</label>
               
                    <div class="mt-1">
                        <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm 
                        focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                         autocomplete="objet-demandeur" id="Objet" name="objetdemandeur" type="text">
                    </div>
                </div>
                 <!-- Formulaire partie Message -->
                <div>
                    <label for="Message" class="block text-sm font-meduim
                    text-gray-700">Message</label>
               
                    <div class="mt-1">
                       <textarea class="border border-indigo-600 px-3 py-2 rounded-lg shadow-sm" name="message" id="Message" required :value="old('message')" cols="30" rows="10">{{ old('Ecrire le message') }}</textarea>
                    </div>
                </div>
                <div class="mt-5 text-indigo-600">
                    <button class="border-2 border-indigo-700 text-indigo-600 hover:bg-indigo-600 py-2 px-5 hover:text-white rounded-lg w-full" type="submit">Soumettre</button>
                </div>
            </form>
        </div>

 </section>


@endsection