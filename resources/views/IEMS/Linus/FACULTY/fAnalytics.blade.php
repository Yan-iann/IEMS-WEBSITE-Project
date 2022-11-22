@extends('layouts.F_Layout')
@section('content')
    <div class="container-fluid">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text">Analysis</span>
        </div>

        <div class="row g-3  d-flex align-items-around">


            <div class="col-12 col-md-6 col-lg-6">
                <div class="row g-3">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card normcard">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Wildlife</h6>
                                <h1> {{ $critter }}</h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Graduate Thesis Papers</h6>
                                <h1> {{ $gradThesis }}</h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Undergraduate Thesis Papers</h6>
                                <h1> {{ $undergradThesis }}</h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Journal Articles</h6>
                                <h1> {{ $journal }}</h1>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Whale Bone</h6>
                                <h1> {{ $whalebone }}</h1>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Reference</h6>
                                <h1> {{ $reference }}</h1>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Announcements</h6>
                                <h1> {{ $announcement }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="chartContainer" style="height: 20rem; width:100%"></div>
                                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                                {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <script>
        <?php
        $dataPoints = [
                        ['label' => 'Critters', 'y' => $critter],
                        ['label' => 'Whale Bone', 'y' => $whalebone],
                        ['label' => 'Reference', 'y' => $reference],
                        ['label' => 'Graduate Thesis Papers', 'y' => $gradThesis],
                        ['label' => 'Undergrad Thesis Papers', 'y' => $undergradThesis],
                        ['label' => 'Journals', 'y' => $journal],
                        ['label' => 'Announcements', 'y' => $announcement]
                    ];

        ?>

        // var labels= Object.keys($doughnut);
        // console.log(labels);
        // const ctx = document.getElementById('chartContainer');

        // new Chart(ctx, {
        //     type: 'doughnut',
        //     data: {
        //         labels: [
        //             <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        //         ],
        //         datasets: [{
        //             label: 'Number of Information Cards',
        //             data: [<?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>],
        //             backgroundColor: [
        //             ],
        //             hoverOffset: 4
        //         }]
        //     }
        // });






          window.onload = function() {


          var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title: {
              text: "Total Information Cards"
            },
             subtitles: [{
               text: "number of infocards per catalog"
             }],
             data: [{
               type: "pie",
               yValueFormatString: "#,##0.00\"%\"",
               indexLabel: "{label} ({y})",
               dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
             }]
           });
           chart.render();

           }
    </script>
@endsection
