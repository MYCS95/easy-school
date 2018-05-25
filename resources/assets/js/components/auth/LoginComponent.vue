<template>
    <div class="container">
        <div class="center-align bold">
            <span class="center-align bold flow-text" style="font-weight:bold;">Connectez-vous !</span>
        </div>

        <div class="input-field">
            <input id="login" type="text" class="validate" required>
            <label for="login">Login</label>
        </div>

        <div class="input-field">
            <input id="password" type="password" class="validate" required>
            <label for="password">Mot de passe</label>
        </div>

        <p>
            <input type="checkbox" id="remenber" name="remenber" />
            <label for="remenber">Se sourvenir de moi</label>
        </p>

        <button type="submit" class="btn btn-primary" v-on:click="submit">
            Se connecter
        </button>

        <a class="btn btn-link" href="">
            Mot de passe oublié ?
        </a>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Login component mounted.')
        },

        methods: {
            submit: function () {
                console.log("Se connecter")
            }
        }
    }
</script>

