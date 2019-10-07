Vue.component('test', {
  props:['data'],
  template: '<select v-model="selected"><option v-for="option in options" v-bind:value="option.value">{{ option.text }}</option></select><span>Selected:{{ selected }}</span>'
})

new Vue({
  el: 'test',
  data: {
    selected: 'A',
    options: [
      { text: 'One', value: 'A' },
      { text: 'Two', value: 'B' },
      { text: 'Three', value: 'C' }
    ]
  }
})
