<template>
    <!-- Fila:  -->
    <!-- <text x="1" y="25" width="78" height="48" fill='black'>xxxxxx</text> -->
    <!-- {{ row() }} -->
    <!-- <path stroke="blue" stroke-width=".2" d="M10 10 h20" /> -->
    <rect x="2" y="2" width="70" height="40" style="fill: blue; stroke: pink; stroke-width: 5; fill-opacity: 0.1; stroke-opacity: 0.9;"></rect>
</template>
    <!-- <rect :x="axis_x" :y="axis_y" width="78" height="48" style="fill:blue;stroke:pink;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.9"></rect> -->

<script>

export default {
  mounted() {
    console.log('cursoComponent mounted.', this.item);
  },
  name: 'curso',
  props: ['item'],
  computed: {
    d() {
      var coord = "M" + row()*10 + ' ' + col()*20 + "h20 v-10 h-10 z";
      return coord },
    row() { return this.item['row']*10},
    col() { return this.item['col']*10},
    text() { return this.item['text']},
    axis_x() {
      return ((this.item['col']-1) * 80)+2;
    },
    axis_y() {
      return (((this.item['row']-1) * 40)/2)+2;
    },

  },
  methods: {
    // axis_x: () =>  {
// console.log('axis_x: ', this.col);
    //   return ((this.col-1) * 80)+2;
    // },

    // axis_y: () => {
    //   return (((this.row-1) * 40)/2)+2;
    // },



  },




};
</script>
