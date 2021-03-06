@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{-- {{ config('app.name') }} --}}
            <img src="{{asset('img/emailLogo.png')}}" style=" text-align:left;margin-left:-20px" width="40" alt="Chooseme"><br>
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
        
        <span style="margin-left:16%;color:white;">
        © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        </span>
            
        
        @endcomponent
    @endslot
@endcomponent
