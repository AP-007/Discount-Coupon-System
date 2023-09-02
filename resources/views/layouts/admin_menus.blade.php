<div class="py-4 text-gray-500 dark:text-gray-400">
    
    <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
        Admin Dashboard
    </a>
    <ul class="mt-6">
        <li class="relative px-6 py-3">
            {!! request()->routeIs('admin.dashboard')
                ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>'
                : '' !!}
            <a data-turbolinks-action="replace"
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="{{ route('admin.dashboard') }}">
                <svg class="w-5 h-5" ari a-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                    </path>
                </svg>
                <span class="ml-4">{{ __('Dashboard') }}</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            {!! request()->routeIs('admin.coupons.*')
                ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>'
                : '' !!}
            <a data-turbolinks-action="replace"
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="{{ route('admin.coupons.index') }}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                    </path>
                </svg>
                <span class="ml-4">{{ __('Coupon') }}</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            {!! request()->routeIs('admin.hotels.*')
                ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>'
                : '' !!}
            <a data-turbolinks-action="replace"
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="{{ route('admin.hotels.index') }}">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="ml-4">{{ __('Hotels') }}</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            {!! request()->routeIs('admin.users.*')
                ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>'
                : '' !!}
            <a data-turbolinks-action="replace"
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="{{ route('admin.users.index') }}">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                    </path>
                </svg>
                <span class="ml-4">{{ __('Users') }}</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            {!! request()->routeIs('admin.customers.*')
                ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>'
                : '' !!}
            <a data-turbolinks-action="replace"
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="{{ route('admin.customers.view') }}">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                    </path>
                </svg>
                <span class="ml-4">{{ __('Customer List') }}</span>
            </a>
        </li>
    </ul>
</div>
