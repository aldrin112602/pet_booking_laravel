<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex align-center justify-between">
            {{ __('Medical History/view') }}
            <a href="#" onclick="showModal()"
                class="bg-slate-800 text-white px-3 text-sm rounded-md pb-2 pt-2 hover:shadow-lg hover:bg-slate-700">+
                Add</a>
        </h2>
    </x-slot>

    <div class="mx-auto">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h4 class="text-lg pt-4 px-3">Pet name: {{ $booking->petname }}</h4>
            <h4 class="text-lg px-3">Type: {{ $booking->type }}</h4>
            <h4 class="text-lg pb-2 px-3">Birthday: {{ $booking->petbdate }}</h4>
            <table class="min-w-full">
                <thead class=" bg-slate-100">
                    <tr>
                        <th
                            class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Reason for visiting</th>
                        <th
                            class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Date</th>
                        <th
                            class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Diagnosis</th>
                        <th
                            class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Medicines Given</th>
                        <th
                            class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Doctor</th>

                        <th
                            class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap">Lorem ipsum</td>
                        <td class="px-6 py-4 whitespace-no-wrap">10-13-23</td>
                        <td class="px-6 py-4 whitespace-no-wrap">N/A</td>
                        <td class="px-6 py-4 whitespace-no-wrap">Aqua dox 2x a day</td>
                        <td class="px-6 py-4 whitespace-no-wrap">Dr. Revilla</td>
                        <td class="px-6 py-4 whitespace-no-wrap">
                            <a href="#"
                                class="text-emerald-600 hover:text-emerald-900 px-3 pb-2 rounded-xl py-1 bg-emerald-200">Edit</a>
                        </td>
                    </tr>

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
                    <!-- New Fields -->
                    <div class="mb-4">
                        <label for="reason" class="block text-gray-700 text-left">Reason for Visiting:</label>
                        <input type="text" id="reason" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-500" />
                    </div>
                    <div class="mb-4">
                        <label for="date" class="block text-gray-700 text-left">Date:</label>
                        <input type="date" id="date" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-500" />
                    </div>
                    <div class="mb-4">
                        <label for="diagnosis" class="block text-gray-700 text-left">Diagnosis:</label>
                        <input type="text" id="diagnosis" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-500" />
                    </div>
                    <div class="mb-4">
                        <label for="medicines" class="block text-gray-700 text-left">Medicines:</label>
                        <input type="text" id="medicines" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-500" />
                    </div>
                    <div class="mb-4">
                        <label for="doctor" class="block text-gray-700 text-left">Doctor:</label>
                        <input type="text" id="doctor" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-500" />
                    </div>
                </form>
            `,
                    showCancelButton: true,
                    confirmButtonText: 'Save',
                    showLoaderOnConfirm: true,
                    preConfirm: () => {
                        
                    }
                });
            }
        })
    </script>
</x-app-layout>
