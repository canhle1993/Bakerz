@if ($paginator->hasPages())
    <div class="shop-bottombar">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled"><a href="#">←</a></li> {{-- Disable previous button when on the first page --}}
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">←</a></li> {{-- Enable previous button --}}
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled"><a href="#">{{ $element }}</a></li> {{-- Dots separator --}}
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><a href="{{ $url }}">{{ $page }}</a></li> {{-- Highlight current page --}}
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li> {{-- Regular page links --}}
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">→</a></li> {{-- Enable next button --}}
            @else
                <li class="disabled"><a href="#">→</a></li> {{-- Disable next button when on the last page --}}
            @endif
        </ul>
    </div>
@endif
