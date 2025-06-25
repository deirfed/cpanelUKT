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
                    <div class="span6">
                        <div class="widget widget-nopad">
                            <div class="widget-header"> <i class="icon-list-alt"></i>
                                <h3> Today's Stats</h3>
                            </div>
                            <div class="widget-content">
                                <div class="widget big-stats-container">
                                    <div class="widget-content">
                                        <h6 class="bigstats">Server and Administration fully supported by <a
                                                href="http://tideupindustries.com" target="_blank">Tide Up Industries</a>
                                        </h6>
                                        <div id="big_stats" class="cf">
                                            <div class="stat"> <i class="icon-info-sign"></i> <span
                                                    class="value">100%</span>
                                            </div>
                                            <div class="stat"> <i class="icon-asterisk"></i> <span class="value">0</span>
                                            </div>
                                            <div class="stat"> <i class="icon-chevron-up"></i> <span
                                                    class="value">50</span> </div>

                                            <div class="stat"> <i class="icon-folder-close"></i> <span
                                                    class="value">35%</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-nopad">
                            <div class="widget-header"> <i class="icon-list-alt"></i>
                                <h3> Recent News</h3>
                            </div>
                            <div class="widget-content">
                                <div id='calendar'>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-header"> <i class="icon-file"></i>
                                <h3> Server Activity </h3>
                            </div>
                            <div class="widget-content">
                                <ul class="messages_layout">
                                    <li class="from_user left"> <a href="#" class="avatar"><img
                                                src="{{ asset('assets/img/signin/user.png') }}" /></a>
                                        <div class="message_wrap"> <span class="arrow"></span>
                                            <div class="info"> <a class="name">Administrator</a> <span
                                                    class="time">June, 20th 2025</span>
                                                <div class="options_arrow">
                                                    <div class="dropdown pull-right"> <a class="dropdown-toggle "
                                                            id="dLabel" role="button" data-toggle="dropdown"
                                                            data-target="#" href="#"> <i class=" icon-caret-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu " role="menu" aria-labelledby="dLabel">
                                                            <li><a href="#"><i class=" icon-trash icon-large"></i>
                                                                    Delete</a></li>
                                                            <li><a href="#"><i class=" icon-share icon-large"></i>
                                                                    Share</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text"> The system is now fully operational and ready to support
                                                real-time monitoring of railway infrastructure. All core services have been
                                                initialized, and the platform is standing by to process data, respond to
                                                client requests, and deliver accurate insights.

                                                You can now begin using SIMOJA to streamline your monitoring workflows and
                                                enhance decision-making with reliable, structured information.</div>
                                        </div>
                                    </li>
                                    <li class="from_user left"> <a href="#" class="avatar"><img
                                                src="{{ asset('assets/img/signin/user.png') }}" /></a>
                                        <div class="message_wrap"> <span class="arrow"></span>
                                            <div class="info"> <a class="name">Administrator </a> <span
                                                    class="time">June, 20th 2025</span>
                                                <div class="options_arrow">
                                                    <div class="dropdown pull-right"> <a class="dropdown-toggle "
                                                            id="dLabel" role="button" data-toggle="dropdown"
                                                            data-target="#" href="#"> <i class=" icon-caret-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu " role="menu" aria-labelledby="dLabel">
                                                            <li><a href="#"><i class=" icon-share-alt icon-large"></i>
                                                                    Reply</a>
                                                            </li>
                                                            <li><a href="#"><i class=" icon-trash icon-large"></i>
                                                                    Delete</a></li>
                                                            <li><a href="#"><i class=" icon-share icon-large"></i>
                                                                    Share</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text">This instance of SIMOJA is specifically configured for UKT 2
                                                Aset management. All related services have been initialized, including
                                                real-time data capture, structured asset tracking, and automated reporting
                                                pipelines. The system is now fully operational and ready to support
                                                infrastructure reliability through smart monitoring.</div>
                                        </div>
                                    </li>
                                    <li class="from_user left"> <a href="#" class="avatar"><img
                                                src="{{ asset('assets/img/signin/user.png') }}" /></a>
                                        <div class="message_wrap"> <span class="arrow"></span>
                                            <div class="info"> <a class="name">Administrator </a> <span
                                                    class="time">June, 18th 2025</span>
                                                <div class="options_arrow">
                                                    <div class="dropdown pull-right"> <a class="dropdown-toggle "
                                                            id="dLabel" role="button" data-toggle="dropdown"
                                                            data-target="#" href="#"> <i
                                                                class=" icon-caret-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu " role="menu"
                                                            aria-labelledby="dLabel">
                                                            <li><a href="#"><i
                                                                        class=" icon-share-alt icon-large"></i>
                                                                    Reply</a>
                                                            </li>
                                                            <li><a href="#"><i class=" icon-trash icon-large"></i>
                                                                    Delete</a></li>
                                                            <li><a href="#"><i class=" icon-share icon-large"></i>
                                                                    Share</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text"> Server is Online</div>
                                        </div>
                                    </li>
                                    <li class="from_user left"> <a href="#" class="avatar"><img
                                                src="{{ asset('assets/img/signin/user.png') }}" /></a>
                                        <div class="message_wrap"> <span class="arrow"></span>
                                            <div class="info"> <a class="name">Administrator</a> <span
                                                    class="time">June, 17th 2025</span>
                                                <div class="options_arrow">
                                                    <div class="dropdown pull-right"> <a class="dropdown-toggle "
                                                            id="dLabel" role="button" data-toggle="dropdown"
                                                            data-target="#" href="#"> <i
                                                                class=" icon-caret-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu " role="menu"
                                                            aria-labelledby="dLabel">
                                                            <li><a href="#"><i
                                                                        class=" icon-share-alt icon-large"></i>
                                                                    Reply</a>
                                                            </li>
                                                            <li><a href="#"><i class=" icon-trash icon-large"></i>
                                                                    Delete</a></li>
                                                            <li><a href="#"><i class=" icon-share icon-large"></i>
                                                                    Share</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text"> Enterprise Server is Activated</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="widget">
                            <div class="widget-header"> <i class="icon-bookmark"></i>
                                <h3>Important Shortcuts</h3>
                            </div>
                            <div class="widget-content">
                                <div class="shortcuts"> <a href="{{ route('avail.index') }}" class="shortcut"><i
                                            class="shortcut-icon icon-list-alt"></i><span
                                            class="shortcut-label">Apps</span> </a><a href="javascript:;"
                                        class="shortcut"><i class="shortcut-icon icon-bookmark"></i><span
                                            class="shortcut-label">Bookmarks</span> </a><a
                                        href="{{ route('reports.index') }}" class="shortcut" disabled><i
                                            class="shortcut-icon icon-signal"></i> <span
                                            class="shortcut-label">Reports</span> </a><a href="javascript:;"
                                        class="shortcut"> <i class="shortcut-icon icon-comment"></i><span
                                            class="shortcut-label">Chat</span> </a><a href="{{ route('users.index') }}"
                                        class="shortcut"><i class="shortcut-icon icon-user"></i><span
                                            class="shortcut-label">Users</span>
                                    </a><a href="javascript:;" class="shortcut"><i
                                            class="shortcut-icon icon-file"></i><span class="shortcut-label">File</span>
                                    </a><a href="javascript:;" class="shortcut"><i
                                            class="shortcut-icon icon-asterisk"></i> <span
                                            class="shortcut-label">Miscellanous</span> </a><a href="javascript:;"
                                        class="shortcut"> <i class="shortcut-icon icon-tag"></i><span
                                            class="shortcut-label">Tags</span> </a> </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-header"> <i class="icon-signal"></i>
                                <h3>Server Availability Percentage</h3>
                            </div>
                            <div class="widget-content">
                                <figure class="highcharts-figure">
                                    <div id="charts"></div>
                                </figure>
                            </div>
                        </div>
                        <div class="widget widget-table action-table">
                            <div class="widget-header"> <i class="icon-th-list"></i>
                                <h3>Active Website & Domain</h3>
                            </div>
                            <div class="widget-content">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Application Name </th>
                                            <th> Domain</th>
                                            <th class="td-actions"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> SIMOJA UKT 2 </td>
                                            <td> http://www.simoja.ukt2.org/ </td>
                                            <td class="td-actions"><a href="javascript:;"
                                                    class="btn btn-small btn-success"><i
                                                        class="btn-icon-only icon-eye-open">
                                                    </i>
                                        <tr>
                                            <td> ASET MANAGEMENT UKT 2 </td>
                                            <td> http://www.aset.ukt2.org/ </td>
                                            <td class="td-actions"><a href="javascript:;"
                                                    class="btn btn-small btn-success"><i
                                                        class="btn-icon-only icon-eye-open">
                                                    </i>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection

