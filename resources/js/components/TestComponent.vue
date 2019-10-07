Vue.component('test-component', {
  props:[''],
  template: '<li v-for="name in names" v-text="name">{{ name }}</li>'
})

new Vue({
  el: 'test-component',
  data: {
    names: ['Joe', 'Mary', 'Jane', 'Jack']    
  }
})
