<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Laravel #8 : Sistem Template Blade Laravel</title>
</head>

<body>

    <header>

        <h2>Blog MalasNgoding</h2>
        <nav>
            <a href="/">HOME</a>
            |
            <a href="/blog/about-us">TENTANG</a>
            |
            <a href="/blog/contact-us">KONTAK</a>
        </nav>
    </header>
    <hr />
    <br />
    <br />

    <!-- bagian judul halaman blog -->
    <h3> @yield('page_title') </h3>


    <!-- bagian konten blog -->
    @yield('content')


    <br />
    <br />
    <hr />
    <footer>
        <p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
    </footer>

</body>

</html>
