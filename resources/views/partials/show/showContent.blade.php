<section>
    <h1>{{ $show->nom }}</h1>
    <p><strong>Age :</strong>{{ $show->age }}</p>
    <p><strong>Genre :</strong>{{ $show->genre }}</p>
    <a href={{ route('home') }}>Back</a>
</section>