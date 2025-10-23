<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tsirionantsoa Company - Solutions Numériques à Fianarantsoa</title>
    <!-- Chargement de Tailwind CSS via CDN pour une compatibilité maximale -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Utilisation de la police Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght%40100..900&display=swap" rel="stylesheet">
    
    <style>
        /* Configuration de la police par défaut */
        body {
            font-family: 'Inter', sans-serif;
            color: #ffffff; /* Texte blanc par défaut */
        }

        /* Styles Glassmorphism (CSS Custom) */
        .glass-card {
            background-color: rgba(0, 0, 0, 0.2); /* Noir semi-transparent */
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.15); /* Bordure légère */
            border-radius: 1rem;
            padding: 1.5rem;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
            transition: all 0.3s ease;
        }

        /* Dégradé pour les titres */
        .text-gradient {
            background-image: linear-gradient(to right, #6D28D9, #14B8A6); /* Purple to Teal */
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: 700;
        }

        /* Keyframes et classes pour les animations générales (ajout du `forwards` pour que l'élément reste visible après l'animation) */
        @keyframes fadeInDown { from { opacity: 0; transform: translate3d(0, -20px, 0); } to { opacity: 1; transform: translate3d(0, 0, 0); } }
        @keyframes fadeInUp { from { opacity: 0; transform: translate3d(0, 20px, 0); } to { opacity: 1; transform: translate3d(0, 0, 0); } }
        @keyframes slideInLeft { from { opacity: 0; transform: translate3d(-30px, 0, 0); } to { opacity: 1; transform: translate3d(0, 0, 0); } }
        @keyframes slideInRight { from { opacity: 0; transform: translate3d(30px, 0, 0); } to { opacity: 1; transform: translate3d(0, 0, 0); } }
        @keyframes spinSlow { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
        
        .animate-fade-in-down { animation: fadeInDown 1s ease-out forwards; opacity: 0; }
        .animate-fade-in-up { animation: fadeInUp 1s ease-out forwards; opacity: 0; }
        .animate-slide-in-left { animation: slideInLeft 1s ease-out forwards; opacity: 0; }
        .animate-slide-in-right { animation: slideInRight 1s ease-out forwards; opacity: 0; }
        .animate-spin-slow { animation: spinSlow 40s linear infinite; }
        
        /* Styles pour la barre de navigation fixe */
        .fixed-header {
            background-color: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }

        /* Icones SVG */
        .icon {
            stroke: currentColor;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
            fill: none;
        }
    </style>
</head>
<body class="bg-gray-900 overflow-x-hidden">

    <!-- Conteneur global et décorations de fond -->
    <div class="relative min-h-screen">
        <!-- Décoration de fond : orbes flous -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-purple-500/30 rounded-full filter blur-3xl opacity-30 animate-spin-slow" style="animation-duration: 30s;"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-teal-400/30 rounded-full filter blur-3xl opacity-30 animate-spin-slow" style="top: 70%; animation-duration: 25s;"></div>

        <div class="relative z-10">
            <!-- Header (En-tête) -->
            <header class="fixed w-full z-40 fixed-header border-b border-white/10 shadow-lg transition-all duration-300 animate-fade-in-down">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">
                    <div class="flex items-center gap-3">
                        <!-- Logo et Titre -->
                        <img src="logo.png" alt="Logo Tsirionantsoa" class="w-10 h-10 rounded-full object-cover shadow-lg border border-teal-400/50">
                        <div>
                            <!-- Ajustement pour les très petits écrans si nécessaire -->
                            <div class="font-bold text-white tracking-widest text-xs sm:text-sm">TSIRIONANTSOA COMPANY</div>
                            <div class="text-[10px] sm:text-xs text-gray-300">+261 34 65 082 95</div>
                        </div>
                    </div>

                    <!-- Navigation pour Desktop -->
                    <nav class="hidden md:flex gap-8 text-sm font-medium">
                        <a href="#" class="text-white hover:text-teal-400 transition duration-200 hover:scale-105">Accueil</a>
                        <a href="#about" class="text-white hover:text-teal-400 transition duration-200 hover:scale-105">À propos</a>
                        <a href="#services" class="text-white hover:text-teal-400 transition duration-200 hover:scale-105">Services</a>
                        <a href="#why" class="text-white hover:text-teal-400 transition duration-200 hover:scale-105">Pourquoi nous</a>
                        <a href="#contact" class="text-white hover:text-teal-400 transition duration-200 hover:scale-105">Contact</a>
                    </nav>

                    <!-- CTA pour Desktop -->
                    <div class="hidden md:block">
                        <a href="#contact" class="px-4 py-2 rounded-full bg-gradient-to-r from-purple-600 to-teal-400 text-white text-sm font-semibold shadow-md hover:shadow-xl transition duration-300 hover:scale-105">Nous contacter</a>
                    </div>

                    <!-- Menu Hamburger (seulement pour mobile) -->
                    <button id="menu-btn" class="md:hidden text-white focus:outline-none">
                         <!-- Menu Icon -->
                         <svg class="icon w-6 h-6" viewBox="0 0 24 24"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                    </button>
                </div>
                
                <!-- Menu Mobile (Initiallement caché) -->
                <!-- Important: L'ajout de px-4 et py-2 aux liens assure une bonne zone de frappe tactile -->
                <div id="mobile-menu" class="md:hidden hidden bg-black/50 backdrop-blur-sm border-t border-white/10">
                    <nav class="flex flex-col p-4 space-y-2 text-sm font-medium">
                        <a href="#" class="mobile-link block px-3 py-2 text-white hover:bg-white/10 rounded-lg">Accueil</a>
                        <a href="#about" class="mobile-link block px-3 py-2 text-white hover:bg-white/10 rounded-lg">À propos</a>
                        <a href="#services" class="mobile-link block px-3 py-2 text-white hover:bg-white/10 rounded-lg">Services</a>
                        <a href="#why" class="mobile-link block px-3 py-2 text-white hover:bg-white/10 rounded-lg">Pourquoi nous</a>
                        <a href="#contact" class="mobile-link block px-3 py-2 text-white hover:bg-white/10 rounded-lg">Contact</a>
                        <a href="#contact" class="mobile-link mt-2 text-center px-4 py-2 rounded-full bg-gradient-to-r from-purple-600 to-teal-400 text-white font-semibold">Nous contacter</a>
                    </nav>
                </div>
            </header>

            <main class="container mx-auto">
                <!-- Hero (Landing Page) -->
                <section id="hero" class="min-h-screen pt-16 flex items-center relative bg-gray-900 overflow-hidden">
                    <!-- Fond Futurist (Pleine Largeur) -->
                    <div class="absolute inset-0 z-0 opacity-10">
                        <!-- Pattern de grille subtile -->
                        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="grid" width="80" height="80" patternUnits="userSpaceOnUse">
                                    <path d="M 80 0 L 0 0 0 80" fill="none" stroke="#1F2937" stroke-width="1"></path>
                                </pattern>
                            </defs>
                            <rect width="100%" height="100%" fill="url(#grid)" />
                        </svg>
                    </div>

                    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 w-full">
                        <!-- Utilisation de 'gap-8' pour les mobiles au lieu de 'gap-12' pour réduire l'espace vertical -->
                        <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center text-center md:text-left">
                            
                            <!-- Colonne Visuelle (Ordre 1 sur mobile, Ordre 2 sur desktop) -->
                            <div class="order-1 flex justify-center md:justify-end animate-slide-in-right md:order-2" style="animation-delay: 0.4s;">
                                <!-- L'image SVG est réduite sur les petits écrans -->
                                <svg viewBox="0 0 100 100" class="w-full max-w-xs sm:max-w-sm lg:max-w-md h-auto" xmlns="http://www.w3.org/2000/svg">
                                    <style>
                                        /* Couleurs pour l'illustration (utilisent les teintes du site) */
                                        .dot { fill: #14B8A6; transition: fill 0.5s ease; }
                                        .line { stroke: #6D28D9; stroke-width: 0.5; transition: stroke 0.5s ease; }
                                    </style>
                                    <!-- Lignes de circuit principales -->
                                    <path class="line" d="M10 10 L 90 10 L 90 90 L 10 90 Z" opacity="0.4"/>
                                    <path class="line" d="M10 10 L 50 50 L 90 10" opacity="0.6"/>
                                    <path class="line" d="M10 90 L 50 50 L 90 90" opacity="0.6"/>
                                    <!-- Lignes secondaires -->
                                    <path class="line" d="M20 30 L 80 30" opacity="0.3"/>
                                    <path class="line" d="M20 70 L 80 70" opacity="0.3"/>
                                    <path class="line" d="M30 20 L 30 80" opacity="0.3"/>
                                    <path class="line" d="M70 20 L 70 80" opacity="0.3"/>
                                    
                                    <!-- Points clés (Nœuds) -->
                                    <circle class="dot" cx="10" cy="10" r="2"/>
                                    <circle class="dot" cx="90" cy="10" r="2"/>
                                    <circle class="dot" cx="90" cy="90" r="2"/>
                                    <circle class="dot" cx="10" cy="90" r="2"/>
                                    <circle class="dot" cx="50" cy="50" r="3.5" fill="#6D28D9"/> <!-- Centre plus grand -->
                                    
                                    <!-- Texte "TC" au centre -->
                                    <text x="50" y="55" font-size="3" fill="#14B8A6" font-weight="bold" text-anchor="middle" dominant-baseline="middle" opacity="0.9">Tsirionantsoa Company</text>

                                </svg>
                            </div>

                            <!-- Colonne de Texte (Ordre 2 sur mobile, Ordre 1 sur desktop) -->
                            <div class="order-2 md:order-1">
                                
                                <h1 class="text-4xl sm:text-5xl lg:text-7xl font-extrabold leading-tight text-white drop-shadow-xl animate-slide-in-left" style="animation-delay: 0.4s;">
                                    <span class="text-gradient">Transformer</span> les idées en solutions <span class="text-purple-400">numériques</span>.
                                </h1>
                                <p class="text-lg sm:text-xl text-gray-300 mt-6 max-w-xl mx-auto md:mx-0 animate-fade-in-up" style="animation-delay: 0.6s;">
                                    Tsirionantsòa Company : Former les talents locaux, développer l'innovation pour la Haute Matsiatra.
                                </p>
                                
                                <!-- CTA -->
                                <div class="mt-8 sm:mt-10 flex flex-col sm:flex-row gap-4 justify-center md:justify-start animate-fade-in-up" style="animation-delay: 0.8s;">
                                    <a href="#contact" class="px-6 sm:px-8 py-3 rounded-full bg-gradient-to-r from-purple-600 to-teal-400 text-white font-semibold shadow-2xl shadow-purple-500/50 transition duration-300 transform hover:scale-105">
                                        Démarrer un projet
                                    </a>
                                    <a href="#services" class="px-6 sm:px-8 py-3 rounded-full border border-teal-400 text-teal-300 font-semibold hover:bg-white/10 transition duration-300 transform hover:scale-105">
                                        Découvrir nos services
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- About (À propos) -->
                <section id="about" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-24 sm:mt-32">
                    <h2 class="text-3xl sm:text-4xl text-center mb-8 sm:mb-12 animate-fade-in-down">
                        <span class="text-gradient">Notre Engagement</span>
                    </h2>
                    <p class="mt-4 text-gray-300 text-base sm:text-lg max-w-3xl mx-auto text-center animate-fade-in-up" style="animation-delay: 0.2s;">
                        Tsirionantsoa Company est plus qu'une entreprise de tech ; c'est un incubateur de talents et un moteur de développement local à Fianarantsoa.
                    </p>
                    <!-- RESPONSIVE GRID: 1 colonne sur mobile, 3 sur desktop -->
                    <div class="mt-12 sm:mt-16 grid md:grid-cols-3 gap-6 sm:gap-8">
                        <!-- Mission Card -->
                        <div class="glass-card hover:border-purple-400 animate-slide-in-left" style="animation-delay: 0.4s;">
                            <div class="flex items-center gap-3 mb-3">
                                <!-- Users Icon -->
                                <svg class="icon w-8 h-8 text-purple-400" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                                <h3 class="font-bold text-gradient text-xl sm:text-2xl">Mission</h3>
                            </div>
                            <p class="text-sm text-gray-300 mt-3">Offrir des opportunités concrètes aux jeunes diplômés et former les étudiants en technologies pour un impact local fort et durable.</p>
                        </div>
                        <!-- Vision Card -->
                        <div class="glass-card hover:border-teal-400 animate-fade-in-up" style="animation-delay: 0.6s;">
                            <div class="flex items-center gap-3 mb-3">
                                <!-- Eye Icon -->
                                <svg class="icon w-8 h-8 text-teal-400" viewBox="0 0 24 24"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                <h3 class="font-bold text-gradient text-xl sm:text-2xl">Vision</h3>
                            </div>
                            <p class="text-sm text-gray-300 mt-3">Contribuer activement à l'émergence d'un pôle technologique de référence et dynamique, propulsant Fianarantsoa sur la scène numérique régionale.</p>
                        </div>
                        <!-- Valeurs Card -->
                        <div class="glass-card hover:border-pink-400 animate-slide-in-right" style="animation-delay: 0.8s;">
                            <div class="flex items-center gap-3 mb-3">
                                <!-- Heart Icon -->
                                <svg class="icon w-8 h-8 text-pink-400" viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                <h3 class="font-bold text-gradient text-xl sm:text-2xl">Valeurs</h3>
                            </div>
                            <p class="text-sm text-gray-300 mt-3">Transparence, excellence, réactivité, et un profond engagement envers le développement du capital humain local.</p>
                        </div>
                    </div>
                </section>

                <!-- Services -->
                <section id="services" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-24 sm:mt-32">
                    <h2 class="text-3xl sm:text-4xl text-center mb-8 sm:mb-12 animate-fade-in-down">
                        <span class="text-gradient">Ce que nous faisons</span>
                    </h2>
                    <p class="mt-2 text-gray-300 text-base sm:text-lg max-w-3xl mx-auto text-center animate-fade-in-up" style="animation-delay: 0.2s;">
                        Nous traduisons vos idées en solutions numériques robustes et élégantes, en tirant parti des compétences les plus récentes.
                    </p>
                    <!-- RESPONSIVE GRID: 2 colonnes sur mobile/tablette, 4 sur desktop -->
                    <div class="mt-12 sm:mt-16 grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-8">
                        <!-- Service 1: Web Dev -->
                        <div class="glass-card hover:border-teal-400 transition duration-300 transform hover:-translate-y-1 group animate-fade-in-up" style="animation-delay: 0.4s;">
                            <!-- Laptop Icon -->
                            <svg class="icon w-8 h-8 sm:w-10 sm:h-10 text-teal-400 group-hover:text-purple-400 transition mb-3" viewBox="0 0 24 24"><path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55C22.38 20.37 21.6 22 20 22H4c-1.6 0-2.38-1.63-1.28-3.45L4 16"></path></svg>
                            <h4 class="font-bold text-white text-base sm:text-xl">Développement Web</h4>
                            <p class="text-xs sm:text-sm text-gray-300 mt-2">Création de sites et d'applications web modernes et performantes.</p>
                        </div>
                        <!-- Service 2: Mobile Apps -->
                        <div class="glass-card hover:border-teal-400 transition duration-300 transform hover:-translate-y-1 group animate-fade-in-up" style="animation-delay: 0.6s;">
                            <!-- Smartphone Icon -->
                            <svg class="icon w-8 h-8 sm:w-10 sm:h-10 text-teal-400 group-hover:text-purple-400 transition mb-3" viewBox="0 0 24 24"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                            <h4 class="font-bold text-white text-base sm:text-xl">Applications Mobiles</h4>
                            <p class="text-xs sm:text-sm text-gray-300 mt-2">Développement d'apps iOS & Android natives ou hybrides.</p>
                        </div>
                        <!-- Service 3: Desktop Apps -->
                        <div class="glass-card hover:border-teal-400 transition duration-300 transform hover:-translate-y-1 group animate-fade-in-up" style="animation-delay: 0.8s;">
                            <!-- Server Icon -->
                            <svg class="icon w-8 h-8 sm:w-10 sm:h-10 text-teal-400 group-hover:text-purple-400 transition mb-3" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
                            <h4 class="font-bold text-white text-base sm:text-xl">Solutions de Bureau</h4>
                            <p class="text-xs sm:text-sm text-gray-300 mt-2">Applications desktop pour l'efficacité et la gestion interne.</p>
                        </div>
                        <!-- Service 4: Cloud -->
                        <div class="glass-card hover:border-teal-400 transition duration-300 transform hover:-translate-y-1 group animate-fade-in-up" style="animation-delay: 1.0s;">
                            <!-- TrendingUp Icon -->
                            <svg class="icon w-8 h-8 sm:w-10 sm:h-10 text-teal-400 group-hover:text-purple-400 transition mb-3" viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                            <h4 class="font-bold text-white text-base sm:text-xl">Déploiement & Cloud</h4>
                            <p class="text-xs sm:text-sm text-gray-300 mt-2">Hébergement, CI/CD et gestion cloud pour une performance maximale.</p>
                        </div>
                    </div>
                </section>

                <!-- Why Us (Pourquoi nous) -->
                <section id="why" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-24 sm:mt-32">
                    <h2 class="text-3xl sm:text-4xl text-center mb-8 sm:mb-12 animate-fade-in-down">
                        <span class="text-gradient">Les Raisons de Nous Choisir</span>
                    </h2>
                    <p class="mt-2 text-gray-300 text-base sm:text-lg max-w-3xl mx-auto text-center animate-fade-in-up" style="animation-delay: 0.2s;">
                        Nous combinons l'expertise technique avec un engagement social unique dans la région.
                    </p>
                    <!-- RESPONSIVE GRID: 1 colonne sur mobile, 2 sur desktop -->
                    <div class="mt-12 sm:mt-16 grid md:grid-cols-2 gap-6 sm:gap-8">
                        
                        <!-- Item 1 (Slide Left) -->
                        <div class="glass-card flex items-start gap-4 transition duration-300 transform hover:scale-[1.02] animate-slide-in-left" style="animation-delay: 0.4s;">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-teal-400/20 flex items-center justify-center font-bold text-teal-400 flex-shrink-0 border-2 border-teal-400">
                                <!-- CheckCircle Icon -->
                                <svg class="icon w-5 h-5 sm:w-6 sm:h-6" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                            </div>
                            <div>
                                <div class="font-semibold text-white text-lg sm:text-xl">Expertise Locale Certifiée</div>
                                <div class="text-sm text-gray-300 mt-1">Des projets menés à bien par une équipe compétente et formée au sein de l'Université de Fianarantsoa.</div>
                            </div>
                        </div>

                        <!-- Item 2 (Slide Right) -->
                        <div class="glass-card flex items-start gap-4 transition duration-300 transform hover:scale-[1.02] animate-slide-in-right" style="animation-delay: 0.6s;">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-teal-400/20 flex items-center justify-center font-bold text-teal-400 flex-shrink-0 border-2 border-teal-400">
                                <!-- CheckCircle Icon -->
                                <svg class="icon w-5 h-5 sm:w-6 sm:h-6" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                            </div>
                            <div>
                                <div class="font-semibold text-white text-lg sm:text-xl">Partenariat et Transparence</div>
                                <div class="text-sm text-gray-300 mt-1">Échange fluide, rapports réguliers et collaboration étroite à chaque phase de développement.</div>
                            </div>
                        </div>

                        <!-- Item 3 (Slide Left) -->
                        <div class="glass-card flex items-start gap-4 transition duration-300 transform hover:scale-[1.02] animate-slide-in-left" style="animation-delay: 0.8s;">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-teal-400/20 flex items-center justify-center font-bold text-teal-400 flex-shrink-0 border-2 border-teal-400">
                                <!-- CheckCircle Icon -->
                                <svg class="icon w-5 h-5 sm:w-6 sm:h-6" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                            </div>
                            <div>
                                <div class="font-semibold text-white text-lg sm:text-xl">Innovation et Modernité</div>
                                <div class="text-sm text-gray-300 mt-1">Nous utilisons les technologies les plus récentes (IA, Cloud, Frameworks modernes) pour garantir la pérennité de votre projet.</div>
                            </div>
                        </div>

                        <!-- Item 4 (Slide Right) -->
                        <div class="glass-card flex items-start gap-4 transition duration-300 transform hover:scale-[1.02] animate-slide-in-right" style="animation-delay: 1.0s;">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-teal-400/20 flex items-center justify-center font-bold text-teal-400 flex-shrink-0 border-2 border-teal-400">
                                <!-- CheckCircle Icon -->
                                <svg class="icon w-5 h-5 sm:w-6 sm:h-6" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                            </div>
                            <div>
                                <div class="font-semibold text-white text-lg sm:text-xl">Impact Social Direct</div>
                                <div class="text-sm text-gray-300 mt-1">Soutenir Tsirionantsoa Company, c'est investir directement dans l'avenir numérique de la jeunesse locale.</div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Contact -->
                <section id="contact" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-24 sm:mt-32 mb-16 sm:mb-24">
                    <h2 class="text-3xl sm:text-4xl text-center mb-8 sm:mb-12 animate-fade-in-down">
                        <span class="text-gradient">Prêt à Démarrer ?</span>
                    </h2>
                    <p class="mt-2 text-gray-300 text-base sm:text-lg max-w-3xl mx-auto text-center animate-fade-in-up" style="animation-delay: 0.2s;">
                        Discutons de votre vision. Remplissez le formulaire ou contactez-nous directement.
                    </p>

                    <!-- RESPONSIVE GRID: 1 colonne sur mobile, 2 sur desktop -->
                    <div class="mt-12 sm:mt-16 grid md:grid-cols-2 gap-8 sm:gap-10">
                        
                        <form id="contactForm" action="send_email.php" method="POST" class="glass-card animate-slide-in-left" style="animation-delay: 0.4s; padding: 2rem;">
    <h3 class="font-bold text-white text-xl sm:text-2xl mb-6">Demandez votre devis gratuit</h3>
    
    <!-- Messages de notification (masqués par défaut) -->
    <div id="statusMessage" class="mb-4 p-3 rounded-lg font-medium items-center gap-2 hidden" role="alert">
        <!-- Send Icon (l'icône est un exemple, assurez-vous qu'elle est affichée correctement) -->
        <svg class="icon w-5 h-5 inline mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
        <span id="messageText"></span>
    </div>
    
    <!-- === CHAMP HONEYPOT AJOUTÉ === -->
    <div style="position:absolute; left:-5000px;" aria-hidden="true">
        <input type="text" name="hp_email" tabindex="-1" value="" autocomplete="off" aria-label="Ne pas remplir ce champ">
    </div>
    <!-- ============================= -->
    
    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-white">Nom</label>
        <input type="text" id="name" name="name" class="mt-1 block w-full rounded-lg bg-black/30 border border-white/20 p-3 text-white focus:ring-teal-400 focus:border-teal-400 transition" required>
    </div>
    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-white">Email</label>
        <input type="email" id="email" name="email" class="mt-1 block w-full rounded-lg bg-black/30 border border-white/20 p-3 text-white focus:ring-teal-400 focus:border-teal-400 transition" required>
    </div>
    <div class="mb-6">
        <label for="message" class="block text-sm font-medium text-white">Décrivez votre projet</label>
        <textarea id="message" name="message" class="mt-1 block w-full rounded-lg bg-black/30 border border-white/20 p-3 text-white focus:ring-teal-400 focus:border-teal-400 transition" rows="4" required></textarea>
    </div>
    <button type="submit" id="submitButton" class="w-full px-4 py-3 rounded-full bg-gradient-to-r from-purple-600 to-teal-400 text-white font-semibold shadow-xl shadow-teal-500/50 hover:shadow-purple-500/50 transition duration-300 transform hover:scale-[1.01]">
        Envoyer le message
    </button>
</form>

                        <div class="flex flex-col justify-between space-y-6 sm:space-y-8 animate-slide-in-right" style="animation-delay: 0.6s;">
                            <div class="glass-card p-6 sm:p-8">
                                <h4 class="font-bold text-white text-xl sm:text-2xl flex items-center gap-2 mb-4">
                                    <!-- Map Pin Icon -->
                                    <svg class="icon w-6 h-6 text-teal-400" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    Où nous trouver
                                </h4>
                                <p class="text-sm sm:text-md text-gray-300">Basé à Fianarantsoa, Madagascar.</p>
                                <p class="text-sm sm:text-md text-gray-300 mt-2">Disponible pour des projets locaux, nationaux et internationaux.</p>
                            </div>

                             <div class="glass-card p-6 sm:p-8">
                                <h4 class="font-bold text-white text-xl sm:text-2xl flex items-center gap-2 mb-4">
                                    <!-- Lightbulb Icon -->
                                    <svg class="icon w-6 h-6 text-purple-400" viewBox="0 0 24 24"><path d="M15 14c.07-.46.36-.85.79-1.07.72-.34 1.72-.94 1.63-2.15-.3-3.7-3.8-3.3-4.5-5-.43-1.2-.5-2.5-.2-3.8"></path><path d="M14 14.88v2.02c0 .24-.13.46-.35.58-.93.5-2.03.62-3.1.34-1.1-.3-1.85-1.2-2.1-2.2-.24-.96-.13-2.1.34-3.1.22-.44.6-.74 1.05-.98.7-.37 1.7-.97 1.6-2.18-.3-3.7-3.8-3.3-4.5-5-.43-1.2-.5-2.5-.2-3.8"></path><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                                    Opportunités Étudiantes
                                </h4>
                                <p class="text-sm sm:text-md text-gray-300 mt-2">Nous recrutons des stagiaires et diplômés de l'Université de Fianarantsoa. Envoyez votre candidature par email pour rejoindre notre équipe !</p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <!-- Footer (Pied de page) -->
            <footer class="mt-16 sm:mt-24 bg-black/30 backdrop-blur border-t border-white/10 py-6 sm:py-8 animate-fade-in-up" style="animation-delay: 0.8s;">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-3 sm:gap-4">
                    <div class="text-xs sm:text-sm text-gray-400 text-center">© <span id="currentYear"></span> TSIRIONANTSOA COMPANY — Tous droits réservés.</div>
                    <div class="flex gap-4 sm:gap-6 text-xs sm:text-sm">
                        <a href="#" class="text-gray-300 hover:text-teal-400 transition duration-200">Mentions légales</a>
                        <a href="#" class="text-gray-300 hover:text-teal-400 transition duration-200">Politique de confidentialité</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Bouton de retour en haut (Scroll to Top) -->
    <button id="scrollToTopBtn" class="fixed bottom-6 right-6 p-3 rounded-full bg-gradient-to-r from-purple-600 to-teal-400 text-white shadow-lg transition-opacity duration-300 z-50 opacity-0 invisible hover:scale-110">
        <!-- Arrow Up Icon -->
        <svg class="icon w-6 h-6" viewBox="0 0 24 24"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mise à jour de l'année dans le footer
            document.getElementById('currentYear').textContent = new Date().getFullYear();

            // Logique du Menu Hamburger pour Mobile
            const menuBtn = document.getElementById('menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileLinks = mobileMenu.querySelectorAll('a'); 

            // Fonction pour basculer la visibilité du menu et l'icône
            const toggleMenu = () => {
                const isHidden = mobileMenu.classList.toggle('hidden');
                // Changer l'icône du hamburger en croix (simulation)
                menuBtn.innerHTML = isHidden 
                    ? '<svg class="icon w-6 h-6" viewBox="0 0 24 24"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>'
                    : '<svg class="icon w-6 h-6" viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>';
            }

            // Écouteur pour le bouton d'ouverture/fermeture
            menuBtn.addEventListener('click', toggleMenu);
            
            // Fermer le menu lorsque l'utilisateur clique sur un lien (meilleure UX mobile)
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (!mobileMenu.classList.contains('hidden')) {
                        toggleMenu();
                    }
                });
            });


            // Logique de simulation du formulaire de contact (Simule un envoi sans backend réel)
            const form = document.getElementById('contactForm');
            const statusMessage = document.getElementById('statusMessage');
            const messageText = document.getElementById('messageText');
            const submitButton = document.getElementById('submitButton');

            /**
             * Affiche un message de statut (succès ou erreur)
             * @param {string} message - Le texte du message à afficher.
             * @param {string} type - 'success' ou 'error'.
             */
            function showStatus(message, type) {
                messageText.textContent = message;
                // Réinitialise les classes pour éviter les conflits
                statusMessage.classList.remove('hidden', 'bg-teal-400/20', 'text-teal-200', 'border-teal-400', 'bg-red-400/20', 'text-red-200', 'border-red-400');
                
                if (type === 'success') {
                    // Style pour le succès (vert/teal)
                    statusMessage.classList.add('bg-teal-400/20', 'text-teal-200', 'border', 'border-teal-400');
                } else {
                    // Style pour l'erreur (rouge)
                    statusMessage.classList.add('bg-red-400/20', 'text-red-200', 'border', 'border-red-400');
                }

                // Afficher le message
                statusMessage.classList.remove('hidden');

                // Masquer le message après 8 secondes
                setTimeout(() => {
                    statusMessage.classList.add('hidden');
                }, 8000);
            }

            form.addEventListener('submit', async function(event) {
                event.preventDefault(); 
                
                // Désactiver le bouton pendant le traitement
                submitButton.disabled = true;
                submitButton.textContent = 'Envoi en cours...';
                statusMessage.classList.add('hidden'); 

                const formData = new FormData(form);
                const name = formData.get('name');
                const email = formData.get('email');
                
                // Simuler une attente réseau
                await new Promise(resolve => setTimeout(resolve, 1500));

                // Simulation de la réponse du serveur
                if (email.includes('@') && email.includes('.')) {
                    // Succès simulé
                    showStatus(`Merci ${name}, votre message a été envoyé avec succès ! Nous vous répondrons rapidement.`, 'success');
                    form.reset(); 
                } else {
                    // Erreur simulée
                    showStatus("Erreur: Veuillez fournir une adresse e-mail valide.", 'error');
                }

                // Rétablir l'état initial du bouton
                submitButton.disabled = false;
                submitButton.textContent = 'Envoyer le message';
            });

            // Logique du bouton Scroll to Top
            const scrollToTopBtn = document.getElementById('scrollToTopBtn');
            const scrollThreshold = 300; 

            // Fonction pour vérifier la position de défilement et basculer la visibilité
            const toggleScrollTopButton = () => {
                if (window.scrollY > scrollThreshold) {
                    scrollToTopBtn.classList.remove('opacity-0', 'invisible');
                    scrollToTopBtn.classList.add('opacity-100', 'visible');
                } else {
                    scrollToTopBtn.classList.remove('opacity-100', 'visible');
                    scrollToTopBtn.classList.add('opacity-0', 'invisible');
                }
            };

            // Écouteur d'événement pour le défilement de la fenêtre
            window.addEventListener('scroll', toggleScrollTopButton);

            // Écouteur d'événement pour le clic sur le bouton
            scrollToTopBtn.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth' 
                });
            });

            // Vérification initiale au chargement
            toggleScrollTopButton();
        });
    </script>
</body>
</html>
