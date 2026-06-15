Nieuw contactbericht via {{ config('sos.name') }}

Naam: {{ $payload['name'] }}
E-mail: {{ $payload['email'] }}
Onderwerp: {{ $payload['subject'] }}

Bericht:
{{ $payload['message'] }}
