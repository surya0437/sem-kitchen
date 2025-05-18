@if ($products->lastPage() > 1)
    <ul class="flex space-x-2">
        {{-- Previous Page Link --}}
        @if ($products->onFirstPage())
            <li class="text-gray-400">Previous</li>
        @else
            <li><a href="{{ $products->previousPageUrl() }}">Previous</a></li>
        @endif

        {{-- Page Numbers --}}
        @for ($i = 1; $i <= $products->lastPage(); $i++)
            <li>
                <a href="{{ $products->url($i) }}" class="{{ $products->currentPage() == $i ? 'font-bold text-blue-500' : '' }}">
                    {{ $i }}
                </a>
            </li>
        @endfor

        {{-- Next Page Link --}}
        @if ($products->hasMorePages())
            <li><a href="{{ $products->nextPageUrl() }}">Next</a></li>
        @else
            <li class="text-gray-400">Next</li>
        @endif
    </ul>
@endif
