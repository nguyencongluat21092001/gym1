
 @extends('front.Admin.frontdashboard.app')
 @section('body')
                 <!-- Begin Page Content -->
                 <div class="container-fluid">
 
                     <!-- Page Heading -->
                     <h1 class="h3 mb-2 text-gray-800">All Account Admin</h1>
                     
 
                     <!-- DataTales Example -->
                     <div class="card shadow mb-4">
                         
                         <div class="card-body">
                             <div class="table-responsive">
                                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                     <thead>
                                         <tr>
                                             <th>ID</th>
                                             <th>Name</th>
                                             <th>Phone</th>
                                             <th>Email</th>
                                             <th>Remove</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         @foreach ($admins as $post)
                                         <tr>
                                             <td>{{$post->id}}</td>
                                             <td>{{$post->admin_name}}</td>
                                             <td>{{$post->admin_phone}}</td>
                                             <td>{{$post->admin_email}}</td>
                                             <td><button type="button" class="btn btn-danger btn-circle"> <a href="deleteadmin/{{$post['id']}}"><i class="fas fa-trash"></i></button></td>
                                         </tr>
                                         @endforeach
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- /.container-fluid -->
 
             </div>
             <!-- End of Main Content -->
 
 @endsection          