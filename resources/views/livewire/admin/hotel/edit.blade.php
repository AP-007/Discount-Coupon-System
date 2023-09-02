<form wire:submit.prevent="update" class="px-10 py-5">
    <!-- Modal body -->
    <div class="mt-4 mb-6">
        <!-- Modal title -->
        <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300 text-center">
            Edit a Hotel
        </p>
        <!-- Modal description -->
        <p class="text-sm text-gray-700 dark:text-gray-400 ">
        <div class=" px-10 py-5 mb-8 bg-white rounded-sm shadow-md dark:bg-gray-800">
            <div class="grid grid-cols-2 gap-4">
                <div class="block text-sm">
                    <label for="name">
                        <span class="text-gray-700 dark:text-gray-400">Hotel Name</span>
                        <input wire:model="name" name="name" id="name"
                            class="block w-full mt-1 text-sm @if ($errors->has('name')) border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                @else
                dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray @endif  dark:bg-gray-700  dark:text-gray-300  form-input" />
                    </label>
                    @error('name')
                        <span class="text-xs text-red-600 dark:text-red-400"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="block text-sm">
                    <label>
                        <span class="text-gray-700 dark:text-gray-400">Email</span>
                        <input wire:model="email"
                            class="block w-full mt-1 text-sm @if ($errors->has('email')) border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
        @else
        dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray @endif  dark:bg-gray-700  dark:text-gray-300  form-input" />
                    </label>
                    @error('email')
                        <span class="text-xs text-red-600 dark:text-red-400"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="block text-sm">
                    <label class="block text-sm mt-2">
                        <span class="text-gray-700 dark:text-gray-400">Description</span>
                        <input type="text" wire:model="description"
                            class="block w-full mt-1 text-sm @if ($errors->has('description')) border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
        @else
        dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray @endif  dark:bg-gray-700  dark:text-gray-300  form-input" />
                    </label>
                    @error('description')
                        <span class="text-xs text-red-600 dark:text-red-400"> {{ $message }}</span>
                    @enderror
                </div>



            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="block text-sm mt-2">
                    <label>
                        <span class="text-gray-700 dark:text-gray-400">Province</span>
                        <select wire:model="selectedProvince"
                            class="block w-full mt-1 text-sm @if ($errors->has('selectedProvince')) border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
        @else
        dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray @endif  dark:bg-gray-700  dark:text-gray-300  form-input" />
                        <option value="">
                            <--Select a Province-->
                        </option>

                        @foreach ($provinces as $province)
                            <option value="{{ $province->id }}">{{ $province->name }} </option>
                        @endforeach
                        </select>
                    </label>
                    @error('selectedProvince')
                        <span class="text-xs text-red-600 dark:text-red-400"> The Province field is required</span>
                    @enderror
                </div>

                <div class="block text-sm mt-2">
                    <label>
                        <span class="text-gray-700 dark:text-gray-400">District</span>

                        <select wire:model="selectedDistrict"
                            class="block w-full mt-1 text-sm @if ($errors->has('selectedDistrict')) border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
        @else
        dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray @endif  dark:bg-gray-700  dark:text-gray-300  form-input" />
                        @if ($districts->count() == 0)
                            <option value="">
                                <--Select a Province first-->
                            </option>
                        @endif

                        @foreach ($districts as $district)
                            <option value="{{ $district->id }}">{{ $district->name }} </option>
                        @endforeach
                        </select>
                    </label>
                    @error('selectedDistrict')
                        <span class="text-xs text-red-600 dark:text-red-400"> The District field is required</span>
                    @enderror
                </div>


                <div class="block text-sm mt-3">
                    <label>
                        <span class="text-gray-700 dark:text-gray-400">Municipality</span>
                        <div
                            class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input type="text" wire:model="municipality"
                                class="block w-full mt-1 text-sm @if ($errors->has('municipality')) border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                            @else
                            dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray @endif  dark:bg-gray-700  dark:text-gray-300  form-input" />
                        </div>
                    </label>
                    @error('municipality')
                        <span class="text-xs text-red-600 dark:text-red-400"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="block text-sm mt-3">
                    <label>
                        <span class="text-gray-700 dark:text-gray-400">Ward</span>
                        <div
                            class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input type="number" min="0" max="32" wire:model="ward_no" min="0"
                                class="block w-full mt-1 text-sm @if ($errors->has('ward_no')) border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
            @else
            dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray @endif  dark:bg-gray-700  dark:text-gray-300  form-input" />
                        </div>
                    </label>
                    @error('ward_no')
                        <span class="text-xs text-red-600 dark:text-red-400"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="block text-sm mt-3">
                    <label>
                        <span class="text-gray-700 dark:text-gray-400">Tole</span>
                        <div
                            class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input type="text" wire:model="tole"
                                class="block w-full mt-1 text-sm @if ($errors->has('tole')) border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
            @else
            dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray @endif  dark:bg-gray-700  dark:text-gray-300  form-input" />
                        </div>
                    </label>
                    @error('tole')
                        <span class="text-xs text-red-600 dark:text-red-400"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="block text-sm mt-3">
                    <label>
                        <span class="text-gray-700 dark:text-gray-400">PAN NUMBER</span>
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input type="text" wire:model="pan"
                            class="block w-full mt-1 text-sm @if ($errors->has('pan')) border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                            @else
                            dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray @endif  dark:bg-gray-700  dark:text-gray-300  form-input" />
                                     </div>
                    </label>
                    @error('pan')
                        <span class="text-xs text-red-600 dark:text-red-400"> {{ $message }}</span>
                    @enderror
                </div>
                

            </div>
        </div>

        </p>

        <footer
            class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">

            <button type="submit" wire:target="store"
                class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Edit a Hotel
            </button>
        </footer>
    </div>
</form>
