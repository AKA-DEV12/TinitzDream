@extends('template.template')

@section('container')
<div class="relative bg-gradient-to-r from-blue-500 to-teal-400 py-16 px-6 sm:px-16 lg:px-24">
    <div class="max-w-4xl mx-auto text-center text-white pt-4">
        <h1 class="text-4xl sm:text-5xl font-bold mb-4">
            Offres d'emploi
        </h1>

        <p class="text-lg sm:text-xl mb-8 leading-relaxed">
            Vous vous épanouirez dans un travail enrichissant. Tinitz, vous appréciera à votre valeur en créant des conditions favorables pour vous permettre de mieux étendre votre potentiel. Nos préoccupations vont bien au-delà de notre chiffre d'affaire car nous n’oublions jamais que c’est vous qui faites notre réussite.
        </p>       
    </div>


    <div class="absolute top-0 right-0 -z-10 hidden lg:block">
        <svg class="w-48 h-48 text-white opacity-10 transform rotate-45 translate-x-20 translate-y-12" fill="currentColor" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <circle cx="50" cy="50" r="50" />
        </svg>
    </div>
</div>


<section id="offres" class="py-16 bg-gray-100">
    <div class="max-w-7xl mx-auto px-6 sm:px-16">
        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-12">Nos dernières offres</h2>
    </div>
    <div class="overflow-hidden w-full sm:overflow-scroll">
         <table class="mx-auto ">
        <thead class="mb-7"> 
            <tr class="bg-gray-300 border-t border-gray-500">
                 <th class="mx-auto">Titre de l'offre d'emploi </th> 
                 <th>Département</th>
                 <th>Position</th>
                 <th>Documents à fournir</th>
                 <th>Email</th>
                 <th>Date Limite</th>
                 <th>Statut</th>
            </tr>
           
        </thead>
        <tbody>
            <tr class="py-2 border-y border-gray-200 mx-1">
                <td class="text-blue-700">Commercial (F)</td> &nbsp;
                <td>Service commercial &nbsp;&nbsp;</td>
                <td>Abidjan &nbsp;&nbsp;</td>
                <td>CV + Lettre de motivation &nbsp;&nbsp;</td>
                <td><a class="text-blue-900" href="mailto:services@tinitz.com">services@tinitz.com</a> &nbsp;&nbsp;</td>
                <td>31-01-2022 &nbsp;&nbsp;</td>
                <td class="bg-orange-400">Fermé</td>
            </tr>
            <tr class="py-2 border-y border-gray-200 mx-1">
                <td class="text-blue-700">Développeur mobile IOS ( H/F ) &nbsp;&nbsp;</td>
                <td>Technique &nbsp;&nbsp;</td>
                <td>Abidjan &nbsp;&nbsp;</td>
                <td>CV + Lettre de motivation &nbsp;&nbsp;</td>
                <td><a class="text-blue-900" href="mailto:services@tinitz.com">services@tinitz.com</a> &nbsp;&nbsp;</td>
                <td>31-01-2022</td>
                <td class="bg-orange-400">Fermé</td>
            </tr>
            <tr class="py-2 border-y border-gray-200 mx-1">
                <td class="text-blue-700">Community Manager &nbsp;&nbsp;</td>
                <td>Technique &nbsp;&nbsp;</td>
                <td>Abidjan &nbsp;&nbsp;</td>
                <td>CV + Lettre de motivation &nbsp;&nbsp;</td>
                <td><a class="text-blue-900" href="mailto:services@tinitz.com">services@tinitz.com</a> &nbsp;&nbsp;</td>
                <td>31-01-2022</td>
                <td class="bg-orange-400">Fermé</td>
            </tr>
        </tbody>
    </table>
    </div>
   
</section>
@endsection