<template>
  <section>
    <section class="midterm">
      <aside>
        <GameForm @formPostData="postNewGame" />
        <SelectedList @removedElement="gamesRemoved" :selected="this.selectedGameList" />
      </aside>
      <GameGallery @selectedGames="createNewList" :gameList="apiList" />
    </section>
  </section>
</template>

<script>
import GameGallery from './components/GameGallery.vue'
import SelectedList from './components/SelectedList.vue'
import GameForm from './components/GameForm.vue'

export default {
  name: 'App',
  components: {
    GameGallery,
    GameForm,
    SelectedList,
  },
  data() {
    return {
      newGame: {},
      selectedGameList: [],
      apiList: [],
      removedGameList: [],
      apiUrl: "http://localhost:80/midterm/src/api/game.php"
    }
  },
  methods: {
    async getGamesApi() {
      try {
        let response = await fetch(this.apiUrl);
        this.apiList = await response.json();
      } catch(error) {
        console.log(error);
      }
    },
    async postNewGame(e) {
      try {
        this.newGame = e;
        await fetch(this.apiUrl,{
          method: "POST",
          body: JSON.stringify(this.newGame)
        });
      } catch (error) {
        console.log(error);
      }
    },
    createNewList(e) {
      this.selectedGameList = e;
      this.apiList.splice(this.apiList.indexOf(e),1);
    },
    gamesRemoved(e) {
      this.removedGameList = e;
      this.apiList.push(e);
    }
  },
  created() {
    this.getGamesApi();
  }
}
</script>

<style>
@import url("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css");

.midterm {
  display: flex;
  justify-content: space-between;
}

.midterm aside {
  padding: 1%;
  width: 23%;
}

.gallery {
  display: flex;
  justify-content: flex-end;
  width: 75%;
}

.gallery ul {
  padding: 1%;
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;

}

.gallery li:hover {
  transform: scale(1.1);
  cursor: pointer;
}

.gallery figure {

}

.gallery figure:hover {
  background-color: lightcyan;
  transition: .8s ease-in;
}

.gallery li {
  display: flex;
  transition: .8s ease-in;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
