<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Dischi</title>
</head>
<body>
    <div id="root" class="container">
        <div class="box-header">
            <div class="logotipo">
                <div class="logo">
                    <img src="./img/Logo-Spoty.png" alt="">
                </div>
            </div>
            <div class="menu">
                <select @change="filterArray()"  v-model="selected" name="tipo" id="tipo">
                    <option value="">Tutti Genere</option>
                    <option value="Pop">Pop</option>
                    <option value="Rock">Rock</option>
                    <option value="Metal">Metal</option>
                    <option value="Jazz">Jazz</option>
                </select>
            </div>
        </div>
        <div class="box-main">
            <div v-for="(album, index) in elencoAlbum" :key="index"  class="album">
                <div class="cd">
                    <img :src='album.poster'>
                </div>
                <div class="testi">
                    <h3> {{ album.author }} </h3>
                    <p> {{ album.genre }} </p>
                    <p> {{ album.year }} </p>
                </div>
            </div>
        </div>
    </div>

   
    <script src="js/main.js"></script>
</body>
</html>

