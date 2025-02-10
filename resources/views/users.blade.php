<!doctype html>
<!-- 
    This is a blade template file that displays a list of users and their phone numbers
    using a one-to-one relationship between User and Phone models.
    The template uses Bootstrap 5 for styling.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent Relationships : Relasi One to One</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
</head>
<body  style="background-image:url(https://i.pinimg.com/originals/eb/50/87/eb50875a68b04b0480fa929af2c7547c.gif); background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="card mt-5 border-white bg-transparent">
            <div class="card-body">
                <h2 class="text-start fw-bold font-monospace text-white my-4">Relationship : One To One And One to Many</h2>
                <h3 class="text-start"><a class="link-light" href="https://github.com/derpynooby">https://github.com/derpynooby</a></h3>
                <table class="table table-bordered border-white table-striped text-white">
                    <thead>
                        <tr>
                            <th>Nama User</th>
                            <th>Nomor Telepon</th>
                            <th>Roles</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone->phone }}</td>
                            <td>
                                @foreach ($user->roles()->get() as $role)
                                <button class="btn btn-sm btn-primary me-2">{{ $role->name }}</button>
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>