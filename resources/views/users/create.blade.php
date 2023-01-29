<x-splade-modal>
    <x-splade-form>
        <x-splade-input name="name" placeholder="Name" :label="__('Name')"/>
        <x-splade-input name="email" placeholder="e-mail" :label="__('e-mail')"/>
        <x-splade-input type="password" name="password" placeholder="password" :label="__('Password')"/>
        <x-splade-submit class="mt-3" :label="__('Add User')" />
    </x-splade-form>
</x-splade-modal>
