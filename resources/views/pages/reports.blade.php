@extends('layouts.base')

@section('title-head')
    <title>Dashboard | cPanel</title>
@endsection


@section('content')
    @include('layouts.nav')

    @include('layouts.subnav')

    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="info-box">
                            <div class="row-fluid stats-box">
                                <div class="span12">
                                    <div class="stats-box-title">Visitor</div>
                                    <figure class="highcharts-figure">
                                        <div id="visitor"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span12">
                        <div class="info-box">
                            <div class="row-fluid stats-box">
                                <div class="span12">
                                    <div class="stats-box-title">Availability</div>
                                    <figure class="highcharts-figure">
                                        <div id="chart2"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <style>
        #visitor,
        #chart2 {
            height: 400px;
            width: 100%;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chart = Highcharts.chart('visitor', {
                chart: {
                    backgroundColor: '#FFFFFF'
                },
                title: {
                    text: 'Average Visitor',
                    align: 'left',
                    style: {
                        color: 'black'
                    },
                    margin: 25
                },
                sonification: {
                    duration: 8000,
                    defaultInstrumentOptions: {
                        mapping: {
                            pitch: {
                                min: 'c3',
                                max: 'd6'
                            }
                        }
                    },
                    globalContextTracks: [{
                            instrument: 'piano',
                            valueInterval: 1 / 3,
                            mapping: {
                                pitch: {
                                    mapTo: 'y',
                                    value: 0
                                },
                                volume: 0.1
                            }
                        },
                        {
                            instrument: 'shaker',
                            activeWhen: {
                                valueProp: 'x',
                                min: 4,
                                max: 9
                            },
                            timeInterval: 100,
                            mapping: {
                                volume: 0.1
                            }
                        },
                        {
                            type: 'speech',
                            valueInterval: 1,
                            activeWhen: {
                                crossingUp: 4
                            },
                            mapping: {
                                text: 'Summer',
                                rate: 2.5,
                                volume: 0.3
                            }
                        }
                    ]
                },
                yAxis: {
                    title: {
                        enabled: false
                    },
                    labels: {
                        format: '{text} Visit'
                    },
                    gridLineWidth: 0
                },
                xAxis: {
                    crosshair: true,
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct',
                        'Nov', 'Dec'
                    ]
                },
                legend: {
                    enabled: false
                },
                tooltip: {
                    valueSuffix: ' Visit'
                },
                series: [{
                    name: 'Visitor',
                    data: [34, 37, 1, 40, 38, 35],
                    color: 'black'
                }]
            });

            const btnSonify = document.getElementById('sonify');
            if (btnSonify) {
                btnSonify.onclick = function() {
                    chart.toggleSonify();
                };
            }

            // Chart 2 - Availability
            const chart2 = Highcharts.chart('chart2', {
                chart: {
                    type: 'column',
                    backgroundColor: '#FFFFFF'
                },
                title: {
                    text: 'Server Availability',
                    align: 'left',
                    style: {
                        color: 'black'
                    }
                },
                xAxis: {
                    categories: ['Connection', 'Bandwith', 'Status'],
                    labels: {
                        style: {
                            color: 'black'
                        }
                    }
                },
                yAxis: {
                    allowDecimals: false,
                    min: 0,
                    title: {
                        text: 'Availability'
                    }
                },
                tooltip: {
                    format: '<b>{key}</b><br/>{series.name}: {y}<br/>Total: {point.stackTotal}'
                },
                plotOptions: {
                    column: {
                        stacking: 'normal'
                    }
                },
                series: [{
                        name: 'SIMOJA',
                        data: [100, 100, 100],
                        stack: 'SIMOJA'
                    },
                    {
                        name: 'STATS',
                        data: [100, 100, 105],
                        stack: 'SIMOJA'
                    },
                    {
                        name: 'ASET',
                        data: [100, 100, 100],
                        stack: 'ASET'
                    },
                    {
                        name: 'STATS',
                        data: [100, 100, 100],
                        stack: 'ASET'
                    }
                ]
            });
        });
    </script>
@endsection
