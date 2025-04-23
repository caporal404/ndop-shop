<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Fontawesome CSS et JS -->
    <link rel="stylesheet" href="{{ url('icons/fontawesome/css/fontawesome.min.css') }}" type="text/css">
    <script href="{{ url('icons/fontawesome/css/fontawesome.min.css') }}" type="text/javascript"></script>
    <!--  -->
    
    <!-- Fichier CSS -->
    <link rel="stylesheet" href="{{ url('styles/layout.css') }}" type="text/css">
    <!--  -->

    <!-- Entête dynamique -->
    @yield('header')
    <!--  -->

</head>
<body>

    <!-- Header -->
    <header>
        <div class="logo">NdopShop</div>
        <div class="toggle-menu"></div>
        <nav>
            <ul class="menu">
                <li><a href="{{ route('home') }}">Acceuil</a></li>
                <li><a href="{{ route('categories') }}">Catégories</a></li>
            </ul>
        </nav>
    </header>
    <!--  -->

	<!-- Contenu principal -->
	<main>
        <!-- Contenu dynamique -->
		@yield('main')
        <!--  -->
	</main>
	<!--  -->

	<!-- Footer -->
    <footer>
        <p class="copyrights">&copy; 2025 - Tous droits reservés</p>
        <div class="socials">
            <a href="#">facebook</a>
            <a href="#">whatsapp</a>
        </div>
    </footer>
    <!--  -->

	<!-- Fichier JS -->
    <script src="{{ url('script/layout.js') }}"  type="text/javascript"></script>
	<!--  -->

    <!-- Js dynamique -->
    @yield('script')
    <!--  -->

</body>
</html>