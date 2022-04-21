

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>KIVU LITERACY LEGAL ADVOCACY</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/icon.png" '>

        <!--Morris Chart CSS -->

        <!--Morris Chart CSS -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="{{asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>

        <div class="container">
            <div class="col-md-6 col-offset-3">
                <h4><i class="fa fa-dashboard" aria-hidden="true"></i></h4>
                <table class="table table-hover">
                    <thead>
                       <th>Name</th>
                       <th>Email</th>
                       <th></th>
                    </thead>
                    <tbody>
                        <tr>
                           <td>{{$LoggedUserInfo['name']}}</td>
                           <td>{{$LoggedUserInfo['email']}}</td>
                           <td><a href="{{'l0gout'}}">Logout</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row"></div>
        </div>
    </body>
</html>

