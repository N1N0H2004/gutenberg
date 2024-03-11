<link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">

<script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>

<script src="https://unpkg.com/react@17.0.2/umd/react.production.min.js"></script>

<script src="https://unpkg.com/react-dom@17.0.2/umd/react-dom.production.min.js"></script>


@csrf

{{--<strong>Titel: </strong><x-text-input type="text" name="titel" field="titel" placeholder="Titel..." class="w-full border-black" autocomplete="off" :value="$gutenberg->titel"></x-text-input> <br> <br>--}}
{{--<strong>Inhoud: </strong><x-text-input type="text" name="inhoud" field="inhoud" placeholder="Inhoud..." class="w-full border-black" autocomplete="off" :value="$gutenberg->inhoud"></x-text-input> <br> <br>--}}

<strong>Titel: </strong><x-text-input type="text" name="[titel]" field="titel" placeholder="Titel..." class="w-full border-black" autocomplete="off" :value="$gutenberg->titel"></x-text-input> <br> <br>
<strong>Inhoud: </strong><x-text-input type="text" name="[inhoud]" field="inhoud" placeholder="Inhoud..." class="w-full border-black" autocomplete="off" :value="$gutenberg->inhoud"></x-text-input> <br> <br>


@error('titel')

<p class="text-red-500 -mt-6">{{ $message }}</p>
@enderror





