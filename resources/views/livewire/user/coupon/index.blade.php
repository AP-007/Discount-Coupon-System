<div>
    <!-- Search input -->
    <div class="flex justify-center flex-1 lg:mr-32 py-10" wire:key="Search">
        <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
            <div class="absolute inset-y-0 flex items-center pl-2">
                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <input wire:model="search"
                class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                type="text" placeholder="Search for coupons" aria-label="Search" />
        </div>
    </div>

    <div class="w-full overflow-hidden rounded-sm shadow-xs m-2">
        <div class="w-full overflow-x-auto">

            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-2 py-3 text-center">
                            <span> Coupon Code</span>
                        </th>
                        <th class="px-2 py-3 text-center">Start date</th>
                        <th class="px-2 py-3 text-center">End date</th>
                        <th class="px-2 py-3 text-center">Remaining coupons</th>
                        <th class="px-2 py-3 text-center">Discount</th>
                        <th class="px-2 py-3 text-center">Discount Upto</th>
                        <th class="px-2 py-3 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach ($coupons as $coupon)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-2 py-3 text-sm text-center font-semibold">
                                {{ strtoupper($coupon->code) }}
                            </td>

                            <td class="px-2 py-3 text-sm text-center">
                                {{ $coupon->start_date }}
                            </td>

                            <td class="px-2 py-3 text-sm text-center">
                                {{ $coupon->end_date }}
                            </td>

                            <td class="px-2 py-3 text-sm text-center">
                                {{ $coupon->no_of_users }}
                            </td>
                            @if ($coupon->discount_type == 0)
                                <td class="px-2 py-3 text-sm text-center">
                                    {{ $coupon->discount }} %
                                </td>
                            @elseif($coupon->discount_type == 1)
                                <td class="px-2 py-3 text-sm text-center">
                                    Rs. {{ $coupon->discount }}
                                </td>
                            @endif

                            @if ($coupon->discount_type == 0)
                                <td class="px-2 py-3 text-sm text-center">
                                    Rs. {{ $coupon->discount_limit }}
                                </td>
                            @else
                            <td class="px-2 py-3 text-sm text-center">
                                -
                            </td>
                            @endif


                            <td class="px-2 py-3 text-sm text-center">
                                <a href="{{ route('user.coupons.customers.create', $coupon->id) }}" class="float-right">
                                    <button type="button"
                                        class="px-2 m-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                        Use Coupon
                                    </button>
                                </a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>


            <div class="p-4">
                {{ $coupons->links('pagination-link') }}
            </div>
        </div>

    </div>
</div>
