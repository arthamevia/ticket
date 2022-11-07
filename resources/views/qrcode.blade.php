<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR</title>
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h2>Simple Qr Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->generate('RemoteStack') !!}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2>Color Qr Code</h2>
            </div>
            <div class="card-bod">
                {!! QrCode::size(300)->backgroundColor(255,90.0)->generate('RemoteStack') !!}
            </div>
        </div>
    </div>
</body>
</html>