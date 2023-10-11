<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registered User') }}
        </h2>
    </x-slot>

    <div class="mx-auto">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="table-auto w-full">
                <thead class=" bg-slate-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                {{ $user->id }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                {{ $user->name }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">{{ $user->email }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                <a href="#"
                                    class="text-indigo-600 hover:text-indigo-900 px-3 pb-2 rounded-xl py-1 bg-indigo-200">Edit</a>
                                <a href="#"
                                    class="text-emerald-600 hover:text-emerald-900 px-3 pb-2 rounded-xl py-1 bg-emerald-200">Preview</a>
                                <a href="#"
                                    class="text-rose-600 hover:text-rose-900 px-3 pb-2 rounded-xl py-1 bg-rose-200">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
