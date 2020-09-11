require('./bootstrap')

let moment = require('vue-moment');
var VueScrollTo = require('vue-scrollto');

window.Vue = require('vue');

Vue.use(VueScrollTo)
Vue.use(moment);


Vue.component('comments', require('./components/CommentsComponent').default);

const comments = new Vue({
    el: '#comments',
});
