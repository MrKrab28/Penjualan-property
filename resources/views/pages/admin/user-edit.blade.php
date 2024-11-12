<x-layout title="Edit User">
    <div class="row">
        <div class="col-lg-6 d-none d-lg-block">
            <img src="{{ asset('assets/admin/img/illustrations/server.svg') }}" alt="">
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit User</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.update', $user->id) }}" method="POST" autocomplete="off">
                        @csrf
                        @method('PUT')
                        <x-form.input value="{{ $user->nama }}" label="Name" name="nama" id="nameInput"
                            :required="true" />
                        <x-form.input value="{{ $user->email }}" type="email" label="Email" name="email"
                            id="emailInput" :required="true" />
                        <x-form.input label="Password" name="password" type="password" id="passwordInput"
                            helperText="If you don't want to change password, leave it blank" />
                        <x-form.input value="{{ $user->no_hp }}" label="Phone Number" type="tel" name="no_hp"
                            id="phoneInput" :required="true" />
                        <x-form.select label="Gender" name="jk" id="roleSelect" :required="true">
                            <option value="LAKI-LAKI" @if ($user->jk == 'LAKI-LAKI') selected @endif>LAKI-LAKI</option>
                            <option value="PEREMPUAN" @if ($user->jk == 'PEREMPUAN') selected @endif>PEREMPUAN</option>
                        </x-form.select>
                        <x-component.button label="Save Changes" :block="true" type="submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
