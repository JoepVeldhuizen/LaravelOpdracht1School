<style>

    body {
        margin: 0;
    }

    .Header {
        color: white;
        text-align: center;
        width: 100vw;
        height: 10vh;
        background-color: red;
    }

    footer {
        position: sticky;
        background-color: blue;
        height: 10vh;
        top: 100vh;
    }
</style>

<div class="Header"><a href="main">Main Pagina</a><a href="contact">Contact Pagina</a><a href="hallo">Hallo Pagina</a></div>

@yield("content")

<footer>Ik ben een footer</footer>