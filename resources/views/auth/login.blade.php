@extends("layouts.app")

@section("main")
    <h1>Prisijungt</h1>
    @error("status")
    <p><strong>{{$message}}</strong></p>
    @enderror
    <form action="" method="post">
        @csrf
        <label for="email">Emailas :</label>
        @error("email")
            <br>
            <strong>{{$message}}</strong>
        @enderror
        <br>
        <input type="text" name="email" id="email">
        <br>
        <label for="password">Slaptažodis :</label>
        @error("password")
            <br>
            <strong>{{$message}}</strong>
        @enderror
        <br>
        <input type="password" name="password" id="password">
        <br>
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Prisimint.</label>
        <br>
        <input type="submit" value="Login">
    </form>
@endsection