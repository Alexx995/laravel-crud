<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div style="width: 900px;" class="container max-w-full mx-auto pt-4">
    <h1 class="text-4xl font-bold mb-4">My Blog</h1>

    <a href="/movies/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add Post</a>

    @foreach($movies as $post)
        <article class="mb-2">
            <a href="/movies/{{ $post->id }}/edit" class="text-xl font-bold text-blue-500">{{ $post->name }}</a>
            <p class="text-md text-gray-600">{{ $post->imdb_rating }}</p>

            <hr class="mt-2">
{{--            <a href="/movies/{{$post->id}}/destroy" class="text-xl font-bold text-red-500">Delete</a>--}}
            <form action="{{route('movies.destroy',$post->id)}}" method="POST">@csrf @method('DELETE') <button type="submit" class="btn btn-danger">Delete</button></form>
        </article>
    @endforeach
</div>
</body>
</html>
