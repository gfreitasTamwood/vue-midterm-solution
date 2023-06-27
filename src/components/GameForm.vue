<template>
    <form v-on:submit="submitData" class="row g-3">
        <div class="col-md-6">
            <label for="title" class="form-label">Game Title</label>
            <input type="text" v-model.lazy="gameObj.title" class="form-control" id="title">
        </div>
        <div class="col-md-6">
            <label for="genre" class="form-label">Game Genre</label>
            <input type="text" v-model.lazy="gameObj.genre" class="form-control" id="genre">
        </div>
        <div class="col-md-6">
            <label for="publisher" class="form-label">Game Publisher</label>
            <input type="text" v-model.lazy="gameObj.publisher" class="form-control" id="publisher">
        </div>
        <div class="col-md-6">
            <label for="website" class="form-label">Game Website</label>
            <input type="text" v-model.lazy="gameObj.game_url" class="form-control" id="website">
        </div>
        <div class="col-md-12">
            <label for="picture" class="form-label">Game Cover Picture</label>
            <input type="text" v-model.lazy="gameObj.thumbnail" class="form-control" id="picture">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success">Include</button>
        </div>
    </form>
</template>

<script>
export default {
    name: "GameForm",
    data() {
        return {
            gameObj: {
                title: "",
                genre: "",
                publisher: "",
                game_url: "",
                thumbnail: ""
            }
        }
    },
    methods: {
        submitData() {
            this.$emit("formPostData",this.gameObj);
        }
    }
}
</script>