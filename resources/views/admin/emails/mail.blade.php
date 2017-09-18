@component('mail::message')
# {{ $content['title'] }}

{{ $content['message'] }}

Thanks,
{{ config('app.name') }}
@endcomponent
