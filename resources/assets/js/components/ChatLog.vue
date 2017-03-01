<template>
    <div class="chat-log">
        <chat-message v-for="message in messages" :message="message" ></chat-message>
    </div>
</template>

<script type="text/javascript">
    export default {
        props: ['messages']
    }    
</script>

<style type="text/css" scoped>
    .chat-log .chat-message:nth-child(even) {
        background-color: #ccc;
    }
</style>