<x-user.layout title="Edit User">

    <div class="row">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-6">
                    <h4 class="fw-bold py-3 mb-4">My Profile</h4>
                    <img src="{{ asset('assets/admin/img/LOGO-EMK.png') }}" width="500" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('profile.update', auth()->user()->id) }}" method="POST" autocomplete="off">
                        @csrf
                        @method('PUT')
                        <x-form.input value="{{ auth()->user()->nama }}" label="Name" name="nama" id="nameInput"
                            :required="true" />
                        <x-form.input value="{{ auth()->user()->email }}" type="email" label="Email" name="email"
                            id="emailInput" :required="true" />
                        <x-form.input label="Password" name="password" type="password" id="passwordInput"
                            helperText="If you don't want to change password, leave it blank" />
                        <x-form.input value="{{ auth()->user()->no_hp }}" label="Phone Number" type="tel" name="no_hp"
                            id="phoneInput" :required="true" />
                        <x-form.select label="Gender" name="jk" id="roleSelect" :required="true">
                            <option value="LAKI-LAKI" @if (auth()->user()->jk == 'LAKI-LAKI') selected @endif>LAKI-LAKI</option>
                            <option value="PEREMPUAN" @if (auth()->user()->jk == 'PEREMPUAN') selected @endif>PEREMPUAN</option>
                        </x-form.select>
                        <x-component.button label="Save Changes" :block="true" type="submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-user.layout>
