<template>
    <div class="container">
        <div class="center-align">
            <h1 class="red-text text-darken-4 flow-text" style="font-size:xx-large;">EASY SCHOOL</h1>
            <p class="flow-text">La 1ère plateforme de gestion de la scolarité et des inscriptions des établissements privés de Côte d'Ivoire</p>
        </div>
        <login-component></login-component>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Login component mounted.')
        }
    }
</script>
