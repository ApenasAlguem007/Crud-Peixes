<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<!-- Usamos o style com asset() do Laravel para garantir que o caminho da imagem funcione perfeitamente -->
<body class="bg-cover bg-center bg-no-repeat flex items-center justify-center min-h-screen bg-[url(/img/bg-register.jpeg)]">

    <!-- Card Principal com leve transparência -->
    <div class="bg-white/70 backdrop-blur p-8 rounded-2xl shadow-xl w-full max-w-md">
        
        <h2 class="text-2xl font-bold text-center text-violet-950 mb-6">Criar Conta</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-violet-950 mb-1">Nome</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                    class="w-full px-4 py-2 border border-violet-800 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-violet-800 focus:border-violet-800" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email" class="block text-sm font-medium text-violet-950 mb-1">E-mail</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                    class="w-full px-4 py-2 border border-violet-800 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-violet-800 focus:border-violet-800" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="block text-sm font-medium text-violet-950 mb-1">Senha</label>
                <input id="password" type="password" name="password" required autocomplete="new-password"
                    class="w-full px-4 py-2 border  border-violet-800 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus: border-violet-800" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation" class="block text-sm font-medium text-violet-950 mb-1">Confirme a Senha</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                    class="w-full px-4 py-2 border border-violet-800 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-violet-800 focus:border-violet-800" />
            </div>

            <!-- Ações e Botões -->
            <div class="flex items-center justify-between mt-6">
                <a class="text-sm text-violet-800 hover:text-violet-950 underline focus:outline-none" href="{{ route('login') }}">
                    Já tem cadastro?
                </a>

                <button type="submit" class="bg-violet-800 hover:bg-violet-950 text-white font-semibold px-5 py-2 rounded-lg shadow transition duration-200 focus:outline-none focus:ring-2 focus:ring-violet-800 focus:ring-offset-2">
                    Registrar
                </button>
            </div>
        </form>
    </div>

</body>
</html>