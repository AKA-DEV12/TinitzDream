@extends('template.template')

@section('container')
    <div class="bg-gray-50 py-24 sm:py-32 mb-32 relative">
        <div class="effect mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
                <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                  <div class="lg:pr-4">
                    <div class="lg:max-w-lg">
                        <h2 class="text-base/7 font-semibold text-indigo-600">Obtenez facilement </h2>
                      <h1 class="absolute mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Là où l'innovation rencontre l'action!</h1>
                      <p class="mt-20 font-serif text-xl/8 text-gray-700 tracking-wide">
                        Une application robuste, Un design accrocheur L'outil idéal pour booster vos ventes et atteindre vos objectifs.
                        </p>
                    </div>
                </div>
            </div>
        </div>

            <!-----------Partie des Images ------------------>

          <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
            <div class="effect relative lg:row-span-2">
              <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-[2rem]"></div>
              <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                <div class="px-8 pb-3 pt-8 sm:px-10 sm:pb-0 sm:pt-10">
                  <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Application Mobile</p>
                  <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Nous développons des applications puissantes et sur-mesure. En choisissant Tinitz, vous accédez aux outils essentiels pour conquérir votre marché et atteindre vos objectifs avec efficacité.</p>
                </div>
                <div class="relative min-h-[30rem] w-full grow [container-type:inline-size] max-lg:mx-auto max-lg:max-w-sm">
                  <div class="absolute">
                    <img class="size-full object-cover object-top" src="/assets/assets/2mobs.png" alt="">
                  </div>
                </div>
              </div>
              <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 lg:rounded-l-[2rem]"></div>
            </div>

                                <!-- Partie Pre------>

            <div class="effect relative max-lg:row-start-1">
              <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem]"></div>
              <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                  <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Performance</p>
                  <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">navigation fluide, un chargement instantané et une performance optimisée, nous vous garantissons une expérience sans compromis.</p>
                </div>
                <div class="flex flex-1 items-center justify-center px-8 max-lg:pb-12 max-lg:pt-10 sm:px-10 lg:pb-2">
                  <img class="w-full max-lg:max-w-xs" src="/assets/assets/perfomance.png" alt="">
                </div>
              </div>
              <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-t-[2rem]"></div>
            </div>

                                <!------ Partie Right (Images) ------>

            <div class="effect relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
              <div class="absolute inset-px rounded-lg bg-white"></div>
              <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)]">
                <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                  <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Sécurité Avancée</p>
                  <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Application intégrée avec des mesures de sécurité avancées, un cryptage de données de bout en bout et une protection renforcée contre les cybermenaces.</p>
                </div>
                <div class="flex flex-1 items-center [container-type:inline-size] max-lg:py-6 lg:pb-2">
                  <img class="h-[min(152px,40cqw)] object-cover object-center" src="https://tailwindui.com/plus/img/component-images/bento-03-security.png" alt="">
                </div>
              </div>
              <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5"></div>
            </div>
            
                                <!-- ------>

            <div class="effect relative lg:row-span-2">
              <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
              <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
                <div class="px-8 pb-3 pt-8 sm:px-10 sm:pb-0 sm:pt-10">
                  <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Solution desktop</p>
                  <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Grâce à une conception innovante et des performances optimisées, votre travail devient plus simple, plus rapide, et plus fiable.</p>
                </div>

                <div class="relative min-h-[30rem] w-full grow [container-type:inline-size] max-lg:mx-auto max-lg:max-w-sm">
                    <div class="absolute h-screen">
                      <img class="size-full h-full object-cover rounded-tl-lg rounded-tr-lg object-top" src="/assets/assets/desktop.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 lg:rounded-l-[2rem]"></div>
              </div>

              <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
            </div>
          </div>
          <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
              <div class="lg:pr-4">
                <div class="w-screen lg:max-w-lg pt-12 pb-20 ">
                    
                <p class="font-serif container text-justify mt-2 text-w-6xl text-gray-700 absolute w-4/5 tracking-wide">
                    Chez <strong style="color: #003466;">Tin<span style="color: #f84e01;">it</span style="color: #003466;">z</strong>, Nous transformons les modes de vie et de travail, en apportant confort et sécurité, tout en permettant aux entreprises d'atteindre leurs objectifs grâce à la puissance de la technologie. Notre engagement : mettre la technologie intelligente au service de vos ambitions.
                </p>
                </div>
            </div>
        </div>
        </div>
        </div> 
      </div>
    </div>

                     <!-- Partie Left Icone.........  --------------->

      <section class="mt-custom">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 id="speakers-title" class="font-display text-4xl font-medium tracking-tighter text-blue-600 mt-custom-text">La Tecnhologie Intelligente</h2>
                <p class="mt-4 font-display text-2xl tracking-tight text-blue-900">Une expertise forgée par l'expérience <span>et maîtrisée avec excellence</span> vers votre reussite</p>
            </div>
            <div class="mt-14 grid grid-cols-1 items-start gap-x-8 gap-y-8 sm:mt-16 sm:gap-y-16 lg:mt-24 lg:grid-cols-4">
                <div class="relative -mx-4 flex overflow-x-auto pb-4 sm:mx-0 sm:block sm:overflow-visible sm:pb-0">
                    <div class="absolute bottom-0 left-0.5 top-2 hidden w-px bg-slate-200 lg:block"></div>
                <div class="grid auto-cols-auto grid-flow-col justify-start gap-x-8 gap-y-10 whitespace-nowrap px-4 sm:mx-auto sm:max-w-2xl sm:grid-cols-3 sm:px-0 sm:text-center lg:grid-flow-row lg:grid-cols-1 lg:text-left" role="tablist" aria-orientation="horizontal">
                    <div class="relative lg:pl-8"><svg aria-hidden="true" viewBox="0 0 6 6" class="absolute left-[-0.5px] top-[0.5625rem] hidden h-1.5 w-1.5 overflow-visible lg:block fill-blue-600 stroke-blue-600"><path d="M3 0L6 3L3 6L0 3Z" stroke-width="2" stroke-linejoin="round"></path></svg>
                        <div class="relative">
                            <div class="font-mono text-sm text-blue-600">
                                <button class="ui-not-focus-visible:outline-none" id="headlessui-tabs-tab-:Rpjal7qfja:" role="tab" type="button" aria-selected="true" tabindex="0" data-headlessui-state="selected" aria-controls="headlessui-tabs-panel-:Rdal7qfja:" data-selected="">
                                    <span class="absolute inset-0"></span>
                                    Professionnalisme assuré
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="relative lg:pl-8"><svg aria-hidden="true" viewBox="0 0 6 6" class="absolute left-[-0.5px] top-[0.5625rem] hidden h-1.5 w-1.5 overflow-visible lg:block fill-blue-600 stroke-blue-600"><path d="M3 0L6 3L3 6L0 3Z" stroke-width="2" stroke-linejoin="round"></path></svg>
                        <div class="relative">
                            <div class="font-mono text-sm text-blue-600">
                                <button class="ui-not-focus-visible:outline-none" id="headlessui-tabs-tab-:Rpjal7qfja:" role="tab" type="button" aria-selected="true" tabindex="0" data-headlessui-state="selected" aria-controls="headlessui-tabs-panel-:Rdal7qfja:" data-selected="">
                                    <span class="absolute inset-0"></span>
                                    Solutions sur-mesure
                                </button>
                            </div>
                        </div>
                    </div>
                    <!----------------- -------------------->
                    
                    
                    <div class="relative lg:pl-8"><svg aria-hidden="true" viewBox="0 0 6 6" class="absolute left-[-0.5px] top-[0.5625rem] hidden h-1.5 w-1.5 overflow-visible lg:block fill-blue-600 stroke-blue-600"><path d="M3 0L6 3L3 6L0 3Z" stroke-width="2" stroke-linejoin="round"></path></svg>
                        <div class="relative">
                            <div class="font-mono text-sm text-blue-600">
                                <button class="ui-not-focus-visible:outline-none" id="headlessui-tabs-tab-:Rpjal7qfja:" role="tab" type="button" aria-selected="true" tabindex="0" data-headlessui-state="selected" aria-controls="headlessui-tabs-panel-:Rdal7qfja:" data-selected="">
                                    <span class="absolute inset-0"></span>
                                    Professionnalisme assuré
                                </button>
                            </div>
                        </div>
                    </div>
                    <!----------------- -------------------->

                    
                    <div class="relative lg:pl-8"><svg aria-hidden="true" viewBox="0 0 6 6" class="absolute left-[-0.5px] top-[0.5625rem] hidden h-1.5 w-1.5 overflow-visible lg:block fill-blue-600 stroke-blue-600"><path d="M3 0L6 3L3 6L0 3Z" stroke-width="2" stroke-linejoin="round"></path></svg>
                        <div class="relative">
                            <div class="font-mono text-sm text-blue-600">
                                <button class="ui-not-focus-visible:outline-none" id="headlessui-tabs-tab-:Rpjal7qfja:" role="tab" type="button" aria-selected="true" tabindex="0" data-headlessui-state="selected" aria-controls="headlessui-tabs-panel-:Rdal7qfja:" data-selected="">
                                    <span class="absolute inset-0"></span>
                                    Performance optimale
                                </button>
                            </div>
                        </div>
                    </div>
                    <!----------------- -------------------->

                    <div class="relative lg:pl-8"><svg aria-hidden="true" viewBox="0 0 6 6" class="absolute left-[-0.5px] top-[0.5625rem] hidden h-1.5 w-1.5 overflow-visible lg:block fill-blue-600 stroke-blue-600"><path d="M3 0L6 3L3 6L0 3Z" stroke-width="2" stroke-linejoin="round"></path></svg>
                        <div class="relative">
                            <div class="font-mono text-sm text-blue-600">
                                <button class="ui-not-focus-visible:outline-none" id="headlessui-tabs-tab-:Rpjal7qfja:" role="tab" type="button" aria-selected="true" tabindex="0" data-headlessui-state="selected" aria-controls="headlessui-tabs-panel-:Rdal7qfja:" data-selected="">
                                    <span class="absolute inset-0"></span>
                                    Expertise reconnue 
                                </button>
                            </div>
                        </div>
                    </div>
                    <!----------------- -------------------->


                    <div class="relative lg:pl-8"><svg aria-hidden="true" viewBox="0 0 6 6" class="absolute left-[-0.5px] top-[0.5625rem] hidden h-1.5 w-1.5 overflow-visible lg:block fill-blue-600 stroke-blue-600"><path d="M3 0L6 3L3 6L0 3Z" stroke-width="2" stroke-linejoin="round"></path></svg>
                        <div class="relative">
                            <div class="font-mono text-sm text-blue-600">
                                <button class="ui-not-focus-visible:outline-none" id="headlessui-tabs-tab-:Rpjal7qfja:" role="tab" type="button" aria-selected="true" tabindex="0" data-headlessui-state="selected" aria-controls="headlessui-tabs-panel-:Rdal7qfja:" data-selected="">
                                    <span class="absolute inset-0"></span>
                                     Fiabilité garantie
                                </button>
                            </div>
                        </div>
                    </div>
                    <!----------------- -------------------->

                    <div class="relative lg:pl-8"><svg aria-hidden="true" viewBox="0 0 6 6" class="absolute left-[-0.5px] top-[0.5625rem] hidden h-1.5 w-1.5 overflow-visible lg:block fill-blue-600 stroke-blue-600"><path d="M3 0L6 3L3 6L0 3Z" stroke-width="2" stroke-linejoin="round"></path></svg>
                        <div class="relative">
                            <div class="font-mono text-sm text-blue-600">
                                <button class="ui-not-focus-visible:outline-none" id="headlessui-tabs-tab-:Rpjal7qfja:" role="tab" type="button" aria-selected="true" tabindex="0" data-headlessui-state="selected" aria-controls="headlessui-tabs-panel-:Rdal7qfja:" data-selected="">
                                    <span class="absolute inset-0"></span>
                                    Client satisfait
                                </button>
                            </div>
                        </div>
                    </div>
                    <!----------------- -------------------->
            </div>
        </div>

        <!---------------------------------- Deuxieme Partie, Partie Image -------------------------------------->

        <div class="lg:col-span-3">
            <div class="grid grid-cols-1 gap-x-8 gap-y-10 ui-not-focus-visible:outline-none sm:grid-cols-2 sm:gap-y-16 md:grid-cols-3" id="headlessui-tabs-panel-:Rdal7qfja:" role="tabpanel" tabindex="0" data-headlessui-state="selected" aria-labelledby="headlessui-tabs-tab-:Rpjal7qfja:" style="" data-selected="">
                <div>
                    <div class="group relative h-[17.5rem] transform overflow-hidden rounded-4xl">
                        <div class="absolute bottom-6 left-0 right-4 top-0 rounded-4xl border transition duration-300 group-hover:scale-95 xl:right-6 border-blue-300"></div>
                        <div class="absolute inset-0 bg-indigo-50" style="clip-path:url(#:R57qfja:-0)">
                            <img alt="" fetchpriority="high" width="1120" height="560" decoding="async" data-nimg="1" class="absolute inset-0 h-full w-full object-cover transition duration-300 group-hover:scale-110" style="color:transparent" sizes="(min-width: 1280px) 17.5rem, (min-width: 1024px) 25vw, (min-width: 768px) 33vw, (min-width: 640px) 50vw, 100vw" srcset="assets/assets.cardAPK (1).JPG" src="/assets/assets/cardAPK (1).JPG">
                        </div>
                    </div>
                    <h3 class="mt-8 font-display text-xl font-bold tracking-tight text-slate-900">Développement</h3>
                    <p class="mt-1 text-base tracking-tight text-slate-500 text-justify">
                        Nous créons des applications Web, mobile, des sites vitrines ou Ecommerces sur mesure. Nous déployons une expertise répondant aux exigences de votre cahier de charge. 
                    </p>
                </div>
                <div>
                    <div class="group relative h-[17.5rem] transform overflow-hidden rounded-4xl">
                        <div class="absolute bottom-6 left-0 right-4 top-0 rounded-4xl border transition duration-300 group-hover:scale-95 xl:right-6 border-indigo-300"></div>
                        <div class="absolute inset-0 bg-indigo-50" style="clip-path:url(#:R57qfja:-1)">
                            <img alt="" fetchpriority="high" width="1120" height="560" decoding="async" data-nimg="1" class="absolute inset-0 h-full w-full object-cover transition duration-300 group-hover:scale-110" style="color:transparent" sizes="(min-width: 1280px) 17.5rem, (min-width: 1024px) 25vw, (min-width: 768px) 33vw, (min-width: 640px) 50vw, 100vw" srcset="assets/assets/cardAPK (2).JPG" src="/assets/assets/cardAPK (2).JPG">
                        </div>
                    </div>
                    <h3 class="mt-8 font-display text-xl font-bold tracking-tight text-slate-900">Communication</h3>
                    <p class="mt-1 text-base tracking-tight text-slate-500 text-justify">
                        Nous assurons votre présence social média, créons du contenu afin d’assurer votre e-réputation. En partenariat avec plus de 20 organes de presse, nous vous ouvrons les portes de la presse papier également dans le but de toucher toutes les tranches d'âges de votre cible. 
                    </p>
                </div>
                <div>
                    <div class="group relative h-[17.5rem] transform overflow-hidden rounded-4xl">
                        <div class="absolute bottom-6 left-0 right-4 top-0 rounded-4xl border transition duration-300 group-hover:scale-95 xl:right-6 border-sky-300"></div>
                        <div class="absolute inset-0 bg-indigo-50" style="clip-path:url(#:R57qfja:-2)">
                            <img alt="" fetchpriority="high" width="1120" height="560" decoding="async" data-nimg="1" class="absolute inset-0 h-full w-full object-cover transition duration-300 group-hover:scale-110" style="color:transparent" sizes="(min-width: 1280px) 17.5rem, (min-width: 1024px) 25vw, (min-width: 768px) 33vw, (min-width: 640px) 50vw, 100vw" srcset="assets/assets.cardAPK (3).JPG" src="/assets/assets/cardAPK (3).JPG">
                        </div>
                    </div>
                    <h3 class="mt-8 font-display text-xl font-bold tracking-tight text-slate-900">Référencement</h3>
                    <p class="mt-1 text-base tracking-tight text-slate-500 text-justify">
                        Parce que notre stratégie n'est pas de concevoir uniquement une plateforme belle et performante mais de générer du trafic pour augmenter vos ventes. Nous optimisons votre référencement naturel et utilisons Google Adwords si nécessaire afin d’être en première position dans les résultats de recherche.</p>
                </div>
                <div>
                    <div class="group relative h-[17.5rem] transform overflow-hidden rounded-4xl">
                        <div class="absolute bottom-6 left-0 right-4 top-0 rounded-4xl border transition duration-300 group-hover:scale-95 xl:right-6 border-blue-300"></div>
                        <div class="absolute inset-0 bg-indigo-50" style="clip-path:url(#:R57qfja:-0)">
                            <img alt="" fetchpriority="high" width="1120" height="560" decoding="async" data-nimg="1" class="absolute inset-0 h-full w-full object-cover transition duration-300 group-hover:scale-110" style="color:transparent" sizes="(min-width: 1280px) 17.5rem, (min-width: 1024px) 25vw, (min-width: 768px) 33vw, (min-width: 640px) 50vw, 100vw" srcset="assets/assets/cardAPK (4).JPG" src="/assets/assets/cardAPK (4).JPG">
                        </div>
                    </div>
                    <h3 class="mt-8 font-display text-xl font-bold tracking-tight text-slate-900">Stratégie Digitale</h3>
                    <p class="mt-1 text-base tracking-tight text-slate-500 text-justify">
                        Nous mettons en place une stratégie marketing répondant aux exigences de votre marché qui vous permet de toucher votre cible en fonction de vos besoins et votre budget. 
                    </p>
                </div>
                <div>
                    <div class="group relative h-[17.5rem] transform overflow-hidden rounded-4xl">
                        <div class="absolute bottom-6 left-0 right-4 top-0 rounded-4xl border transition duration-300 group-hover:scale-95 xl:right-6 border-indigo-300"></div>
                        <div class="absolute inset-0 bg-indigo-50" style="clip-path:url(#:R57qfja:-1)">
                            <img alt="" fetchpriority="high" width="1120" height="560" decoding="async" data-nimg="1" class="absolute inset-0 h-full w-full object-cover transition duration-300 group-hover:scale-110" style="color:transparent" sizes="(min-width: 1280px) 17.5rem, (min-width: 1024px) 25vw, (min-width: 768px) 33vw, (min-width: 640px) 50vw, 100vw" srcset="assets/assets/cardAPK (5).JPG" src="/assets/assets/cardAPK (5).JPG">
                        </div>
                    </div>
                    <h3 class="mt-8 font-display text-xl font-bold tracking-tight text-slate-900">Ecommerce</h3>
                    <p class="mt-1 text-base tracking-tight text-slate-500 text-justify">
                        Emailing, marketing automation, parcours digitaux innovants, nous mettons notre savoir faire pour augmenter vos ventes et accroître votre retour sur investissement. 
                    </p>
                </div>
                <div>
                    <div class="group relative h-[17.5rem] transform overflow-hidden rounded-4xl">
                        <div class="absolute bottom-6 left-0 right-4 top-0 rounded-4xl border transition duration-300 group-hover:scale-95 xl:right-6 border-sky-300"></div>
                        <div class="absolute inset-0 bg-indigo-50" style="clip-path:url(#:R57qfja:-2)">
                            <img alt="" fetchpriority="high" width="1120" height="560" decoding="async" data-nimg="1" class="absolute inset-0 h-full w-full object-cover transition duration-300 group-hover:scale-110" style="color:transparent" sizes="(min-width: 1280px) 17.5rem, (min-width: 1024px) 25vw, (min-width: 768px) 33vw, (min-width: 640px) 50vw, 100vw" srcset="assets/assets/cardAPK (6).JPG" src="/assets/assets/cardAPK (6).JPG">
                        </div>
                    </div>
                    <h3 class="mt-8 font-display text-xl font-bold tracking-tight text-slate-900">Identité visuelle</h3>
                    <p class="mt-1 text-base tracking-tight text-slate-500 text-justify">
                        Confiez-nous votre identité de marque ou votre logo. Nous saurons graphiquement représenter la philosophie de votre entreprise. 
                    </p>
                </div>
            </div>
    </div>
      </section>

                <!------------ Section Technolofie Utiliser ------------>
                <div class="min-h-screen bg-gray-100 flex flex-col items-center justify-center">
                    <!-- Texte principal -->
                    <h1 class="text-4xl md:text-5xl font-bold text-center text-gray-800 mb-6 animate-fade-in">
                        Nous répondons aux besoins digitaux depuis l'an 2010 de manière adaptée et pérenne
                    </h1>
                    
                    <!-- Sous-texte interactif -->
                    <div class="text-lg md:text-xl text-center text-gray-600 mb-8 animate-slide-in">
                        Besoin d'information pour un projet ? Une demande de devis ?
                    </div>
                    
                    <!-- Boutons d'action -->
                    <div class="space-x-4 flex mt-7 demande-D-I md:flex">
                        <button class="px-6 py-3 text-white rounded-lg hover:transition duration-300 ease-in-out transform hover:scale-105">
                            Demande de Devis
                        </button>
                        <button class="px-6 py-3 text-white rounded-lg hover:transition duration-300 ease-in-out transform hover:scale-105">
                           <a href="{{route('voir-realisation')}}">Informations Projet</a> 
                        </button>
                    </div>
                </div>
                
      <section >
        <div class="mt-20 mb-20 overflow-hidden" style="width: 100%;">
