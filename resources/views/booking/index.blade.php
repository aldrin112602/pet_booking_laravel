<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Booking List') }}
        </h2>
    </x-slot>

    <div class="mx-auto">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            {{-- start table --}}
            <div class="container mx-auto">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Owner</th>
                            <th
                                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Address</th>
                            <th
                                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Pet Name</th>
                            <th
                                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Pet Birth Date</th>
                            <th
                                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Pet Age</th>
                            <th
                                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                App Date</th>
                            <th
                                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                App Time</th>
                            <th
                                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                App Status</th>
                            <th class="px-6 py-3 bg-gray-50"></th>
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
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
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
