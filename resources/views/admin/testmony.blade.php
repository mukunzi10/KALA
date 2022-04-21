@include('header1');


<div class="row">

    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title" ><b>Citizen For help </b></h4>
                <br>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; padding-top: 12em">

                    <thead>
                    <tr>
                        <th>Id</th>
                        <th width='150em'>Names</th>
                        <th>title</th>
                        <th>Description</th>
                        <th>Files Submited</th>
                        <th>Loyal</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ( $cremes as $data)

                        <tr>
                            <td><a href='#'><i class="ion-person " width='18'></i> </a></td>
                            <td ><a href="#">{{$data->lname}} <?php echo " "?>{{$data->fname}}</a></td>
                            <td>{{$data->title}}</td>
                            <td><a href="{{'show1/'.$data->cre_id}}"><?php echo Str::substr($data->description, 0, 100)?></a></td>
                            <td><img src="/assets/images/fdf.png" height="40em" width="35" alt="" /></td>
                            <td>{{$data->fname}}<?php echo " "?>{{$data->lname}} <?php echo " <b>Email: </b>"?><?php echo "    "?>{{$data->email}}</td>


                        </tr>

                        @endforeach


                    </tbody>

                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>


    </div> <!-- end col -->
</div> <!-- end row -->
@include('footer1');
