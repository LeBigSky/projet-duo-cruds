<section class="mt-3">
    <button type="button" class="btn btn-warning my-3"><a style="text-decoration: none; color: black;" href="{{ route('backblog') }}"> &#x21A9;
        STEP BACK</a></button>
</div>
    <h2>Administrer votre blog</h2>
                <div class="container d-flex justify-content-center gap-2 flex-column">
                    <form class="d-flex gap-2 flex-column" action="{{ route('store.article') }}" method="POST">
                    @csrf
                    <div class="d-flex flex-column">
                        <label for="title">indiquez le titre de votre article</label>
                        <input type="text" name="title" id="title">
                    </div>
                    <div class="d-flex flex-column">
                        <label for="img">inserez le lien de votre image</label>
                        <input type="text" name="img" id="img">
            
                    </div>
                    <div class="d-flex flex-column">
                        <label for="text">entrez le texte de l'article</label>
                        <input type="text" name="text" id="text">
                    </div>
                    <button type="submit" class="btn btn-warning">Ajouter l'article</button> 
                    </form>
            </div>
</section>