<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Booking List') }}
        </h2>
    </x-slot>

    <div class="mx-auto p-0" style="min-width: 100vw;">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-0">
            {{-- start table --}}
            <div class="p-0">
                <table class="min-w-full">
                    <thead class=" bg-slate-100">
                        <tr>
                            <th
                                class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Owner</th>
                            <th
                                class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Address</th>
                            <th
                                class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Pet Name</th>
                            <th
                                class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Pet Birth Date</th>
                            <th
                                class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Pet Age</th>
                            <th
                                class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                App Date</th>
                            <th
                                class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                App Time</th>
                            <th
                                class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                App Status</th>
                            <th class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $booking->fname }} {{ $booking->lname }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $booking->address }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $booking->petname }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $booking->petbdate }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $booking->petage }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $booking->app_date }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $booking->app_time }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $booking->status }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900 px-3 pb-2 rounded-xl py-1 bg-indigo-200">Edit</a>
                                    <a href="#" class="text-emerald-600 hover:text-emerald-900 px-3 pb-2 rounded-xl py-1 bg-emerald-200">Preview</a>
                                    <a href="#" class="text-rose-600 hover:text-rose-900 px-3 pb-2 rounded-xl py-1 bg-rose-200">Delete</a>
                                    <!-- Add edit link or button here -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            {{-- end table --}}
        </div>
    </div>
</x-app-layout>