<!--flex inline-flex -->
            <div class="grid grid-rows-5 grid-flow-col md:grid md:grid-rows-2 md:grid-flow-col gap-4" style=" margin:0 auto;">
                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/Alfresco-logo.png" alt="Transistor" width="80%" height="auto">
                </div>
                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/ansible.jpg" alt="Transistor" width="80%" height="auto">
                </div>
                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/cakephp.jpg" alt="Transistor" width="80%" height="auto">
                </div>
                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/elastic-banner.png" alt="Transistor" width="80%" height="auto">
                </div>
                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/docker-images.png" alt="Transistor" width="80%" height="auto">
                </div>
                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/drupal-banner.png" alt="Transistor" width="80%" height="auto">
                </div>
                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/java.jpg" alt="Transistor" width="80%" height="auto">
                </div>
                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/joomla.png" alt="Transistor" width="80%" height="auto">
                </div>
                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/laravel.jpg" alt="Transistor" width="80%" height="auto">
                </div>
                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/lua.png" alt="Transistor" width="80%" height="auto">
                </div>
                
            

                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/magento-logo.png" alt="Transistor" width="80%" height="auto">
                </div>
                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/wordpresst.png" alt="Transistor" width="80%" height="auto">
                </div>
                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/node-js.png" alt="Transistor" width="80%" height="auto">
                </div>
                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/odoo.png" alt="Transistor" width="80%" height="auto">
                </div>
                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/python.png" alt="Transistor" width="80%" height="auto">
                </div>
                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/spring-boot.png" alt="Transistor" width="80%" height="auto">
                </div>
                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/symfony.jpg" alt="Transistor" width="80%" height="auto">
                </div>
                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/wordpresst.png" alt="Transistor" width="80%" height="auto">
                </div>
                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/Zabbix-logo.png" alt="Transistor" width="80%" height="auto">
                </div>
                <div class="shadow-2xl box-border border-2 content-center rounded-2xl">
                    <img class="w-full object-contain lg:col-span-1" src="/assets/assets/laravel.jpg" alt="Transistor" width="80%" height="auto">
                </div>
                
            </div>

        </div>
        
      </section>
@endsection