<section class="container">
    <a class="btn btn-primary" href={{ route('home') }}>Retour Home</a>
    <form action={{ route('membre.store') }} method="POST">
        @csrf
        <div>
            <label for="nom">Nom : </label>
            <input type="text" name="nom" id="nom">
        </div>
        <div>
            <label for="age">Age :</label>
            <input type="number" name="age" id="age">
        </div>
        <div>
            <select class="form-select" name="genre">
                <option selected>Genre</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
              </select>
        </div>
        <div>
            <input class="btn btn-outline-success" type="submit" value="Envoyez">
        </div>
    </form>
</section>