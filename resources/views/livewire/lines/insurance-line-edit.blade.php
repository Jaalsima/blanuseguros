<div class="relative inline-block text-center cursor-pointer group">
    <a href="#" wire:click="edit({{ $lineId }})">
        <i class="p-1 text-blue-400 rounded hover:text-white hover:bg-blue-500 fa-solid fa-pen-to-square"></i>
        <div class="absolute z-10 px-3 py-2 mb-2 text-center text-white bg-gray-700 rounded-lg opacity-0 pointer-events-none text-md group-hover:opacity-80 bottom-full -left-6">
            Editar
            <svg class="absolute left-0 w-full h-2 text-black top-full" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve">
            </svg>
        </div>
    </a>

    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            <h2 class="mt-3 text-2xl text-center">Actualizar Ramo</h2>
        </x-slot>

        <div class="w-1">
            <x-slot name="content">

                <form wire:submit.prevent="update" enctype="multipart/form-data">
                    <!-- Compañía de Seguros -->
                    <div class="mt-4">
                        <x-label value="Compañía de Seguros" class="text-gray-700" />
                        <select class="w-full mb-4 rounded-md" wire:model.defer="insurance_company_id">
                            <option disabled>-- Selecciona una compañía de seguros --</option>
                            @foreach($insurance_companies as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error for="insurance_company_id" />
                    </div>

                    <!-- Nombre -->
                    <div class="mt-4">
                        <x-label value="Nombre" class="text-gray-700" />
                        <x-input class="w-full" wire:model.defer="name" />
                        <x-input-error for="name" />
                    </div>

                    <!-- Descripción -->
                    <div class="mt-4">
                        <x-label value="Descripción" class="text-gray-700" />
                        <textarea class="w-full" wire:model.defer="description"></textarea>
                        <x-input-error for="description" />
                    </div>

                    <!-- Estado -->
                    <div class="mt-4">
                        <x-label value="Estado" class="text-gray-700" />
                        <select class="w-full mb-4 rounded-md" wire:model.defer="is_active">
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                        <x-input-error for="is_active" />
                    </div>

                    <!-- Imagen -->
                    <div class="mt-4">
                        <x-label value="Imagen" class="text-gray-700" />
                        <input type="file" wire:model="image" class="w-full">
                        <x-input-error for="image" />
                        @if($image)
                        <img class="object-cover w-full h-32 mt-2" src="{{ $image->temporaryUrl() }}" alt="Imagen del Ramo">
                        @else
                        <img class="object-cover w-full h-32 mt-2" src="{{ asset('storage/' . $insuranceLine->image) }}" alt="Imagen del Ramo">
                        @endif
                    </div>

                </form>
            </x-slot>
        </div>

        <x-slot name="footer">
            <div class="mx-auto">
                <x-secondary-button wire:click="$set('open', false)" class="mr-4 text-gray-500 border border-gray-500 shadow-lg hover:shadow-gray-400">
                    Cancelar
                </x-secondary-button>
                <x-secondary-button class="text-blue-500 border border-blue-500 shadow-lg hover:shadow-blue-400 disabled:opacity-25" wire:click="update" wire:loading.attr="disabled">
                    Actualizar
                </x-secondary-button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
