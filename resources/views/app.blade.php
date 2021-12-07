<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="icon" href="/theme/year_month/assets/images/bolt-icon.png" type="image/png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/theme/year_month/style.css">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script>
        const app = {
            url: '{{ config('app.url') }}'
        }
    </script>
<body class="hypereport">
@include('header')
@inertia

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/theme/year_month/script.js" type="text/javascript"></script>

</body>
</html>
