<nav class="navbar navbar-expand-lg bg-danger">
    <div class="container">
      <a class="navbar-brand" href="/">Tugas 19 IOT Frontend</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav">
            <a class="nav-link {{ ($title === "dashboard") ? 'active' : '' }}" href="/dashboard">Dashboard</a>
            <a class="nav-link {{ ($title === "devices") ? 'active' : '' }}" href="/devices">Devices</a>
            <a class="nav-link {{ ($title === "logs") ? 'active' : '' }}" href="/logs">Logs</a>
          </div>
      </div>
    </div>
  </nav>
