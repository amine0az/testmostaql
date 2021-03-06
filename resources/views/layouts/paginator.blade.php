@if ($paginator->hasPages())
    <div class="pager skew-25">
        <ul>
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li ><a class="skew25"><i class="fa fa-angle-left"></i></a></li>
        @else
            <li ><a class="skew25" href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a></li>
        @endif
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="selected"><span class="skew25">{{ $page }}</span></li>
                    @else
                        <li><a class="skew25" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a class="skew25" href="{{ $paginator->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a></li>
        @else
            <li><a class="skew25"><i class="fa fa-angle-right"></i></a></li>
        @endif
        </ul>
    </div>
@endif