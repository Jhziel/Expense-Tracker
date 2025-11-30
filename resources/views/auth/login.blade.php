<x-layout.guest-layout>
    <div class="flex flex-col justify-center sm:h-screen p-4">
        <div class="max-w-md w-full mx-auto border border-gray-300 rounded-2xl p-8">
            <div class="text-center mb-12">
                <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg" alt="logo"
                        class="w-40 inline-block" />
                </a>
            </div>

            <form action="/register" method="POST">
                @csrf
                <div class="space-y-6">


                    <div>
                        <x-form-label>Email</x-form-label>
                        <x-form-input name="email" type="text" placeholder="Enter email" />
                        <x-input-error :messages="$errors->get('email')" />
                    </div>

                    <div>
                        <x-form-label>Password</x-form-label>
                        <x-form-input name="password" type="password" placeholder="Enter password" />
                        <x-input-error :messages="$errors->get('password')" />
                    </div>


                </div>

                <div class="mt-12">
                    <button type="submit"
                        class="w-full py-3 px-4 text-sm tracking-wider font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none cursor-pointer">
                        Login
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-layout.guest-layout>
