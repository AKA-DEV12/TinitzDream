

<footer class="bg-gray-300">
    <div class="container-xl">
        <img src="/tinitz-logo-150x74.png" alt="logo">
    </div>
    <div class="container">
      <p>
        En tant que pionniers de l'innovation technologique, nous réinventons les modes de vie et de travail grâce à des solutions intelligentes. Nous vous offrons confort, sécurité et performance pour propulser votre entreprise vers ses objectifs. Avec notre expertise, nous façonnons un quotidien plus simple, plus sûr et plus efficace, en mettant la technologie au service de votre réussite
      </p>
    </div>
    <div class="container form-conteneur">

      <div class="d-flex flex-wrap">
        <div class="d-flex flex-column">
            <div class="fs-2">Nos coordonnées</div>

              <div class="d-flex flex-column text-coordonnee">
                <p>Abidjan Cocody Angré Caféier 5 Villa 128</p>
                <p>Lundi – Vendredi : 8h00 – 18h00</p>
                <p>+(225) 27 22 49 71 93 / 07 68 60 60 91</p>
                <p><a href="mailto:services@tinitz.com">services@tinitz.com</a></p>
              </div>

            </div>
        </div>
        <!-- formulaire de contact -->
      
        <div class="form-cordonner">
          @if (@session('status'))
            <div class="alert alert-success">
              {{session('status')}}
            </div>
            
          @endif
          <form action="{{route('traitement')}}" method="POST">
            <div class="fs-2">Contactez-nous Maintenant</div>
              @csrf
              <x-input-label for="email" :value="__('Email')" />
              <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required  autocomplete="username" />
              <x-input-error :messages="$errors->get('email')"  />
              <i></i>
              <x-input-label for="nom" :value="__('Nom')" />
              <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required  autocomplete="username" />
              <x-input-error :messages="$errors->get('nom')" c />
              <i></i> <br>
              <x-input-label for="message" :value="__('Message')" />
              <textarea 
              class="block mt-1 w-full" type="text" name="message" required :value="old('message')"
              >{{ old('Ecrire le message') }}</textarea>
              <x-input-error :messages="$errors->get('message')"/> <br>
              <x-primary-button class="envoyer">{{ __('Envoyer') }}</x-primary-button>
          </form>
        </div>
     </div>
    </div>     
     
  </footer>