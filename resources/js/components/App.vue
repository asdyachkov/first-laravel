<template>

    <div v-show="this.msg != null" class="alert alert-primary" style="position: absolute; margin-top: 50px; right: 25px" role="alert">
        Добавлена новая статья <strong>{{this.msg}}</strong>
    </div>
</template>
<script>
export default {
    data() { return { msg: null } },
    created() {
            window.Echo.channel('Test123').listen('NewArticleEvent', (name) => {
                console.log(name);
                this.msg=name.name;
            })
        }
    }
</script>
