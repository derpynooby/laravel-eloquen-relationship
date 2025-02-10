<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent Relationships : Relasi One to Many</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" referrerpolicy="no-referrer" />
</head>
<body  style="background-image:url(https://64.media.tumblr.com/e85d3e398ccf035c0d5dd74a34d57eb9/tumblr_ngbasnF0bG1qze3hdo1_r3_500.gif); background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="card mt-5 border-white bg-transparent">
            <div class="card-body">
                <h2 class="text-start fw-bold font-monospace text-white my-4">Relationship : One To Many</h2>
                <h3 class="text-start"><a class="link-light" href="https://github.com/derpynooby">https://github.com/derpynooby</a></h3>
                <table class="table table-bordered border-white table-striped text-white">
                    <thead>
                        <tr>
                            <th>Judul Post</th>
                            <th>Komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>
                                    @foreach($post->comments()->get() as $comment)
                                        <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                                <i class="fa fa-comments"></i> {{ $comment->comment }}
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