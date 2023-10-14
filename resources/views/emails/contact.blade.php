<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
        /* Add your email styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        .content {
            background-color: #fff;
            padding: 20px;
        }
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Novo contato foi adicionado</h1>
        </div>
        <div class="content">
            <h2>Olá, um novo contato foi adicionado:</h2>
            <p>Nome: {{ $contact->nome_de_contato }}</p>
            <p>CEP: {{ $contact->CEP }}</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} {{ config('app.name') }}
        </div>
    </div>
</body>
</html>
