<!doctype html>
<!-- HTML tag to mark HTML document -->
<html lang="en">
<!-- Root HTML tag with English language attribute -->
<head>
    <!-- Head tag contains metadata and resource references -->
    <meta charset="utf-8">
    <!-- Meta tag for UTF-8 character encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Meta tag for mobile viewport settings -->
    <title>Eloquent Relationships : Relasi One to Many</title>
    <!-- Title tag for page title -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Link tag to import Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" referrerpolicy="no-referrer" />
    <!-- Link tag to import Font Awesome CSS -->
</head>
<body  style="background-image:url(https://steamuserimages-a.akamaihd.net/ugc/170412021733266950/1CD0513C34E143D362389DD0D9F2CC0B3BBB2123/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false); background-size: cover; background-repeat: no-repeat;">
    <!-- Body tag with background image styling -->
    <div class="container">
        <!-- Div tag for Bootstrap container layout -->
        <div class="card mt-5 border-white bg-transparent">
            <!-- Div tag for card with top margin and white border -->
            <div class="card-body">
                <!-- Div tag for card body -->
                <h2 class="text-start fw-bold font-monospace text-white my-4">Relationship : One To Many</h2>
                <!-- H2 tag for main heading -->
                <h3 class="text-start"><a class="link-light" href="https://github.com/derpynooby">https://github.com/derpynooby</a></h3>
                <!-- H3 tag with GitHub link -->
                <table class="table table-bordered border-white table-striped text-white">
                    <!-- Table tag with Bootstrap styling -->
                    <thead>
                        <!-- Thead tag for table header -->
                        <tr>
                            <!-- TR tag for table row -->
                            <th>Judul Post</th>
                            <!-- TH tag for title column header -->
                            <th>Komentar</th>
                            <!-- TH tag for comments column header -->
                        </tr>
                    </thead>
                    {{-- Loop to display posts and comments data --}}
                    {{-- @foreach($posts as $post) to iterate through posts data --}}
                    {{-- @foreach($post->comments()->get() as $comment) to iterate through comments data based on post --}}
                    <tbody>
                        <!-- Tbody tag for table content -->
                        @foreach($posts as $post)
                            <!-- Blade foreach directive for posts loop -->
                            <tr>
                        {{-- 
                            Code Explanation:
                            
                            1. Table Structure:
                            - Table displays posts data and their related comments
                            - Columns: Post Title and Comments
                            
                            2. Data Loops:
                            - @foreach($posts as $post) : Iterates through each post
                            - $post->title : Displays the post title
                            - @foreach($post->comments()->get() as $comment) : Fetches & displays comments for each post
                            
                            3. Display:
                            - Using Bootstrap for styling
                            - Font Awesome for comment icons
                            - Background using image from Steam
                            
                            4. Relationship:
                            - Implements One to Many relationship between Post and Comment
                            - One Post can have many Comments
                            - comments() method in Post model connects to Comment model
                        --}}
                                <td>{{ $post->title }}</td>
                                <!-- TD tag to display post title -->
                                <td>
                                    <!-- TD tag to display comments -->
                                    @foreach($post->comments()->get() as $comment)
                                        <!-- Blade foreach directive for comments loop -->
                                        <div class="card shadow-sm mb-2">
                                            <!-- Div tag for comment card -->
                                            <div class="card-body">
                                                <!-- Div tag for comment card body -->
                                                <i class="fa fa-comments"></i> {{ $comment->comment }}
                                                <!-- I tag for comment icon and displaying comment content -->
                                            </div>
                                        </div>
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