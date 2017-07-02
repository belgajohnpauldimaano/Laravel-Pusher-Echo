<template lang="html">
    <div class="chat-composer-continer">
        <input type="text" placeholder="Start typing your message..." v-model="messageText" v-on:keyup.enter="sendMessage">
        <button class="btn btn-primary" @click="sendMessage">Send</button>
    </div>
</template>
<script>
    export default {
        props : ['currentuser'],
        data () {
           return {
               messageText : 'Default'
           };
        },
        methods : {
            sendMessage () {
                //alert('Message sent ' + this.messageText);
                this.$emit('messagesent', {
                    message : this.messageText,
                    user    : {
                        name : this.currentuser
                    }
                });
                this.messageText = '';
            }
        }
    }
</script>

<style lang="css">
    .chat-composer-continer {
        display: flex;
    }
    
    .chat-composer-continer input{
        flex: 1 auto;
    }
</style>