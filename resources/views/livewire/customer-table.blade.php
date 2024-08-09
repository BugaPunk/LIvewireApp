<div class="overflow-x-auto rounded-lg border border-gray-200 dark:border-gray-700 mt-8">
    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm dark:divide-gray-700 dark:bg-gray-900">
        <thead class="ltr:text-left rtl:text-right">
            <tr>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">#</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">ID</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">Nombre y Apellidos</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">Email</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">Direccion</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">Acciones</th>
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
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200 border-spacing-1"></td>
                  </tr>
                @endforeach
            @endisset
        </tbody>
    </table>
</div>