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
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
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
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ajouter un étudiant</h1>
        <hr>
        @if(session('status'))
            <div>{{ session('status') }}</div>
        @endif
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <form action="/ajouter/traitment" >
            @csrf
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" ><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" ><br>

            <label for="classe">Classe :</label>
            <input type="text" id="classe" name="classe" ><br>

            <input type="submit" value="Envoyer">
            <a href="/etudiant">revenir a la liste</a>
        </form>
    </div>
</body>
</html>
