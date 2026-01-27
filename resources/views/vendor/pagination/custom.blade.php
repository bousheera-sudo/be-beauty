@if ($paginator->hasPages())
    <div class="flex justify-center mt-12 font-sans">
        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center space-x-2">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="px-4 py-2 border border-gray-200 text-gray-400 cursor-not-allowed uppercase text-xs tracking-widest">
                    Précédent
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="px-4 py-2 border border-gray-300 text-brand-dark hover:bg-brand-dark hover:text-white transition duration-300 uppercase text-xs tracking-widest">
                    Précédent
                </a>
            @endif

            {{-- Pagination Elements --}}
            <div class="hidden md:flex space-x-1">
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <span class="px-4 py-2 text-gray-400">{{ $element }}</span>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span aria-current="page" class="px-4 py-2 bg-brand-dark text-white border border-brand-dark font-bold text-xs">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $url }}" class="px-4 py-2 border border-gray-300 text-gray-600 hover:border-brand-dark hover:text-brand-dark transition duration-300 text-xs font-semibold">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="px-4 py-2 border border-gray-300 text-brand-dark hover:bg-brand-dark hover:text-white transition duration-300 uppercase text-xs tracking-widest">
                    Suivant
                </a>
            @else
                <span class="px-4 py-2 border border-gray-200 text-gray-400 cursor-not-allowed uppercase text-xs tracking-widest">
                    Suivant
                </span>
            @endif
        </nav>
    </div>
@endif
