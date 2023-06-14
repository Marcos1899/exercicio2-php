<section>
    <h1 class="text-2xl text-green-700 font-medium text-center">Gestores</h1>

    <div class="flex justify-start items-center">

        <input class="mr-4 mt-1 block w-1/4 rounded-md border-green-600 shadow-sm focus:border-green-600 focus:ring-green-800 focus:ring-opacity-50"  type="text" wire:model="pesquisa" >

        <x-loading wire:loading/>

    </div>

    <x-admin.botao-adicionar href='/gestores/criar' />


    <table class="bg-gradient-to-r from-green-800 to-green-600 mx-auto m-5 w-full rounded text-green-50  ">
        <thead>
            <tr class="text-left border-b border-green-600">
                <th class="px-4 py-3">Nome</th>
                <th class="px-4 py-3">CPF</th>
                <th class="px-4 py-3">Telefone</th>
                <th class="px-4 py-3">E-mail</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($gestores as $gestor)

               <tr class="bg-green-700 border-b border-green-600 hover:bg-green-800">
                <td class="px-4 py-3">{{$gestor->name}}</td>
                <td class="px-4 py-3">{{$gestor->CPF}}</td>
                <td class="px-4 py-3">{{$gestor->telephone}}</td>
                <td class="px-4 py-3">{{$gestor->email}}</td>
               </tr>
            @empty

                <tr class="text-left border-b border-green-600">
                    <td colspan="4" class="px-4 py-3"> Não existe este gestor cadastrado</td>
                </tr>

            @endforelse
        </tbody>
    </table>
</section>
