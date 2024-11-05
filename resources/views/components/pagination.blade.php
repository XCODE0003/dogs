@if ($paginator->hasPages())

<div class="pagination">
    @if (!$paginator->onFirstPage())        
        <span class="prev">
            <a href="{{ $paginator->previousPageUrl() }}" title="">
                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-left" viewBox="0 0 284.49 498.98"><path d="M249.49 0a35 35 0 0 1 24.75 59.75L84.49 249.49l189.75 189.74a35.002 35.002 0 1 1-49.5 49.5L10.25 274.24a35 35 0 0 1 0-49.5L224.74 10.25A34.89 34.89 0 0 1 249.49 0z"></path></svg>
                <span class="icon__fallback-text">Back</span>
            </a>
        </span>
    @endif

    {{-- ... разделитель --}}
    @foreach ($elements as $element)
        @if (is_string($element))
            <span class="deco">{{ $element }}</span> 
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <span class="page current">{{ $page }}</span> 
                @else
                    <span class="page">
                        <a href="{{ $url }}" title="{{ $page }}">{{ $page }}</a>
                    </span> 
                @endif
            @endforeach
        @endif
    @endforeach


    @if ($paginator->hasMorePages())     
        <span class="next">
            <a href="{{ $paginator->nextPageUrl() }}" title="">
                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-right" viewBox="0 0 284.49 498.98">
                <path d="M35 498.98a35 35 0 0 1-24.75-59.75l189.74-189.74L10.25 59.75a35.002 35.002 0 0 1 49.5-49.5l214.49 214.49a35 35 0 0 1 0 49.5L59.75 488.73A34.89 34.89 0 0 1 35 498.98z"></path>
                </svg>
                <span class="icon__fallback-text">Next</span>
            </a>
        </span>
    @endif
</div>


@elseif(isset($paginate))


@endif
