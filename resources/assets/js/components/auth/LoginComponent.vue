<template>
    <div class="container" style="width:50%;">
        <div class="center-align bold">
            <span class="center-align bold flow-text" style="font-weight:bold;">Connectez-vous !</span>
        </div>

        <form @submit.prevent="seConnecter">
            <div class="input-field">
                <input required id="login" type="text" class="validate" v-model="nomUtilisateur">
                <label for="login">Login</label>
            </div>

            <div class="input-field">
                <input id="password" type="password" required class="validate" v-model="motDePasse">
                <label for="password">Mot de passe</label>
            </div>

            <p>
                <input type="checkbox" id="seSouvenir" v-model="seSouvenir"/>
                <label for="seSouvenir">Se souvenir de moi</label>
            </p>

            <ui-alert @dismiss="error" type="error" v-show="error">
                {{ errorMessage }}
            </ui-alert>

            <button class="btn waves-effect waves-light" type="submit" name="action">Se connecter
                <i class="material-icons right">send</i>
            </button>

            <router-link :to="{ name: 'reset' }">
                <a class="waves-effect waves-light btn">Mot de passe oublié ?</a>
            </router-link>
        </form>
    </div>
</template>

<script>
    import 'es6-promise/auto'

    export default {
        data() {
            return {
                nomUtilisateur: '',
                motDePasse: '',
                seSouvenir: false,
                error: false,
                errorMessage: ''
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
                }).catch( (response) => {
                    this.error = true
                    this.errorMessage = "La connexion a échoué ! Veuillez vérifier vos identifants."
                })
            },
            motDePasseOublie: function (event) {

            }
        }
    }
</script>

