<form wire:submit.prevent="store">
    <div class="mt-4 mb-6 px-10 py-5">
        <!-- Modal title -->
        <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300 text-center">
            Customer's Details
        </p>
        <!-- Modal description -->
        <p class="text-sm text-gray-700 dark:text-gray-400">
        <div class="px-10 py-10 mb-8 bg-white shadow-md dark:bg-gray-800">
            <div class="grid grid-cols-2 gap-4">
                <div class="block text-sm">
                    <label for="name">
                        <span class="text-gray-700 dark:text-gray-400">Customer Name <i style="color: red">*</i> </span>
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
                        <span class="text-gray-700 dark:text-gray-400">Phone<i style="color: red">*</i></span>
                        <input type="number" wire:model="phone"
                            class="block w-full mt-1 text-sm @if ($errors->has('phone')) border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
        @else
        dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray @endif  dark:bg-gray-700  dark:text-gray-300  form-input" />
                    </label>
                    @error('phone')
                        <span class="text-xs text-red-600 dark:text-red-400"> {{ $message }}</span>
                    @enderror
                </div>
                
            </div>

        </div>

        </p>
    
    <footer
        class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">

        <button type="submit"
            class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Add a Customer
        </button>
    </footer>
</div>
</form>
