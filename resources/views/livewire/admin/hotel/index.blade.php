<div>
    <div class="float-right">
        <a type="button" href="{{ route('admin.hotels.create') }}"
            class="px-2 m-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Add a Hotel
        </a>
    </div>
    <div class="w-full overflow-hidden rounded-lg px-5 shadow-xs m-2">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-2 py-3 text-center">Hotel Name</th>
                        <th class="px-2 py-3 text-center">Email</th>
                        <th class="px-2 py-3 text-center">Location</th>
                        <th class="px-2 py-3 text-center">PAN NUMBER</th>
                        <th class="px-2 py-3 text-center">Actions</th>
                    </tr>
                </thead>

                @foreach ($hotels as $hotel)
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-2 py-3 text-sm text-center font-semibold">
                                {{ $hotel->name }}
                            </td>

                            <td class="px-2 py-3 text-sm text-center">
                                {{ $hotel->email }}
                            </td>

                            <td class="px-2 py-3 text-sm text-center">
                                {{ $hotel->municipality }}-{{ $hotel->ward_no }},{{ $hotel->tole }},{{ $hotel->district->name }}
                            </td>

                            <td class="px-2 py-3 text-sm text-center">
                                {{ $hotel->pan }}
                            </td>

                            <td class="px-2 py-3">
                                <div class="flex items-center space-x-4 text-sm">
                                    <a href="{{ route('admin.hotels.edit', $hotel->id) }}"
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Edit">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a wire:click.prevent="deleteConfirm({{ $hotel->id }})"
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>

                                    <a href="{{ route('admin.hotels.show',$hotel->id) }}"
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray">
                                        <svg class="h-8 w-8 text-red-500" width="10" height="10"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <circle cx="12" cy="12" r="2" />
                                            <path d="M2 12l1.5 2a11 11 0 0 0 17 0l1.5 -2" />
                                            <path d="M2 12l1.5 -2a11 11 0 0 1 17 0l1.5 2" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                @endforeach

            </table>
        </div>

    </div>
</div>