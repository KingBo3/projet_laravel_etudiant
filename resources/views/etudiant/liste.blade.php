<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        a {
            display: inline-block;
            margin-bottom: 10px;
            text-decoration: none;
            color: #007bff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .actions a {
            display: inline-block;
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border-radius: 3px;
            margin-right: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <center><h1><a href="/ajouter">Ajouter un étudiant</a></h1></center>
    <hr>
    @if(session('status'))
    <div>
        {{ session('status') }}
    </div>
    @endif
    <center>
    <table>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Classe</th>
            <th>Actions</th>
        </tr>
        @php
            $ide =1;
        @endphp
        @foreach($etudiants as $etudiant)
        <tr>
            <td>{{$ide}}</td>
            <td>{{$etudiant->nom}}</td>
            <td>{{$etudiant->prenom}}</td>
            <td>{{$etudiant->classe}}</td>
            <td class="actions">
                <a  href="/update-etudiant/{{$etudiant->id}}">Update</a>
                <a style="background:red;" href="/delete-etudiant/{{$etudiant->id}}">Delete</a>
            </td>
        </tr>
        @php
            $ide+=1;
        @endphp
        @endforeach
    </table>
</center>
</body>
</html>
