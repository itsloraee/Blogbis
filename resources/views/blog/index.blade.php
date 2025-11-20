<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles | Nexus Blog</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#028090',
                        secondary: '#2D3142',
                        tertiary: '#B8F3FF'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50 min-h-screen font-sans">

    <div class="max-w-5xl mx-auto px-6 py-12">
        
        <div class="flex justify-between items-center mb-10">
            <h1 class="text-4xl font-bold text-secondary">Tous les articles</h1>

            <a href="{{ route('posts.create') }}"
               class="bg-primary text-white px-4 py-2 rounded-lg shadow hover:bg-secondary transition">
                <i class="fas fa-pen mr-2"></i> Nouvel article
            </a>
        </div>

        @if (session('success'))
            <p class="mb-6 text-green-600 font-medium">
                {{ session('success') }}
            </p>
        @endif

        @forelse ($posts as $post)
            <div class="bg-white rounded-xl p-6 shadow-md border border-gray-200 mb-6 card-hover">

                <div class="flex justify-between items-start">
                    
                    <!-- Infos du post -->
                    <div class="flex-1 pr-6">
                        <h2 class="text-2xl font-bold text-secondary mb-2">
                            {{ $post->title }}
                        </h2>

                        <p class="text-gray-600 mb-4">
                            {{ Str::limit($post->content, 150) }}
                        </p>

                        <p class="text-sm text-gray-500">
                            Auteur :
                            <span class="font-medium text-primary">
                                {{ $post->user->name ?? 'Utilisateur inconnu' }}
                            </span>
                        </p>
                    </div>

                    <!-- Boutons -->
                    <div class="flex flex-col gap-3 items-end">

                        <!-- Voir -->
                        <a href="{{ route('posts.show', $post->id) }}"
                           class="text-primary font-medium hover:text-secondary transition flex items-center">
                            <i class="fas fa-eye mr-1"></i> Voir
                        </a>

                        <!-- Modifier -->
                        <a href="{{ route('posts.edit', $post->id) }}"
                           class="text-yellow-600 font-medium hover:text-yellow-700 transition flex items-center">
                            <i class="fas fa-edit mr-1"></i> Modifier
                        </a>

                        <!-- Supprimer -->
                        <form action="{{ route('posts.destroy', $post->id) }}" 
                              method="POST"
                              onsubmit="return confirm('Supprimer cet article ? 😢');">
                            @csrf
                            @method('DELETE')

                            <button class="text-red-600 hover:text-red-800 font-medium flex items-center">
                                <i class="fas fa-trash mr-1"></i> Supprimer
                            </button>
                        </form>

                    </div>

                </div>

            </div>

        @empty
            <p class="text-center text-gray-500 text-lg mt-10">
                Aucun article pour le moment ✨
            </p>
        @endforelse

    </div>

</body>
</html>
