<section>
    <h2>Administrer votre blog</h2>
                <div class="container d-flex justify-content-center gap-2 flex-column">
                    <form class="d-flex gap-2" action="{{ route('store.article') }}" method="POST">
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
                    <button type="submit">Ajouter l'article</button> 
                    </form>
            </div>
</section>