<nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" style="font-weight: 600" href="/">Pre-Eklampsia</a>
      <form class="d-flex">
        @auth
          <a class="btn btn-outline-light" href="/dashboard" style="margin-right: 10px;">Dashboard</a>
          <a class="btn btn-outline-light" href="/logout-process">Logout</a>
        @else
          <a class="btn btn-outline-light" href="/sign-in" style="margin-right: 10px;">Login</a>
        @endauth
      </form>
    </div>
</nav>