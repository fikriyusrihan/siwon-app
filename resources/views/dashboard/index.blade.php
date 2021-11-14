<h1>Selamat Datang, {{ auth()->user()->name }}</h1>

<form action="/logout" method="post">
    @csrf
    <button type="submit" class="btn btn-primary">Logout</button>
</form>