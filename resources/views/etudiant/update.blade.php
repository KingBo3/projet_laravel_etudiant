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
        h1 {
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="submit"], a.button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-right: 10px;
        }
        a.button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Modifier un étudiant</h1>
        <hr>
        @if(session('status'))
            <div>{{ session('status') }}</div>
        @endif
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <form action="/update/traitment" >
        
            <input type="text" name="id" style="display: none" value="{{$etudiants->id}}">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="{{$etudiants->nom}}"><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" value="{{$etudiants->prenom}}"><br>

            <label for="classe">Classe :</label>
            <input type="text" id="classe" name="classe" value="{{$etudiants->classe}}"><br>

            <input type="submit" value="Modifier un étudiant">
            <a href="/etudiant" class="button">Revenir à la liste</a>
        </form>
    </div>
</body>
</html>
