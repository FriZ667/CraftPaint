@extends('template')
@section('content')
    <h2>Bienvenue sur le formulaire de création d'un texturepack</h2>
    <p>Vous pourrez créer n'importe quel tableau avec vos propres images.</p>

    <form action="#" method="POST">
        <div class="form-group">
            <label>Choisisez la version pour laquel vous voulez créer votre pack</label>
            <select required>
                <option>1.8.8</option>
                <option>1.12.2</option>
                <option>1.16.5</option>
            </select>
        </div>
        <div class="form-group">
            <label>Nom du pack de texture</label>
            <input type="text" id="nom_pack" placeholder="Meilleur pack ever" required>
        </div>
        <div class="form-group">
            <label>Donnez une description a votre pack de texture</label>
            <input type="text" id="desc_pack" placeholder="Créer par ..." required>
        </div>
        <div class="form-group">
            <label>Ajouter une image a votre pack (optionnel)</label>
            <input type="file" id="img_pack" accept="image/png, image/jpeg, image/jpg">
        </div>
        <button type="submit">Créer</button>
    </form>
@endsection