<section class="mt-3">
    <button type="button" class="btn btn-warning my-3"><a style="text-decoration: none; color: black;" href="{{ route('projet') }}"> &#x21A9; STEP BACK</a></button>
    <h2 >Administrer votre blog</h2>
                <div class="container d-flex justify-content-center gap-2 flex-column">
                    <form class="d-flex gap-2 flex-column" action="{{ route('store.projet') }}" method="POST">
                    @csrf
                    <div class="d-flex flex-column">
                        <label for="title">indiquez le titre de votre article</label>
                        <input type="text" name="title" id="title">
                    </div>
                    <div class="d-flex flex-column">
                        <label for="img">Choisisez une image</label>
                        <div class="d-flex flex-column">
                        <label for="img">inserez le lien de votre image</label>
                        <select name="img" id="img">
                            <option value="assets/img/portfolio-1.jpg">image 1</option>
                            <option value="assets/img/portfolio-2.jpg">image 2</option>
                            <option value="assets/img/portfolio-3.jpg">image 3</option>
                            <option value="assets/img/portfolio-4.jpg">image 4</option>
                            <option value="assets/img/portfolio-5.jpg">image 5</option>
                            <option value="assets/img/portfolio-6.jpg">image 6</option>
                            <option value="assets/img/portfolio-7.jpg">image 7</option>
                            <option value="assets/img/portfolio-8.jpg">image 8</option>
                            <option value="assets/img/portfolio-9.jpg">image 9</option>
                            <option value="assets/img/portfolio-10.jpg">image 10</option>
                        </select>
                    </div>
            
                    </div>
                    <div class="d-flex flex-column">
                        <label for="text">entrez le texte de l'article</label>
                        <input type="text" name="text" id="text">
                    </div>
                    <button type="submit" class="btn btn-warning">Ajouter le projet</button> 
                    </form>
            </div>
</section>