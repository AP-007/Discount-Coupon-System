<div class="w-full overflow-hidden rounded-sm px-10 py-10 shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Customer's Name</th>
                    <th class="px-4 py-3">Phone</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Used Coupon</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                
                @foreach ($customers as $customer)
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                            
                            <div>
                                <p class="font-semibold">{{ $customer->name }}</p>
                                
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $customer->phone }}
                    </td>
                    @if($customer->email==null)
                        <td class="px-4 py-3 text-sm">
                            <i>No Email</i> 
                        </td>
                    @else
                        <td class="px-4 py-3 text-sm">
                            {{ $customer->email }}
                        </td>
                    @endif
                    
                    <td class="px-4 py-3 text-xs">
                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                            {{ strtoupper($customer->coupons->code) }}
                        </span>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   
</div>