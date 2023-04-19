@extends('admin.index')
@section('orta')
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">

    <div class="page-content">

        <!-- begin PAGE TITLE AREA -->
        <!-- Use this section for each page's title and breadcrumb layout. In this example a date range picker is included within the breadcrumb. -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Hoşgeldiniz
                        <small>{{ Auth::user()->name }}</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active"><i class="fa fa-dashboard"></i> Yönetici Paneli</li>
             
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
     <!-- begin DASHBOARD CIRCLE TILES -->
        <div class="row">
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="#">
                        <div class="circle-tile-heading dark-blue">
                            <i class="fa fa-users fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content dark-blue">
                        <div class="circle-tile-description text-faded">
                            İLETİŞİM MESAJLARI
                        </div>
                        <div class="circle-tile-number text-faded">
                            {{ $iletisim }}
                          
                        </div>
                        <a href="{{ URL::to('yonetim/mesajlar') }}" class="circle-tile-footer">İncele <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="#">
                        <div class="circle-tile-heading green">
                            <i class="fa fa-money fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content green">
                        <div class="circle-tile-description text-faded">
                            SİPARİŞLER
                        </div>
                        <div class="circle-tile-number text-faded">
                            {{ $siparis }}
                        </div>
                        <a href="{{ URL::to('yonetim/siparisler') }}" class="circle-tile-footer">İncele <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="#">
                        <div class="circle-tile-heading orange">
                            <i class="fa fa-camera-retro fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content orange">
                        <div class="circle-tile-description text-faded">
                            GALERİLER
                        </div>
                        <div class="circle-tile-number text-faded">
                            {{ $galeri }}
                        </div>
                        <a href="{{ URL::to('yonetim/galerikategori') }}" class="circle-tile-footer">İncele <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="#">
                        <div class="circle-tile-heading blue">
                            <i class="fa fa-pencil-square-o fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content blue">
                        <div class="circle-tile-description text-faded">
                            Haberler
                        </div>
                        <div class="circle-tile-number text-faded">
                            {{ $haber }}
                         
                        </div>
                        <a href="{{ URL::to('yonetim/haberduzenle') }}" class="circle-tile-footer">İncele <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="#">
                        <div class="circle-tile-heading red">
                            <i class="fa fa-shopping-cart fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content red">
                        <div class="circle-tile-description text-faded">
                            ÜRÜNLER
                        </div>
                        <div class="circle-tile-number text-faded">
                            {{ $urun }}
                            
                        </div>
                        <a href="{{ URL::to('yonetim/urunduzen') }}" class="circle-tile-footer">İncele <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="#">
                        <div class="circle-tile-heading purple">
                            <i class="fa fa-volume-up fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content purple">
                        <div class="circle-tile-description text-faded">
                            Duyurular
                        </div>
                        <div class="circle-tile-number text-faded">
                           {{ $duyuru }}
                         
                        </div>
                        <a href="{{ URL::to('yonetim/duyurular') }}" class="circle-tile-footer">İncele <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="zr-hit-chart">
                        <div id="gavisits"></div>
                    </div>
                </div>
            </div>
        </div>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script type="text/javascript"  src="{{ URL::to('admin/js/highcharts.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('admin/js/exporting.js') }}"></script>
        <script type="text/javascript">
            day = [<?php echo implode(',',$dateArray); ?>];
            pageviews = [<?php echo implode(',',$cogul); ?>];
            visits = [<?php echo implode(',',$tekil); ?>];
        </script>

        <script type="text/javascript">
            $(document).ready(function() {

                Highcharts.theme = {
                    colors: ["#f45b5b", "#8085e9", "#8d4654", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee", "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
                    chart: {
                        backgroundColor: '#FFFFFF'
                    },
                    title: {
                        style: {
                            color: 'black',
                            fontSize: '16px',
                            fontWeight: 'bold'
                        }
                    },
                    subtitle: {
                        style: {
                            color: 'black'
                        }
                    },
                    tooltip: {
                        borderWidth: 0
                    },
                    legend: {
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '12px'
                        }
                    },
                    xAxis: {
                        labels: {
                            style: {
                                color: '#6e6e70'
                            }
                        }
                    },
                    yAxis: {
                        labels: {
                            style: {
                                color: '#6e6e70'
                            }
                        }
                    },
                    plotOptions: {
                        series: {
                            shadow: true
                        },
                        candlestick: {
                            lineColor: '#404048'
                        },
                        map: {
                            shadow: false
                        }
                    },
                    navigator: {
                        xAxis: {
                            gridLineColor: '#D0D0D8'
                        }
                    },
                    rangeSelector: {
                        buttonTheme: {
                            fill: 'white',
                            stroke: '#C0C0C8',
                            'stroke-width': 1,
                            states: {
                                select: {
                                    fill: '#D0D0D8'
                                }
                            }
                        }
                    },
                    scrollbar: {
                        trackBorderColor: '#C0C0C8'
                    },
                    background2: '#E0E0E8'
                };
                Highcharts.setOptions(Highcharts.theme);
                Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function(color) {
                    return {
                        radialGradient: {
                            cx: 0.5,
                            cy: 0.3,
                            r: 0.7
                        },
                        stops: [
                            [0, color],
                            [1, Highcharts.Color(color).brighten(-0.3).get('rgb')]
                        ]
                    };
                });
                chart = new Highcharts.Chart({
                    chart: {
                        borderWidth: 0,
                        marginLeft: 1,
                        marginRight: 1,
                        renderTo: 'gavisits',
                        marginBottom: 25
                    },
                    title: {
                        align: 'left',
                        x: -10,
                        text: 'Ziyaretçi İstatistikleri'
                    },
                    subtitle: {
                        align: 'left',
                        x: -10,
                        text: 'Veriler 3 saatlik ara ile güncellenmektedir'
                    },
                    credits: {
                        enabled: false
                    },
                    plotOptions: {
                        series: {
                            lineWidth: 4,
                            marker: {
                                radius: 4,
                                lineWidth: 1
                            }
                        }
                    },
                    xAxis: {
                        gridLineWidth: 1,
                        labels: {
                            y: 16,
                            formatter: function() {
                                str = this.value;
                                return str;
                            }
                        },
                        categories: day
                    },
                    yAxis: [{
                        title: {
                            text: null
                        },
                        labels: {
                            x: 18,
                            y: 16
                        }
                    }, {
                        linkedTo: 0,
                        gridLineWidth: 0,
                        opposite: true,
                        title: {
                            text: null
                        },
                        labels: {
                            align: 'right',
                            x: -5,
                            y: 16
                        }
                    }],
                    tooltip: {
                        share: true,
                        crosshairs: true,
                        formatter: function() {
                            return 'Tarih: <b>' + this.x + '</b> <br/>' + this.series.name + '<b> ' + this.y + '</b>';
                        }
                    },
                    legend: {
                        align: 'right',
                        verticalAlign: 'top',
                        y: 15,
                        x: 9,
                        floating: true,
                        borderWidth: 0
                    },
                    series: [{
                        name: 'Tekil Ziyaret Sayısı:',
                        data: visits
                    }, {
                        name: 'Sayfa Görüntüleme',
                        data: pageviews
                    }],
                    exporting: {
                        buttons: {
                            contextButton: {
                                enabled: false
                            }
                        }
                    }
                });


            });
        </script>
        <!-- end PAGE TITLE AREA -->

        <!-- end DASHBOARD CIRCLE TILES -->
                   <div class="col-lg-12">
                   <br>
                                <div class="portlet portlet-green">
                                    <div class="portlet-heading">
                                        <div class="portlet-title">
                                            <h4><i class="fa fa-exchange fa-fw"></i> Son Siparişler</h4>
                                        </div>
                                        <div class="portlet-widgets">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#transactionsPortlet"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="transactionsPortlet" class="panel-collapse collapse in">
                                        <div class="portlet-body">
                                            <div class="table-responsive dashboard-demo-table">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Ürün Adı</th>
                                                            <th>Sipariş Veren</th>
                                                            <th>Adet</th>
                                                            <th>Fiyat</th>
                                                            <th>Durum</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($siparislist as $siparisler)
                                                        <tr>
                                                            <td>{{ $siparisler->urunadi }}</td>
                                                            <td>{{ $siparisler->adunvan }}</td>
                                                            <td>{{ $siparisler->adet}}</td>
                                                            <td>{{ $siparisler->fiyat }}</td>
                                                            <td>@if($siparisler->durum==0)<a class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Beklemede</a>@else 
                                                            <a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> Teslim Edildi</a>@endif</td>
                                                        </tr>
                                                    @endforeach
                                                     
                                                    </tbody>
                                                </table>
                                            </div>
                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-lg-12 -->
        

                </div>
            </div>
        </div>

    </div>
    <!-- /.page-content -->

</div>
<!-- /#page-wrapper -->
<!-- end MAIN PAGE CONTENT -->
    @stop