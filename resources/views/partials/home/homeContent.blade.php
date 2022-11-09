<section class="container">
    <a class="btn btn-danger" href={{ route('membre.create') }}>Formulaire</a>
    <form action={{ route('membre.delete.all') }} method="POST">
        @csrf
        @method('DELETE')
        <input class="btn btn-danger" type="submit" value="DELETE ALL !!!!!!">
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
                <th scope="col">Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($membres as $membre)
                <tr>
                    <th scope="row">{{ $membre->id }}</th>
                    <td><a class="text-decoration-none text-danger" href={{ route('membre.show', $membre->id) }}>{{ $membre->nom }}</a></td>
                    <td>{{ $membre->age }}</td>
                    <td>{{ $membre->genre }}</td>
                    <td>
                        <a class="btn btn-outline-primary" href={{ route('membre.edit', $membre->id) }}>Edit</a>
                    </td>
                    <td>
                        <form action={{ route('membre.delete', $membre->id) }} method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
