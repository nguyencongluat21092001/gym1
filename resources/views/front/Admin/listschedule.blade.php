
    @extends('front.Admin.frontdashboard.app')
@section('body')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">List trainer</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Thứ</th>
                                            <th>Giờ tập</th>
                                            <th>Lớp tập</th>
                                            <th>PT</th>
                                            <th>Edit</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($schedules as $post)
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->post_day}}</td>
                                            <td>{{$post->post_hour}}</td>
                                            <td>{{$post->post_class}}</td>
                                            <td>{{$post->post_pt}}</td>
                                            <td> <button type="button" class="btn btn-info">edit</button></td>
                                            <td><button type="button" class="btn btn-danger">remove</button></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <form >
                        Cân nặng<input placeholder="kg"type="number" name="kg" min="1" minlength="1" id="" required>
                        Chiều cao<input placeholder="1m70->1.70"type="text" name="height" min="1" minlength="1" id="" required>
                          <button type="submit" name="btn">result</button>
                    </form>
                    <?php
                    
                        if (isset($_GET['btn'])) {
                            $kg = $_GET['kg'];
                            $height = $_GET['height'];
                            $total = totalCart($kg,$height);
                            echo 'kq: ', $total;
                        }
                       
                      
                     function totalCart($kg, $height){
                        $result=1;
                        $BMI = $kg / ($height*$height);
                        $BMI= round($BMI,1);
                    
                        if($BMI>40){
                            $result = $BMI.' -> Béo phì độ III cần liên hệ PT luật đẹp trai ngay';
                        }else if (35 <= $BMI && $BMI < 40) {
                            $result = $BMI.' -> Béo phì độ II cần liên hệ PT luật đẹp trai ngay';
                        }else if (30 <= $BMI &&  $BMI < 35) {
                            $result = $BMI.' -> Béo phì độ I cần liên hệ PT luật đẹp trai ngay';
                        }else if (25 <=$BMI&& $BMI < 30) {
                            $result = $BMI.' -> Thừa cân cần liên hệ PT luật đẹp trai ngay';
                        }else if (18 <=$BMI&& $BMI < 25) {
                            $result = $BMI.' -> Bình thường ';
                        }
                        else if (17 <=$BMI && $BMI < 18.5) {
                            $result = $BMI.' -> Gầy độ I cần liên hệ PT luật đẹp trai ngay';
                        }else if (16 <=$BMI && $BMI < 17) {
                            $result = $BMI.' -> Gầy độ II cần liên hệ PT luật đẹp trai ngay';
                        }else {
                            $result = $BMI.' -> Gầy độ III cần liên hệ PT luật đẹp trai ngay';
                        }
                        return $result;
                        // array_push($arr, $result);
                     }
                    
                    ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection          