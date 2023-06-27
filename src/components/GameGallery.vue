<template>
    <section class="gallery">
        <ul v-if="this.gameList">
            <li @click="deletedGame(game)" v-for="game in gameList" :key="game.id">
                <CardGame :gameCard="game"/>
            </li>
        </ul>
        <ul v-else>
            <li @click="deletedGame(game)" v-for="game in localist" :key="game.id">
                <CardGame :gameCard="game"/>
            </li>
        </ul>
    </section>
</template>

<script>
import CardGame from './CardGame.vue'
export default {
    name: "GameGallery",
    components: {
        CardGame
    },
    props: {
        gameList: []
    },
    data() {
        return {
            localist: [],
            emitList: []
        }
    },
    methods: {
        deletedGame(game) {
            this.localist = this.gameList;
            this.emitList.push(game);
            this.localist.splice(this.localist.indexOf(game),1);
            this.$emit("selectedGames",this.emitList);
        }
    }
}
</script>