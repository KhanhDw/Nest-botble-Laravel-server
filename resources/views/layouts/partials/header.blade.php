<header>
    <h1>Header at layout</h1>
    <nav>
        <ul>
            <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="/user" class="{{ request()->is('user') ? 'active' : '' }}">User</a></li>
            <li><a href="/product" class="{{ request()->is('product') ? 'active' : '' }}">product</a></li>
        </ul>
    </nav>
</header>

