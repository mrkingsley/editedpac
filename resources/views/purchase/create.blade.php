@extends('layouts.db')

@section('main')


<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Purchases</h3>
                </div><!-- /.box-header -->
                <div class="box-body">



                <form class="form-horizontal" action="{{route('purchase.store')}}" enctype="multipart/form-data" method="post">
                        @csrf
                    <div class="form-group {{ $errors->has('supplier_name')? 'has-error' : '' }}">
                        <label class="control-label col-sm-3">Supplier:</label>

                        <div class="col-sm-7">
                            <select class="form-control" placeholder="Select Product, " name="supplier_name">
                            <option value="" disabled selected>Choose Supplier Name</option>
                                        @foreach($suppliers as $supplier)
                                            <option value="{{$supplier->supplier_name}}">{{$supplier->supplier_name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                    <div class="form-group {{ $errors->has('product')? 'has-error' : '' }}">
                        <label class="control-label col-sm-3">Product:</label>

                        <div class="col-sm-7">
                            <select class="form-control" placeholder="Select Product, " name="product">
                            <option value="" disabled selected>Choose the Product</option>
                                        @foreach($products as $product)
                                            <option value="{{$product->name}}">{{$product->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('amount')? 'has-error' : '' }}">
                            <label class="control-label col-sm-3">Amount</label>
                            <div class="col-sm-7">
                                <input type="text" name="amount" class="form-control" value="{{ old('amount') }}" placeholder="enter amount">
                                {!! $errors->has('amount')? '<p class="help-block"> '.$errors->first('u-price').' </p>':'' !!}
                            </div>
                        </div>

                    <div class="form-group {{ $errors->has('qty')? 'has-error' : '' }}">
                        <label class="control-label col-sm-3">Qty:</label>

                        <div class="col-sm-7">
                            <input type="text" name="qty" class="form-control" value="{{ old('qty') }}" placeholder="Enter product quantity">
                            {!! $errors->has('qty')? '<p class="help-block"> '.$errors->first('qty').' </p>':'' !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('code')? 'has-error' : '' }}">
                        <label class="control-label col-sm-3">Code</label>
                        <div class="col-sm-7">
                            <input type="text" name="code" class="form-control" value="{{ old('code') }}" placeholder="Sales Code"></input>
                            {!! $errors->has('code')? '<p class="help-block"> '.$errors->first('code').' </p>':'' !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-7 col-sm-offset-3">
                            <button type="submit" name="submit" class="btn btn-primary" required="required"><i class="fa fa-plus-square-o"></i> Submit</button>
                        </div>
                    </div>

                    </form>

                </div><!-- /.box-body -->


            </div><!-- /.box -->



        </div> <!-- /.col -->
    </div>
    </div>
    <!-- /.row -->


</section><!-- /.content -->


@endsection
