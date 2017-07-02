<template>
    <div class="chat-log">
        <chat-message v-for="message in messages" :key="message.id" :message="message"></chat-message>
        <div v-show="messages.length === 0">
            Nothing here yet!
        </div>
    </div>
</template>
<script>
    export default {
        props : ['messages']
    }
</script>
