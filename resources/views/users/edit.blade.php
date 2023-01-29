<x-splade-modal>
    <x-splade-form :default="$user" action="{{ route('users.update', $user->id) }}" method="PUT">
        <x-splade-input class='mb-3' name="name" :label="__('Name')"/>
        <x-splade-input class='mb-3' name="email" :label="__('Email')"/>
        <x-splade-input type="password" name="password" placeholder="password" :label="__('Password')"/>
        <span>Biarkan kosong jika tidak ingin mengganti password</span>
        <div>
            <x-splade-submit class="mt-3" :label="__('Update')" />
        </div>
    </x-splade-form>
</x-splade-modal>
