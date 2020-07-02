@extends('layout.layout')

@section('title','Member')

@section('body')
<section class="content">

  
    <form role="form" method="post" action="/product" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Basic details</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group" >
                            <label for="exampleInputEmail1">Product name</label>
                            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name">
                        
                            <span class="help-block">
                                <strong style="color: #ff0000"></strong>
                            </span>
           
                        </div>
                        <div class="form-group" >
                            <label for="exampleInputEmail1">Product Description</label>
                            <textarea class="form-control" id="product_description" rows="4" name="product_description" placeholder="Enter Product Description"></textarea>
                         
                            <span class="help-block">
                                <strong style="color: #ff0000"></strong>
                            </span>
                         
                        </div>
                     

                       
                    </div>
                </div>
            </div>
          

        </div>
       
    </form>
</section>
@endsection