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
                <div class="card" style="max-width: 700px; margin: auto;">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">Server OS Information:</h3>
                                <ul class="list-unstyled">
                                    <li><strong>Type: </strong> Virtual Private Server Enterprise</li>
                                    <li><strong>OS:</strong> Ubuntu Server 20.04.06 LTS (Focal Fossa)</li>

                                    <li><strong>Enterprise:</strong> Version with Premium Environment Cloud Storage</li>
                                    <li><strong>Cloud:</strong> SaaS included</li>
                                    <li><strong>Status:</strong> <strong>ACTIVE</strong> (Licensed until June, 30th 2026)
                                    </li>
                                </ul>
                                <hr>
                                <h3><strong>Server Storage:</strong></h3>
                                <ul>
                                    <li>vCPU: 6 Cores (dedicated)</li>
                                    <li>RAM: 12 GB NVMe</li>
                                    <li>Storage: 100 GB SSD/NVMe </li>
                                </ul>
                                <p><strong>Security Features:</strong> Firewall Protection, DDoS Attack Mitigation, optional
                                    VPN Access
                                </p>
                                <p><strong>OS Package:</strong> Enterprise OS</p>
                                <p><strong>Support:</strong> 24/7 Technical Support</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row ">
                    <div class="span3">
                        <div class="widget">
                            <div class="widget-content server-card">
                                <h4>📁 Storage & Usage</h4>
                                <ul class="unstyled">
                                    <li><strong>Disk:</strong> 76.12 GB / 100 GB (76.12%)</li>
                                    <li><strong>Inodes:</strong> 331,102 / 750,000 (44.15%)</li>
                                    <li><strong>Bandwidth:</strong> 8.44 GB / ∞</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="span3">
                        <div class="widget">
                            <div class="widget-content server-card">
                                <h4>🌐 Domains & Email</h4>
                                <ul class="mb-3">
                                    <li><strong>Addon Domains:</strong> 3 / ∞</li>
                                    <li><strong>Subdomains:</strong> 3 / ∞</li>
                                    <li><strong>Alias Domains:</strong> 0 / ∞</li>
                                    <li><strong>Email Accounts:</strong> 40 / ∞</li>
                                    <li><strong>Mailing Lists:</strong> 0 / ∞</li>
                                    <li><strong>Autoresponders:</strong> 0 / ∞</li>
                                    <li><strong>Forwarders:</strong> 0 / ∞</li>
                                    <li><strong>Email Filters:</strong> 0 / ∞</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="span3">
                        <div class="widget">
                            <div class="widget-content server-card">
                                <h4>🧰 Accounts & Databases</h4>
                                <ul class="unstyled">
                                    <li><strong>FTP Accounts:</strong> 4 / ∞</li>
                                    <li><strong>Databases:</strong> 18 / ∞</li>
                                </ul><br>
                                <h4 class="mt-3">⚙️ CPU & Process</h4>
                                <ul class="unstyled">
                                    <li><strong>CPU Usage:</strong> 10 GB / 12 GB (62.5%)</li>
                                    <li><strong>vCPU Active:</strong> 6 Cores</li>
                                    <li><strong>Entry Processes:</strong> 0 / 25 (0%)</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="span3">
                        <div class="widget">
                            <div class="widget-content server-card">
                                <h4>📊 Resource Usage</h4>
                                <ul class="unstyled">
                                    <li><strong>Memory Usage:</strong> 0 B / 12 GB (0%)</li>
                                    <li><strong>IOPS:</strong> 0 / 1,024 (0%)</li>
                                    <li><strong>I/O Usage:</strong> 0 B/s / 3 MB/s (0%)</li>
                                    <li><strong>Processes:</strong> 0 / 75 (0%)</li>
                                </ul>
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
