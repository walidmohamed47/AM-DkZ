@extends('layouts.inventoryLayout')

@section('middlebar')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    function check() {
        var href = document.getElementById("delete-link").textContent;
        swal({
            text: "are you sure to delete item?",
            buttons: true
        }).then(function(willDelete) {
            if (willDelete) {
                window.location.href = href;
            }
        });
    }
</script>
<style>
    .swal-button--cancel {
        color: white;
    }
</style>
 <div class="wrapper">
        <div class="tab-content">
            <div class="navHeader">
                <h4 style="margin-bottom: 10px; margin-top: 10px;"> View Database Items </h4>
            </div>
            <div class="container">
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
            <table id="dtVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="50%" style="margin-left: -10px;">
                <thead>
                    <tr>
                        <th class="th-sm" style="font-size: 12px;">Item
                            <i class="fa fa-sort float-right" aria-hidden="true"></i>
                        </th>
                        <th class="th-sm" style="font-size: 12px;">Barcode
                            <i class="fa fa-sort float-right" aria-hidden="true"></i>
                        </th>
                        <th class="th-sm" style="font-size: 12px;">Supplier
                            <i class="fa fa-sort float-right" aria-hidden="true"></i>
                        </th>
                        <th class="th-sm" style="font-size: 12px;">Unit
                            <i class="fa fa-sort float-right" aria-hidden="true"></i>
                        </th>
                        <th class="th-sm" style="font-size: 12px;">Quantity
                            <i class="fa fa-sort float-right" aria-hidden="true"></i>
                        </th>
                        <th class="th-sm" style="font-size: 12px;">Item Category
                            <i class="fa fa-sort float-right" aria-hidden="true"></i>
                        </th>
                        <th class="th-sm" style="font-size: 12px;">Reorder Point
                            <i class="fa fa-sort float-right" aria-hidden="true"></i>
                        </th>
                        <th class="th-sm" style="font-size: 12px;">Date Created in Database
                            <i class="fa fa-sort float-right" aria-hidden="true"></i>
                        </th>
                        <th class="th-sm" style="font-size: 12px;">Date Last Updated
                            <i class="fa fa-sort float-right" aria-hidden="true"></i>
                        </th>
                        <th class="th-sm">
                            <i class="fa fa-sort float-right" aria-hidden="true"></i>
                        </th>
                        <th class="th-sm">
                            <i class="fa fa-sort float-right" aria-hidden="true"></i>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataBaseItems as $i)
                    
                    <tr>
                        <td>{{$i->item}}</td>
                        <td style=" text-align: center;">
                        @php($check = 0)
                        @foreach($dataBaseItemsSuppliers as $dataBaseItemsSupplier)
                            @if($type == 2)
                                @if($dataBaseItemsSupplier->id == $i->id)
                                    @if($check != 0)
                                    <hr>
                                    @endif
                                    {{$dataBaseItemsSupplier->barcode }}
                                    @php($check = 1)
                                @endif
                            @endif
                            @if($type == 1)
                                @if($dataBaseItemsSupplier->databaseitem_id == $i->id)
                                    @if($check != 0)
                                    <hr>
                                    @endif
                                    {{$dataBaseItemsSupplier->barcode }}
                                    @php($check = 1)
                                @endif
                            @endif
                        @endforeach

                        </td>
                        <td style=" text-align: center;">
                        @php($check1 = 0)
                        @foreach($dataBaseItemsSuppliers as $dataBaseItemsSupplier)
                            @if($type == 2)
                                @if($dataBaseItemsSupplier->id == $i->id)
                                    @if($check1 != 0)
                                    <hr>
                                    @endif
                                    @foreach($suppliers as $supplier)
                                        @if($dataBaseItemsSupplier->supplier_id == $supplier->id)
                                            {{$supplier->name}}
                                        @endif
                                    @endforeach
                                    @php($check1 = 1)
                                @endif
                            @endif
                             @if($type == 1)
                                @if($dataBaseItemsSupplier->databaseitem_id == $i->id)
                                    @if($check1 != 0)
                                    <hr>
                                    @endif
                                    @foreach($suppliers as $supplier)
                                        @if($dataBaseItemsSupplier->supplier_id == $supplier->id)
                                            {{$supplier->name}}
                                        @endif
                                    @endforeach
                                    @php($check1 = 1)
                                @endif
                            @endif
                        @endforeach
                        </td>
                        <td>
                            @foreach($units as $unit)
                                @if($unit->id == $i->unit_id)
                                    {{$unit->name}}
                                @endif
                            @endforeach
                        </td>
                        <td>{{$i->total_quantity}}</td>
                        <td>@foreach($categories as $category)
                                @if($category->id == $i->category_id)
                                    {{$category->name}}
                                @endif
                            @endforeach</td>
                        <td>{{$i->reorderpoint}}</td>
                        <td>{{$i->created_at}}</td>
                        <td>{{$i->updated_at}}</td>
                        <td><a href="/editItemInventory/{{$i->id}}" style="font-size: 12px;"><img src="images/edit.png" width="30" height="30" /></a></td>
                        <td id="delete-link" style="display:none">/deleteItemInventory/{{$i->id}}</td>
                        <td><a onclick="return check()" style="cursor:pointer;"><img src="images/delete.png" width="30" height="30" /></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
@endsection