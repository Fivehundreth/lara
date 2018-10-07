<template>
    <div class="col-lg-12">
        <h4>{{this.header}}</h4>
        <p>{{this.body}}</p>
    </div>
</template>

<script>
    export default {
        props: ['header', 'body'],
        mounted() {
        }
    }
</script>