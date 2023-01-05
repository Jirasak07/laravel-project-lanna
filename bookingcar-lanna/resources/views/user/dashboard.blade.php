@extends('layouts.user')
@section('title', 'Business Dashboard')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
@endsection

@section('breadcrumb-title')
    <h3>Business Dashboard</h3>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 xl-100 box-col-12">
                <div class="row total-sale-col">
                    <div class="col-xl-5 box-col-12 xl-100">
                        <div class="row">
                            <div class="col-12 xl-50">
                                <div class="card card-with-border welcome-card o-hidden">
                                    <img class="main" src="{{ asset('assets/images/dashboard/welcome.png') }}"
                                        alt=""><img class="decore1"
                                        src="{{ asset('assets/images/dashboard/d1.png') }}" alt=""><img
                                        class="decore3" src="{{ asset('assets/images/dashboard/d1.png') }}"
                                        alt=""><img class="decore4"
                                        src="{{ asset('assets/images/dashboard/d1.png') }}" alt=""><img
                                        class="decore2" src="{{ asset('assets/images/dashboard/d2.png') }}" alt="">
                                    <div class="card-header card-no-border o-hidden total-sale-widget">
                                        <div class="media">
                                            <div class="media-body">
                                                <h3 class="f-w-600">Hello Johan Deo !</h3>
                                                <p> Welcome back to xolo dashboard</p>
                                            </div>
                                        </div>
                                        <div class="media mt-5">
                                            <div class="media-body">
                                                <h5 class="f-w-400">Wednesday, 20</h5>
                                                <p class="mb-0">Today's Sale<span class="font-success">3.56%<i
                                                            class="fa fa-caret-up"></i></span></p>
                                                <div class="sales-widgets d-flex mt-1">
                                                    <h3 class="mt-1 mb-0 f-w-600"><i class="mr-1 txt-primary"
                                                            data-feather="dollar-sign"></i><span
                                                            class="counter txt-primary">405,</span><span
                                                            class="ml-2 f-12 f-w-400">Earrning</span></h3>
                                                </div>
                                                <p class="mb-0">your sales & earning over the last 24 hours</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 xl-50">
                                <div class="card card-with-border o-hidden total-sale-widget">
                                    <div class="media align-items-center">
                                        <div class="media-left">
                                            <div class="card-no-border p-20">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="mb-0">Total Sale<span class="font-warning">3.56%<i
                                                                    class="fa fa-caret-up"></i></span></p>
                                                        <div class="sales-widgets d-flex">
                                                            <h3 class="mt-1 mb-0 f-w-600"><i class="mr-1"
                                                                    data-feather="dollar-sign"></i><span
                                                                    class="counter">12,461</span></h3>
                                                            <p class="mb-0">Last Year</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <div class="card-body p-0">
                                                <div class="apex-chart-container">
                                                    <div id="timeline-chart1"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-with-border o-hidden total-sale-widget">
                                    <div class="media align-items-center">
                                        <div class="media-left">
                                            <div class="card-no-border p-20">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="mb-0">Active Customer<span class="font-success">01.56<i
                                                                    class="fa fa-caret-up"></i></span></p>
                                                        <div class="sales-widgets d-flex">
                                                            <h3 class="mt-1 mb-0 f-w-600"><span
                                                                    class="counter">10,14,12</span></h3>
                                                            <p class="mb-0">Last Day</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <div class="card-body p-0">
                                                <div class="apex-chart-container">
                                                    <div id="timeline-chart2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 xl-100 box-col-12">
                        <div class="card card-with-border monthly-growth o-hidden">
                            <div class="card-header card-no-border">
                                <h5>Monthly Revenue Growth</h5>
                                <span>Number of This Monthly Revenue Growth</span>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-double-left"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pt-0 px-0">
                                <div class="chart-value-box pull-right chart-data-set">
                                    <div class="value-square-box-primary"></div>
                                    <span>Purchase</span>
                                    <div class="value-square-box-light ml-3"></div>
                                    <span>Sale</span>
                                </div>
                                <div class="dashboard-rounded-chart flot-chart-container"></div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                        title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body pt-0 px-0"&gt;
  &lt;div class="chart-value-box pull-right chart-data-set"&gt;
    &lt;div class="value-square-box-primary"&gt;&lt;/div&gt;&lt;span&gt;Sale&lt;/span&gt;
    &lt;div class="value-square-box-light ml-3"&gt;&lt;/div&gt;&lt;span&gt;Total&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="dashboard-rounded-chart flot-chart-container"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-footer p-0"&gt;
  &lt;div class="row growth-revenue-footer"&gt;
    &lt;div class="col-6"&gt;
      &lt;div class="card ecommerce-widget mb-0"&gt;
        &lt;div class="card-body support-ticket-font"&gt;
          &lt;div class="d-flex"&gt;
            &lt;div class="data-left-ticket"&gt;&lt;span class="f-12"&gt;New User&lt;/span&gt;
              &lt;h3 class="total-num"&gt;&lt;span class="mr-1"&gt;$&lt;/span&gt;&lt;span class="counter"&gt; 8,162&lt;/span&gt;&lt;/h3&gt;
            &lt;/div&gt;
            &lt;div class="data-right-ticket"&gt;
              &lt;div class="text-md-right"&gt;
                &lt;ul&gt;
                  &lt;li&gt;&lt;span class="f-12"&gt;85% goal reached&lt;/span&gt;&lt;/li&gt;
                  &lt;li&gt;
                    &lt;h6 class="f-18 mb-0"&gt;1,00,000&lt;/h6&gt;
                  &lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="progress-showcase"&gt;
            &lt;div class="progress sm-progress-bar"&gt;
              &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-6"&gt;
      &lt;div class="card ecommerce-widget mb-0"&gt;
        &lt;div class="card-body support-ticket-font"&gt;
          &lt;div class="d-flex"&gt;
            &lt;div class="data-left-ticket"&gt;&lt;span class="f-12"&gt;Total Income&lt;/span&gt;
              &lt;h3 class="total-num"&gt;&lt;span class="mr-1"&gt;$&lt;/span&gt;&lt;span class="counter"&gt; 4,685&lt;/span&gt;&lt;/h3&gt;
            &lt;/div&gt;
            &lt;div class="data-right-ticket"&gt;
              &lt;div class="text-md-right"&gt;
                &lt;ul&gt;
                  &lt;li&gt;&lt;span class="f-12"&gt;45% goal reached&lt;/span&gt;&lt;/li&gt;
                  &lt;li&gt;
                    &lt;h6 class="f-18 mb-0"&gt;1,00,000&lt;/h6&gt;
                  &lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="progress-showcase"&gt;
            &lt;div class="progress sm-progress-bar"&gt;
              &lt;div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-6"&gt;
      &lt;div class="card ecommerce-widget mb-0"&gt;
        &lt;div class="card-body support-ticket-font"&gt;
          &lt;div class="d-flex"&gt;
            &lt;div class="data-left-ticket"&gt;&lt;span class="f-12"&gt;Active User&lt;/span&gt;
              &lt;h3 class="total-num"&gt;&lt;span class="mr-1"&gt;$&lt;/span&gt;&lt;span class="counter"&gt; 3,513&lt;/span&gt;&lt;/h3&gt;
            &lt;/div&gt;
            &lt;div class="data-right-ticket"&gt;
              &lt;div class="text-md-right"&gt;
                &lt;ul&gt;
                  &lt;li&gt;&lt;span class="f-12"&gt;70% goal reached&lt;/span&gt;&lt;/li&gt;
                  &lt;li&gt;
                    &lt;h6 class="f-18 mb-0"&gt;1,00,000&lt;/h6&gt;
                  &lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="progress-showcase"&gt;
            &lt;div class="progress sm-progress-bar"&gt;
              &lt;div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-6"&gt;
      &lt;div class="card ecommerce-widget mb-0"&gt;
        &lt;div class="card-body support-ticket-font"&gt;
          &lt;div class="d-flex"&gt;
            &lt;div class="data-left-ticket"&gt;&lt;span class="f-12"&gt;Total Tax&lt;/span&gt;
              &lt;h3 class="total-num"&gt;&lt;span class="mr-1"&gt;$&lt;/span&gt;&lt;span class="counter"&gt; 2,749&lt;/span&gt;&lt;/h3&gt;
            &lt;/div&gt;
            &lt;div class="data-right-ticket"&gt;
              &lt;div class="text-md-right"&gt;
                &lt;ul&gt;
                  &lt;li&gt;&lt;span class="f-12"&gt;52% goal reached&lt;/span&gt;&lt;/li&gt;
                  &lt;li&gt;
                    &lt;h6 class="f-18 mb-0"&gt;1,00,000&lt;/h6&gt;
                  &lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="progress-showcase"&gt;
            &lt;div class="progress sm-progress-bar"&gt;
              &lt;div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
 &lt;/div&gt;
 &lt;!-- Cod Box Copy end --&gt;</code></pre>
                                </div>
                            </div>
                            <div class="card-footer p-0">
                                <div class="row growth-revenue-footer">
                                    <div class="col-6">
                                        <div class="card ecommerce-widget mb-0">
                                            <div class="card-body support-ticket-font">
                                                <div class="d-flex">
                                                    <div class="data-left-ticket">
                                                        <span class="f-12">Total sales</span>
                                                        <h5 class="total-num"><span class="mr-1">$</span><span
                                                                class="counter"> 8,162</span></h5>
                                                    </div>
                                                    <div class="data-right-ticket">
                                                        <div class="text-md-right">
                                                            <ul>
                                                                <li><span class="f-12">85% goal reached</span></li>
                                                                <li>
                                                                    <h6 class="mb-0">1,00,000</h6>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-showcase">
                                                    <div class="progress sm-progress-bar">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 75%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card ecommerce-widget mb-0">
                                            <div class="card-body support-ticket-font">
                                                <div class="d-flex">
                                                    <div class="data-left-ticket">
                                                        <span class="f-12">Total Income</span>
                                                        <h5 class="total-num"><span class="mr-1">$</span><span
                                                                class="counter"> 4,685</span></h5>
                                                    </div>
                                                    <div class="data-right-ticket">
                                                        <div class="text-md-right">
                                                            <ul>
                                                                <li><span class="f-12">45% goal reached</span></li>
                                                                <li>
                                                                    <h6 class="mb-0">1,00,000</h6>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-showcase">
                                                    <div class="progress sm-progress-bar">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 75%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card ecommerce-widget mb-0">
                                            <div class="card-body support-ticket-font pt-0">
                                                <div class="d-flex">
                                                    <div class="data-left-ticket">
                                                        <span class="f-12">Active User</span>
                                                        <h5 class="total-num"><span class="mr-1">$</span><span
                                                                class="counter"> 3,513</span></h5>
                                                    </div>
                                                    <div class="data-right-ticket">
                                                        <div class="text-md-right">
                                                            <ul>
                                                                <li><span class="f-12">70% goal reached</span></li>
                                                                <li>
                                                                    <h6 class="mb-0">1,00,000</h6>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-showcase">
                                                    <div class="progress sm-progress-bar">
                                                        <div class="progress-bar bg-primary-light" role="progressbar"
                                                            style="width: 75%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card ecommerce-widget mb-0">
                                            <div class="card-body support-ticket-font pt-0">
                                                <div class="d-flex">
                                                    <div class="data-left-ticket">
                                                        <span class="f-12">Total Tax</span>
                                                        <h5 class="total-num"><span class="mr-1">$</span><span
                                                                class="counter"> 2,749</span></h5>
                                                    </div>
                                                    <div class="data-right-ticket">
                                                        <div class="text-md-right">
                                                            <ul>
                                                                <li><span class="f-12">52% goal reached</span></li>
                                                                <li>
                                                                    <h6 class="mb-0">1,00,000</h6>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-showcase">
                                                    <div class="progress sm-progress-bar">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 75%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 xl-100 box-col-12">
                <div class="card card-with-border total-users-lists">
                    <div class="card-header card-no-border">
                        <h5>Total New Venders</h5>
                        <span>Number of Totally Users</span>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icofont icofont-double-left"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="users-total table-responsive">
                            <table class="table table-bordernone">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Country</th>
                                        <th>Date</th>
                                        <th>Payment</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img class="img-40 align-top m-r-15 b-r-10"
                                                    src="{{ asset('assets/images/user/2.png') }}" alt="">
                                                <div class="d-inline-block"><span>Nick Stone</span></div>
                                            </div>
                                        </td>
                                        <td><i class="flag-icon flag-icon-gb"></i></td>
                                        <td><span class="f-12">10 May 2018</span></td>
                                        <td><i>COD</i></td>
                                        <td><span>8652.00 $</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img class="img-40 align-top m-r-15 b-r-10"
                                                    src="{{ asset('assets/images/user/5.jpg') }}" alt="">
                                                <div class="d-inline-block"><span>Milano Esco</span></div>
                                            </div>
                                        </td>
                                        <td><i class="flag-icon flag-icon-lr"></i></td>
                                        <td><span class="f-12">10 May 2018</span></td>
                                        <td><i>COD</i></td>
                                        <td><span>102.00 $</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img class="img-40 align-top m-r-15 b-r-10"
                                                    src="{{ asset('assets/images/user/3.jpg') }}" alt="">
                                                <div class="d-inline-block"><span>Wiltor Noice</span></div>
                                            </div>
                                        </td>
                                        <td><i class="flag-icon flag-icon-za"></i></td>
                                        <td><span class="f-12">10 May 2018</span></td>
                                        <td><i>Cash</i></td>
                                        <td><span>2315.00 $</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img class="img-40 align-top m-r-15 b-r-10"
                                                    src="{{ asset('assets/images/user/4.jpg') }}" alt="">
                                                <div class="d-inline-block"><span>Anna Strong</span></div>
                                            </div>
                                        </td>
                                        <td><i class="flag-icon flag-icon-at"></i></td>
                                        <td><span class="f-12">10 May 2018</span></td>
                                        <td><i>Bank</i></td>
                                        <td><span>4513.00 $</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img class="img-40 align-top m-r-15 b-r-10"
                                                    src="{{ asset('assets/images/user/12.png') }}" alt="">
                                                <div class="d-inline-block"><span>Anna Strong</span></div>
                                            </div>
                                        </td>
                                        <td><i class="flag-icon flag-icon-lr"></i></td>
                                        <td><span class="f-12">10 May 2018</span></td>
                                        <td><i>Cheque</i></td>
                                        <td><span>4513.00 $</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img class="img-40 align-top m-r-15 b-r-10"
                                                    src="{{ asset('assets/images/user/5.jpg') }}" alt="">
                                                <div class="d-inline-block"><span>Anna Strong</span></div>
                                            </div>
                                        </td>
                                        <td><i class="flag-icon flag-icon-gb"></i></td>
                                        <td><span class="f-12">10 May 2018</span></td>
                                        <td><i>Cheque</i></td>
                                        <td><span>4513.00 $</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img class="img-40 align-top m-r-15 b-r-10"
                                                    src="{{ asset('assets/images/user/10.jpg') }}" alt="">
                                                <div class="d-inline-block"><span>Anna Strong</span></div>
                                            </div>
                                        </td>
                                        <td><i class="flag-icon flag-icon-za"></i></td>
                                        <td><span class="f-12">10 May 2018</span></td>
                                        <td><i>Cash</i></td>
                                        <td><span>4513.00 $</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body p-0"&gt;
  &lt;div class="users-total table-responsive"&gt;
    &lt;table class="table table-bordernone"&gt;
      &lt;thead&gt;
        &lt;tr&gt;
          &lt;th&gt;Name&lt;/th&gt;
          &lt;th&gt;Country&lt;/th&gt;
          &lt;th&gt;Date&lt;/th&gt;
          &lt;th&gt;Payment&lt;/th&gt;
          &lt;th&gt;Total&lt;/th&gt;
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-inline-block align-middle"&gt;&lt;img class="img-radius img-40 align-top m-r-15 rounded-circle" src="&#123;&#123;asset('assets/images/user/2.png')&#125;&#125;" alt=""&gt;
              &lt;div class="d-inline-block"&gt;&lt;span&gt;Nick Stone&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;i class="flag-icon flag-icon-gb"&gt;&lt;/i&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;10 May 2018&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;img src="&#123;&#123;asset('assets/images/dashboard/payment-1.png')&#125;&#125;" alt=""&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span&gt;8652.00 $&lt;/span&gt;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-inline-block align-middle"&gt;&lt;img class="img-radius img-40 align-top m-r-15 rounded-circle" src="&#123;&#123;asset('assets/images/user/5.jpg')&#125;&#125;" alt=""&gt;
              &lt;div class="d-inline-block"&gt;&lt;span&gt;Milano Esco&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;i class="flag-icon flag-icon-lr"&gt;&lt;/i&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;10 May 2018&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;img src="&#123;&#123;asset('assets/images/dashboard/payment-2.png')&#125;&#125;" alt=""&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span&gt;102.00 $&lt;/span&gt;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-inline-block align-middle"&gt;&lt;img class="img-radius img-40 align-top m-r-15 rounded-circle" src="&#123;&#123;asset('assets/images/user/3.jpg')&#125;&#125;" alt=""&gt;
              &lt;div class="d-inline-block"&gt;&lt;span&gt;Wiltor Noice&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;i class="flag-icon flag-icon-za"&gt;&lt;/i&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;10 May 2018&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;img src="&#123;&#123;asset('assets/images/dashboard/payment-3.png')&#125;&#125;" alt=""&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span&gt;2315.00 $&lt;/span&gt;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-inline-block align-middle"&gt;&lt;img class="img-radius img-40 align-top m-r-15 rounded-circle" src="&#123;&#123;asset('assets/images/user/4.jpg')&#125;&#125;" alt=""&gt;
              &lt;div class="d-inline-block"&gt;&lt;span&gt;Anna Strong&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;i class="flag-icon flag-icon-at"&gt;&lt;/i&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;10 May 2018&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;img src="&#123;&#123;asset('assets/images/dashboard/payment-4.png')&#125;&#125;" alt=""&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span&gt;4513.00 $&lt;/span&gt;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-inline-block align-middle"&gt;&lt;img class="img-radius img-40 align-top m-r-15 rounded-circle" src="&#123;&#123;asset('assets/images/user/12.png')&#125;&#125;" alt=""&gt;
              &lt;div class="d-inline-block"&gt;&lt;span&gt;Anna Strong&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;i class="flag-icon flag-icon-lr"&gt;&lt;/i&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;10 May 2018&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;img src="&#123;&#123;asset('assets/images/dashboard/payment-4.png')&#125;&#125;" alt=""&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span&gt;4513.00 $&lt;/span&gt;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-inline-block align-middle"&gt;&lt;img class="img-radius img-40 align-top m-r-15 rounded-circle" src="&#123;&#123;asset('assets/images/user/5.jpg')&#125;&#125;" alt=""&gt;
              &lt;div class="d-inline-block"&gt;&lt;span&gt;Anna Strong&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;i class="flag-icon flag-icon-gb"&gt;&lt;/i&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;10 May 2018&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;img src="&#123;&#123;asset('assets/images/dashboard/payment-4.png')&#125;&#125;" alt=""&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span&gt;4513.00 $&lt;/span&gt;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-inline-block align-middle"&gt;&lt;img class="img-radius img-40 align-top m-r-15 rounded-circle" src="&#123;&#123;asset('assets/images/user/10.jpg')&#125;&#125;" alt=""&gt;
              &lt;div class="d-inline-block"&gt;&lt;span&gt;Anna Strong&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;i class="flag-icon flag-icon-za"&gt;&lt;/i&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;10 May 2018&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;img src="&#123;&#123;asset('assets/images/dashboard/payment-4.png')&#125;&#125;" alt=""&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span&gt;4513.00 $&lt;/span&gt;&lt;/td&gt;
        &lt;/tr&gt;
      &lt;/tbody&gt;
    &lt;/table&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 xl-100 box-col-12">
                <div class="card card-with-border total-users-lists">
                    <div class="card-header card-no-border">
                        <h5>Today Transaction Details</h5>
                        <span>Today's transaction</span>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icofont icofont-double-left"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="users-total table-responsive">
                            <table class="table table-bordernone">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Invoice No.</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img class="img-40 align-top m-r-15 b-r-10"
                                                    src="{{ asset('assets/images/user/9.jpg') }}" alt="">
                                                <div class="d-inline-block"><span>Karen Leah</span></div>
                                            </div>
                                        </td>
                                        <td>#PX0101</td>
                                        <td><span class="f-12">9:01</span></td>
                                        <td><span class="txt-success">Complete &#x2764;</span></td>
                                        <td><span>8652.00 $</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img class="img-40 align-top m-r-15 b-r-10"
                                                    src="{{ asset('assets/images/user/10.jpg') }}" alt="">
                                                <div class="d-inline-block"><span>Mary Esco</span></div>
                                            </div>
                                        </td>
                                        <td>#PX0102</td>
                                        <td><span class="f-12">9:10</span></td>
                                        <td><span class="txt-warning">In progress &#8987;</span></td>
                                        <td><span>102.00 $</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img class="img-40 align-top m-r-15 b-r-10"
                                                    src="{{ asset('assets/images/user/11.jpg') }}" alt="">
                                                <div class="d-inline-block"><span>Wiltor Molly</span></div>
                                            </div>
                                        </td>
                                        <td>#PX0103</td>
                                        <td><span class="f-12">9:42</span></td>
                                        <td><span class="txt-danger">Due &#8986;</span></td>
                                        <td><span>2315.00 $</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img class="img-40 align-top m-r-15 b-r-10"
                                                    src="{{ asset('assets/images/user/12.png') }}" alt="">
                                                <div class="d-inline-block"><span>Anna Colin</span></div>
                                            </div>
                                        </td>
                                        <td>#PX0104</td>
                                        <td><span class="f-12">10:01</span></td>
                                        <td><span class="txt-danger">Due &#8986;</span></td>
                                        <td><span>4513.00 $</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img class="img-40 align-top m-r-15 b-r-10"
                                                    src="{{ asset('assets/images/user/14.png') }}" alt="">
                                                <div class="d-inline-block"><span>Josep Jus</span></div>
                                            </div>
                                        </td>
                                        <td>#PX0105</td>
                                        <td><span class="f-12">10:01</span></td>
                                        <td><span class="txt-success">complete &#x2764;</span></td>
                                        <td><span>4513.00 $</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img class="img-40 align-top m-r-15 b-r-10"
                                                    src="{{ asset('assets/images/user/2.jpg') }}" alt="">
                                                <div class="d-inline-block"><span>Paul Owen</span></div>
                                            </div>
                                        </td>
                                        <td>#PX0106</td>
                                        <td><span class="f-12">10:50</span></td>
                                        <td><span class="txt-warning">In progress &#8987;</span></td>
                                        <td><span>4513.00 $</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img class="img-40 align-top m-r-15 b-r-10"
                                                    src="{{ asset('assets/images/user/10.jpg') }}" alt="">
                                                <div class="d-inline-block"><span>Burgess Carr</span></div>
                                            </div>
                                        </td>
                                        <td>#PX0107</td>
                                        <td><span class="f-12">10:59</span></td>
                                        <td><span class="txt-success">complete &#x2764;</span></td>
                                        <td><span>4513.00 $</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body p-0"&gt;
  &lt;div class="users-total table-responsive"&gt;
    &lt;table class="table table-bordernone"&gt;
      &lt;thead&gt;
        &lt;tr&gt;
          &lt;th&gt;Name&lt;/th&gt;
          &lt;th&gt;Country&lt;/th&gt;
          &lt;th&gt;Date&lt;/th&gt;
          &lt;th&gt;Payment&lt;/th&gt;
          &lt;th&gt;Total&lt;/th&gt;
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-inline-block align-middle"&gt;&lt;img class="img-radius img-40 align-top m-r-15 rounded-circle" src="&#123;&#123;asset('assets/images/user/2.png')&#125;&#125;" alt=""&gt;
              &lt;div class="d-inline-block"&gt;&lt;span&gt;Nick Stone&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;i class="flag-icon flag-icon-gb"&gt;&lt;/i&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;10 May 2018&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;img src="&#123;&#123;asset('assets/images/dashboard/payment-1.png')&#125;&#125;" alt=""&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span&gt;8652.00 $&lt;/span&gt;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-inline-block align-middle"&gt;&lt;img class="img-radius img-40 align-top m-r-15 rounded-circle" src="&#123;&#123;asset('assets/images/user/5.jpg')&#125;&#125;" alt=""&gt;
              &lt;div class="d-inline-block"&gt;&lt;span&gt;Milano Esco&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;i class="flag-icon flag-icon-lr"&gt;&lt;/i&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;10 May 2018&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;img src="&#123;&#123;asset('assets/images/dashboard/payment-2.png')&#125;&#125;" alt=""&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span&gt;102.00 $&lt;/span&gt;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-inline-block align-middle"&gt;&lt;img class="img-radius img-40 align-top m-r-15 rounded-circle" src="&#123;&#123;asset('assets/images/user/3.jpg')&#125;&#125;" alt=""&gt;
              &lt;div class="d-inline-block"&gt;&lt;span&gt;Wiltor Noice&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;i class="flag-icon flag-icon-za"&gt;&lt;/i&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;10 May 2018&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;img src="&#123;&#123;asset('assets/images/dashboard/payment-3.png')&#125;&#125;" alt=""&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span&gt;2315.00 $&lt;/span&gt;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-inline-block align-middle"&gt;&lt;img class="img-radius img-40 align-top m-r-15 rounded-circle" src="&#123;&#123;asset('assets/images/user/4.jpg')&#125;&#125;" alt=""&gt;
              &lt;div class="d-inline-block"&gt;&lt;span&gt;Anna Strong&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;i class="flag-icon flag-icon-at"&gt;&lt;/i&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;10 May 2018&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;img src="&#123;&#123;asset('/assets/images/dashboard/payment-4.png')&#125;&#125;" alt=""&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span&gt;4513.00 $&lt;/span&gt;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-inline-block align-middle"&gt;&lt;img class="img-radius img-40 align-top m-r-15 rounded-circle" src="&#123;&#123;asset('assets/images/user/12.png')&#125;&#125;" alt=""&gt;
              &lt;div class="d-inline-block"&gt;&lt;span&gt;Anna Strong&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;i class="flag-icon flag-icon-lr"&gt;&lt;/i&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;10 May 2018&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;img src="&#123;&#123;asset('assets/images/dashboard/payment-4.png')&#125;&#125;" alt=""&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span&gt;4513.00 $&lt;/span&gt;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-inline-block align-middle"&gt;&lt;img class="img-radius img-40 align-top m-r-15 rounded-circle" src="&#123;&#123;asset('assets/images/user/5.jpg')&#125;&#125;" alt=""&gt;
              &lt;div class="d-inline-block"&gt;&lt;span&gt;Anna Strong&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;i class="flag-icon flag-icon-gb"&gt;&lt;/i&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;10 May 2018&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;img src="&#123;&#123;asset('assets/images/dashboard/payment-4.png')&#125;&#125;" alt=""&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span&gt;4513.00 $&lt;/span&gt;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-inline-block align-middle"&gt;&lt;img class="img-radius img-40 align-top m-r-15 rounded-circle" src="&#123;&#123;asset('assets/images/user/10.jpg')&#125;&#125;" alt=""&gt;
              &lt;div class="d-inline-block"&gt;&lt;span&gt;Anna Strong&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;i class="flag-icon flag-icon-za"&gt;&lt;/i&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;10 May 2018&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;img src="&#123;&#123;asset('assets/images/dashboard/payment-4.png')&#125;&#125;" alt=""&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span&gt;4513.00 $&lt;/span&gt;&lt;/td&gt;
        &lt;/tr&gt;
      &lt;/tbody&gt;
    &lt;/table&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 xl-100 box-col-12">
                <div class="card investments card-with-border">
                    <div class="card-header card-no-border">
                        <h5>Total Investment</h5>
                        <span>Number of Revenue Growth</span>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icofont icofont-double-left"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div id="circlechart"></div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body p-0"&gt;
  &lt;div id="circlechart"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-footer p-0"&gt;
  &lt;ul&gt;
    &lt;li class="text-center"&gt;&lt;span class="f-12"&gt;Total&lt;/span&gt;
      &lt;h6 class="f-w-600 mb-0"&gt;$34,4562&lt;/h6&gt;
    &lt;/li&gt;
    &lt;li class="text-center"&gt;&lt;span class="f-12"&gt;Monthly&lt;/span&gt;
      &lt;h6 class="f-w-600 mb-0"&gt;$12,463&lt;/h6&gt;
    &lt;/li&gt;
    &lt;li class="text-center"&gt;&lt;span class="f-12"&gt;Daily&lt;/span&gt;
      &lt;h6 class="f-w-600 mb-0"&gt;$5000&lt;/h6&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                        </div>
                    </div>
                    <div class="card-footer p-0">
                        <ul>
                            <li class="text-center">
                                <span class="f-12">Total</span>
                                <h6 class="f-w-600 mb-0">$34,4562</h6>
                            </li>
                            <li class="text-center">
                                <span class="f-12">Monthly</span>
                                <h6 class="f-w-600 mb-0">$12,463</h6>
                            </li>
                            <li class="text-center">
                                <span class="f-12">Daily</span>
                                <h6 class="f-w-600 mb-0">$5000</h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 xl-100 box-col-12">
                <div class="card card-with-border total-users-lists">
                    <div class="card-header card-no-border">
                        <h5>Product Details</h5>
                        <span>Details of our best sale product</span>
                        <div class="dashboard-btn-groups">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-outline-light btn-js1" type="button">Day</button>
                                <button class="btn btn-outline-light btn-js1" type="button">Week</button>
                                <button class="btn btn-outline-light btn-js1 active" type="button">Month</button>
                            </div>
                        </div>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icofont icofont-double-left"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="users-total table-responsive product-sales">
                            <table class="table table-bordernone">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Sale</th>
                                        <th>Shipping</th>
                                        <th>MRP</th>
                                        <th>Avaiablility</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="round-product m-r-15"><i class="icofont icofont-jersey"></i>
                                                </div>
                                                <span>Solid Men Turtle Neck Black</span>
                                            </div>
                                        </td>
                                        <td><span class="f-12">11</span></td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 75%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$ 5.15</td>
                                        <td class="txt-success">In Stock</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="round-product round-product-dark m-r-15"><i
                                                        class="icofont icofont-time"></i></div>
                                                <span>Solid Wall clock</span>
                                            </div>
                                        </td>
                                        <td><span class="f-12">31</span></td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$ 56.55</td>
                                        <td class="txt-success">In Stock</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="round-product round-product-dark m-r-15"><i
                                                        class="icofont icofont-helmet"></i></div>
                                                <span>New Men Helmet</span>
                                            </div>
                                        </td>
                                        <td><span class="f-12">12</span></td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 50%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$ 0.564</td>
                                        <td class="txt-success">In Stock</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="round-product round-product-dark m-r-15"><i
                                                        class="icofont icofont-tennis"></i></div>
                                                <span>Solid Tennis ball</span>
                                            </div>
                                        </td>
                                        <td><span class="f-12">25</span></td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 10%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$1.556</td>
                                        <td class="txt-danger">Out Of Stock</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="round-product round-product-dark m-r-15"><i
                                                        class="icofont icofont-water-bottle"></i></div>
                                                <span>Colorfull Water bottle</span>
                                            </div>
                                        </td>
                                        <td><span class="f-12">48</span></td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 75%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$ 56.26</td>
                                        <td class="txt-success">In Stock</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="round-product round-product-dark m-r-15"><i
                                                        class="icofont icofont-skydiving-goggles"></i></div>
                                                <span>Solid Unisex skydiving goggles</span>
                                            </div>
                                        </td>
                                        <td><span class="f-12">34</span></td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 100%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$ 2.564</td>
                                        <td class="txt-success">In Stock</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body p-0"&gt;
  &lt;div class="users-total table-responsive product-sales"&gt;
    &lt;table class="table table-bordernone"&gt;
      &lt;thead&gt;
        &lt;tr&gt;
          &lt;th&gt;Product&lt;/th&gt;
          &lt;th&gt;Sold&lt;/th&gt;
          &lt;th&gt;Record Point&lt;/th&gt;
          &lt;th&gt;Stock&lt;/th&gt;
          &lt;th&gt;Amount&lt;/th&gt;
          &lt;th&gt;Stock Status&lt;/th&gt;
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-flex"&gt;
              &lt;div class="round-product m-r-15"&gt;&lt;/div&gt;&lt;span&gt;Women Imported Wallet-E32N&lt;/span&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;18&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="badge badge-light f-14"&gt;05&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;123&lt;/td&gt;
          &lt;td&gt;$ 5.15&lt;/td&gt;
          &lt;td&gt;In Stock&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-flex"&gt;
              &lt;div class="round-product round-product-dark m-r-15"&gt;&lt;/div&gt;&lt;span&gt;Men Shoeless Nike Shoes&lt;/span&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;8&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="badge badge-light f-14"&gt;12&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;415&lt;/td&gt;
          &lt;td&gt;$ 56.55&lt;/td&gt;
          &lt;td&gt;In Stock&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-flex"&gt;
              &lt;div class="round-product round-product-dark m-r-15"&gt;&lt;/div&gt;&lt;span&gt;Women Red one piece Dress&lt;/span&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;23&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="badge badge-light f-14"&gt;10&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;360&lt;/td&gt;
          &lt;td&gt;$ 0.564&lt;/td&gt;
          &lt;td&gt;In Stock&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-flex"&gt;
              &lt;div class="round-product round-product-dark m-r-15"&gt;&lt;/div&gt;&lt;span&gt;Electroics Items&lt;/span&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;52&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="badge badge-light f-14"&gt;32&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;481&lt;/td&gt;
          &lt;td&gt;$ 1.556&lt;/td&gt;
          &lt;td&gt;Out Of Stock&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-flex"&gt;
              &lt;div class="round-product round-product-dark m-r-15"&gt;&lt;/div&gt;&lt;span&gt;Mens Gold Watches E9850&lt;/span&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;84&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="badge badge-light f-14"&gt;25&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;523&lt;/td&gt;
          &lt;td&gt;$ 56.26&lt;/td&gt;
          &lt;td&gt;In Stock&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;
            &lt;div class="d-flex"&gt;
              &lt;div class="round-product round-product-dark m-r-15"&gt;&lt;/div&gt;&lt;span&gt;Women Wallet-E32N&lt;/span&gt;
            &lt;/div&gt;
          &lt;/td&gt;
          &lt;td&gt;&lt;span class="f-12"&gt;43&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;&lt;span class="badge badge-light f-14"&gt;08&lt;/span&gt;&lt;/td&gt;
          &lt;td&gt;137&lt;/td&gt;
          &lt;td&gt;$ 2.564&lt;/td&gt;
          &lt;td&gt;In Stock&lt;/td&gt;
        &lt;/tr&gt;
      &lt;/tbody&gt;
    &lt;/table&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;        </code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/chart/chartist/chartist.js') }}"></script>
    <script src="{{ asset('assets/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/default.js') }}"></script>
    <script src="{{ asset('assets/js/notify/index.js') }}"></script>
@endsection
