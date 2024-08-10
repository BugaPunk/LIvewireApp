<div>
    <x-dialog-modal wire:model.live="modalCustomerDelete" submit="edit">
        <x-slot name="title">
            Eliminar
        </x-slot>
    
        <x-slot name="content">
            <p>¿Esta seguro que desea eliminar el usuario {{ $id }} de nombre {{$name}}?</p>
        </x-slot>
    
        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalCustomerDelete', false)" wire:loading.attr="disabled">
                Cancelar
            </x-secondary-button>
    
            <x-danger-button @click="$wire.del()" class="ms-3"  wire:loading.attr="disabled">
                Eliminar
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>
</div>
