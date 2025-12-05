<div>
    <x-navbar-mini>
        User Management
    </x-navbar-mini>

    {{-- button --}}
    <div class="py-2">
        <button class="bg-primary text-accent px-3 py-2 flex items-center gap-1 rounded text-sm hover:scale-95 transform transition-all duration-200">
            <x-icons.add class="size-3"/>
            <span>Add User</span>
        </button>
    </div>

    {{-- table --}}
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b">
            <tr class="bg-primary text-white">
                <th scope="col" class="py-3 px-6 text-center">
                    No
                </th>
                <th scope="col" class="py-3 px-6">
                    Username
                </th>
                <th scope="col" class="py-3 px-6">
                    Email
                </th>
                <th scope="col" class="py-3 px-6">
                    Role
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>

        <tbody>

            @forelse ($users as $index => $user)
            <tr class="bg-white border-b hover:bg-gray-50 transition duration-200">
                <td class="py-4 px-6 text-center">
                   {{ $users->firstItem() + $index }}
                </td>
                <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                   {{ $user->name }}
                </td>
                <td class="py-4 px-6">
                    {{ $user->email }}
                </td>
                <td class="py-4 px-6">
                    <span class=" {{ $user->role ==='user' ? 'bg-blue-100 text-blue-800' : 'bg-green-100 text-green-800' }} text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                        {{ $user->role == 'user' ? 'User' : 'Admin' }}
                    </span>
                </td>
                <td class="py-4 px-6 space-x-2 flex">
                   <button class="h-8 w-8 bg-primary text-accent rounded flex items-center justify-center hover:scale-95 transform transition-all duration-200">
                    <x-icons.edit class="size-5"/>
                   </button>
                   <button class="h-8 w-8 bg-primary text-accent rounded flex items-center justify-center hover:scale-95 transform transition-all duration-200 group">
                    <x-icons.delete class="size-5"/>
                   </button>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="4" class="py-4 px-6 text-center text-gray-500">
                            Data tidak ditemukan.
                    </td>
                </tr>
             @endforelse
        </tbody>
    </table>
</div>
<div class="mt-4">
        {{ $users->links() }}
    </div>
</div>
