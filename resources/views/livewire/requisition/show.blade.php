<div class="container mx-auto py-3 mt-3">
    <div class="row row-cols-1 text-center">
        <h1>Meus requerimentos</h1>
        <h1>livewire / requisition /show</h1>
        <x-jet-button wire:click="ShowReportModal">{{ __('Reporter')}}</x-jet-button>
        <x-jet-dialog-modal wire:model="ModalFormVisible">
            <x-slot name="title">
                Delete Account
            </x-slot>
        
            <x-slot name="content">
                Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted.
            </x-slot>
        
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('ModalFormVisible')" wire:loading.attr="disabled">
                    Nevermind
                </x-jet-secondary-button>
        
                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                    Delete Account
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>
</div>