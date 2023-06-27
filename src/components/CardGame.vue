<template>
    <figure class="card" style="width: 18rem;">
        <img :src="gameCard.thumbnail" class="card-img-top" :alt="gameCard.title">
        <figcaption class="card-body">
            <h5 class="card-title">{{ gameCard.title }}</h5>
            <p class="card-text">
                {{ gameCard.genre }} - {{ gameCard.publisher }}
            </p>
            <a :href="gameCard.game_url" class="btn btn-primary">See Game Page</a>
        </figcaption>
    </figure>
</template>

<script>
export default {
    name: "CardGame",
    props: {
        gameCard: {}
    }
}
</script>