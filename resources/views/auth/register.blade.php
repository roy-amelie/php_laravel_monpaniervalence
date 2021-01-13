<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo/>
        </x-slot>

        <x-jet-validation-errors class="mb-4"/>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label class="text-2xl" for="role">Rôle </label>
                <p class="text-1xl" for="role">Je souhaite créer un compte </p>
                <select class="form-control"
                        id="role"
                        name="role">
                    <option>Client</option>
                    <option>Commerçant</option>
                </select>
            </div>

        <hr class="mt-4">

            <p class="text-2xl mt-4">Compte </p>
            <div class="mt-2">
                <x-jet-label for="name" value="{{ __('Identifiant') }}"/>
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                             autofocus autocomplete="name"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Adresse email') }}"/>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                             required/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Mot de passe') }}"/>
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                             autocomplete="new-password"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmation du mot de passe') }}"/>
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                             name="password_confirmation" required autocomplete="new-password"/>
            </div>

            <hr class="mt-4">

            <p class="text-2xl mt-4"> Civilité </p>

            <div class="mt-4">
                <div class="row">
                    <input type="radio" id="male" name="gender" value="male"
                           class="@error('gender') is-invalid @enderror">
                    <label for="male">Mr</label><br>
                    <input type="radio" id="female" name="gender" value="female"
                           class="@error('gender') is-invalid @enderror">
                    <label for="female">Mme</label><br>
                    @error('gender')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mt-4">
                <x-jet-label for="lastname" value="{{ __('Nom') }}"/>
                <x-jet-input id="lastname" class="block mt-1 w-full" type="text" name="lastname"
                             :value="old('lastname')" required autofocus autocomplete="lastname"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="firstname" value="{{ __('Prénom') }}"/>
                <x-jet-input id="firstname" class="block mt-1 w-full" type="text" name="firstname"
                             :value="old('firstname')" required autofocus autocomplete="firstname"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="birthdate" value="{{ __('Date de naissance') }}"/>
                <x-jet-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate"
                             :value="old('birthdate')" required autofocus autocomplete="birthdate"/>
            </div>

            <hr class="mt-4">

            <p class="text-2xl mt-4"> Contact </p>

            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('Numéro de téléphone') }}"/>
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')"
                             required autofocus autocomplete="phone"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Adresse postale') }}"/>
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
                             required autofocus autocomplete="address"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="zip_code" value="{{ __('Code postal') }}"/>
                <x-jet-input id="zip_code" class="block mt-1 w-full" type="text" name="zip_code"
                             :value="old('zip_code')" required autofocus autocomplete="zip_code"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="city" value="{{ __('Ville') }}"/>
                <x-jet-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required
                             autofocus autocomplete="city"/>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déjà enregistré(e) ?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('S\'enregistrer') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
