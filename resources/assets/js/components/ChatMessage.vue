<template>
    <div class="chat-message">
        <p>{{ message.message }}</p>
        <small>{{ message.user.name }}</small>
    </div>
</template>

<script type="text/javascript">
    export default {
        props: ['message']
    }
</script>

<style type="text/css" scoped>
    .chat-message {
        padding: 1rem;
    }
    .chat-message > p {
        margin-bottom: .5rem;
    }
</style>