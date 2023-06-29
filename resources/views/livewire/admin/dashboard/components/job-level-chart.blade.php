
<div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
    <div class="flex-auto p-4">
      <h6>Job Level overview</h6>
    </div>
    <div class="flex-auto p-8">
      <canvas id="job-level-chart" class="chart-canvas" height="100"></canvas>
    </div>
</div>
@php
$lables = $data->pluck('job_level');
$data = $data->pluck('total');
@endphp
@push('scripts')
<script>
    var ctx = document.getElementById("job-level-chart").getContext("2d");
    
    new Chart(ctx, {
        type: "polarArea",
        data: {
            labels: {!! json_encode($lables) !!},
            datasets: [{
                data: {!! json_encode($data) !!},
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(75, 192, 192)',
                    'rgb(255, 205, 86)'
                ]
            }]
        }
    });
</script>
@endpush
