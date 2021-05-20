@extends('layouts.main')
@section('notification')
                    <li class="nav-item dropdown no-arrow mx-3">
                            <a class="nav-link dropdown-toggle " href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h4><i class="fas fa-bell"></i></h4>
                                <!-- Counter - Alerts -->
                                <?php $acumulador = 0; ?>
                                @foreach($dashboard as $dashboard1) 
                                <?php
                                    if ($dashboard1->cpus > 15) {
                                        $acumulador += 1;
                                        //$cadt=$cadt.$dashboard1->user;
                                    }
                                ?>
                                @endforeach                        
                                <span class="badge badge-danger badge-counter" ><h6>{{$acumulador}}</h6></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h1 class="dropdown-header">
                                     User alert center
                                </h1>
                                <?php $cadt = ""; ?>
                                @foreach($dashboard as $dashboard2)
                                                                    
                                
                                    <?php
                                    if ($dashboard2->cpus > 15) {
                                        $cadt="";
                                        $cadt=$cadt.$dashboard2->user;
                                        
                                    }else{
                                        continue;
                                    }
                                    ?>
                                    <a class="dropdown-item d-flex align-items-center">
                                    <div class="mr-1">
                                        <div class="icon-circle" style="color: #4169E1; font-style: italic">
                                        <h3><i class="fas fa-info-circle"></i></h3>
                                        </div>
                                    </div>
                                
                                    <div>
                                        <span class="font-weight-bold text-center"><h5>User: {{  $cadt}} </h5></span>
                                    </div>
                                    
                                </a>
                                @endforeach
                            </div>
                        </li>
                    @endsection 
                    @section('contenido')
                    <!-- Page Heading -->

                    <!-- Content Row -->
                    <div class="fresh-table text-center">

                        <table id="fresh-table" class="table-center" >
                            <thead>
                                <th>Job ID</th>
                                <th>User</th>
                                <th>Name Job</th>
                                <th>State</th>
                                <th>Nodes</th>
                                <th>Node List</th>
                                <th>Cores</th>
                            </thead>
                            <tbody>
                                @foreach($dashboard as $dashboard)
                                <tr>                   
                                    <td>{{ $dashboard->jobid}}</td>
                                    <td>{{ $dashboard->user}}</td>
                                    <td>{{ $dashboard->name_job}}</td>
                                    <td>{{ $dashboard->state}}</td>
                                    <td>{{ $dashboard->n_node}}</td>
                                    <td>{{ $dashboard->node_list}}</td>
                                    <td>{{ $dashboard->cpus}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>                 
                    <div class="row">
                        @foreach($capacity as $capacity)
                        <div class="col-lg-4 mb-1" >                
                            <!-- Illustrations -->
                            <div class="card shadow mb-0">
                                <div class="card-header py-0">
                                    <h5 class="m-0 font-weight-bold text-primary " >{{ $capacity->nombre }}</h5>
                                </div>
                                <div class="card-body">
                                    <h5>CPUs: {{ $capacity->per_cores }}% Available</h5>
                                    <h5>Memory RAM: {{ $capacity->Mem_Ram }}MB Used</h5>
                                    <h5>SWP: {{ $capacity->Mem_swp }}MB Used</h5>
                                </div>
                            </div>
                            
                        </div>
                        @endforeach
                    </div>

            <!-- Javascript -->
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>

            <script type="text/javascript">
            var $table = $('#fresh-table')
            var $alertBtn = $('#alertBtn')

            window.operateEvents = {
                'click .like': function (e, value, row, index) {
                alert('You click like icon, row: ' + JSON.stringify(row))
                console.log(value, row, index)
                },
                'click .edit': function (e, value, row, index) {
                alert('You click edit icon, row: ' + JSON.stringify(row))
                console.log(value, row, index)
                },
                'click .remove': function (e, value, row, index) {
                $table.bootstrapTable('remove', {
                    field: 'id',
                    values: [row.id]
                })
                }
            }

            function operateFormatter(value, row, index) {
                return [
                '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
                    '<i class="fa fa-heart"></i>',
                '</a>',
                '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
                    '<i class="fa fa-edit"></i>',
                '</a>',
                '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
                    '<i class="fa fa-remove"></i>',
                '</a>'
                ].join('')
            }

            $(function () {
                $table.bootstrapTable({
                classes: 'table table-hover table-striped',
                toolbar: '.toolbar',

                search: true,
                showRefresh: true,
                showToggle: true,
                showColumns: true,
                pagination: true,
                striped: true,
                sortable: true,
                pageSize: 8,
                pageList: [8, 10, 15],

                formatShowingRows: function (pageFrom, pageTo, totalRows) {
                    return ''
                },
                formatRecordsPerPage: function (pageNumber) {
                    return pageNumber + ' rows visible'
                }
                })

                $alertBtn.click(function () {
                alert('You pressed on Alert')
                })
            })

    </script>
@endsection 