<template>
    <ui-toolbar
        brand="Easy School"
        progress-position="top"
        type="colored"
        text-color="white"
        title="Login"
        :raised="true">

        <div slot="actions">
            <ui-button
                color="secondary"
                size="normal"
                type="secondary"
                :disableRipple="true"
                v-on:click="seConnecter">
                Se connecter
            </ui-button>
        </div>
    </ui-toolbar>
</template>


<script>
    export default {
        name: "NavbarComponent",
        mounted() {
            console.log('Navbar component mounted.')
        },

        methods: {
            seConnecter: function () {
                console.log("seConnecter");
                this.$router.push({name: 'login'});
            }
        }
    }

</script>

<style scoped>

</style>
