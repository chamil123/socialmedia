@extends('layout.layout')

@section('title','Member')

@section('body')
<div class="card">
    <!-- <button class="btn btn-danger" id="read-data">load json</button> -->
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address(s)</th>
                    <th>Mobile number</th>
                    <th>Email</th>
                    <th>web</th>
                    <th>Description</th>
                    <th>Join date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody id="member-info">
                
                  </tbody>
                 
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          
            <!-- /.card -->
          </div>

@endsection

@section('script')
<script type="text/javascript">
    // $('#read-data').on('click',function(){
        document.addEventListener("DOMContentLoaded", function() {
  
      $.get("{{URL::to('/getmembers')}}",function(data){


$('#member-info').empty().html(data);
        // console.log(data);  
        // $.each(data,function(i,value){
        //     var tr=$("<tr/>");
        //     tr.append($("<td/>",{
        //         text:value.id
        //     })).append($("<td/>",{
        //         text:value.member_name
        //     })).append($("<td/>",{
        //         text:value.member_address
        //     })).append($("<td/>",{
        //         text:value.member_mobilenumber
        //     })).append($("<td/>",{
        //         text:value.member_email
        //     })).append($("<td/>",{
        //         text:value.member_web
        //     })).append($("<td/>",{
        //         text:value.member_description 
        //     })).append($("<td/>",{
        //         text:value.created_at 
        //     })).append($("<td/>",{
        //        html:"<a  href="#">View</a>"
        //     }))
            
        //     $('#member-info').append(tr);
        // })
      });
    })
</script>
@endsection