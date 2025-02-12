<!doctype html>
<!-- HTML5 document type declaration -->
<html lang="en">
<!-- Root HTML element with English language attribute -->
<head>
    <!-- Head section containing metadata and resource links -->
    <meta charset="utf-8">
    <!-- Character encoding declaration -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Viewport settings for responsive design -->
    <title>Eloquent Relationships : Relasi One to One</title>
    <!-- Page title shown in browser tab -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!-- Bootstrap CSS framework import -->
</head>
<body  style="background-image:url(https://i.pinimg.com/originals/eb/50/87/eb50875a68b04b0480fa929af2c7547c.gif); background-size: cover; background-repeat: no-repeat;">
    <!-- Body element with background image styling -->
    <div class="container">
        <!-- Bootstrap container for content centering -->
        <div class="card mt-5 border-white bg-transparent">
            <!-- Card container with margin-top, white border and transparent background -->
            <div class="card-body">
                <!-- Card body container -->
                <h2 class="text-start fw-bold font-monospace text-white my-4">Relationship : One To One And One to Many</h2>
                <!-- Main heading with styling -->
                <h3 class="text-start"><a class="link-light" href="https://github.com/derpynooby">https://github.com/derpynooby</a></h3>
                <!-- Subheading with GitHub link -->
                <table class="table table-bordered border-white table-striped text-white">
                    <!-- Table with Bootstrap styling -->
                    <thead>
                        <!-- Table header section -->
                        <tr>
                            <!-- Table row -->
                            <th>Nama User</th>
                            <!-- Column header for user name -->
                            <th>Nomor Telepon</th>
                            <!-- Column header for phone number -->
                            <th>Roles</th>
                            <!-- Column header for user roles -->
                        </tr>
                    </thead>
                    <tbody>
                        {{-- 
                            Code Explanation:
                            
                            1. User Data Loop:
                            - @foreach($users as $user) : Iterates through each user record
                            - Displays user name and related data in table format
                            
                            2. Relationships Used:
                            - One-to-One: User -> Phone
                              $user->phone->phone accesses phone number through relationship
                            - One-to-Many: User -> Roles
                              $user->roles()->get() fetches all roles for each user
                            
                            3. Display Format:
                            - User name displayed directly from user model
                            - Phone number accessed through phone relationship
                            - Roles displayed as small primary buttons
                            
                            4. Data Structure:
                            - Users table contains basic user info
                            - Phones table has one-to-one connection with users
                            - Roles table has many-to-many connection with users
                        --}}
                        <!-- Table body section -->
                        @foreach($users as $user)
                        <!-- Loop through users collection -->
                        <tr>
                            <!-- Table row for each user -->
                            <td>{{ $user->name }}</td>
                            <!-- Display user name -->
                            <td>{{ $user->phone->phone }}</td>
                            <!-- Display user's phone number using one-to-one relationship -->
                            <td>
                                <!-- Cell for user roles -->
                                @foreach ($user->roles()->get() as $role)
                                <!-- Loop through user roles using one-to-many relationship -->
                                <button class="btn btn-sm btn-primary me-2">{{ $role->name }}</button>
                                <!-- Display each role as a button -->
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