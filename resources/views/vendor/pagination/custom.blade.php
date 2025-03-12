@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center mt-6 space-x-2">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="px-4 py-2 text-gray-500 bg-gray-200 rounded-lg cursor-not-allowed">
                &larr; Prev
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}"
                class="px-4 py-2 text-white bg-[#500CA4] rounded-lg hover:bg-[#3E088A]">
                &larr; Prev
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="px-4 py-2 text-gray-500">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="px-4 py-2 text-white bg-[#500CA4] rounded-lg">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}"
                            class="px-4 py-2 text-[#500CA4] bg-white border border-[#500CA4] rounded-lg hover:bg-[#EDE7F6]">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"
                class="px-4 py-2 text-white bg-[#500CA4] rounded-lg hover:bg-[#3E088A]">
                Next &rarr;
            </a>
        @else
            <span class="px-4 py-2 text-gray-500 bg-gray-200 rounded-lg cursor-not-allowed">
                Next &rarr;
            </span>
        @endif
    </nav>
@endif