@section('javascript')
    <script>
        Highcharts.chart('charts', {
            chart: {
                type: 'pie',
                backgroundColor: '#FFFFFF',
                custom: {},
                events: {
                    render() {
                        const chart = this,
                            series = chart.series[0];
                        let customLabel = chart.options.chart.custom.label;

                        if (!customLabel) {
                            customLabel = chart.options.chart.custom.label =
                                chart.renderer.label(
                                    //
                                )
                                .css({
                                    color: 'black',
                                    textAnchor: 'middle'
                                })
                                .add();
                        }

                        const x = series.center[0] + chart.plotLeft,
                            y = series.center[1] + chart.plotTop - (customLabel.attr('height') / 2);

                        customLabel.attr({
                            x,
                            y
                        });
                        customLabel.css({
                            fontSize: `${series.center[2] / 10}px`
                        });
                    }
                }
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            title: {
                text: '',
                color: 'black',
            },
            subtitle: {
                text: 'Server Availability'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.0f}%</b>'
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    borderRadius: 8,
                    dataLabels: [{
                        enabled: true,
                        distance: 20,
                        format: '{point.name}'
                    }, {
                        enabled: true,
                        distance: -15,
                        format: '{point.percentage:.0f}%',
                        style: {
                            fontSize: '0.9em'
                        }
                    }],
                    showInLegend: true
                }
            },
            series: [{
                name: 'Registrations',
                colorByPoint: true,
                innerSize: '75%',
                data: [{
                    name: 'Used',
                    y: 76,
                    color: 'red',
                }, {
                    name: 'Free',
                    y: 24
                }]
            }]
        });
    </script>
@endsection
