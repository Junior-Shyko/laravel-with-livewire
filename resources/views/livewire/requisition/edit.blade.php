<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap">
                <div class="container grid grid-cols-2">
                    <div class="lg:col-span-12 sm:col-span-6 border-solid border-2 border-indigo-600 bg-green-900">direita</div>
                    <div class="col-span-4 lg:col-span-4 sm:col-span-12">esquerda</div>
                </div>
            </div>
        </div>
        <x-jet-button wire:click="ShowReportModal">{{ __('Reporter')}}</x-jet-button>
        <x-jet-confirmation-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                Delete Account
            </x-slot>
        
            <x-slot name="content">
                Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted.
            </x-slot>
        
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    Nevermind
                </x-jet-secondary-button>
        
                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                    Delete Account
                </x-jet-danger-button>
            </x-slot>
        </x-jet-confirmation-modal>
</x-app-layout>