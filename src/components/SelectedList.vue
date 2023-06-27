<template>
    <section class="selected-list">
        <ul>
            <li @click="removeFromList(game)" v-for="game in selected" :key="game.id">
                <h3>
                    {{ game.title }}
                </h3>
            </li>
        </ul>
    </section>
</template>

<script>
export default {
    name: "SelectedList",
    props: {
        selected: []
    },
    data() {
        return {
            localList: [],
            emitList: {}
        }
    },
    methods: {
        removeFromList(game) {
            this.localList = this.selected;
            this.emitList = game;
            this.localList.splice(this.localList.indexOf(game),1);
            this.$emit("removedElement",this.emitList);
        }
    }
}
</script>

<style>
    .selected-list ul {
        display: flex;
        flex-direction: column;
        row-gap: 2rem;
    }

    .selected-list li {
        padding: 5%;
        display: flex;
        width: 100%;
        border-radius: 25px;
        background-color: darkgoldenrod;
        box-shadow: 4px 6px black;
        transition: .4s ease-in;
    }

    .selected-list li:hover {
        cursor: pointer;
        background-color: lightgoldenrodyellow;
    }

</style>