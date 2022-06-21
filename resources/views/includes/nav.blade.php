<div class="menu">
    <div>
        <a class="logo">SHARE YOUR CAR</a><sup class="copyright">&copy;</sup>
    </div>
    <div class="nav">
        <div class="list-item languages">
            <button class="change-language">
                <img src="icons/hungary.png" alt="" />
            </button>
        </div>
        <div class="list-item">
            <span><a href="{{ url('index') }}">Home</a></span>
        </div>
        <div class="list-item">
            <span><a href="{{ url('host') }}">Hosting</a></span>
        </div>
        <div class="list-item">
            <span><a href="{{ url('host') }}">Community</a></span>
        </div>
        <div class="list-item">
            <span><a href="{{ url('host') }}">FAQ</a></span>
        </div>
        <div class="list-item">
            <span><a href="{{ url('host') }}">About us</a></span>
            <div class="dropdown">
                <div><a href="{{ url('host') }}">Company</a></div>
                <div><a href="{{ url('host') }}">Career</a></div>
            </div>
        </div>
        <div class="list-item login">
            <span class="login-text"><a href="{{ route('login') }}">Login / Register</a></span>
            <span class="material-symbols-outlined icon"> person </span>
        </div>
    </div>
</div>