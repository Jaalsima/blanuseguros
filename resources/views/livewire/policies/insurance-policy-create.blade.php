<div class="my-auto">
    <button wire:click="$set('open', true)" class="absolute right-10 top-4 px-4 py-2 rounded-md text-blue-500 bg-blue-100 border border-blue-500 shadow-md hover:shadow-blue-400 hover:bg-blue-400 hover:text-white">
        Nueva Póliza
    </button>

    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            <h2 class="mt-3 text-2xl text-center">Nueva Póliza</h2>
        </x-slot>

        <x-slot name="content">

            <!-- Dropdown para Compañía de Seguros -->
            <x-label value="Compañía de Seguros" class="text-gray-700" />
            <select class="w-full rounded-md" wire:model.lazy="insurance_company_id">
                <option value="">Selecciona una compañía de seguros</option>
                @foreach ($insurance_companies as $company)
                <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
            </select>
            <x-input-error for="insurance_company_id" />

            <!-- Dropdown para Ramo -->
            <x-label value="Ramo" class="text-gray-700" />
            <select class="w-full rounded-md" wire:model.lazy="insurance_line_id">
                <option value="">Selecciona un ramo</option>
                @foreach ($insurance_lines as $line)
                <option value="{{ $line->id }}">{{ $line->name }}</option>
                @endforeach
            </select>
            <x-input-error for="insurance_line_id" />


            <!-- Dropdown para Tomador de Póliza -->
            <x-label value="Tomador de Póliza" class="text-gray-700" />
            <select class="w-full rounded-md" wire:model.lazy="policy_holder_id">
                <option value="">Selecciona un tomador de póliza</option>
                @foreach ($policy_holders as $holder)
                <option value="{{ $holder->id }}">{{ $holder->first_name . ' ' . $holder->last_name }}</option>
                @endforeach
            </select>
            <x-input-error for="policy_holder_id" />

            <!-- Número de Póliza -->
            <x-label value="Número de Póliza" class="text-gray-700" />
            <x-input class="w-full" type="number" wire:model.lazy="policy_number" />
            <x-input-error for="policy_number" />

            <!-- Fecha de Inicio -->
            <x-label value="Fecha de Inicio" class="text-gray-700" />
            <x-input class="w-full" type="date" wire:model.lazy="start_date" />
            <x-input-error for="start_date" />

            <!-- Fecha de Fin -->
            <x-label value="Fecha de Fin" class="text-gray-700" />
            <x-input class="w-full" type="date" wire:model.lazy="end_date" />
            <x-input-error for="end_date" />

            <!-- Monto de Prima -->
            <x-label value="Monto de Prima" class="text-gray-700" />
            <x-input class="w-full" type="number" min="0" wire:model.lazy="premium_amount" />
            <x-input-error for="premium_amount" />

        </x-slot>

        <x-slot name="footer">
            <div class="mx-auto">
                <x-secondary-button wire:click="$set('open', false)" class="mr-4 text-gray-500 border border-gray-500 shadow-lg hover:shadow-gray-400">
                    Cancelar
                </x-secondary-button>
                <x-secondary-button class="text-blue-500 border border-blue-500 shadow-lg hover:shadow-blue-400 disabled:opacity-50 disabled:bg-blue-600 disabled:text-white" wire:click="add" wire:loading.attr="disabled" wire:target="add">
                    Agregar
                </x-secondary-button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
