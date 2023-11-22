@extends('admin.index')

@section('content')
<!-- <div class="col-xl-3 col-md-3">
    <div class="card text-white mb-4 bg-success">
        <div class="card-body"><h3>Total Biens</h3></div>
        <h4>{{$bien}} bien(s)</h4>
        
    </div>   
</div> -->



<div class="row m-t-25">
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c1">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                    <div class="text">
                        <h2>{{$users}} user(s)</h2>
                        <span>utilisateurs inscrits</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart1"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c2">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-home"></i>
                    </div>
                    <div class="text">
                        <h2>{{$bien}} bien(s)</h2>
                        <span>Biens disponibles</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart2"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c3">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-home"></i>
                    </div>
                    <div class="text">
                        <h2>{{$bienIndispo}} bien(s)</h2>
                        <span>Biens indisponibles</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart3"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c4">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                    <i class="zmdi zmdi-account-o"></i>
                    </div>
                    <div class="text">
                        <h2>{{$admins}} admin(s)</h2>
                        <span>Administrateurs</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart4"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <canvas id="bienChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx1 = document.getElementById('bienChart');

    var bienCountPercent = <?php echo $bienCountPercent; ?>;
    var labelbien = [], databien = [];
    for (var i = 0; i < bienCountPercent.length; i++) {
        labelbien.push(bienCountPercent[i].statut);
        databien.push(bienCountPercent[i].total);
    }
    new Chart(ctx1, {
        type: 'bar',
        data: {
        labels: labelbien,
        datasets: [{
            label: '# Statistique bien',
            data: databien,
            backgroundColor: [
                'green',
                'red',
            ],
            borderColor: [
                'rgba(31, 58, 147, 1)',
                'rgba(37, 116, 169, 1)',
                'rgba(92, 151, 191, 1)',
                'rgb(200, 247, 197)',
                'rgb(77, 175, 124)',
                'rgb(30, 130, 76)'
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
@endsection('content')