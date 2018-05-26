<template>
    <div class="container" style="width:40%;">
        <div class="center-align bold">
            <span class="center-align bold flow-text" style="font-weight:bold;">Connectez-vous !</span>
        </div>

        <ui-textbox
            floating-label
            label="Nom utilisateur"
            :required="true"
            v-model="nomUtilisateur"
            placeholder="Entre votre nom d'utilisateur"></ui-textbox>

        <ui-textbox
            floating-label
            label="Mot de passe"
            :required="true"
            v-model="motDePasse"
            type="password"></ui-textbox>

        <ui-checkbox
            v-model="seSouvenir">Se souvenir de moi</ui-checkbox>

        <ui-button color="primary" size="normal" raised v-on:click="seConnecter">Se connecter</ui-button>

        <ui-button color="primary" size="normal"raised v-on:click="motDePasseOublie">Mot de passe oublié ?</ui-button>
    </div>
</template>

<script>
    import 'es6-promise/auto'

    export default {
        data() {
            return {
                nomUtilisateur: null,
                motDePasse: null,
                seSouvenir: false
            }
        },

        mounted() {
            console.log('Login component mounted.')
        },

        methods: {
            seConnecter: function (event) {
                event.preventDefault();
                const { nomUtilisateur, motDePasse, seSouvenir } = this

                console.log({nomUtilisateur, motDePasse, seSouvenir})

                this.$store.dispatch('AUTH_REQUEST', {nomUtilisateur, motDePasse, seSouvenir}).then(() => {
                    this.$router.push('dashboard')
                })
            },
            motDePasseOublie: function (event) {

            }
        }
    }
</script>

