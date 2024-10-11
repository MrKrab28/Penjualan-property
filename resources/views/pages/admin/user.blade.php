<x-layout title="Users">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title">Users</h5>
                <x-form.modal label="New user" title="Form User" action="{{ route('user.store') }}">
                    <x-form.input label="Name" name="nama" id="nameInput" :required="true" />
                    <x-form.input label="Email" type="email" name="email" id="emailInput" :required="true" />
                    <x-form.input label="Password" name="password" type="password" id="passwordInput"
                        :required="true" />
                    <x-form.input label="Phone Number" type="tel" name="no_hp" id="phoneInput"
                        :required="true" />
                    <x-form.select label="Gender" name="jk" id="roleSelect" :required="true">
                        <option value="LAKI-LAKI" >LAKI-LAKI</option>
                        <option value="PEREMPUAN" >PEREMPUAN</option>
                    </x-form.select>
                </x-form.modal>
            </div>
        </div>
        <div class="card-body">
            <x-component.datatable id="userTable">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->no_hp }}</td>

                            <td class="text-center">

                                <x-component.button label="Edit" href="{{ route('user.edit', $user->id) }}"
                                    :small="true" />
                                <form action="{{ route('user.destroy', $user->id) }}" class="d-inline" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <x-component.button type="submit" label="Delete" color="danger"
                                        :small="true" />
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </x-component.datatable>
        </div>
    </div>
</x-layout>
