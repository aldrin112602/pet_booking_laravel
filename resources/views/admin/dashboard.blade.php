<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">
            {{ __('Registered Admin') }}
            <a href="#" class="bg-slate-800 text-white px-3 text-sm rounded-md pb-2 pt-2 hover:shadow-lg hover:bg-slate-700">+ Add Admin</a>
        </h2>
    </x-slot>

    <div class="mx-auto">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="table-auto w-full">
                <thead class=" bg-slate-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $admin)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">{{ $admin->id }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">{{ $admin->name }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">{{ $admin->email }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
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
    </div>
</x-app-layout>