<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    main {
        padding: 1rem;
    }

    header {
        background-color: blue;
        padding: 1rem;
    }

    ul {
        list-style: none;
    }

    li {
        display: inline;
    }

    li:not(:last-of-type)::after {
        content: ' - ';
        color: white;
    }

    a {
        text-decoration: none;
        text-transform: uppercase;
        font-weight: 600;
        color: white;
    }

    a:visited {
        color: yellow
    }
</style>

<header>
    <ul>
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="/about">About</a>
        </li>
        <li>
            <a href="/contacts">Contacts</a>
        </li>
    </ul>
</header>
