<x-mail::layout>
{{-- Header --}}
<x-slot:header>
<x-mail::header :url="config('app.url')">
    <img src="{{ asset('frontend/assets/img/logo/logo.png') }}" class="logo" alt="Logo">
</x-mail::header>
</x-slot:header>

{{-- Body --}}
{!! $body !!}

{{-- Footer --}}
<x-slot:footer>
<x-mail::footer>
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
</x-mail::footer>
</x-slot:footer>
</x-mail::layout>
