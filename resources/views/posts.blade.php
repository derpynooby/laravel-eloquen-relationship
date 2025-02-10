<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent Relationships : Relasi One to Many</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" referrerpolicy="no-referrer" />
</head>
<body  style="background-image:url(https://steamuserimages-a.akamaihd.net/ugc/170412021733266950/1CD0513C34E143D362389DD0D9F2CC0B3BBB2123/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false); background-size: cover; background-repeat: no-repeat;">
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