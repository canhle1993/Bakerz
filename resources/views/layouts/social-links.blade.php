@foreach(($socialMedia ?? []) as $socialItem)
    @php
        $socialName = strtolower($socialItem->name ?? '');
    @endphp
    <a href="{{ $socialItem->link }}" target="_blank" rel="noopener noreferrer">
        @if (str_contains($socialName, 'facebook'))
            <i class="lastudioicon-b-facebook"></i>
        @elseif (str_contains($socialName, 'twitter'))
            <i class="lastudioicon-b-twitter"></i>
        @elseif (str_contains($socialName, 'pinterest'))
            <i class="lastudioicon-b-pinterest"></i>
        @elseif (str_contains($socialName, 'instagram'))
            <i class="lastudioicon-b-instagram"></i>
        @else
            <i class="lastudioicon-b-globe"></i>
        @endif
    </a>
@endforeach
