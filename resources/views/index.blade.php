<!DOCTYPE html>
<html>
    @include('header.index')
    <body class="is-ctl-index is-action-index" onload="realtimeClock()">
        <div class="navbar">
            <div class="navbar--menu-link navbar--link is--selected">
                <a href="/" class="link--home link">
                    <b class="link--bold">Home</b>
                </a>
            </div>
            <div class="navbar--menu-link navbar--link">
                <a href="/dashboard" class="link--dashboard link">
                    <b>Dashboard</b>
                </a>
            </div>
            <div class="navbar--menu-link navbar--link is--right">
                <a href="/profile" class="link--profile link">
                    <b>
                        <a href="/login" class="link--login link">{{ $user }}</a>
                    </b>
                </a>
            </div>
        </div>
        <div class="article">
            <div class="article--salutation">
                <h1>{{ $greeting}} {{ $name }},</h1>
                <h2>{{ $time }} - <div id="clock"></div></h2>
                <h3>Test Test</h3>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>