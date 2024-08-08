<div>
    <x-button @click="$wire.set('modalCustomerCreate', true)">
        Create Customer
    </x-button>

    <x-dialog-modal wire:model.live="modalCustomerCreate" submit="save">
        <x-slot name="title">
            Formulario de Registro
        </x-slot>
    
        <x-slot name="content">
            <div class="grid grid-cols-12 gap-4">
                <!-- Name -->
                <div class="col-span-12">
                    <x-label for="form.name" value="Nombre" />
                    <x-input wire:model='form.name' id="form.name" type="text" class="mt-1 w-full" require autocomplete="form.name" />
                    <x-input-error for="form.name" class="mt-1" />
                </div>

                <!-- Email -->
                <div class="col-span-12">
                    <x-label for="form.email" value="Correo" />
                    <x-input wire:model='form.email' id="form.email" type="text" class="mt-1 w-full" require autocomplete="form.email" />
                    <x-input-error for="form.email" class="mt-1" />
                </div>

                <!-- Address -->
                <div class="col-span-12">
                    <x-label for="form.address" value="Direccion" />
                    <x-input wire:model='form.address' id="form.address" type="text" class="mt-1 w-full" require autocomplete="form.address" />
                    <x-input-error for="form.address" class="mt-1" />
                </div>
            </div>
        </x-slot>
    
        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalCustomerCreate', false)" wire:loading.attr="disabled">
                Cancelar
            </x-secondary-button>
    
            <x-button class="ms-3"  wire:loading.attr="disabled">
                Guardar
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
