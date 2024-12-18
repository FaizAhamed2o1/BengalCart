<nav class="flex  items-center gap-3 px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50" aria-label="Breadcrumb">
    <ol class="flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!$loop->last)
                <li class="flex items-center">
                    <a href="{{ $breadcrumb['url'] }}" class="text-sm font-medium text-gray-700 hover:text-blue-600">
                        {{ $breadcrumb['name'] }}
                    </a>
                    <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                </li>
            @else
                <li>
                    <span class="text-sm font-medium text-gray-500">{{ $breadcrumb['name'] }}</span>
                </li>
            @endif
        @endforeach
    </ol>
</nav>
