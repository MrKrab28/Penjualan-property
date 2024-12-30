<x-layout title="Users">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title">Users</h5>

            </div>
        </div>
        <div class="card-body">
            <x-component.datatable id="userTable">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th> </th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->no_hp }}</td>

                            <td class="text-center">

                                <x-component.button label="Cetak" href="{{ route('user.cetak', $user->id) }}"
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
