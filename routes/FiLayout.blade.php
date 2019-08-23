
@extends('layouts.farouqBaseLayout')
@section('leftbar')
    <div class="wrapper">
        <nav id="sidebar">
            <div class="row navHeader">
                <div class="col-md-9" style="margin: auto; font-size: 1.5em">
                    <div class="nav-link">
                        FI
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9" style="margin: auto">
                    <ul class="nav flex-column nav-tabs">
                        <li class="nav-item">
                            <a class="menuHeader nav-link" style="margin-left: -50px; color:#58595B;"> BANK </a>
                            <ul class="submenu nav " style="margin-left: -20px;">
                                <li class="nav-item"><a class="nav-link" href='/createBank'>Create </a></li>
                                <li class="nav-item"><a class="nav-link" href='/viewBank'>View</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="menuHeader nav-link" style="margin-left: -50px; color:#58595B;">EXTERNAL PARTY</a>
                            <ul class="submenu nav " style="margin-left: -20px;">
                                <li class="nav-item"><a class="nav-link" href='/createOutSource'>Create</a></li>
                                <li class="nav-item"><a class="nav-link" href='/viewOutSource'>View</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="menuHeader nav-link" style="margin-left: -50px; color:#58595B;">EXPENSES</a>
                            <ul class="submenu nav " style="margin-left: -20px;">
                                <li class="nav-item"><a class="nav-link" href='/createExpenses'>Create</a></li>
                                <li class="nav-item"><a class="nav-link" href='/viewExpenses'>View</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="menuHeader nav-link" style="margin-left: -50px; color:#58595B;">PAYMENTS</a>
                            <ul class="submenu nav " style="margin-left: -20px;">
                                <li class="nav-item"><a class="nav-link" href='/createPayments'>Create</a></li>
                                <li class="nav-item"><a class="nav-link" href='/viewPayments'>View</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="menuHeader nav-link" style="margin-left: -50px; color:#58595B;">INCOME</a>
                            <ul class="submenu nav " style="margin-left: -20px;">

                                <li class="nav-item"><a class="nav-link" href='/createRevenues'>Create</a></li>
                                <li class="nav-item"><a class="nav-link" href='/viewRevenues'>View</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="menuHeader nav-link" style="margin-left: -50px; color:#58595B;">REVENUES</a>
                            <ul class="submenu nav " style="margin-left: -20px;">
                                <li class="nav-item"><a class="nav-link" href='/createIncome'>Create</a></li>
                                <li class="nav-item"><a class="nav-link" href='/viewIncome'>View</a></li>                                
                            </ul>
                        </li>

                        
                      
                    </ul>
                </div>
            </div>
        </nav>
    </div>
@endsection

@section('rightbar')
    <div class="wrapper">
        <nav class="sidebar">
            <div class="row navHeader">
                <div class="col" style="margin: auto; font-size: 1.5em">
                    <div class="nav-link" style="text-align: center; font-size: 20px;">
                        REPORTS
                    </div>
                </div>
            </div>
            <div class="row" style="margin: 0;">
                <div class='col' style="margin: auto;" id="reportsContainer">
                    <ul class="nav flex-column nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href='/revenuereport'>All Revenuees</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href='/paymentreport'>All Payments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href='#'>Report #3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href='#'>Report #4</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
@endsection
