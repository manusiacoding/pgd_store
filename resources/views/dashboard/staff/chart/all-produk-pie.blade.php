<style>
    #chartdiv {
      width: 100%;
      height: 500px;
    }

    </style>

    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/kelly.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <!-- Chart code -->
    <script>
    am4core.ready(function() {

    // Themes begin
    am4core.unuseAllThemes();
    am4core.useTheme(am4themes_kelly);
    am4core.useTheme(am4themes_animated);
    // Themes end

    var chart = am4core.create("chartdiv", am4charts.PieChart3D);
    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

    chart.legend = new am4charts.Legend();
    chart.logo.height = -15000;
    chart.dataSource.url = "{{ route('chart.count-produk') }}"

    var series = chart.series.push(new am4charts.PieSeries3D());
    series.dataFields.value = "Total";
    series.dataFields.category = "produk";

    }); // end am4core.ready()
</script>

<div class="row match-height">

    <!-- Statistics Card -->
    <div class="col-xl-12 col-md-12 col-12">
        <div class="card card-statistics">
            <div class="card-header">
                <h4 class="card-title">Chart Total Pemilik Produk</h4>
                <div class="d-flex align-items-center">
                </div>
            </div>
            <div class="card-body statistics-body" style="margin-top: -50px">
                <div id="chartdiv"></div>
            </div>
        </div>
    </div>
    <!--/ Statistics Card -->
</div>
