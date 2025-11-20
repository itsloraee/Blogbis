<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus Blog | Design Moderne</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#028090',
                        secondary: '#2D3142',
                        tertiary: '#B8F3FF'
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #028090 0%, #2D3142 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .tag {
            transition: all 0.2s ease;
        }
        .tag:hover {
            background-color: #2D3142 !important;
            color: white;
        }
        .reading-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: #028090;
            z-index: 9999;
            transition: width 0.3s;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans min-h-screen flex flex-col">
    <!-- Barre de progression -->
    <div class="reading-progress" id="readingProgress"></div>

    <!-- En-tête moderne -->
    <header class="gradient-bg text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center space-x-2 mb-4 md:mb-0">
                    <div class="w-10 h-10 rounded-full bg-tertiary flex items-center justify-center">
                        <span class="text-primary font-bold text-xl">T</span>
                    </div>
                    <h1 class="text-2xl font-bold">Trio<span class="text-tertiary">Blog</span></h1>
                </div>
               
                <nav class="flex flex-wrap justify-center gap-4 md:gap-8">
                    <a href="#home" class="nav-link font-medium hover:text-tertiary transition-colors flex items-center">
                        <i class="fas fa-home mr-2"></i> Accueil
                    </a>
                    <a href="#posts" class="nav-link font-medium hover:text-tertiary transition-colors flex items-center">
                        <i class="fas fa-newspaper mr-2"></i> Articles
                    </a>
                    <a href="#create" class="nav-link font-medium hover:text-tertiary transition-colors flex items-center">
                        <i class="fas fa-pen mr-2"></i> Écrire
                    </a>
                    <a href="#" class="font-medium hover:text-tertiary transition-colors flex items-center">
                        <i class="fas fa-user mr-2"></i> Connexion
                    </a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="flex-grow">
        <!-- Section Hero -->
        <section id="home" class="gradient-bg text-white py-16 md:py-24">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Partagez vos idées machiavélique avec le monde</h2>
                <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto text-gray-200">
                    Une plateforme moderne pour publier, découvrir et discuter.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#create" class="bg-tertiary text-primary font-bold px-6 py-3 rounded-lg hover:bg-white transition-colors shadow-lg">
                        <i class="fas fa-pen mr-2"></i> Commencer à écrire
                    </a>
                    <a href="#posts" class="bg-white text-secondary font-bold px-6 py-3 rounded-lg hover:bg-gray-100 transition-colors shadow-lg">
                        <i class="fas fa-book-open mr-2"></i> Découvrir
                    </a>
                </div>
            </div>
        </section>

        <!-- Section Articles récents -->
        <section id="posts" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-secondary mb-4">Articles récents</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Découvrez nos derniers tutos de notre communauté</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Article 1 -->
                    <article class="bg-gray-50 rounded-xl overflow-hidden shadow-md card-hover border border-gray-200">
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-sm font-medium text-primary">Développement Web</span>
                                <span class="text-xs text-gray-500">12 mai 2023</span>
                            </div>
                            <h3 class="text-xl font-bold text-secondary mb-3">
                                <a href="#post1" class="hover:text-primary transition-colors">Les tendances du développement frontend en 2023</a>
                            </h3>
                            <p class="text-gray-600 mb-4">Découvrez les frameworks et outils qui façonnent l'avenir du développement web moderne.</p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white text-sm font-bold mr-2">JD</div>
                                    <span class="text-sm text-gray-700">Jean Dupont</span>
                                </div>
                                <a href="#post1" class="text-primary hover:text-secondary text-sm font-medium flex items-center">
                                    Lire <i class="fas fa-arrow-right ml-1 text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- Article 2 -->
                    <article class="bg-gray-50 rounded-xl overflow-hidden shadow-md card-hover border border-gray-200">
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-sm font-medium text-primary">Design UI/UX</span>
                                <span class="text-xs text-gray-500">10 mai 2023</span>
                            </div>
                            <h3 class="text-xl font-bold text-secondary mb-3">
                                <a href="#post2" class="hover:text-primary transition-colors">L'importance de l'accessibilité dans le design web</a>
                            </h3>
                            <p class="text-gray-600 mb-4">Comment créer des interfaces utilisables par tous, quelles que soient leurs capacités.</p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white text-sm font-bold mr-2">MM</div>
                                    <span class="text-sm text-gray-700">Marie Martin</span>
                                </div>
                                <a href="#post2" class="text-primary hover:text-secondary text-sm font-medium flex items-center">
                                    Lire <i class="fas fa-arrow-right ml-1 text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- Article 3 -->
                    <article class="bg-gray-50 rounded-xl overflow-hidden shadow-md card-hover border border-gray-200">
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-sm font-medium text-primary">Productivité</span>
                                <span class="text-xs text-gray-500">5 mai 2023</span>
                            </div>
                            <h3 class="text-xl font-bold text-secondary mb-3">
                                <a href="#post3" class="hover:text-primary transition-colors">Optimiser son workflow de développement</a>
                            </h3>
                            <p class="text-gray-600 mb-4">Les outils et méthodes pour augmenter votre productivité en tant que développeur.</p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white text-sm font-bold mr-2">TP</div>
                                    <span class="text-sm text-gray-700">Thomas Petit</span>
                                </div>
                                <a href="#post3" class="text-primary hover:text-secondary text-sm font-medium flex items-center">
                                    Lire <i class="fas fa-arrow-right ml-1 text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="text-center mt-12">
                    <a href="#" class="inline-flex items-center text-primary font-medium hover:text-secondary transition-colors">
                        Voir tous les articles <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Section Détail d'article -->
        <section id="post1" class="py-16 bg-gray-50 hidden">
            <div class="container mx-auto px-4 max-w-4xl">
                <article class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="p-8">
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="tag bg-primary text-white px-3 py-1 rounded-full text-sm font-medium">Développement Web</span>
                            <span class="tag bg-tertiary text-primary px-3 py-1 rounded-full text-sm font-medium">Frontend</span>
                            <span class="tag bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm font-medium">Tendances</span>
                        </div>
                       
                        <h2 class="text-3xl font-bold text-secondary mb-4">Les tendances du développement frontend en 2023</h2>
                       
                        <div class="flex items-center text-gray-600 mb-8">
                            <div class="flex items-center mr-6">
                                <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white font-bold mr-3">JD</div>
                                <div>
                                    <p class="font-medium text-gray-800">Jean Dupont</p>
                                    <p class="text-sm">12 mai 2023 · 8 min de lecture</p>
                                </div>
                            </div>
                            <div class="flex space-x-4">
                                <button class="text-gray-500 hover:text-primary transition-colors">
                                    <i class="far fa-heart"></i> <span class="ml-1">42</span>
                                </button>
                                <button class="text-gray-500 hover:text-primary transition-colors">
                                    <i class="far fa-comment"></i> <span class="ml-1">12</span>
                                </button>
                                <button class="text-gray-500 hover:text-primary transition-colors">
                                    <i class="fas fa-share"></i>
                                </button>
                            </div>
                        </div>
                       
                        <div class="prose max-w-none text-gray-700 mb-8">
                            <p class="text-lg mb-4">Le développement frontend évolue à un rythme effréné. Chaque année apporte son lot de nouvelles technologies, frameworks et meilleures pratiques. En 2023, plusieurs tendances se démarquent et méritent notre attention.</p>
                           
                            <h3 class="text-xl font-bold text-secondary mt-8 mb-4">Les frameworks basés sur les composants</h3>
                            <p>React, Vue et Angular continuent de dominer le paysage, mais nous observons une montée en puissance de Svelte et Solid.js. Ces frameworks offrent une approche plus légère et performante, avec moins de code boilerplate.</p>
                           
                            <h3 class="text-xl font-bold text-secondary mt-8 mb-4">Le JAMstack et l'architecture headless</h3>
                            <p>La séparation entre le frontend et le backend devient de plus en plus prononcée. Les développeurs privilégient des solutions headless CMS couplées à des générateurs de sites statiques pour des performances optimales.</p>
                           
                            <h3 class="text-xl font-bold text-secondary mt-8 mb-4">Les Web Components</h3>
                            <p>Avec l'adoption croissante des standards web, les Web Components gagnent en popularité. Ils permettent de créer des composants réutilisables indépendamment du framework utilisé.</p>
                        </div>
                       
                        <div class="border-t border-gray-200 pt-8 mb-8">
                            <h3 class="text-xl font-bold text-secondary mb-6">Commentaires (12)</h3>
                           
                            <!-- Commentaire 1 -->
                            <div class="bg-gray-50 rounded-xl p-6 mb-6">
                                <div class="flex justify-between items-center mb-4">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 rounded-full bg-secondary flex items-center justify-center text-white text-sm font-bold mr-3">AL</div>
                                        <div>
                                            <p class="font-medium text-gray-800">Alice Lambert</p>
                                            <p class="text-xs text-gray-500">13 mai 2023</p>
                                        </div>
                                    </div>
                                    <button class="text-gray-500 hover:text-primary transition-colors">
                                        <i class="far fa-heart"></i> <span class="ml-1">3</span>
                                    </button>
                                </div>
                                <p class="text-gray-700">Excellent article ! Je suis particulièrement intéressé par l'évolution des Web Components. Pensez-vous qu'ils pourraient un jour remplacer les frameworks comme React ?</p>
                            </div>
                           
                            <!-- Commentaire 2 -->
                            <div class="bg-gray-50 rounded-xl p-6 mb-6">
                                <div class="flex justify-between items-center mb-4">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 rounded-full bg-secondary flex items-center justify-center text-white text-sm font-bold mr-3">MB</div>
                                        <div>
                                            <p class="font-medium text-gray-800">Marc Bernard</p>
                                            <p class="text-xs text-gray-500">14 mai 2023</p>
                                        </div>
                                    </div>
                                    <button class="text-gray-500 hover:text-primary transition-colors">
                                        <i class="far fa-heart"></i> <span class="ml-1">1</span>
                                    </button>
                                </div>
                                <p class="text-gray-700">Merci pour ce tour d'horizon complet. J'aimerais ajouter que TypeScript continue sa progression et devient presque incontournable dans les projets sérieux.</p>
                            </div>
                           
                            <!-- Formulaire de commentaire -->
                            <form class="mt-8">
                                <h4 class="text-lg font-medium text-secondary mb-4">Ajouter un commentaire</h4>
                                <div class="mb-4">
                                    <label for="comment-name" class="block text-gray-700 mb-2 font-medium">Nom</label>
                                    <input type="text" id="comment-name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                </div>
                                <div class="mb-4">
                                    <label for="comment-content" class="block text-gray-700 mb-2 font-medium">Commentaire</label>
                                    <textarea id="comment-content" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
                                </div>
                                <button type="submit" class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-secondary transition-colors font-medium">
                                    Publier le commentaire
                                </button>
                            </form>
                        </div>
                    </div>
                </article>
               
                <div class="text-center mt-8">
                    <a href="#posts" class="inline-flex items-center text-primary font-medium hover:text-secondary transition-colors">
                        <i class="fas fa-arrow-left mr-2"></i> Retour aux articles
                    </a>
                </div>
            </div>
        </section>

        <!-- Section Création d'article -->
        <section id="create" class="py-16 bg-white hidden">
            <div class="container mx-auto px-4 max-w-3xl">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-secondary mb-4">Publier un nouvel article</h2>
                    <p class="text-gray-600">Partagez vos connaissances et expériences avec la communauté</p>
                </div>
               
                <form class="bg-gray-50 rounded-2xl shadow-md p-8">
                    <div class="mb-6">
                        <label for="post-title" class="block text-gray-700 mb-2 font-medium">Titre de l'article</label>
                        <input type="text" id="post-title" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Donnez un titre accrocheur à votre article">
                    </div>
                   
                    <div class="mb-6">
                        <label for="post-category" class="block text-gray-700 mb-2 font-medium">Catégorie</label>
                        <select id="post-category" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option value="">Sélectionnez une catégorie</option>
                            <option value="dev">Développement Web</option>
                            <option value="design">Design UI/UX</option>
                            <option value="productivity">Productivité</option>
                            <option value="tools">Outils</option>
                            <option value="career">Carrière</option>
                        </select>
                    </div>
                   
                    <div class="mb-6">
                        <label for="post-content" class="block text-gray-700 mb-2 font-medium">Contenu</label>
                        <textarea id="post-content" rows="12" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Rédigez votre article ici..."></textarea>
                    </div>
                   
                    <div class="mb-6">
                        <label for="post-tags" class="block text-gray-700 mb-2 font-medium">Tags</label>
                        <input type="text" id="post-tags" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Séparer les tags par des virgules">
                    </div>
                   
                    <div class="flex flex-col sm:flex-row justify-between gap-4">
                        <a href="#posts" class="bg-gray-300 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-400 transition-colors font-medium text-center">
                            Annuler
                        </a>
                        <button type="submit" class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-secondary transition-colors font-medium">
                            <i class="fas fa-paper-plane mr-2"></i> Publier l'article
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <!-- Pied de page -->
    <footer class="bg-secondary text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-10 h-10 rounded-full bg-tertiary flex items-center justify-center">
                            <span class="text-primary font-bold text-xl">T</span>
                        </div>
                        <h2 class="text-2xl font-bold">Trio<span class="text-tertiary">Blog</span></h2>
                    </div>
                    <p class="text-gray-300 mb-4 max-w-md">
                        Une plateforme moderne pour partager vos idées machiavélique, découvrir de nouveaux contenus et connecter avec une communauté de passionnés.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-tertiary transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-tertiary transition-colors">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-tertiary transition-colors">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                    </div>
                </div>
               
                <div>
                    <h3 class="text-lg font-bold mb-4">Navigation</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-300 hover:text-tertiary transition-colors">Accueil</a></li>
                        <li><a href="#posts" class="text-gray-300 hover:text-tertiary transition-colors">Articles</a></li>
                        <li><a href="#create" class="text-gray-300 hover:text-tertiary transition-colors">Écrire</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-tertiary transition-colors">À propos</a></li>
                    </ul>
                </div>
               
                <div>
                    <h3 class="text-lg font-bold mb-4">Catégories</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-tertiary transition-colors">Développement Web</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-tertiary transition-colors">Design UI/UX</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-tertiary transition-colors">Productivité</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-tertiary transition-colors">Carrière</a></li>
                    </ul>
                </div>
            </div>
           
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© 2023 TrioBlog. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Script pour la navigation et fonctionnalités -->
    <script>
        // Navigation entre les pages
        function showPage(pageId) {
            // Masquer toutes les pages
            document.querySelectorAll('main > section').forEach(section => {
                section.classList.add('hidden');
            });
           
            // Afficher la page demandée
            document.getElementById(pageId).classList.remove('hidden');
           
            // Mettre à jour la navigation active
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('text-tertiary');
            });
           
            // Mettre à jour l'URL (simulation)
            window.history.pushState({}, '', `#${pageId}`);
           
            // Scroll vers le haut
            window.scrollTo(0, 0);
        }
       
        // Barre de progression de lecture
        function updateProgressBar() {
            const winHeight = window.innerHeight;
            const docHeight = document.documentElement.scrollHeight;
            const scrollTop = window.pageYOffset;
            const progress = (scrollTop / (docHeight - winHeight)) * 100;
            document.getElementById('readingProgress').style.width = progress + '%';
        }
       
        // Au chargement de la page
        document.addEventListener('DOMContentLoaded', function() {
            // Afficher la page d'accueil par défaut
            const hash = window.location.hash.substring(1);
            if (hash && document.getElementById(hash)) {
                showPage(hash);
            } else {
                showPage('home');
            }
           
            // Gérer les clics sur les liens de navigation
            document.querySelectorAll('a[href^="#"]').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const href = this.getAttribute('href').substring(1);
                    if (document.getElementById(href)) {
                        showPage(href);
                    }
                });
            });
           
            // Initialiser la barre de progression
            window.addEventListener('scroll', updateProgressBar);
            updateProgressBar();
           
            // Animation d'entrée pour les articles
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
           
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);
           
            document.querySelectorAll('article').forEach(article => {
                article.style.opacity = '0';
                article.style.transform = 'translateY(20px)';
                article.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(article);
            });
        });
    </script>
</body>
</html>