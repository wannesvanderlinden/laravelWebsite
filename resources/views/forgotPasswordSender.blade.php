@component('mail::message')
# {{ $mailData['title'] }}

@component('mail::message')
{{$mailData['content']}}


@endcomponent

Thanks,<br>
{{ $mailData['name'] }}
@endcomponent