<x-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-50">
        <div class="bg-white shadow-lg rounded-lg p-10 flex flex-col md:flex-row items-center max-w-4xl w-full">
            {{-- form --}}
            <div class="md:w-1/2 p-5">
                <div class="flex flex-col items-center mb-6">
                    <img src="{{ asset('img/badung.png') }}" alt="Logo" class="w-24 h-24 mb-4">
                </div>
                <form method="POST" action="{{ route('login') }}"class="space-y-4">
                    @csrf
                    <div>
                        <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
                        <input type="text" name="nik" id="nik" required class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="relative">
                            <input type="password" name="password" id="password" required class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                    </div>
                    <div class="flex space-x-4">
                        <a href="{{ route('home') }}" class="flex-1 bg-blue-100 text-blue-600 py-2 rounded-lg text-center hover:bg-blue-200">Ke Halaman Utama</a>
                        <button type="submit" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Login</button>
                    </div>
                </form>
            </div>

            <div class="md:w-1/2 flex justify-center p-5">
                <img src="{{ asset('img/pns.png') }}" alt="PNS Illustration" class="max-w-full h-auto">
            </div>
        </div>
    </div>
</x-layout>
