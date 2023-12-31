<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Booking List') }}
        </h2>
    </x-slot>

    <div class="mx-auto">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
                            <th
                                class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Actions</th>
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
                                    <a href="bookings/view/{{ $booking->id }}"
                                        class="text-indigo-600 hover:text-indigo-900 px-3 pb-2 rounded-xl py-1 bg-indigo-200">View</a>
                                    <a href="bookings/approve/{{ $booking->id }}"
                                        class="text-emerald-600 hover:text-emerald-900 px-3 pb-2 rounded-xl py-1 bg-emerald-200">Approve</a>
                                    <a href="bookings/decline/{{ $booking->id }}"
                                        class="text-rose-600 hover:text-rose-900 px-3 pb-2 rounded-xl py-1 bg-rose-200">Decline</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @if (session('success'))
        <script>
            $(document).ready(function() {
                Swal.fire('Success!', '{{ session('success') }}', 'success')
            })
        </script>
    @endif
</x-app-layout>
