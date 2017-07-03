
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('app-header', require('./components/AppHeader.vue'));
Vue.component('chat-message', require('./components/ChatMessage.vue'));
Vue.component('chat-log', require('./components/ChatLog.vue'));
Vue.component('chat-composer', require('./components/ChatComposer.vue'));

const app = new Vue({
    el: '#app',
    data () {
        return {
            messages : [],
            usersInRoom : []
        };
    },
    methods : {
        addMessage (message) {
            // alert('message added');
            console.log(message);
            this.messages.push(message);

            axios.post('/messages', message);
        }
    },
    created () {
        axios.get('/messages').then(response => {
            console.log(response);
            this.messages = response.data;
        });

        Echo.join('messages')
            .here((users) => {
                this.usersInRoom = users;
            })
            .joining((user) => {
                this.usersInRoom.push(user);
            })
            .leaving((user) => {
                this.usersInRoom = this.usersInRoom.filter(u => u != user);
            })
            .listen('MessagePosted', (e) => {
                console.log(e);
                this.messages.push(e);
            })
        ;
        
    },
    mounted () {
    }
});
