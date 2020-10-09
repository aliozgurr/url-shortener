<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>URL Shortener</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="content" style="display:flex;justify-content: center;align-items: center">
            <div class="input" style="align-self: center">
                <form method="POST" action="{{route('create')}}">
                    @csrf
                    <div class="form-group">
                        <label for="URL">URL</label>
                        <input type="text" class="form-control" name="url" id="url" placeholder="Enter URL">
                        <small id="url" class="form-text text-muted">Please type the URL that you want to shorten</small>
                        <br><br>
                        <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter slug">
                        <small id="url" class="form-text text-muted">Add custom slug to URL (optional)</small>
                        <br><br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                @if($link ?? '' === null)
                <b>Shortened URL: <a href="{{$link->slug}}">{{'https://url-shortener.test/'.$link->slug}}</a></b>
                @endif
            </div>
        </div>
    </body>
</html>
