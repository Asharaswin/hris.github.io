<div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
      <h6>Gender overview</h6>
    </div>
    <div class="flex-auto p-8">
      <canvas id="gender-chart" class="chart-canvas" height="100"></canvas>
    </div>
</div>
@php
@endphp
@push('scripts')
<script>
    var ctx = document.getElementById("gender-chart").getContext("2d");
    
    new Chart(ctx, {
        type: "doughnut",
        data: {
            labels: [
                'Laki-laki',
                'Perempuan'
            ],
            datasets: [{
                data: [
                    {!! json_encode($female) !!},

                    {!! json_encode($male) !!}
                ],
                backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)'
                ],
                hoverOffset: 4
            }]
        },
    });
</script>
@endpush
