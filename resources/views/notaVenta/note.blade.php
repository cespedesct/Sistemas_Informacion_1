<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
     <title>Invoice</title>
</head>
<body>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                </tr>
            </thead>
            <tbody>
            @foreach($Users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            @endforeach 
            </tbody>
        </table>

    </div>
</body>
</html>