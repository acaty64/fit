<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">SVG Component</div>

          <div class="card-body">
            <svg width="1200" height="450">
              <div v-for="item in data">
                <curso :item="item" ></curso>
                <!-- <text x="1" y="25" width="78" height="48" fill='black'>xxxxxx</text> -->
                <!-- <rect :x="axis_x(item.col)" :y="axis_y(item.row)" width="78" height="48" style="fill:blue;stroke:pink;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.9"> -->
                <!-- </rect> -->
              </div>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import curso from './curso';
export default {
  mounted() {
    console.log('Component mounted.')
  },
  name: 'SVGComponent',
  components: {curso},
  data() {
    return {
      data: [
          {row:1, col:1, text:'100001'},
          {row:1, col:2, text:''},
          {row:1, col:3, text:'100003'},
          {row:1, col:4, text:'100004'},
          {row:1, col:5, text:'100005'},
          {row:2, col:1, text:'200001'},
          {row:2, col:2, text:'200002'},
          {row:2, col:3, text:'200003'},
          {row:2, col:4, text:'200004'},
          {row:2, col:5, text:'200005'},
          {row:3, col:1, text:'300001'},
          {row:3, col:2, text:'300002'},
          {row:3, col:3, text:'300003'},
          {row:3, col:4, text:'300004'},
          {row:3, col:5, text:'300005'},
        ],

    };
  },
  methods: {
    axis_x: (col) =>  {
console.log('axis_x: ', col);
      return ((col-1) * 80)+2;
    },

    axis_y: (row) => {
      return (((row-1) * 40)/2)+2;
    },



  },




};
</script>
