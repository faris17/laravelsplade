<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <Link modal href="{{ route('users.create') }}" class="px-4 py-1 bg-gray-100 border border-gray-400 rounded-md text-gray-600 hover:bg-gray-200">New Post  </Link>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-table :for="$users">
                        <x-splade-cell actions>
                            <Link modal href="{{ route('users.edit', $item->id) }}" class="px-4 py-1 bg-indigo-100 border border-indigo-400 rounded-md text-indigo-600 hover:bg-indigo-200 mr-4">Edit</Link>
                            &nbsp;
                            <Link confirm="Are you sure?" href="{{ route('users.destroy', $item->id) }}" method="DELETE" class="px-4 py-1 bg-red-100 border border-red-400 rounded-md text-red-600 hover:bg-red-200 mr-4">Delete</Link>
                        </x-splade-cell>
                    </x-splade-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
