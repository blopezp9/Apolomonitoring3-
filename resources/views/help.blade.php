@extends('layouts.main')
@section('contenido')

                    <!-- Content Row -->


                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Help section</h6>
                                </div>
                                <div class="card-body">
                                    <p class="m-0 font-weight-bold text-primary">¿What is Apolo monitoring?</p>
                                        <p class="mb-0">Apolo Monitoring is a web monitoring application specially designed for the 
                                        Apolo Scientific Computing Center’s EAFIT University.</p>
                                    
                                    <p class="m-0 font-weight-bold text-primary">¿What monitoring does the web application do?</p>
                                        <p class="mb-0">The web application monitors the resources consumed by each running job,
                                        the resources it monitors are: number of cores allocated by the user, RAM memory and SWP memory. 
                                         The web application notifies when a user allocates more than fifteen per running job.</p>
                                    <p class="m-0 font-weight-bold text-primary">¿What is the dashboard section?</p>
                                        <p class="mb-0">The dashboard section is where the "real time" monitoring of the jobs in execution is carried out, 
                                        since this section is updated every hour. This section shows a table with information about the jobs in execution 
                                        for each user, as well as information about the nodes that are being used, indicating the percentage of availability 
                                        of the cores, RAM memory consumed and SWP memory consumed.</p>
                                    <p class="m-0 font-weight-bold text-primary">¿What is the History section?</p>
                                        <p class="mb-0">In this section you will find information on the percentage of cluster utilization, 
                                        from January 1, 2021 to the current date, this information is updated every 24 hours.</p>
                                    <p class="m-0 font-weight-bold text-primary">¿What is the Last twentty-four hours history section?</p>
                                        <p class="mb-0">In this section you can find the cluster utilization percentage of the last 24 hours, 
                                        this section is updated every hour</p>
                                    <p class="m-0 font-weight-bold text-primary">Apolo monitoring in the future</p>
                                        <p class="mb-0">Due to its simple design, the web application can add new functionalities that 
                                        help monitoring Apolo Scientific Computing Center’s </p>
                                </div>
                            </div>

                        </div>

@endsection 
