<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex align-center justify-between">
            {{ __('Medical History') }}
            <a href="#" onclick="showModal()"
                class="bg-slate-800 text-white px-3 text-sm rounded-md pb-2 pt-2 hover:shadow-lg hover:bg-slate-700">+
                Add</a>
        </h2>
    </x-slot>

    <div class="mx-auto">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
                            Type</th>
                        <th
                            class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Pet Birth Date</th>
                        <th
                            class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Pet Age</th>

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
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $booking->type }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $booking->petbdate }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $booking->petage }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                <a href="history/view/{{ $booking->id }}"
                                    class="text-indigo-600 hover:text-indigo-900 px-3 pb-2 rounded-xl py-1 bg-indigo-200">View</a>
                                <a href="history/edit/{{ $booking->id }}"
                                    class="text-emerald-600 hover:text-emerald-900 px-3 pb-2 rounded-xl py-1 bg-emerald-200">Edit</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        let showModal;
        $(document).ready(function() {
            showModal = function() {
                Swal.fire({
                    title: 'Pet Information',
                    html: `
                    <form id="petForm">
                        <div class="mb-4">
                            <label for="owner" class="block text-gray-700 text-left font-bold">Owner:</label>
                            <input type="text" id="owner" required class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-500" />
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-left font-bold">Email Address:</label>
                            <input type="email" id="email" required class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-500" />
                        </div>
                        <div class="mb-4">
                            <label for="petName" class="block text-gray-700 text-left font-bold">Pet Name:</label>
                            <input type="text" id="petName" required class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-500" />
                        </div>
                        <div class="mb-4">
                            <label for="petType" class="block text-gray-700 text-left font-bold">Type:</label>
                            <input type="text" id="petType" required class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-500" />
                        </div>
                        <div class="mb-4">
                            <label for="birthday" class="block text-gray-700 text-left font-bold">Birthday:</label>
                            <input type="date" id="birthday" required class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-500" />
                        </div>
                    </form>
                `,
                    showCancelButton: true,
                    confirmButtonText: 'Save',
                    showLoaderOnConfirm: true,
                    preConfirm: () => {
                        const owner = document.getElementById('owner').value;
                        const email = document.getElementById('email').value;
                        const petName = document.getElementById('petName').value;
                        const petType = document.getElementById('petType').value;
                        const birthday = document.getElementById('birthday').value;

                      
                        console.log('Owner:', owner);
                        console.log('Email:', email);
                        console.log('Pet Name:', petName);
                        console.log('Type:', petType);
                        console.log('Birthday:', birthday);

                      

                        return new Promise((resolve) => {
                            setTimeout(() => {
                                resolve();
                            }, 2000);
                        });
                    }
                });
            }
        })
    </script>
</x-app-layout>
