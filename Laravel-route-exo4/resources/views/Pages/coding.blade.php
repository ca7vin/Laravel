<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>La Coding School 22 est constituée de :</h3>
    @foreach ($eleves as $eleve)
        <li>{{ $eleve }}</li>
    @endforeach
    <hr>
    <h3>Fiche ID</h3>
    <li>{{ $personneObjet->prenom }}</li>
    <li>{{ $personneObjet->nom }}</li>
    <li>{{ $personneObjet->age }}</li>
    <li>{{ $personneObjet->commune }}</li>
    <hr>
    @foreach ($personnes as $perso)
        @if ($perso->age >= 18)
            <p>{{ $perso->prenom }} est majeur !</p>
        @else
        <p>{{ $perso->prenom }} est mineur !</p>
        @endif
    @endforeach
</body>

</html>
