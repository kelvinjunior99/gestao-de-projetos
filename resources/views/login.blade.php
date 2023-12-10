<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('dist/css/tailwind.min.css')}}">
    <link href="{{ asset('dist/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"/>
    <title>Login</title>

    <style>
      input:active, input:focus{
        font-weight: bolder;
        color: #a5a5a5;
      }
    </style>
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">

<div class="bg-gray-100">
  <div class="min-h-screen flex items-center justify-center">
    <div class="max-w-md w-screen p-6 bg-white rounded-lg shadow-lg">
      <div class="flex justify-center mb-8">
        <img src="{{ asset('assets/logo/calunga.png')}}" alt="Logo" class="w-30 h-20">
      </div>
      <!---
      <h1 class="text-2xl font-semibold text-center text-gray-500 mt-8 mb-6">Calunga Gest</h1> -->
      <form>
        <div class="mb-6">
          <label for="email" class="block mb-2 text-sm text-gray-600">Email</label>
          <input type="email" placeholder="exemplo@gmail.com" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
        </div>
        <div class="mb-6">
          <label for="password" class="block mb-2 text-sm text-gray-600">Senha</label>
          <input type="password" placeholder="12345" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>

         
        </div>
        <button type="submit" class="w-full bg-blue-500 from-cyan-400 to-cyan-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-4 mb-6">Entrar</button>
      </form>
      <div class="text-center">
        <p class="text-sm">Não tens uma conta ? <a href="#" class="text-cyan-600 text-blue-900">Criar conta</a></p>
      </div>
      <p class="text-xs text-gray-600 text-center mt-10">&copy; 2023 GP</p>
    </div>
  </div>
</div>

</body>
</html>
