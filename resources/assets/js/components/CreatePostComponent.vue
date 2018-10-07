<template>
    <div class="col-lg-12">
        <h4>Create new post</h4>
        <div class="form-group">
            <label for="post-header">Post header</label>
            <input type="text" class="form-control" id="post-header" aria-describedby="postHeader" placeholder="Enter post header">
        </div>
        <div class="form-group">
            <label for="post-content">Post content</label>
            <textarea class="form-control" id="post-content" cols="30" rows="10"></textarea>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>