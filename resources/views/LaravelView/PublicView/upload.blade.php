<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
        <title>Upload photo</title>
    </head>
    <body>
        <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <input type="file" id="photo" name="upload" accept="image/*" />
            <button type="submit">Upload</button>
        </form>
    </body>
</html>