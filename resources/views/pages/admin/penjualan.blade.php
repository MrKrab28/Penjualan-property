<x-layout title="Properties">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title">Properties</h5>

            </div>
        </div>
        <div class="card-body">
            <x-component.datatable id="propertyTable">
                <thead>
                    <th>#</th>
                    <th>Property</th>
                    <th>Type</th>
                    <th>Spesifikasi</th>
                    <th>Harga</th>
                    <th></th>
                </thead>
                <tbody>

                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>

                            <td class="text-center">

                                <x-component.button-icon label="Detail" color="primary" icon="bx-detail"
                                    href="$" :small="true" />


                            </td>
                        </tr>

                </tbody>
            </x-component.datatable>
        </div>
    </div>
</x-layout>
