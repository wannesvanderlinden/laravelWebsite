@component('mail::message')
# {{ $mailData['title'] }}

@component('mail::message')
{{$mailData['content']}}


@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent