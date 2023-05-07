@php $editing = isset($message) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="body" label="Body" maxlength="255" required
            >{{ old('body', ($editing ? $message->body : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="target_user" label="Target User">
            @php $selected = old('target_user', ($editing ? $message->target_user : 'client')) @endphp
            <option value="client" {{ $selected == 'client' ? 'selected' : '' }} >Client</option>
            <option value="wakala" {{ $selected == 'wakala' ? 'selected' : '' }} >Wakala</option>
            <option value="admin" {{ $selected == 'admin' ? 'selected' : '' }} >Admin</option>
            <option value="super_admin" {{ $selected == 'super_admin' ? 'selected' : '' }} >Super admin</option>
        </x-inputs.select>
    </x-inputs.group>
</div>
