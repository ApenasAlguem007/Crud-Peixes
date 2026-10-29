<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar - AquaFlow</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover bg-center bg-no-repeat flex items-center justify-center min-h-screen bg-[url(/img/bg-register.jpeg)]">

    <div class="bg-white/70 backdrop-blur p-8 rounded-2xl shadow-xl w-full max-w-md">
        
        <h2 class="text-2xl font-bold text-center text-violet-950 mb-6">Criar Conta</h2>

        <!-- Exibição de Erros de Validação -->
        @if ($errors->any())
            <div class="mb-4 bg-rose-100 border border-rose-400 text-rose-700 px-4 py-3 rounded-lg text-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-violet-950 mb-1">Nome</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                    class="w-full px-4 py-2 border border-violet-800 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-violet-800" />
            </div>

            <div class="mt-4">
                <label for="email" class="block text-sm font-medium text-violet-950 mb-1">E-mail</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                    class="w-full px-4 py-2 border border-violet-800 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-violet-800" />
            </div>

            <div class="mt-4">
                <label for="password" class="block text-sm font-medium text-violet-950 mb-1">Senha</label>
                <input id="password" type="password" name="password" required autocomplete="new-password"
                    class="w-full px-4 py-2 border border-violet-800 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-violet-800" />
            </div>

            <div class="mt-4">
                <label for="password_confirmation" class="block text-sm font-medium text-violet-950 mb-1">Confirme a Senha</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                    class="w-full px-4 py-2 border border-violet-800 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-violet-800" />
            </div>

            <div class="flex items-center justify-between mt-6">
                <a class="text-sm text-violet-800 hover:text-violet-950 underline focus:outline-none" href="{{ route('login') }}">
                    Já tem cadastro?
                </a>

                <button type="submit" class="bg-violet-800 hover:bg-violet-950 text-white font-semibold px-5 py-2 rounded-lg shadow transition duration-200">
                    Registrar
                </button>
            </div>
        </form>
    </div>

</body>
</html>