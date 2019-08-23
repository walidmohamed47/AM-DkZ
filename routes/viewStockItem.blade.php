@extends('layouts.inventoryLayout')

@section('middlebar')
<div class="wrapper">
        <div class="tab-content">
            <div class="navHeader">
                <h4 style="margin-bottom: 10px; margin-top: 10px;"> View Stock Items </h4>
            </div>
            <div class="container" >
                <div style="display: inline-block">
                    <form id="calender-form"class="form-horizontal" role="form" method="post" action="/viewDatabaseItems">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label class="col-lg-5 control-label">Date (From):</label>
                            <div class="col-lg-7">
                                <input class="form-control" type="date" name="DateFrom" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-5 control-label">Date (To):</label>
                            <div class="col-lg-7">
                                <input class="form-control" type="date" name="DateTo" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-5 control-label">Item Category:</label>
                            <div class="col-lg-7">
                                <select class="form-control" name="category_id" required>
                                    <option value="0">All Categories</option>
                                    @foreach($categories as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row" id="ss">
                            <label class="col-lg-5 control-label">Supplier:</label>
                            <div class="col-lg-7">
                                <select class="form-control" name="supplier" required>
                                    <option value="0">All Supplier</option>
                                    @foreach($suppliers as $supplier)
                                        <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-primary" style="width: 40%;margin-left: 30%;margin-right: 30%" value="Select">
                                <span></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection