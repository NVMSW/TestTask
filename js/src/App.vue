<template>
  <div id="app">
    <div class="f">
      <input type="text" placeholder="Search..." v-model="q" />
      <label>
        <input type="checkbox" v-model="hide" />
        <span>Скрывать строки, в которых не найдены соответствия</span>
      </label>
    </div>
    <Table :q="q" :hide="hide" :data="movie" />
  </div>
</template>

<script>
import Table from "./components/Table";
export default {
  name: "App",
  data() {
    return {
      hide: false,
      q: null,
      movie: [
        {
          id: 1,
          title: "Spider Man",
          year: 2000,
          rating: 7,
          description:
            "Spider-Man is a fictional superhero created by writer-editor Stan Lee and writer-artist Steve Ditko",
          type: "movie",
          season: "summer",
          duration: 90,
          genre: "action",
          status: "released",
        },
        {
          id: 2,
          title: "Black Widow",
          year: 2022,
          rating: 8.3,
          description: "Some desc about this moovie",
          type: "movie",
          season: "winter",
          duration: 99,
          genre: "action",
          status: "anons",
        },
        {
          id: 3,
          title: "Cars",
          year: 2040,
          rating: 7,
          description: "have no description",
          type: "serial",
          season: "summer",
          duration: 50,
          genre: "comedy",
          status: "anons",
        },
        {
          id: 4,
          title: "The last man",
          year: 2010,
          rating: 4,
          description: "...",
          type: "serial",
          season: "summer",
          duration: 40,
          genre: "action",
          status: "released",
        },
        {
          id: 5,
          title: "The last woman",
          year: 2012,
          rating: 6,
          description: "...",
          type: "movie",
          season: "summer",
          duration: 40,
          genre: "drama",
          status: "released",
        },
        {
          id: 6,
          title: "movie2",
          year: 2005,
          rating: 8,
          description: "",
          type: "movie",
          season: "spring",
          duration: 90,
          genre: "action",
          status: "released",
        },
        {
          id: 7,
          title: "movie3",
          year: 2004,
          rating: 7,
          description: "",
          type: "movie",
          season: "autumn",
          duration: 50,
          genre: "action",
          status: "released",
        },
        {
          id: 8,
          title: "movie4",
          year: 2001,
          rating: 7,
          description: "",
          type: "movie",
          season: "spring",
          duration: 40,
          genre: "action",
          status: "released",
        },
        {
          id: 9,
          title: "movie5",
          year: 2002,
          rating: 9,
          description: "",
          type: "movie",
          season: "winter",
          duration: 20,
          genre: "action",
          status: "released",
        },
        {
          id: 10,
          title: "movie6",
          year: 2003,
          rating: 9,
          description: "",
          type: "movie",
          season: "autumn",
          duration: 30,
          genre: "action",
          status: "released",
        },
      ],
    };
  },
  components: {
    Table,
  },
};
</script>
<style>
.f {
  display: flex;
}
label>span{
    white-space: nowrap;
}
</style>
