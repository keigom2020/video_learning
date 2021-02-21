// require('./bootstrap');


import './bootstrap'
import Vue from 'vue'
import BrowsingHistory from './components/BrowsingHistory'

const app = new Vue({
  el: '#app',
  components: {
    BrowsingHistory,
  }
})