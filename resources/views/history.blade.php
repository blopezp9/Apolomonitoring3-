@extends('layouts.main')
@section('contenido')

                    <canvas id="myChart" width="800" height="300"></canvas>
                    <div class="row">
                        <div class="col-lg-0 mb-0">

                            <!-- Illustration -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Illustration</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="">
                                    </div>
                                    <p>The graph above shows the percentage of Apolo utilization from January 2021 to the current date.
                                     The dates are in three-day intervals and the dots on the graph show each day with its respective percentage of utilization.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
@endsection 

@section('scripts')
<script>


        var ctx = document.getElementById('myChart').getContext('2d');
        var per_use = <?php echo json_encode($histo) ?>;
        var datess= <?php echo json_encode($dates) ?>;
        console.log(per_use);
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: datess,
                            datasets: [{
                                label: 'Cluster utilization',
                                data: per_use,
                                backgroundColor: [
                                    'rgba(54, 162, 235, 0.5)'

                                ],
                                borderColor: [
                                    'rgba(153, 102, 255, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
    </script>

@endsection