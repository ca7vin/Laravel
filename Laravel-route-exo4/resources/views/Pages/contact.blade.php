<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href={{ url('/pages/about/coco') }}>About</a>
        <a href={{ url('/pages/contact/calvin/Van%20der%20Ghinst/+32479842484') }}>Contact</a>
    </nav>
    <ul>
        <li>NOM : {{ $nom }}</li>
        <li>PRENOM : {{ $prenom }}</li>
        <li>TEL : {{ (int)$number }}</li>
    </ul>
</body>
</html>