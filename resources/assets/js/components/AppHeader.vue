<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 v-on:click="clicked">
                    {{ appTitle }}
                </h1>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props : ['apptitle'],
        data () {
            return {
                appTitle : 'sample'
            };
        },
        mounted() {
            console.log('Component mounted.');
            this.appTitle = this.apptitle;
        },
        methods : {
            clicked : function () {
                alert('fsdaf');
            }
        }
    }
</script>
