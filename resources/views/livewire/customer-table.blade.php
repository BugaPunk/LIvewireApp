<div class="overflow-x-auto">

    <div class="mt-8">
        <label for="Paginación" class="block text-sm mt-4 font-medium text-gray-900 dark:text-white"> Paginación </label>
    
        <x-select wire:model.live='paginate' name="Paginación" id="Paginación"
            class="text-sm mt-2">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </x-select>
    </div>

    <table class="min-w-full mt-8 divide-y-2 rounded-lg border border-gray-200 dark:border-gray-700 divide-gray-200 bg-white text-sm dark:divide-gray-700 dark:bg-gray-900">
        <thead class="ltr:text-left rtl:text-right">
            <tr>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">#</th>
                <th @click="$wire.sortField('id')" class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
                    <x-sort :$sortDirection :$sortBy :field="'id'" /> ID
                </th>
                <th @click="$wire.sortField('name')" class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
                    <x-sort :$sortDirection :$sortBy :field="'name'" /> Nombre(s) y Apellidos
                </th>
                <th @click="$wire.sortField('email')" class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
                    <x-sort :$sortDirection :$sortBy :field="'email'" /> Email
                </th>
                <th @click="$wire.sortField('address')" class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
                    <x-sort :$sortDirection :$sortBy :field="'address'" /> Direccion
                </th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">Acciones</th>
            </tr>
            <tr class="bg-white text-sm dark:bg-slate-900">
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white"></td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
                    <x-input-search wire:model.live='form.id' type="search" placeholder="Ingrese un nro identificador" />
                </td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
                    <x-input-search wire:model.live='form.name' type="search"  placeholder="Ingrese algun nombre u apellido" />
                </td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
                    <x-input-search wire:model.live='form.email' type="search"  placeholder="Ingrese un Correo" />
                </td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
                    <x-input-search wire:model.live='form.address' type="search"  placeholder="Ingrese una direccion" />
                </td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white"></td>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            @isset($data)
                @foreach ($data as $customer)
                <tr class="odd:bg-gray-50 dark:odd:bg-gray-800/50">
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white text-center">{{ $loop -> iteration }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200 border-spacing-1 text-center">{{ $customer -> id }}</td>
                    <td class="whitespace-nowrap px-6 py-2 text-gray-700 dark:text-gray-200 border-spacing-1">{{ $customer -> name }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200 border-spacing-1">{{ $customer -> email }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200 border-spacing-1">{{ $customer -> address }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200 border-spacing-1">
                        <x-button @click="$dispatch('dispatch-customer-table-edit', { id: '{{$customer -> id}}' })" type="button">Edit</x-button>
                        <x-danger-button @click="$dispatch('dispatch-customer-table-delete', { id: '{{$customer -> id}}', name: '{{ $customer -> name }}' })">Eliminar</x-danger-button>
                    </td>
                </tr>
                @endforeach
            @endisset
        </tbody>
    </table>

    <div class="mt-3 p-3">
        {{ $data -> onEachSide(1)->links() }}
    </div>

</div>