<div>
    <label for="name" class="block text-sm font-medium text-gray-700">Razão Social / Nome <span
            class="text-red-500">*</span></label>
    <input type="text" name="name" id="name" value="{{ old('name', $supplier->name ?? '') }}"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm border p-2"
        placeholder="Ex: Amazon Web Services, João Designer">
    @error('name')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    <div>
        <label for="cnpj" class="block text-sm font-medium text-gray-700">CNPJ (Opcional)</label>
        <input type="text" name="cnpj" x-data x-init="IMask($el, { mask: '00.000.000/0000-00' })"
            value="{{ old('cnpj', $supplier->cnpj ?? '') }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm border p-2"
            placeholder="00.000.000/0001-00" id="cnpj">
        @error('cnpj')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="phone" class="block text-sm font-medium text-gray-700">Telefone / Contato (Opcional)</label>
        <input type="text" name="phone" x-data x-init="IMask($el, {
            mask: [
                { mask: '(00) 0000-0000' },
                { mask: '(00) 00000-0000' }
            ]
        })"
            value="{{ old('phone', $supplier->phone ?? '') }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm border p-2"
            placeholder="Ex: (11) 99999-9999">
        @error('phone')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>

</div>
