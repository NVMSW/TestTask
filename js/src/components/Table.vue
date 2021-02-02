<template>
  <table>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Year</th>
      <th>Rating</th>
      <th>Description</th>
      <th>Type</th>
      <th>Season</th>
      <th>Duration</th>
      <th>Genre</th>
      <th>Status</th>
    </tr>
    <tr v-for="(item, index) in outputRow()" :key="index">
      <td v-for="(i, ind) in item" :key="ind">
        <div v-html="highlight(i, q)"></div>
      </td>
    </tr>
  </table>
</template>

<script>
export default {
  props: {
    hide: {
      default: false,
    },
    q: {
      default: null,
    },
    data: {
      type: Array,
    },
  },
  methods: {
    highlight: function (value, q) {
      return value
        .toString()
        .replace(
          new RegExp(q, "ig"),
          (match) => `<span class='highlight'>${match}</span>`
        );
    },
    outputRow: function () {
      if (this.hide && this.q) {
        var res = [];

        for (var i = 0; i < this.data.length; i++) {
          for (let j in this.data[i]) {
            if (
              this.data[i][j]
                .toString()
                .toLowerCase()
                .indexOf(this.q.toLowerCase()) !== -1
            ) {
              res.push(this.data[i]);
              break;
            }
          }
        }
        return res;
      } else {
        return this.data;
      }
    },
  },
};
</script>

<style>
.highlight {
  background: blue;
}
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table td,
table th {
  border: 1px solid #ddd;
  padding: 8px;
}

table tr:nth-child(even) {
  background-color: #f2f2f2;
}

table tr:hover {
  background-color: #ddd;
}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>