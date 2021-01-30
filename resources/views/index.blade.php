<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->
      <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="#">LOGO</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
               </li>
              
            </ul>
            <span class="navbar-text">
            <!-- 3:10am -->
            </span>
         </div>
      </nav>
      <div class="container">
        
        <div class="row">
            <div class="col-md-12 card p-3 my-3">
               <h4> Total Admin Member  {{ $data1->count() }}  </h4>
                        <h4>Total Super Admin Member {{ $data2->count() }}  </h4>
                       
                        <h4>Total User Member {{ $data3->count() }} </h4>
            </div>
          </div>

         <div class="row">
            <div class="col-md-12 card my-3">
               <div class="add_class py-2 border-bottom ">
                  <span><b>Head List</b> </span>
               </div>
              
               <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                     <tr>
                        <th>#</th>
                       
                        <th>Name</th>
                        <th>Email</th>
                       
                        <th>Emp Id</th>
                     </tr>
                  </thead>
                 <!--  <thead>
                   
                     <tr>
                        <th>#</th>
                        
                        <th> Total Admin Member  {{ $data1->count() }}  </th>
                        <th>Total Super Admin Member {{ $data2->count() }}  </th>
                       
                        <th>Total User Member {{ $data3->count() }} </th>

                     </tr>
                     
                    
                  </thead> -->
                  <tbody>
                     
                    <!-- {{ $i=1 }} -->
                      @foreach($heads as $head)
                          <tr>
                           
                          <th>
                            {{ $i++ }}
                             </th>

                           <td> {{ $head->name }}  </td>
                           <td>{{ $head->email }}</td>
                          
                           <td>{{ $head->emp_id }}</td>
                           
                         </tr>
                       @endforeach
                   

                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <style type="text/css">
         table{
         width:100%;
         }
         #example_filter{
         float:right;
         }
         #example_paginate{
         float:right;
         }
         label {
         display: inline-flex;
         margin-bottom: .5rem;
         margin-top: .5rem;
         }
      </style>
      <script type="text/javascript">
         $(document).ready(function() {
            $('#example').DataTable(
                
                 {     
         
              "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
                "iDisplayLength": 5
               } 
                );
         } );
         
         
         function checkAll(bx) {
          var cbs = document.getElementsByTagName('input');
          for(var i=0; i < cbs.length; i++) {
            if(cbs[i].type == 'checkbox') {
              cbs[i].checked = bx.checked;
            }
          }
         }
      </script>
   </body>
</html>