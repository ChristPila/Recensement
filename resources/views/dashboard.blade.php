@extends('layouts.master')
@section('content')
<div class="col-md-12">
  <div class="container-fluid">
      <div class="row mb-2"><br>
          <div class="col-sm-6"><br>
              <h2 class="h3 mb-0 page-title">{{ __('Tableau de bord') }}</h2>
          </div>
      </div>
  </div>
</div>
        <div class="card-body">
            <div class="tab-content p-0">
                <div class="col-md-6">
                    <canvas id="AreaChart" width="700"></canvas>
                </div>  
            </div>
        </div>
        
    <input type="hidden" id="recense" value="{{ $chartRecense }}">
@endsection
@push('page_scripts') 
    <script src="{{ asset('js/chart.min.js') }}"></script>
    <script>
        var mois = ['Jan', 'Feb', 'Mar', 'Avr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        /*var mois = ['Jan', 'Feb', 'Mar', 'Avr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        var recense = document.querySelector('#recense').value
        recense = JSON.parse(recense);
        var tb_mois = []
        var tb_nb = []
        recense.map((rep) => {
            var m = parseInt(rep.mois) - 1
            tb_mois.push(mois[m])
            console.log(tb_mois)
            tb_nb.push(parseInt(rep.nombre))
            console.log(tb_nb)
        })*/
        var AreaChart = document.getElementById("AreaChart").getContext("2d");
        var gradientStroke = AreaChart.createLinearGradient(500, 0, 100, 0);
        gradientStroke.addColorStop(0, "#F76300");
        gradientStroke.addColorStop(1, "#FF6600");
        var gradientFill = AreaChart.createLinearGradient(500, 0, 100, 0);
        gradientFill.addColorStop(0, "rgba(255, 102, 0, 0.7)");
        gradientFill.addColorStop(1, "rgba(255, 102, 0, 0.7)");
        var myAreaChart = new Chart(AreaChart, {
            type: "line",
            data: {
                labels: mois,
                datasets: [{
                        label: "recenses",
                        borderColor: gradientStroke,
                        pointBackgroundColor: gradientStroke,
                        pointRadius: 0,
                        backgroundColor: gradientFill,
                        legendColor: "#F76300",
                        fill: true,
                        borderWidth: 1,
                        data: [1, 5, 6, 9, 3, 57, 20, 100, 4, 50, 200, 45]
                    },
                ],
            },
            options: {
                responsive: false,
                maintainAspectRatio: false,
                legend: {
                    position: "bottom",
                },
                tooltips: {
                    bodySpacing: 4,
                    mode: "nearest",
                    intersect: 0,
                    position: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10,
                },
                layout: {
                    padding: {
                        left: 15,
                        right: 15,
                        top: 15,
                        bottom: 15,
                    },
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            fontColor: "rgba(0,0,0,0.5)",
                            fontStyle: "500",
                            beginAtZero: false,
                            maxTicksLimit: 5,
                            padding: 20,
                        },
                        gridLines: {
                            drawTicks: false,
                            display: false,
                        },
                    }, ],
                    xAxes: [{
                        gridLines: {
                            zeroLineColor: "transparent",
                        },
                        ticks: {
                            padding: 20,
                            fontColor: "rgba(0,0,0,0.5)",
                            fontStyle: "500",
                        },
                    }, ],
                },
                legendCallback: function(chart) {
                    var text = [];
                    text.push('<ul class="' + chart.id + '-legend html-legend">');
                    for (var i = 0; i < chart.data.datasets.length; i++) {
                        text.push(
                            '<li><span style="background-color:' +
                            chart.data.datasets[i].legendColor +
                            '"></span>'
                        );
                        if (chart.data.datasets[i].label) {
                            text.push(chart.data.datasets[i].label);
                        }
                        text.push("</li>");
                    }
                    text.push("</ul>");
                    return text.join("");
                },
            },
        });
    </script>
@endpush
