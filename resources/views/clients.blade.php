<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Passport {{ config('app.name') ? ' - ' . config('app.name') : '' }}</title>
    <link rel="stylesheet" href="{{ asset(mix('app.css', 'vendor/laravel-passport-views')) }}">
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Clients Dashboard</div>

                        <div class="card-body">
                            <passport-clients></passport-clients>
                            <passport-authorized-clients></passport-authorized-clients>
                            <passport-personal-access-tokens></passport-personal-access-tokens>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset(mix('app.js', 'vendor/laravel-passport-views')) }}"></script>
</body>

</html>
