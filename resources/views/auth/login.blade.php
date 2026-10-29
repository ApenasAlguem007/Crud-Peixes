<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar - AquaFlow</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover bg-center bg-no-repeat flex items-center justify-center min-h-screen bg-[url(/img/bg-register.jpeg)]">

    <div class="bg-white/70 backdrop-blur p-8 rounded-2xl shadow-xl w-full max-w-md">
        
        <h2 class="text-2xl font-bold text-center text-violet-950 mb-6">Acessar Conta</h2>

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

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-emerald-700 bg-emerald-100/80 p-3 rounded-lg">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-violet-950 mb-1">E-mail</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                    class="w-full px-4 py-2 border border-violet-800 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-violet-800 focus:border-violet-800" />
            </div>

            <div class="mt-4">
                <label for="password" class="block text-sm font-medium text-violet-950 mb-1">Senha</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    class="w-full px-4 py-2 border border-violet-800 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-violet-800 focus:border-violet-800" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center cursor-pointer">
                    <input id="remember_me" type="checkbox" name="remember" class="rounded border-violet-800 text-violet-800 shadow-sm focus:ring-violet-800">
                    <span class="ms-2 text-sm text-violet-950 font-medium">Lembrar de mim</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-6">
                @if (Route::has('password.request'))
                    <a class="text-sm text-violet-800 hover:text-violet-950 underline focus:outline-none" href="{{ route('password.request') }}">
                        Esqueceu a senha?
                    </a>
                @endif

                <button type="submit" class="bg-violet-800 hover:bg-violet-950 text-white font-semibold px-5 py-2 rounded-lg shadow transition duration-200">
                    Entrar
                </button>
            </div>

            <div class="text-center mt-6 pt-4 border-t border-violet-950/10">
                <span class="text-sm text-violet-950">Ainda não tem uma conta?</span>
                <a href="{{ route('register') }}" class="text-sm text-violet-800 hover:text-violet-950 font-semibold underline ms-1">
                    Cadastre-se
                </a>
            </div>
        </form>
    </div>

</body>
</html>