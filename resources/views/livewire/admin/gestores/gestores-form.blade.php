<div>
    <h1 class="text-2xl text-green-700 font-medium text-center">Formulário de Gestores</h1>

    <form class="mt-4 flex flex-col space-y-4" wire:submit.prevent="salvar">
        <label>
            <span class="text-gray-700">Nome</span>
            <x-admin.input type="text" wire:model="name"/>
        </label>

        <label>
            <span class="text-gray-700">CPF</span>
            <x-admin.input type="text" wire:model="CPF"/>
        </label>

        <label>
            <span class="text-gray-700">Telefone</span>
            <x-admin.input type="text" wire:model="telephone"/>
        </label>

        <label>
            <span class="text-gray-700">E-mail</span>
            <x-admin.input type="text" wire:model="email"/>
        </label>


        <div class="self-end">
            <x-admin.button-submit/>
        </div>

    </form>
</div>
