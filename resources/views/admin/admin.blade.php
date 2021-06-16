@extends('layouts.admin')

@section('content')
<style>
.container-fluid .page-header-content{
    background-image:url("{{asset('/images/cover3.jpg')}}");
    padding: 100px;

}

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<div class="page-header ">
    <div class="container-fluid">
        <div class="page-header-content">
            <h1 class="page-header-title">
            <br><br>
                <div class="page-header-icon"><i data-feather="activity"></i></div>
                <span>Dashboard</span>
            </h1>
            <br>
        </div>
    </div>
</div>


<div class="container-fluid mt-n10">

    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <p class="fs-5"> les Cooperatives</p>
                    <p class="fs-5">{{$Cooperative}}</p>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link fs-6" href="/cooperatives">
                        voir les détails</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <p class="fs-5">Les Associations</p>
                  <p class="fs-5">{{$Association}}</p>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link fs-6" href="/associations">
                        voir les détails</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <p class="fs-5">Les Chambres professionnelles</p>
                    <p class="fs-5">{{$Outilsinfo}}</p>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link fs-6" href="/outilsinfos">
                        voir les détails</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        
    </div>
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
<!-- Chartisan -->
<script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
<!-- Charting library -->
<script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
<!-- Chartisan -->
<script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>


<div class="container mt-5">
      <div class="row">
        <div class="col" id="chart1" style="width:100px;"></div>
        <script>
          var chart = new Chartisan({
            el: '#chart1',
            url: "@chart('first_chart')",
            hooks: new ChartisanHooks()
              .datasets('pie')
              .pieColors([
                'rgb(255, 128, 128)',
                'rgb(255, 255, 128)',
                'rgb(128, 255, 128)',
                'rgb(128,128,128)',
                'rgb(255,128,255)'
              ]),

          });
        </script>
        <div class="col" id="chart2" style="height:300px;"></div>
        <script>
          var chart = new Chartisan({
            el: '#chart2',
            url: "@chart('second_chart')",
            hooks: new ChartisanHooks()
              .beginAtZero()
              .datasets('bar')
              .borderColors(['rgb(128, 128, 128)'])
              
              ,
              

          });
        </script>
      </div>
    </div>
 
<div >
@endsection