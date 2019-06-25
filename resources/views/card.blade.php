<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Universal Waite Random Card Generator</title>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    </head>
    <body>

        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h1>{{ $card->card_name }}</h1>
                    <p><b>{{ $card->short }}</b></p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-3">
                    <img src="{{ asset('images/decks/universal_waite/' .$card->image) }}">
                </div>

                <div class="col-12 col-lg-9">
                    <p>{!! $card->general !!}</p>
                </div>
            </div>

        </div>

    </body>
</html>
