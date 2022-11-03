<section>
    <h2>Administrer votre blog</h2>
    <form action="">
        @csrf
        <section>
            <a href="" class="d-flex py-5">Vers Portfolio</a>
            <h3> ajouter des articles</h3>
                <div class="container d-flex justify-content-center gap-2">
                    
                    <form class="d-flex gap-2" action="{{ route('store.article') }}" method="POST">
                    @csrf
                    <div>
                        <label for="title">Nom</label>
                        <input type="text" name="title" id="title">
                    </div>
                    <div>
                        <label for="img">Entré un lien d'image</label>
                        <input type="text" name="img" id="img">
            
                    </div>
                    <div>
                        <label for="text">age</label>
                        <input type="text" name="text" id="text">
                    </div>
                
                    <button type="submit">Ajouter article</button> 
                    </form>
            </div>
            </section>
    </form>
</section>