const app = new Vue ({
    el: '#app',
    data: {
        arrAlbumSong: null,
    },
    created () {
            axios.get("../db/script.js").then((response) => {this.arrAlbumSong = response.data.response});
    },
})
