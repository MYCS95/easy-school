<template>
    <div class="nav-fixed">
        <nav class="light-blue darken-4">
            <div class="nav-wrapper container" style="width:100%;">
                <a href="" class="brand-logo flow-text">App Name</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a class="blact-text" href="">Se connecter</a></li>
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdownAccount"><i class="material-icons right">arrow_drop_down</i>Mon compte</a></li>
                </ul>
            </div>
        </nav>
        <ul id="dropdownAccount" class="dropdown-content">
            <li>Deconnexion</li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "NavbarComponent"
    }
</script>

<style scoped>

</style>
