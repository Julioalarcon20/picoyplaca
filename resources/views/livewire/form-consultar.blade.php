<div class=" flex justify-center mt-5">
    <form wire:submit='consultar'  class="bg-white w-2/4 rounded-lg py-3">
        <div class="flex flex-col m-5">
            <label for="placa" class=" text-start mb-2" >Placa:</label>
            <input wire:model='placa' type="text" placeholder="Ej:EEE-3212" class=" bg-zinc-white border border-black h-10 px-2 rounded-md">
            {{-- Alertas --}}
            <div class="text-start text-red-600 font-normal text-sm ">@error('placa') {{ $message }} @enderror</div>
        </div>
        <button type="submit" class=" bg-[#3A7D44] w-28 h-12 rounded-lg hover:bg-green-600 duration-150 font-semibold text-white ">Consultar</button>
        <div class="alert alert-success mt-3">
            {{ session('status') }}
        </div>
    </form>
</div>