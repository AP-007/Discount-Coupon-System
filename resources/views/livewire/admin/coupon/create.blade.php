    <form wire:submit.prevent="store">
        <div class="mt-4 mb-6 px-10">
            <!-- Modal title -->
            <p class="mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300 text-center">
                Add a Coupon
            </p>

            <!-- Modal description -->
            <p class="text-sm text-gray-700 dark:text-gray-400">
            <div class="px-4 py-10 mb-8 bg-white rounded-sm shadow-md dark:bg-gray-800">
                <div class="grid grid-cols-2 gap-4">
                    <div class="block text-sm">
                        <label>
                            <span class="text-gray-700 dark:text-gray-400">Coupon Code</span>
                            <input wire:model="code" name="code" id="code"
                                class="block w-full mt-1 text-sm @if ($errors->has('code')) border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                            @else
                            dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray @endif  dark:bg-gray-700  dark:text-gray-300  form-input" />
                        </label>
                        @error('code')
                            <span class="text-xs text-red-600 dark:text-red-400"> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="block text-sm">
                        <label>
                            <span class="text-gray-700 dark:text-gray-400">Coupon Description</span>
                            <input wire:model="description"
                                class="block w-full mt-1 text-sm @if ($errors->has('description')) border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                        @else
                        dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray @endif  dark:bg-gray-700  dark:text-gray-300  form-input" />
                        </label>
                        @error('description')
                            <span class="text-xs text-red-600 dark:text-red-400"> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="block text-sm mt-2">
                        <label>
                            <span class="text-gray-700 dark:text-gray-400">Number of user</span>
                            <input type="number" wire:model="no_of_users"
                                class="block w-full mt-1 text-sm @if ($errors->has('no_of_users')) border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
        @else
        dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray @endif  dark:bg-gray-700  dark:text-gray-300  form-input" />
                        </label>
                        @error('no_of_users')
                            <span class="text-xs text-red-600 dark:text-red-400"> {{ $message }}</span>
                        @enderror
                    </div>

                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Max Discount</span>
                        <div
                            class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input type="number" wire:model="discount_limit"
                                class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" />
                            <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                                Rs.
                            </div>
                        </div>
                    </label>

                    <label class="block text-sm mt-2">
                        <span class="text-gray-700 dark:text-gray-400">Discount Type</span>
                        <select wire:model="discount_type"
                            class="block w-full mt-1 text-sm @if ($errors->has('discount_type')) border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                        @else
                        dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray @endif  dark:bg-gray-700  dark:text-gray-300  form-input" />
                        <option value="0">Percentage</option>
                        <option value="1">Amount</option>
                        </select>
                    </label>

                    @if ($discount_type == 0)
                        <div class="block text-sm mt-2">
                            <label>
                                <span class="text-gray-700 dark:text-gray-400">Discount Percentage</span>
                                <div
                                    class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                    <input type="number" wire:model="discount" min="0" max="100"
                                        class="block w-half mt-1 text-sm @if ($errors->has('discount')) border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                                    @else
                                    dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray @endif  dark:bg-gray-700  dark:text-gray-300  form-input" />
                                    <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                                        %
                                    </div>
                                </div>
                            </label>
                            @error('discount')
                                <span class="text-xs text-red-600 dark:text-red-400"> {{ $message }}</span>
                            @enderror
                        </div>
                    @elseif($discount_type == 1)
                        <div class="block text-sm mt-3">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Discount Amount</span>
                                <div
                                    class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                    <input type="number" wire:model="discount"
                                        class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" />
                                    <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                                        Rs.
                                    </div>
                                </div>
                            </label>

                            @error('discount')
                                <span class="text-xs text-red-600 dark:text-red-400"> {{ $message }}</span>
                            @enderror
                        </div>
                    @endif


                    <div class="block text-sm py-4">
                        <span class="text-gray-700 dark:text-gray-400">
                            Select a Hotel
                        </span>
                        <label>
                            <select wire:model="hotel_id" multiple="multiple"
                                class="block w-full mt-1 text-sm @if ($errors->has('hotel_id')) border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                        @else
                        dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray @endif  dark:bg-gray-700  dark:text-gray-300  form-input" />
                            <option value="">
                                <--Select a Hotel-->
                            </option>

                            @foreach ($hotels as $hotel)
                                <option value="{{ $hotel->id }}">{{ strtoupper($hotel->name) }} </option>
                            @endforeach

                            </select>
                        </label>
                        @error('hotel_id')
                            <span class="text-xs text-red-600 dark:text-red-400"> {{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="grid grid-cols-2 gap-4">
                    <label class="block text-sm mt-3">
                        <span class="text-gray-700 dark:text-gray-400">Start Date</span>
                        <input type="date" wire:model="start_date"
                            class="block w-full mt-1 text-sm @if ($errors->has('start_date')) border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                        @else
                        dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray @endif  dark:bg-gray-700  dark:text-gray-300  form-input" />
                    </label>
                    @error('start_date')
                        <span class="text-xs text-red-600 dark:text-red-400"> {{ $message }}</span>
                    @enderror

                    <label class="block text-sm mt-3">
                        <span class="text-gray-700 dark:text-gray-400">End Date</span>
                        <input wire:model="end_date" type="date"
                            class="block w-full mt-1 text-sm @if ($errors->has('end_date')) border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                        @else
                        dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray @endif  dark:bg-gray-700  dark:text-gray-300  form-input" />
                    </label>
                    @error('end_date')
                        <span class="text-xs text-red-600 dark:text-red-400"> {{ $message }}</span>
                    @enderror
                </div>
            </div>

            </p>

            <footer
                class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">

                <button type="submit" wire:target="store"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Add a Coupon
                </button>
            </footer>
        </div>
    </form>
