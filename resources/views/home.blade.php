@extends('layouts.app')
@section('css-plugins')
<link href="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading dashboard-heading">{{ trans('header.dashboard', ['name'=>'Flexerp'])}}</div>
                <div class="panel-body dashboard-body">
                    <div class="row">
                        <div class="@if(Auth::user()->hasRole('Superadmin')) col-md-8 @else col-md-12 @endif">
                            <section class="panel panel-featured-left panel-featured-primary">
                                <div class="panel-body">
                                    <label class="label label-success">Total Earning And Expense of last 30 days</label>
                                    <div id="area-chart" ></div>
                                    </div>
                            </section>
                        </div>
                        @if(Auth::user()->hasRole('Superadmin'))
                        <div class="col-md-4">
                            <section class="panel panel-featured-left panel-featured-primary">
                                <div class="panel-body">
                                    <label class="label label-success">Total Earning And Costing of last 30 days</label>
                                    <div id="pie-chart" ></div>
                                    </div>
                            </section>
                        </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-lg-4 col-xl-4">
                            <section class="panel panel-featured-left panel-featured-primary">
                                <div class="panel-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-primary">
                                                <i class="fa fa-life-ring"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">{{trans_choice('header.total_expense', $expense_qty)}}</h4>
                                                <div class="info">
                                                    <strong class="amount">Tk. {{ $total_expense }}</strong>
                                                    {{-- <span class="text-primary">(14 unread)</span> --}}
                                                </div>
                                            </div>
                                            <div class="summary-footer">
                                                <a class="text-muted text-uppercase">(view all)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-8 col-lg-4 col-xl-4">
                            <section class="panel panel-featured-left panel-featured-secondary">
                                <div class="panel-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-secondary">
                                                <i class="fa fa-usd"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Total Profit</h4>
                                                <div class="info">
                                                    <strong class="amount">Tk. {{ $total_income - $total_loan -$total_expense }}</strong>
                                                </div>
                                            </div>
                                            <div class="summary-footer">
                                                <a class="text-muted text-uppercase">(withdraw)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-8 col-lg-4 col-xl-4">
                            <section class="panel panel-featured-left panel-featured-tertiary">
                                <div class="panel-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-tertiary">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Total Orders/Payments</h4>
                                                <div class="info">
                                                    <strong class="amount">{{ $orders }}</strong>
                                                </div>
                                            </div>
                                            <div class="summary-footer">
                                                <a class="text-muted text-uppercase" href="{{url('orders')}}">(statement)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-lg-4 col-xl-4">
                            <section class="panel panel-featured-left panel-featured-quaternary">
                                <div class="panel-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-quaternary">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Total Loan</h4>
                                                <div class="info">
                                                    <strong class="amount">Tk. {{ $total_loan }}</strong>
                                                </div>
                                            </div>
                                            <div class="summary-footer">
                                                <a class="text-muted text-uppercase" href="{{url('loans')}}">(report)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-8 col-lg-4 col-xl-4">
                            <section class="panel panel-featured-left panel-featured-quaternary">
                                <div class="panel-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-quaternary">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Total Expenses</h4>
                                                <div class="info">
                                                    <strong class="amount">{{ $expenses }}</strong>
                                                </div>
                                            </div>
                                            <div class="summary-footer">
                                                <a class="text-muted text-uppercase">(statement)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        @if(Auth::user()->hasRole('Superadmin'))
                        <div class="col-md-8 col-lg-4 col-xl-4">
                            <section class="panel panel-featured-left panel-featured-tertiary">
                                <div class="panel-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-tertiary">
                                                <i class="fa fa-suitcase" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Total Earning</h4>
                                                <div class="info">
                                                    <strong class="amount">Tk. {{ $total_income }}</strong>
                                                </div>
                                            </div>
                                            <div class="summary-footer">
                                                <a class="text-muted text-uppercase">(report)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                    <div class="row">
                        @endif
                        <div class="col-md-8 col-lg-4 col-xl-4">
                            <section class="panel panel-featured-left panel-featured-tertiary">
                                <div class="panel-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-tertiary">
                                                <i class="fa fa-university" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Earning of FlexibleIt</h4>
                                                <div class="info">
                                                    <strong class="amount">{{ $total_income - $individual_income }}</strong>
                                                </div>
                                            </div>
                                            <div class="summary-footer">
                                                <a class="text-muted text-uppercase">(statement)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        @if(Auth::user()->hasRole('Superadmin'))
                        <div class="col-md-8 col-lg-4 col-xl-4">
                            <section class="panel panel-featured-left panel-featured-quaternary">
                                <div class="panel-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-quaternary">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Others Earning</h4>
                                                <div class="info">
                                                    <strong class="amount">Tk. {{ $individual_income }}</strong>
                                                </div>
                                            </div>
                                            <div class="summary-footer">
                                                <a class="text-muted text-uppercase">(report)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="created">
                    <p>Started Since 14th September 2017</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js"></script>
<script>
    var task = <?php echo json_encode($incomeexpensechart); ?>;
    var data = task,
    config = {
      data: data,
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Total Expense', 'Total Income'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      lineColors:['red','#44c4c0']
  };
config.element = 'area-chart';
Morris.Area(config);
// config.element = 'line-chart';
// Morris.Line(config);
// config.element = 'bar-chart';
// Morris.Bar(config);
// config.element = 'stacked';
// config.stacked = true;
// Morris.Bar(config);
var expense = '<?php echo $pieChart['expense']; ?>';
var income = '<?php echo $pieChart['income']; ?>';
Morris.Donut({
  element: 'pie-chart',
  data: [
    {label: "Income", value: income},
    {label: "Expense", value: expense},
    // {label: "Enemies", value: 45},
    // {label: "Neutral", value: 10}
  ]
});
</script>
@endsection
