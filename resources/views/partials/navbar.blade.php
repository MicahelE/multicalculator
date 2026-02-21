<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <a class="navbar-brand" href="/">MULTICALCULATOR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('average') ? 'active' : '' }}" href="/average">Average</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('discount') ? 'active' : '' }}" href="/discount">Discount</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('payraise') ? 'active' : '' }}" href="/payraise">Pay Raise</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('markup') ? 'active' : '' }}" href="/markup">Markup</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('monthly-income') ? 'active' : '' }}" href="/monthly-income">Monthly Income</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('overtime') ? 'active' : '' }}" href="/overtime">Overtime</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('commission') ? 'active' : '' }}" href="/commission">Commission</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('cagr') ? 'active' : '' }}" href="/cagr">CAGR</a>
            </li>
        </ul>
    </div>
</nav>
