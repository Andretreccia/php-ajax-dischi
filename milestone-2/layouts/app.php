<div id="app">
    <div class="row justify-content-center py-5">

        <div class="col col-2" v-for="music in musics">
            <div class="card p-3">
                <div class="image">
                    <img class="img-fluid" :src="music.poster" alt="" />
                </div>
                <div class="title">
                    <h4 class="text-center text-white text-uppercase fs-5">
                        {{music.title}}
                    </h4>
                </div>
                <div class="author">
                    <span>{{music.author}}</span>
                </div>
                <div class="year">
                    <span>{{music.year}}</span>
                </div>
            </div>
        </div>
    </div>
</div>