<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function validatefilledIn() {
        var arr = $("[id='qty']");
        var key = 0;
        $.each(arr, function(i, o) {
            if ($(o).val() == "") {
                $(o).css("border-color", "red");
                key = 1;
            } else {
                $(o).css("border-color", "green");
            }
        });
        if (key == 1) {
            Swal.fire('Invalid data, please check highlighted fields');
            return false;
        }
    }
</script>
@if(Request::url()=='http://www.squad101.net/InventoryDatabaseItemReport')

    <div class="container" style="font-size: 12px;"><!--  General -->
        <form method="post" action="/InventoryDatabaseItemReports">
            {{csrf_field()}}
            <div class="row">

                <div class="col-4">
                <div class="  form-group row">
                    <label class="col-sm-4 control-label">Date From:</label>
                    <div class="col-sm-6">
                        <input id="qty" class="form-control" style="height: 25px; font-size: 12px; padding: 4px;" type="date" name="DateFrom">
                    </div>
                </div>
                </div>
            
                <div class="col-4">
                    <div class="form-group row">
                        <label class="col-lg-5 control-label">Item:</label>
                        <div class="col-lg-7">
                            <select class="form-control" style="height: 25px; font-size: 12px; padding: 4px;" name="item_id" required>
                                <option value="0">All Items</option>
                                @foreach($dataBaseItems as $dataBaseItem)
                                    <option value="{{$dataBaseItem->databaseitemID}}">{{$dataBaseItem->item}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-4">
                    <div class="form-group row">
                        <label class="col-lg-6 control-label">Date to:</label>
                        <div class="col-lg-6">
                            <input id="qty" class="form-control" style="height: 25px; font-size: 12px; padding: 4px;" type="date" name="DateTo">
                        </div>
                    </div>
                </div>

               <div class="col-4">
                    <div class="form-group row">
                        <label class="col-lg-5 control-label">Item Categories:</label>
                        <div class="col-lg-7">
                            <select class="form-control" style="height: 25px; font-size: 12px;" name="item_categories_id" required>
                                <option value="0">All Categories</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-4">
                    <div class="  form-group row">

                        <label class="col-lg-6 control-label">Show Cost & Prices:</label>
                        <label class="col-lg-6 control-label">Show Cost & Prices:</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group row">
                        <label class="col-lg-5 control-label">Supplier:</label>
                        <div class="col-lg-7">
                            <select class="form-control"style="height: 25px; font-size: 12px;" name="supplier_id" required>
                                <option value="0">All Suppliers:</option>
                                @foreach($suppliers as $supplier)
                                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="  form-group row">

                        <label class="col-lg-6 control-label">Report Cost Currency:</label>
                        <label class="col-lg-6 control-label">Report Cost Currency:</label>
                    </div>
                </div>
               <div class="col-4">
                    <div class="  form-group row">

                        <label class="col-lg-6 control-label">Barcode:</label>
                        <label class="col-lg-6 control-label">Barcode:</label>
                    </div>
                </div>
            </div>
            <input type="submit" onclick="return validatefilledIn()"class="btn btn-primary" value="Select" style="margin-left: 500px;">

        </form>
    </div>
    <br>
@endif

@if(Request::url()=='http://www.squad101.net/InventoryDatabaseItemReports')

    <div class="container" style="font-size: 12px;"><!--  General -->
        <div class="row">
            <div class="col-4">
                <div class="  form-group row">
                    <label class="col-sm-6 control-label">Date From :</label>
                    <div class="col-sm-6">
                        <input id="qty" class="form-control" style="height: 25px; font-size: 12px; padding: 4px;" type="date" name="DateFrom" value="{{$DateFrom}}">
                    </div>
                </div>
            </div>
            
            <div class="col-4">

                <div class="form-group row">
                    <label class="col-lg-5 control-label">Item:</label>
                    <div class="col-lg-7">
                        <select class="form-control" name="item_id" style="height: 25px; font-size: 12px; padding: 4px;" required>
                            <option value="0" >All Items</option>
                            @foreach($dataBaseItems as $dataBaseItem)
                                <option value="{{$dataBaseItem->databaseitemID}}" @if($dataBaseItem->databaseitemID == $item_id) selected="" @endif >{{$dataBaseItem->item}}</option>
                            @endforeach

                                
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                    <div class="form-group row">
                        <label class="col-lg-6 control-label">Date to :</label>
                        <div class="col-lg-6">
                            <input id="qty" class="form-control" style="height: 25px; font-size: 12px; padding: 4px;" type="date" name="DateTo" value="{{$DateTo}}">
                        </div>
                    </div>
            </div>

            <div class="col-4">
                    <div class="form-group row">
                        <label class="col-lg-5 control-label">Item Categories:</label>
                        <div class="col-lg-7">
                            <select class="form-control" name="item_categories_id" required>
                                <option value="0" style="height: 25px; font-size: 12px; padding: 4px;">All Categories</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" @if($category->id == $item_categories_id) selected="" @endif >{{$category->name}}</option>
                                @endforeach     
                            </select>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row">
                <div class="col-4">
                    <div class="  form-group row">

                        <label class="col-lg-6 control-label">Show Cost & Prices:</label>
                        <label class="col-lg-6 control-label">Show Cost & Prices:</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group row">
                        <label class="col-lg-5 control-label">Supplier:</label>
                        <div class="col-lg-7">
                            <select class="form-control" style="height: 25px; font-size: 12px; padding: 4px;" name="supplier_id" required>
                                <option value="0">All Suppliers:</option>
                                @foreach($suppliers as $supplier)
                                    <option value="{{$supplier->id}}" @if($supplier->id == $supplier_id) checked @endif  >{{$supplier->name}}</option>
                                @endforeach   
                            </select>
                        </div>
                    </div>
                </div>
        </div>

        <div class="row">
                <div class="col-4">
                    <div class="  form-group row">

                        <label class="col-lg-6 control-label">Report Cost Currency:</label>
                        <label class="col-lg-6 control-label">Report Cost Currency:</label>
                    </div>
                </div>
               <div class="col-4">
                    <div class="  form-group row">

                        <label class="col-lg-6 control-label">Barcode:</label>
                        <label class="col-lg-6 control-label">Barcode:</label>
                    </div>
                </div>
        </div>
    </div>

    @extends('Report.layoutTemp')
    @section('title', 'Inventory Database Item Report')
    @section('middlebar')

        <table id="dtVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="th-sm">Item
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Barcode
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Supplier
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Unit
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Quantity
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Cost\Unit
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Price\Unit (EGP)
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Price\Unit (USD)
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Price\Unit (Bullets)
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Item Category
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Reorder Point
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Expiry Date
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Date Created in Database
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Date Last Updated
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataBaseItemsOuts as $dataBaseItemsOut)
                    <tr>
                        <td>{{$dataBaseItemsOut->item}}</td>
                        <td style=" text-align: center;">
                            @php($checkSupplier = 0)
                            @foreach($dataBaseItemsSuppliers as $dataBaseItemsSupplier)
                                @if($dataBaseItemsSupplier->databaseitem_id == $dataBaseItemsOut->databaseitemID)
                                    @if($checkSupplier != 0)
                                        <hr>
                                    @endif
                                    {{$dataBaseItemsSupplier->barcode }}
                                    @php($checkSupplier = 1)
                                @endif
                            @endforeach
                        </td>
                        <td style=" text-align: center;">
                            @php($checkSupplier = 0)
                            @foreach($dataBaseItemsSuppliers as $dataBaseItemsSupplier)
                                @if($dataBaseItemsSupplier->databaseitem_id == $dataBaseItemsOut->databaseitemID)
                                    @if($checkSupplier != 0)
                                        <hr>
                                    @endif
                                    @foreach($suppliers as $supplier)
                                        @if($supplier->id == $dataBaseItemsSupplier->supplier_id)
                                            {{$supplier->name }}
                                            @php($checkSupplier = 1)
                                        @endif
                                    @endforeach   
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach($units as $unit)
                                @if($unit->id == $dataBaseItemsOut->unit_id)
                                    {{$unit->name}}
                                @endif
                            @endforeach
                        </td>
                        <td>{{$dataBaseItemsOut->total_quantity}}</td>
                        <td>{{$dataBaseItemsOut->cost}}</td>
                        <td>{{$dataBaseItemsOut->price_egp}}</td>
                        <td>{{$dataBaseItemsOut->price_usd}}</td>
                        <td>{{$dataBaseItemsOut->price_bullets}}</td>
                        <td>
                            @foreach($categories as $category)
                                @if($category->id == $dataBaseItemsOut->category_id)
                                    {{$category->name}}
                                @endif
                            @endforeach
                        </td>
                        <td>{{$dataBaseItemsOut->reorderpoint}}</td>
                        <td>{{$dataBaseItemsOut->expiryDate}}</td>
                        <td>{{$dataBaseItemsOut->created_at}}</td>
                        <td>{{$dataBaseItemsOut->updated_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
@endif
