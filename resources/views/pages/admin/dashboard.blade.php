@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
@endpush

{{-- @push('scripts')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script>
        var weeklySalesOptions = {
            series: [{
                name: 'Grip',
                data: @json($gripSales)
            }, {
                name: 'Shaft',
                data: @json($shaftSales)
            }],
            chart: {
                type: 'bar',
                height: 350,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            },
            yaxis: {
                title: {
                    text: 'Sales'
                },
                labels: {
                    formatter: (val) => {
                        return "Rp. " + val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                    },
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "Rp. " + val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                    }
                }
            },
        };

        var chart = new ApexCharts(document.querySelector("#weeklySalesChart"), weeklySalesOptions);
        chart.render();

        var purchasesPieOptions = {
            series: @json($purchases),
            chart: {
                height: 350,
                type: 'pie',
            },
            labels: [
                'Grip Purchases',
                'Shaft Purchases',
            ],
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "Rp. " + val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                    }
                }
            },
        };

        var chart = new ApexCharts(document.querySelector("#purchasesPie"), purchasesPieOptions);
        chart.render();
    </script>
@endpush --}}

<x-layout>
    <h4 class="fw-bold py-3 mb-4">Dashboard</h4>
    <div class="row mb-lg-4">
        <div class="col-md-4">
            <div class="card my-2 my-md-0">
                <div class="card-body">
                    <span class="fw-semibold d-block mb-1">Properties</span>
                    <h3 class="card-title mb-2">{{ number_format($properties) }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card my-2 my-md-0">
                <div class="card-body">
                    <span class="fw-semibold d-block mb-1">Marketing Agent</span>
                    <h3 class="card-title mb-2">{{ number_format($agency) }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card my-2 my-md-0">
                <div class="card-body">
                    <span class="fw-semibold d-block mb-1">Bookings</span>
                    <h3 class="card-title mb-2">{{ number_format($booking) }}</h3>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card my-2 my-md-0">
                <div class="card-body">
                    <span class="fw-semibold d-block mb-1">Penjualan</span>
                    <h3 class="card-title mb-2">{{ number_format($penjualan) }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">

                <div class="card my-2 my-md-0">
                    <div class="card-body">
                        <span class="fw-semibold d-block mb-1">Property Lunas</span>
                        <h3 class="card-title mb-2">{{ number_format($cicilanLunas) }}</h3>
                    </div>
                </div>




        </div>
        <div class="col-md-4">
            <div class="card my-2 my-md-0">
                <div class="card-body">
                    <span class="fw-semibold d-block mb-1">Property Belum Lunas</span>
                    <h3 class="card-title mb-2">{{ number_format($cicilanBelumLunas) }}</h3>
                </div>
            </div>
        </div>
    </div>


</x-layout>
